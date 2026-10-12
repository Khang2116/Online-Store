<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Trang chủ - Online Store';
        return view('home.index')->with('viewData', $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData['title'] = 'Giới thiệu - Online Store';
        $viewData['subtitle'] = 'Giới thiệu';
        $viewData['description'] = 'Đây là trang giới thiệu!';
        $viewData['author'] = 'Phát triển bởi: OnlyU';
        return view('home.about')->with('viewData', $viewData);
    }
}
