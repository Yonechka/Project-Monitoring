<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Project Monitoring | Home'
        ];

        return view('home/index', $data);
    }
}
