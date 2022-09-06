<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products($id) {
        return '<a href="https://www.educastudio.com/category/'.$id.'">https://www.educastudio.com/category/'.$id.'</a>';
    }
}