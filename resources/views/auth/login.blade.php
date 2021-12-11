@extends('layout.app')

@section('title')
 login
@endsection

@section('content')
<div class="row">
    <div class="col-sm-5 col-sm-offset-3 mb-sm-40">
        <h4 class="font-alt">Login</h4>
        <hr class="divider-w mb-10">
        <form class="form" method="POST" action="{{ route('login_user') }}">
            @csrf
            <div class="form-group">
                <input class="form-control" id="email" type="email" name="email" placeholder="email"/>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password"/>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-round btn-b">Login</button>
            </div>
            <div class="form-group"><a href="">Forgot Password?</a></div>
        </form>
    </div>
</div>
@endsection