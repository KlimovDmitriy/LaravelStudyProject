<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        echo 'Все продукты';
    }

    public function showCategory($name){
        echo "Вы в категории: {$name}";
    }
}
