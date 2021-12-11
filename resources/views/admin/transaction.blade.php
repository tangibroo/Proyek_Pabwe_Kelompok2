@extends('admin.layout.home')

@section('content')
<div class="module-large">
    <!-- <h4 class="font-alt mb-0">Tambah Produk</h4>
    <hr class="divider-w mt-10 mb-20">
    <form class="form" role="form">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nama"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="harga" placeholder="Harga"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="Product Description"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="quantity" placeholder="Quantity"/>
        </div>
        <div class="form-group">
            <label>Photo Product</label>
            <input class="form-control" type="file" name="gambar"/>
        </div>

        <div class="col-sm-12"><a class="btn btn-success btn-round" href="#">Submit</a></div>
    </form> -->

    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Products</h2></div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product </i></th>
                        <th>Name </th>
                        <th>Quantity </i></th>
                        <th>Total </th>
                        <th>Status </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="{{ asset('assets/images/shop/product-7.jpg')" alt="Accessories Pack" width="70" height="100"/>
                        </td>
                        <td>
                            <p>DataNamaProduk</p>
                        </td>
                        <td>
                            <p>DataQuantity</p>  
                        </td>
                        <td>
                            <p>DataTotal</p>
                        </td>
                        <td>
                            <p>DataStatusTransaksi</p>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-circle btn-xs" title="View" data-toggle="tooltip">view</a>
                            <a href="#" class="btn btn-warning btn-circle btn-xs" title="Edit" data-toggle="tooltip">edit</a>
                            <a href="#" class="btn btn-danger btn-circle btn-xs" title="Delete" data-toggle="tooltip" style="margin: right">delete</a>
                        </td>
                    </tr>            
                </tbody>
            </table>
        </div> 
</div>
@endsection