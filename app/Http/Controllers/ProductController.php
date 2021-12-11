<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    function index() {
        $data = DB::table('category')
        ->select('*')
        ->orderBy('id', 'ASC')
        ->get();

        $product = DB::table('products')
            ->select('*')
            ->orderBy('id', 'ASC')
            ->get();
        // dd($data);
        return response()
            ->view('admin.product', [
                'data' => $data,
                'products' => $product
            ]);
    }

    function store(Request $request){
        // $request->validate([
        //     'name' => 'required|string',
        //     'harga' => 'required|string',
        //     'description' => 'required|string',
        //     'kategori' => 'required|string',
        //     'quantity' => 'required|string',
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);
        // dd($request->all());
        $name = $request->input('name');
        $harga = $request->input('harga');
        $description = $request->input('description');
        $kategori = $request->input('kategori');
        $quantity = $request->input('quantity');
        $image = $request->gambar;
        $file_name = explode('.', $image);

        $date = date('Y-m-d H:i:s');

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarFile = $gambar->getClientOriginalName();
            if($gambar->move(public_path('images/products/'.$kategori), $gambarFile)){
                $url = '/images/products/'.$kategori.'/'.$image->getClientOriginalName();
                // dd($url);
                DB::table('products')->insert([
                    'nama_produk' => $name,
                    'url_gambar' => $url,
                    'detail_product' => $description,
                    'harga' => $harga,
                    'stok' => $quantity,
                    'category_id' => $kategori,
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);

                return redirect("/admin/master/products")->withSuccess('Successfully registered!');
            }
         }
    }

    
}
