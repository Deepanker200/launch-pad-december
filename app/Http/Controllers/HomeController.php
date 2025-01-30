<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){

        $product= Product::all();
        return view('home.index',compact('product'));
    }

    public function login_home()
    {
        $product= Product::all();
        return view('home.index',compact('product'));
    }

    public function product_details($id)
    {   
        $data=Product::find($id);
        return view('home.product_details',compact('data'));
    }
}
