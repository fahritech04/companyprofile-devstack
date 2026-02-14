<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

class Home extends BaseController
{
    public function index()
    {
        $portfolioModel = new PortfolioModel();

        $data = [
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
        return view('pages/services');
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
