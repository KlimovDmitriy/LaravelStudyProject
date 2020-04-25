<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $addProductRoute = route('admin::add');
        $removeProductRoute = route('admin::remove');
        return <<<html
<div style="background-color: aqua"><a href ={$addProductRoute}> Добавить продукты</a>
<br><a href ={$removeProductRoute}> Удалить продукты</a></div>
html;


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
