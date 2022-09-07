<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // home page
    public function index()
    {
        $title = 'Electro';
        return view('pages.main.home',compact('title'));
    }
    // about page
    public function about()
    {
        $title = 'About';
        return view('pages.main.abouts',compact('title'));
    }
    // Bestseller page
    public function best()
    {
        $title = 'Bestsellers';
        return view('pages.product.best',compact('title'));
    }
    // specialoffer page
    public function special()
    {
        $title = 'Specialoffer';
        return view('pages.product.special',compact('title'));
    }
    // cart page
    public function cart()
    {
        $title = 'Add to Cart';
        return view('pages.product.cart',compact('title'));
    }
    // product details page
    public function product(){
        $title = 'Product name';
        return view('pages.product.viewproduct',compact('title'));
    }
    // verification page
    public function verify(){
        $title = 'Verification';
        return view('pages.main.verification',compact('title'));
    }
   
}
