<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $params = ['addProductRoute' => route('admin::add'),
            'removeProductRoute' => route('admin::remove')];
        return view('admin/index', $params);


    }

    public function addProduct()
    {
        echo 'Вы на странице добавления товара';
    }

    public function removeProduct()
    {
        echo 'Вы на странице удаления товара';
    }
}
