<?php

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\systemModels as systemModels;
use App\Exports\LogFile;
use Maatwebsite\Excel\Facades\Excel;

Route::post('/auth', function (Request $__REQUEST) {
    $__data = systemModels::where('username', '=', $__REQUEST->username)->where('userpass', '=', $__REQUEST->password)->get();
    $__status = count($__data) > 0 ? true : false;
    return $__status;
});
Route::get('/export/{__start__date}/{__start__time}/{__end__date}/{__end__time}', function (
    $__start__date,
    $__start__time,
    $__end__date,
    $__end__time
) {
    $__start__date = $__start__date . ' ' . $__start__time;
    $__end__date = $__end__date . ' ' . $__end__time;
    return Excel::download(new LogFile($__start__date, $__end__date), 'Log-collection.xlsx');
});
Route::get('/Log', function () {
    return Log::orderBy('id','DESC')->take(10000)->get();
    // return Log::all();

});
