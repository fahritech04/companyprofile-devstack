<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\PortfolioModel;

class Home extends BaseController
{
    public function index()
    {
        $serviceModel = new ServiceModel();
        $portfolioModel = new PortfolioModel();

        $data = [
            'services' => $serviceModel->getActive(),
            'portfolios' => $portfolioModel->getFeatured(),
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        return view('pages/about');
    }

    public function services()
    {
        $serviceModel = new ServiceModel();

        $data = [
            'services' => $serviceModel->getActive(),
        ];

        return view('pages/services', $data);
    }

    public function portfolio()
    {
        $portfolioModel = new PortfolioModel();

        $data = [
            'portfolios' => $portfolioModel->orderBy('sort_order', 'ASC')->findAll(),
        ];

        return view('pages/portfolio', $data);
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
