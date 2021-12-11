@extends('template.home')

@section('title')
 Product
@endsection

@section('content')
<section class="module-large">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Product</h2>
        </div>
    </div>
    <div class="row multi-columns-row">
        @foreach($data as $dt)
        <div class="col-sm-9 col-md-4 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{ $dt->url_gambar }}" alt="{{ $dt->nama_produk }}"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="{{ route('add_to_chart', ['id' => $dt->id]) }}">{{ $dt->nama_produk }}</a></h4>Rp {{ number_format($dt->harga, 2, '.', ',') }}
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection