<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ChannelModel;
use App\Models\MessageModel;
use App\Models\ProjectFileModel;
use App\Models\ActivityLogModel;
use App\Models\User;

class Communication extends BaseController
{
    protected $channelModel;
    protected $messageModel;
    protected $projectFileModel;
    protected $activityLogModel;
    protected $userModel;

    public function __construct()
    {
        $this->channelModel = new ChannelModel();
        $this->messageModel = new MessageModel();
        $this->projectFileModel = new ProjectFileModel();
        $this->activityLogModel = new ActivityLogModel();
        $this->userModel = new User();
        helper(['form', 'url', 'text']);
    }

    public function index()
    {
        // For now, redirect to channels list
        return redirect()->to('channels');
    }

    public function channels()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }

        $data = [
            'title' => 'Communication Hub',
            'channels' => $this->channelModel->findAll(),
            'user' => $this->userModel->find(session()->get('user_id'))
        ];

        return view('communication/index', $data);
    }

    public function channel($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }

        $channel = $this->channelModel->find($id);
        if (!$channel) {
            return redirect()->to('channels')->with('error', 'Channel not found.');
        }

        $messages = $this->messageModel->getMessagesWithUser($id);

        $data = [
            'title' => $channel['name'],
            'channel' => $channel,
            'messages' => $messages,
            'user' => $this->userModel->find(session()->get('user_id'))
        ];

        return view('communication/channel', $data);
    }

    public function sendMessage($channelId)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }

        $content = $this->request->getPost('content');
        if (empty($content)) {
            return redirect()->back()->with('error', 'Message cannot be empty.');
        }

        $data = [
            'channel_id' => $channelId,
            'user_id' => session()->get('user_id'),
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->messageModel->insert($data);

        // Log activity
        $this->activityLogModel->insert([
            'user_id' => session()->get('user_id'),
            'activity' => 'Posted a message in channel #' . $channelId,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back();
    }

    // Project Files Placeholder
    public function files()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }

        $files = $this->projectFileModel->where('user_id', session()->get('user_id'))->findAll();

        $data = [
            'title' => 'Project Files',
            'files' => $files,
            'user' => $this->userModel->find(session()->get('user_id'))
        ];

        // For now, reuse a simple view or create a specific one
        return view('communication/files', $data);
    }

    // Activity Log Placeholder
    public function activity()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }

        $logs = $this->activityLogModel->where('user_id', session()->get('user_id'))
            ->orderBy('created_at', 'DESC')
            ->findAll(50);

        $data = [
            'title' => 'Activity Feed',
            'logs' => $logs,
            'user' => $this->userModel->find(session()->get('user_id'))
        ];

        return view('communication/activity', $data);
    }
}
