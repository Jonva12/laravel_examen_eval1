<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shop;


class shopController extends Controller
{
    public function create(){
    	return view('tiendas/create');
    }

    public function store(Request $request){
    	$tienda = new Shop;

    	$tienda->name = $request->input('nombre');
    	$tienda->description = $request->input('desc');
    	$tienda->password = $request->input('pass');
    	$tienda->email = $request->input('email');
    	$tienda->likes = $request->input('likes');

    	$tienda->save();

    	return view('home');
    }

    public function show($id){
    	$tienda = Shop::where('id', $id);
    	return view('tiendas/show', ['tienda'=>$tienda]);
    }
}
