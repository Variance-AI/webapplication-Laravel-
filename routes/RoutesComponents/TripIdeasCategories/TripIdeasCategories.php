<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\__BOOKPERFECT__CONTROLLER__;
Route::put('/update__TripIdeasCategories', [__BOOKPERFECT__CONTROLLER__::class, '__UPDATE__TRIPIDEAS__CATEGORIES__']);
Route::get('/get__TripIdeasCategories__by__id/{id}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRIPIDEAS__BY__ID__']);
Route::post('/create__TripIdeasCategories', [__BOOKPERFECT__CONTROLLER__::class, '__GET__CREATE__TRIPIDEAS__CATEGORIES__']);
Route::get('/get__TripIdeasCategories__by__name/{city}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRIPIDEAS__BY__NAME__']); 
Route::get('/delete__TripIdeasCategories/{HotelId}', [__BOOKPERFECT__CONTROLLER__::class, '__DELETE__TRIPIDEAS__CATEGORIES__']);
Route::get('/get__TripIdeasCategories__by__id/{id}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRIPIDEAS__CATEGORIES__BY__ID__']);
Route::get('/get__TripIdeasCategoriesHotelten__by__name/{city}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRIPIDEAS__CATEGORIES__']);