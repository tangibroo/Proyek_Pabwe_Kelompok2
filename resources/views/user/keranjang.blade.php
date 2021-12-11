@extends('layout.app')

@section('title')
 Cart
@endsection

@section('jumbotron')
Cart
@endsection

@section('content')
<body>
<div class="module-large">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Cart</h2></div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
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
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="assets/images/shop/product-7.jpg" alt="Accessories Pack" width="70" height="100"/>
                        </td>
                        <td>
                            ACCESSORIES PACK <br><div class="price font-alt"><span class="amount">20.00</span></div>
                        </td>
                        <td>
                            <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required">  
                        </td>
                        <td>
                            <div class="price font-alt"><span class="amount">20.00</span></div>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-circle btn-xs" title="View" data-toggle="tooltip">view</a>
                            <a href="#" class="btn btn-warning btn-circle btn-xs" title="Edit" data-toggle="tooltip">edit</a>
                            <a href="#" class="btn btn-danger btn-circle btn-xs" title="Delete" data-toggle="tooltip" style="margin: right">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="assets/images/shop/product-7.jpg" alt="Accessories Pack" width="70" height="100"/>
                        </td>
                        <td>
                            ACCESSORIES PACK <br><div class="price font-alt"><span class="amount">20.00</span></div>
                        </td>
                        <td>
                            <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required">  
                        </td>
                        <td>
                            <div class="price font-alt"><span class="amount">20.00</span></div>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-circle btn-xs" title="View" data-toggle="tooltip">view</a>
                            <a href="#" class="btn btn-warning btn-circle btn-xs" title="Edit" data-toggle="tooltip">edit</a>
                            <a href="#" class="btn btn-danger btn-circle btn-xs" title="Delete" data-toggle="tooltip" style="margin: right">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td>
                            <b>Sub-Total<b>
                        </td>
                        <td>
                            
                        </td>
                        <td>
                              
                        </td>
                        <td>
                            <div class="price font-alt" ><span class="amount">40.00</span></div>
                        </td>
                        <td>
                            <div class="row align-center">
                                <div class="col-sm-12" style="position: right"><a class="btn btn-success btn-round" href="#">Purchase</a></div>
                            </div>
                        </td>
                    </tr>        
                </tbody>
            </table>
        </div>
    </div>  
</div>   
</body>
@endsection