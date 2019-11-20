<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    public function index(){
    	$productos = Product::all();
    	return view('productos/index', ['productos'=>$productos]);
    }
}
