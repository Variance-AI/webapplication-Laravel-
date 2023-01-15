@extends('../../base')

@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/css.css') }}" />
@endsection
@section('body')
    <div class="container">
        <div class="formContainer">
            <div class="formBox">
                <div class="logo"><img style="transform: translateX(10px);" width="400" height="300"
                        src="{{ asset('public/img/Navigation.png') }}" /></div>
                <form class="submitForm" action="{{ route('auth') }}" method="get" enctype="multipart/form-data">
                    <div>
                        <div class="inputContainer">
                            <div>userID</div>
                            <div><input type="text" name="userid" /></div>
                        </div>
                        <div style="margin-top:15px;" class="inputContainer">
                            <div>password</div>
                            <div><input type="password" name="password" /></div>
                        </div>
                        <div style="margin-top:15px;" class="submitContainer">
                            <div></div>
                            <div><input class="submit" type="submit" name="submit" value="Login" /></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
