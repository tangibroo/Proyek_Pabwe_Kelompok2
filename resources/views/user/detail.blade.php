@extends('layout.app')

@section('title')
 Details
@endsection

@section('jumbotron')
 Monja
@endsection

@section('content')
<section class="module-large">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 mb-sm-40">
                  <a class="galery" href="assets/images/shop/product-7.jpg"><img src="assets/images/shop/product-7.jpg" alt="Single Product Image"/></a>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="product-title font-alt">Accessories Pack</h1>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="price font-alt"><span class="amount">20.00</span></div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="description">
                      <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                    </div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="product_meta">Categories:<a href="#"> Man, </a><a href="#">Clothing, </a><a href="#">T-shirts</a>
                    </div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-4 mb-sm-20">
                    <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required"/>
                  </div>
                  <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="#">Add To Cart</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection