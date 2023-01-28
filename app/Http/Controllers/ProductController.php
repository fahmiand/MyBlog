<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', [
            'title' => 'All Item',
            'items' => Product::all()
        ]);
    }

    public function checkOut()
    {
        return view('product.checkout', [
            'title' => 'Chek Out'
        ]);
    }
}
