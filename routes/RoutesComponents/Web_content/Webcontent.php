<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\__BOOKPERFECT__CONTROLLER__;
use App\Models\TransportBase;

$__data = [
   'accommodationId' => 'MASTER-2732768',
];
Route::get('/get__theme', [__BOOKPERFECT__CONTROLLER__::class, '__GET__THEME__']);
Route::get('/get__mealplan', [__BOOKPERFECT__CONTROLLER__::class, '__GET__MEALPLAN__']);
Route::get('/get__airline__all', [__BOOKPERFECT__CONTROLLER__::class, '__GET__ALL__AIRLINE__']);
Route::get('/push_transportBase', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRANSPORT__BASE__']);
Route::get('/get__countries__all', [__BOOKPERFECT__CONTROLLER__::class, '__GET__COUNTRIES__ALL__']);
Route::get('/get__promotioncode', [__BOOKPERFECT__CONTROLLER__::class, '__GET__PROMOTION__CODE__']);
Route::get('/get__preferredticket', [__BOOKPERFECT__CONTROLLER__::class, '__GET__PREFERRED__TICKET']);
Route::get('/get__destination__all', [__BOOKPERFECT__CONTROLLER__::class, '__GET__DESTINATION__ALL__']);
Route::get('/get__accommodations__all', [__BOOKPERFECT__CONTROLLER__::class, '__GET__ACCOMMODATIONS__ALL__']);
Route::get('/get__destination__by_code/{code}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__DESTINATION__CODE__']);
Route::get('/get__accommodations__by__id/{accommodationId}/{Lan?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__ACCOMMODATIONS__BY__ID__']);
/*
   |--------------------------------------------------------------------------
   | LOCAL DATABASE
   |--------------------------------------------------------------------------
   |
   | THESE ROUTES ARE WORKING WITH LOCAL DATABASE
*/
Route::get('/get__transportbase__id/{countryCode}/{code?}', function ($__COUNTRY__CODE, $__CODE = null) {

   if ($__CODE == '{code}' || $__CODE == ',' || $__CODE == null) {
      $__RESPONSE = TransportBase::where('countryCode', '=', $__COUNTRY__CODE)->get();
   } else {
      $__RESPONSE = TransportBase::where('countryCode', '=', $__COUNTRY__CODE)->where('code', '=', $__CODE)->get();
   }
   return $__RESPONSE;
});
