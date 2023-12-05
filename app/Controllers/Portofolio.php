<?php

namespace App\Controllers;

class Portofolio extends BaseController
{
    public function index()
    {
        $data = [
            "title" => 'YogS || Home'
        ];
        return view('portofolio/home', $data);
    }
    public function about()
    {
        $data = [
            "title" => "YogS || About"
        ];
        return view('portofolio/about', $data);
    }
    public function project()
    {
        $data = [
            "title" => "YogS || Project"
        ];
        return view('portofolio/project', $data);
    }
    public function contact()
    {
        $data = [
            "title" => "YogS || Contact"
        ];
        return view('portofolio/contact', $data);
    }
}
