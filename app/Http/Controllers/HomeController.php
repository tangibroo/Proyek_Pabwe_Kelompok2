<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {
        // dd($request);
        return view('user.home');
    }

    function product(){
        $data = DB::table('products')
            ->select('*')
            ->orderBy('id', 'ASC')
            ->get();

        return view('user.product', [
            'data' => $data
        ]);
    }
}
