<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\__BOOKPERFECT__CONTROLLER__;
/*
   |--------------------------------------------------------------------------
   | variables :
   |--------------------------------------------------------------------------
   | managerID => 3420
   | reference Booking => HTL-1
*/

Route::get('/get__csrf', [__BOOKPERFECT__CONTROLLER__::class, 'GET__CSRF']);
Route::put('/update__user', [__BOOKPERFECT__CONTROLLER__::class, '__UPDATE__USER__']);
Route::post('/create__user', [__BOOKPERFECT__CONTROLLER__::class, '__CREATE__USER__']);
Route::get('/get__alluser', [__BOOKPERFECT__CONTROLLER__::class, '__GET__ALL__USER__']);
Route::get('/get__agencies__all', [__BOOKPERFECT__CONTROLLER__::class, '__GET__AGENCIES__ALL__']);
Route::get('/get__Booking_ref/{ref}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__BOOKING__REF__']);
Route::get('/get__agencies__id/{id}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__AGENCIES__BY__ID__']);
Route::get('/get__usersbyAgency/{agencyId}', [__BOOKPERFECT__CONTROLLER__::class, '__USERS__BY__AGENCY__']);
Route::get('/get__agencyCredit/{agency}', [__BOOKPERFECT__CONTROLLER__::class, '__AGENCIES__BALANCE__BY__ID__']);
Route::get('/get__Booking_all/{from}/{to}/{lang?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__ALL__BOOKING__']);
Route::get('/get__user/{username}/{password}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__USER__BY__USERANDPASS__']);
Route::get('/get__agencyManager/{agencyManagerID}', [__BOOKPERFECT__CONTROLLER__::class, '__AGENCY__MANAGER__BY__ID__']);
Route::get('/get__user_id/{username}/{accessToken?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__USER__BY__ID__'])->name('getUser');
Route::get('/get__socialMedia/{username}',[__BOOKPERFECT__CONTROLLER__::class, 'getSocialMedia']);
