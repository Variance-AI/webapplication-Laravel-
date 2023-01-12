<?php

use Illuminate\Support\Facades\Route;
use App\Models\coordinateLink;
use App\Models\cities;


Route::get('/coordinat/{city}', function ($__city){
    $data =cities::where('cityName','=',strtolower($__city))->first();
    return $data->ll;
});
Route::get('/coordinateKey',function (){
    $data = coordinateLink::find(1);
    return $data->Link;
});


Route::get('/avuxi/{coordinat}', function($coordinat) {
    return  view('Avuxi',compact('coordinat'));
});

