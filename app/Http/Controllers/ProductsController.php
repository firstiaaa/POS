<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverages()
    {
        return view('product.foodbeverage');
    }
    public function beautyHealth()
    {
        return view('product.beautyhealth');
    }
    public function homeCare()
    {
        return view('product.homecare');
    }
    public function babykid()
    {
    return view('product.babykid');
    }
}