<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index() {
        echo "this is all products"; exit;
    }

    public function showItem($id){
        echo "This is product with {$id} id";
    }
}
