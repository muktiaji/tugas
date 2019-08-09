<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class BerandaController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('homepage.homepage',compact('products'));
    }
}
