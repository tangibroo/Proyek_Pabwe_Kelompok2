@extends('layout.template')

@section('aside')
<aside class=" flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-sm-top pb-sm-0 pb-3">
    <div class="bg-light border rounded-5 p-1 h-100 sticky-top">
        <dl class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
            
            <dt class="nav-item">
                <a href="#" class="nav-link px-2 text-truncate">
                    <span class="d-none d-sm-inline">Kategori</span>
                </a>
            </dt>
            <dd>Baju</dd>
            <dd>Celana</dd>
            <dd>Jaket</dd>
            <dd>Underware</dd>
            <dt>
                <a href="#" class="nav-link px-2 text-truncate">
                    <span class="d-none d-sm-inline">Keranjang</span>
                </a>
            </dt>
            <dd>beberapa list keranjang</dd>
            
        </dl>
    </div>
</aside>
@endsection

@section('content')
<div class="container bg-light">
    <h3>Product</h3>
    <div class="row">
        <div class="col-sm-4">
            <div class="card" style="width: 16rem;" >
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>   
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 16rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 16rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection