<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{


    public function index()
    {
        $linkList = [
            [
                'name' => 'Home',
                'link' => '/'
            ],
            [
                'name' => 'Catalog',
                'link' => '/catalog'
            ],
            [
                'name' => 'Admin Page',
                'link' => '/admin'
            ]
        ];
        return view('welcome', ['list' => $linkList]);
    }
}
