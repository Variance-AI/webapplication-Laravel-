<?php

use Illuminate\Support\Facades\Route;
use App\Models\TransportBase;

Route::get('/sitemap.xml', function () {
    $data = TransportBase::all();
    return response()->view('sitemap', [

        'data' => $data

    ])->header('Content-Type', 'text/xml');
});
