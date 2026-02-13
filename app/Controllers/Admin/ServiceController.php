<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class ServiceController extends BaseController
{
    protected $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Services',
            'subtitle' => 'Manage your service offerings',
            'active' => 'services',
            'services' => $this->serviceModel->orderBy('sort_order', 'ASC')->findAll(),
        ];
        return view('admin/services/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Service',
            'subtitle' => 'Create a new service',
            'active' => 'services',
        ];
        return view('admin/services/form', $data);
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
        // Ensure unique slug
        $existing = $this->serviceModel->where('slug', $slug)->first();
        if ($existing) {
            $slug .= '-' . time();
        }

        $features = $this->request->getPost('features');
        $featuresJson = null;
        if ($features) {
            $featuresArray = array_filter(array_map('trim', explode("\n", $features)));
            $featuresJson = json_encode(array_values($featuresArray));
        }

        $this->serviceModel->insert([
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'icon' => $this->request->getPost('icon'),
            'features' => $featuresJson,
            'price' => $this->request->getPost('price'),
            'sort_order' => (int) $this->request->getPost('sort_order'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to('/admin/services')->with('success', 'Service created successfully!');
    }

    public function edit($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            return redirect()->to('/admin/services')->with('error', 'Service not found.');
        }

        $data = [
            'title' => 'Edit Service',
            'subtitle' => 'Update service details',
            'active' => 'services',
            'service' => $service,
        ];
        return view('admin/services/form', $data);
    }

    public function update($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            return redirect()->to('/admin/services')->with('error', 'Service not found.');
        }

        $rules = [
            'title' => 'required|max_length[255]',
            'description' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $this->validator->getErrors()));
        }

        $slug = url_title($this->request->getPost('title'), '-', true);
        $existing = $this->serviceModel->where('slug', $slug)->where('id !=', $id)->first();
        if ($existing) {
            $slug .= '-' . time();
        }

        $features = $this->request->getPost('features');
        $featuresJson = null;
        if ($features) {
            $featuresArray = array_filter(array_map('trim', explode("\n", $features)));
            $featuresJson = json_encode(array_values($featuresArray));
        }

        $this->serviceModel->update($id, [
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'icon' => $this->request->getPost('icon'),
            'features' => $featuresJson,
            'price' => $this->request->getPost('price'),
            'sort_order' => (int) $this->request->getPost('sort_order'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to('/admin/services')->with('success', 'Service updated successfully!');
    }

    public function delete($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            return redirect()->to('/admin/services')->with('error', 'Service not found.');
        }

        $this->serviceModel->delete($id);
        return redirect()->to('/admin/services')->with('success', 'Service deleted successfully!');
    }
}
