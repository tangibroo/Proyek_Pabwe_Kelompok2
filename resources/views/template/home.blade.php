@extends('layout.app')

@section('title')
 Home
@endsection

@section('jumbotron')
<!-- MONJA -->
@endsection

@section('content')
<section class="module-large">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <!-- {{ Session::get('email') }} -->
            <h2 class="module-title font-alt">Product</h2>
        </div>
    </div>
    <div class="row multi-columns-row">
        <div class="col-sm-9 col-md-4 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="assets/images/shop/product-7.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
            </div>
        </div>
        <div class="col-sm-9 col-md-4 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="assets/images/shop/product-8.jpg" alt="Men’s Casual Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
            </div>
        </div>
        <div class="col-sm-9 col-md-4 col-lg-3">
        <div class="shop-item">
            <div class="shop-item-image"><img src="assets/images/shop/product-9.jpg" alt="Men’s Garb"/>
            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
            </div>
            <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
        </div>
        </div>
        <div class="col-sm-9 col-md-4 col-lg-3">
        <div class="shop-item">
            <div class="shop-item-image"><img src="assets/images/shop/product-10.jpg" alt="Cold Garb"/>
            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
            </div>
            <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
        </div>
        </div>
    </div>
</section>

<section class="module-small">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">New Arrival</h2>
        </div>
    </div>
    <div class="row multi-columns-row">
        <div class="col-sm-9 col-md-4 col-lg-3">
        <div class="shop-item">
            <div class="shop-item-image"><img src="assets/images/shop/product-7.jpg" alt="Accessories Pack"/>
            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
            </div>
            <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
        </div>
        </div>
        <div class="col-sm-9 col-md-4 col-lg-3">
        <div class="shop-item">
            <div class="shop-item-image"><img src="assets/images/shop/product-8.jpg" alt="Men’s Casual Pack"/>
            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
            </div>
            <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
        </div>
        </div>
        <div class="col-sm-9 col-md-4 col-lg-3">
        <div class="shop-item">
            <div class="shop-item-image"><img src="assets/images/shop/product-9.jpg" alt="Men’s Garb"/>
            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
            </div>
            <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
        </div>
        </div>
        <div class="col-sm-9 col-md-4 col-lg-3">
        <div class="shop-item">
            <div class="shop-item-image"><img src="assets/images/shop/product-10.jpg" alt="Cold Garb"/>
            <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
            </div>
            <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
        </div>
        </div>
        <div class="row mt-30">
            <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="#">See all products</a></div>
        </div>
</section>
@endsection