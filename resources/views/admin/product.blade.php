@extends('admin.layout.home')

@section('content')
<div class="module-large">
    <h4 class="font-alt mb-0">Tambah Produk</h4>
    <hr class="divider-w mt-10 mb-20">
    <form method="POST" action="{{ route('add_product') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nama" required/>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="harga" placeholder="Harga" required/>
        </div>
        <div class="form-group">
            <!-- <textarea class="form-control" type="text" name="description" placeholder="Product Description"> -->
            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Product Description" required></textarea>
        </div>
        <div class="form-group">
            <label for="category">Kategori barang :</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="">--PILIH--</option>
                @foreach($data as $dt)
                    <option value="{{ $dt->id }}">{{ $dt->kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="quantity" placeholder="Quantity" required/>
        </div>
        <div class="form-group">
            <label>Photo Product</label>
            <input class="form-control" type="file" name="gambar" id="gambar"/>
        </div>

        <div class="col-sm-12">
            <button class="btn btn-success btn-round">Create</button>
            <!-- <a class="btn btn-success btn-round" type="submit">Submit</a> -->
        </div>
    </form>

    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Products</h2></div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered text-nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product <i class="fa fa-sort"></i></th>
                        <th>Details </th>
                        <th>Quantity<i class="fa fa-sort"></i></th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $product->nama_produk }}<br>
                                <img src="{{ $product->url_gambar }}" alt="Accessories Pack" width="70" height="100"/>
                            </td>
                            <td>
                                {{ $product->detail_product }}<br><div class="price font-alt"><span class="amount">Rp {{ number_format($product->harga, 2, '.', ',') }}</span></div>
                            </td>
                            <td>
                                <div class="price font-alt"><span class="amount">{{ $product->stok }}</span></div>
                                <!-- <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required">   -->
                            </td>
                            <td>
                                <div class="price font-alt"><span class="amount">Rp {{ number_format($product->stok*$product->harga, 2, '.', ',') }}</span></div>
                            </td>
                            <td>
                                <!-- <a href="#" class="btn btn-warning btn-circle btn-xs" title="Edit" data-toggle="tooltip">edit</a> -->
                                <a href="#" class="btn btn-danger btn-circle btn-xs" title="Delete" data-toggle="tooltip" style="margin: right">delete</a>
                            </td>
                        </tr>            
                        @endforeach
                </tbody>
            </table>
        </div> 
</div>
@endsection