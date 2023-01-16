@extends('../../base')

@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/css.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
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
                            <div><input type="text" name="userid" placeholder="Enter UserID . . . " /></div>
                        </div>
                        <div style="margin-top:15px;" class="inputContainer">
                            <div>password</div>
                            <div><input type="password" name="password" placeholder="Enter Password . . . " /></div>
                        </div>
                        <div style="margin-top:15px;" class="submitContainer">
                            <div></div>
                            <div><input class="submit" type="submit" name="submit" value="Login" /></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="animationContainer">
            <div class="animationFrame">
                <div class="animation"></div>
                <div class="animation2"></div>
                <div class="animation3"></div>
                <div class="animation4"></div>
                <div class="animation5"><img width="150" height="150"
                        src="{{ asset('public/img/Internet-PNG-Clipart.png') }}" /></div>
            </div>
        </div>
        @if (session('Error1'))
            <div class="alertContainer">
                {{ session('Error1') }}
            </div>
        @endif
    </div>
    <script>
        $(document).ready(function() {
            $('.alertContainer').delay(3000).fadeOut();
        });
    </script>
@endsection
