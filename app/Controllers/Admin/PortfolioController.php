<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;

class PortfolioController extends BaseController
{
    protected $portfolioModel;

    public function __construct()
    {
        $this->portfolioModel = new PortfolioModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Portfolio',
            'subtitle' => 'Manage your project portfolio',
            'active' => 'portfolio',
            'portfolios' => $this->portfolioModel->orderBy('sort_order', 'ASC')->findAll(),
        ];
        return view('admin/portfolio/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Project',
            'subtitle' => 'Add a new portfolio project',
            'active' => 'portfolio',
        ];
        return view('admin/portfolio/form', $data);
    }

    public function store()
    {
        $rules = [
            'title' => 'required|max_length[255]',
            'description' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $slug = url_title($this->request->getPost('title'), '-', true);
        $existing = $this->portfolioModel->where('slug', $slug)->first();
        if ($existing)
            $slug .= '-' . time();

        // Handle image upload
        $imageName = null;
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/portfolio', $imageName);
        }

        $this->portfolioModel->insert([
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'image' => $imageName,
            'category' => $this->request->getPost('category'),
            'client_name' => $this->request->getPost('client_name'),
            'demo_url' => $this->request->getPost('demo_url'),
            'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
            'sort_order' => (int) $this->request->getPost('sort_order'),
        ]);

        return redirect()->to('/admin/portfolio')->with('success', 'Project added successfully!');
    }

    public function edit($id)
    {
        $portfolio = $this->portfolioModel->find($id);
        if (!$portfolio) {
            return redirect()->to('/admin/portfolio')->with('error', 'Project not found.');
        }

        $data = [
            'title' => 'Edit Project',
            'subtitle' => 'Update project details',
            'active' => 'portfolio',
            'portfolio' => $portfolio,
        ];
        return view('admin/portfolio/form', $data);
    }

    public function update($id)
    {
        $portfolio = $this->portfolioModel->find($id);
        if (!$portfolio) {
            return redirect()->to('/admin/portfolio')->with('error', 'Project not found.');
        }

        $rules = [
            'title' => 'required|max_length[255]',
            'description' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $slug = url_title($this->request->getPost('title'), '-', true);
        $existing = $this->portfolioModel->where('slug', $slug)->where('id !=', $id)->first();
        if ($existing)
            $slug .= '-' . time();

        $updateData = [
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'client_name' => $this->request->getPost('client_name'),
            'demo_url' => $this->request->getPost('demo_url'),
            'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
            'sort_order' => (int) $this->request->getPost('sort_order'),
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image
            if ($portfolio['image'] && file_exists(FCPATH . 'uploads/portfolio/' . $portfolio['image'])) {
                unlink(FCPATH . 'uploads/portfolio/' . $portfolio['image']);
            }
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/portfolio', $imageName);
            $updateData['image'] = $imageName;
        }

        $this->portfolioModel->update($id, $updateData);
        return redirect()->to('/admin/portfolio')->with('success', 'Project updated successfully!');
    }

    public function delete($id)
    {
        $portfolio = $this->portfolioModel->find($id);
        if (!$portfolio) {
            return redirect()->to('/admin/portfolio')->with('error', 'Project not found.');
        }

        // Delete image file
        if ($portfolio['image'] && file_exists(FCPATH . 'uploads/portfolio/' . $portfolio['image'])) {
            unlink(FCPATH . 'uploads/portfolio/' . $portfolio['image']);
        }

        $this->portfolioModel->delete($id);
        return redirect()->to('/admin/portfolio')->with('success', 'Project deleted successfully!');
    }
}
