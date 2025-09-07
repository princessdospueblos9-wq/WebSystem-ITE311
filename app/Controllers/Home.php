<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home - DOSPUEBLOS'
        ];
        
        return view('home', $data);
    }
}
