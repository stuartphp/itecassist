<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function digital()
    {
        return view('products.digital');
    }
    public function online()
    {
        return view('products.online');
    }
    public function graphic()
    {
        return view('products.graphic');
    }
    public function application()
    {
        return view('products.application');
    }
    public function web()
    {
        return view('products.web');
    }
    public function ui()
    {
        return view('products.ui');
    }
}
