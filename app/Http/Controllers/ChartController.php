<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    function index(){
        return view('user.keranjang');
    }

    function store(Request $request, $id){
        dd($request, $id);
    }
}
