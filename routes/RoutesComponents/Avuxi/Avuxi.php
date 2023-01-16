<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\coordinateLink;
use App\Models\cities;
use App\Models\adminCheck;
use App\Models\geoLocation;


Route::get('/coordinat/{city}', function ($__city) {
    $data = cities::where('cityName', '=', strtolower($__city))->first();
    return $data->ll;
});
Route::get('/coordinateKey', function () {
    $data = coordinateLink::find(1);
    return $data->Link;
});


Route::get('/avuxi/{coordinat}', function ($coordinat) {
    return  view('Avuxi', compact('coordinat'));
});

Route::get('/avuxi.panel', function () {
    return view('components.avuxi.avuxi');
});

Route::get('/avuxi.auth', function (Request $request) {
    $checkUser = adminCheck::where('userID', '=', $request->userid)->where('password', '=', $request->password)->get();
    $cities = geoLocation::all();
    if (count($checkUser) < 1) {
        \session()->flash('Error1', 'userID and password are required');
        return back();
    } else {
        foreach ($checkUser as $item) {
            $id = $item->id;
        }
        return view('components.avuxiPanel.avuxi', ['id' => $id, 'locationCode' => '41.390847,2.16902', 'cities' => $cities]);
    }
})->name('auth');

Route::get('/avuxi.add', function (Request $request) {
    $status = adminCheck::find($request->id)->status;

    if ($status == 1 && $request->location != '' && $request->longitude != '' && $request->latitude != '') {
        $unique = geoLocation::where('location', '=', strtolower($request->location))->get();
        if (count($unique) < 1) {
            geoLocation::create([
                'location' => strtolower($request->location),
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
            ]);
            \session()->flash('Success', 'Location added');
        } else {
            \session()->flash('Error1', 'This Location Already recorded');
        }

        return back();
    } else {
        \session()->flash('Error1', 'Location Or Longitude Or Latitude are required');
        return back();
    }
})->name('add');

Route::get('/loadCity', function (Request $request) {
    $status = adminCheck::find($request->userID)->status;
    $cities = geoLocation::all();
    return view('components.avuxiPanel.avuxi', ['id' => $status, 'locationCode' => $request->longitude . ',' . $request->latitude, 'cities' => $cities]);

    dd($status);
})->name('load');
