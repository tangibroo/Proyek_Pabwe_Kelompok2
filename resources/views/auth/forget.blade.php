@extends('layout.form')

@section('title')
 forget-password
@endsection

@section('jumbotron')
Forget Password
@endsection

@section('form')
<div class="row">
    <div class="col-sm-5 col-sm-offset-3 mb-sm-40">
        <h4 class="font-alt">Find Your Account</h4>
        <hr class="divider-w mb-10">
        <form class="form">
            <label>Enter Your Email</label>
            <div class="form-group">
                <input class="form-control" id="username" type="email" name="username" placeholder="email"/>
            </div>
            <div class="form-group">
                <button class="btn btn-round btn-b">Find</button>
            </div>
        </form>
    </div>
</div>
@endsection