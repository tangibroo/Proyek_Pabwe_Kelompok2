@extends('layout.form')

@section('title')
 register
@endsection

@section('jumbotron')
Register
@endsection

@section('form')
<div class="row">
    <div class="col-sm-5 col-sm-offset-3 mb-sm-40">
        <h4 class="font-alt">Register</h4>
        <hr class="divider-w mb-10">
        <form class="form" method="POST" action="{{ route('register_user') }}">
            @csrf
            <div class="form-group">
                <input class="form-control" id="username" type="text" name="username" placeholder="nama"/>
            </div>
            <div class="form-group">
                <input class="form-control" id="no_hp" type="text" name="no_hp" placeholder="No HP"/>
            </div>
            <div class="form-group">
                <input class="form-control" id="E-mail" type="text" name="email" placeholder="Email"/>
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input class="form-control" id="re_password" type="password" name="re_password" placeholder="Re-enter Password"/>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-round btn-b">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection