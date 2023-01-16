@extends('../../base')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/css2.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
@endsection
@section('body')
    <div class="container">
        <div class="addSection">
            <div class="addSectionLogo">
                <img width="300" height="200" src="{{ asset('public/img/Navigation.png') }}" />
            </div>
            <form class="formContainer" method="GET" action="{{ route('add') }}">
                <div class="inputContainer">
                    <div>Location&nbsp;:</div>
                    <div><input type="text" name="location" /></div>
                </div>
                <div style="margin-top:10px;" class="inputContainer">
                    <div>longitute&nbsp;:</div>
                    <div><input type="text" name="longitude" /></div>
                </div>
                <div style="margin-top:10px;" class="inputContainer">
                    <div>latitude&nbsp;:</div>
                    <div><input type="text" name="latitude" /></div>
                </div>
                <input name="id" value={{ $id }} hidden />
                <div style="margin-top:10px;" class="submitContainer">
                    <div><input type="submit" name="submit" value="add" /></div>
                </div>
            </form>
            <div class="alertContainer">
                @if (session('Error1'))
                    <div class="Error">{{ session('Error1') }}</div>
                @endif
                @if (session('Success'))
                    <div class="Success">{{ session('Success') }}</div>
                @endif

            </div>
        </div>
        <div class="mapSection">
            <div>
                <span class="vxwic" t="639aee9ea904e838e65ed385" ll={{ $locationCode }}></span>
            </div>
            <div class="listContainer">
                <ul>
                    <li>Location</li>
                    <li>Longitude</li>
                    <li>Lotitude</li>
                </ul>
                @foreach ($cities as $item)
                    {{-- <ul class="llLists">
                        <li>{{ $item->location }}</li>
                        <li>{{ $item->longitude }}</li>
                        <li>{{ $item->latitude }}</li>
                    </ul> --}}
                    <div class="llList">

                    </div>
                @endforeach
            </div>

        </div>
        <div class="citiesSection">
            <ul class="citiesList">
                @foreach ($cities as $item)
                    <li><a
                            href="{{ route('load', ['userID' => $id, 'longitude' => $item->longitude, 'latitude' => $item->latitude]) }}">{{ $item->location }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.Error').delay(3000).fadeOut();
            $('.Success').delay(3000).fadeOut();
        });
    </script>
@endsection
