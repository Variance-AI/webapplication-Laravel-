<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\__BOOKPERFECT__CONTROLLER__;
Route::get('/get__package__all', [__BOOKPERFECT__CONTROLLER__::class, '__GET__PACKAGE__ALL__']);
Route::get('/get__ideas/{language}/{currency}/{country}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__IDEAS__']);
Route::get('/get__travelidea_idea_language/{idea}/{lang?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRAVELIDEA__IDEA__LANG__']);
Route::get('/get__travelidea_ideaid_lan_currency/{idea}/{lang?}/{currency?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRAVELIDEA__IDEA__LANG__CURRENCY__']);
Route::get('/get__package__holidayPackage_id_CURRENCY/{holidayPackageId}/{currency?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__PACKAGE__HOLIDAYID__CURRENCY__']);
Route::get('/get__package__holidayPackage_id_LAN_CURRENCY/{holidayPackageId}/{Lang?}/{Currency?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__PACKAGE__HOLIDAY__LAN__CURRENCT__']);
Route::get('/get_ideaspackages/{username?}/{status?}', [__BOOKPERFECT__CONTROLLER__::class, 'GET__IDEAS__PACKAGES']);
