<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function apple() {
        $data = array (
            'name' => "Iphone 12 Pro Max",
            'brand' => "Apple",
            'chip' => "A14 Bionic chip",
            'release' => "November 13, 2020"
        );
        return view('products', $data);
    }
}
