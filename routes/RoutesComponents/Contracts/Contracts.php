<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\__BOOKPERFECT__CONTROLLER__;

$__DATA = [
    'SUPPLIER__ID' => '7650',
    'CLOSED__TOUR__CODE' => 'ihwlesfhjh',
    'OPTION__CODE' => 'ENGLISH',
    'PROVIDER__CODE' => 'NVPLZPERA',
    'TRANSFER__CODE' => 'TRANSFER-131213',
    'TRANSPORT__CODE' => 'TRANSPORT-134619',
];
Route::get('/supplier', [__BOOKPERFECT__CONTROLLER__::class, 'SUPPLIER']);
Route::get('/suppliers/{supplierId}', [__BOOKPERFECT__CONTROLLER__::class, '__SUPPLIERS__']);
Route::get('/get__transfer/{supplierid}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRANSFER__']);
Route::get('/get__hotel/{supplierid}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__HOTEL__BY__SUPPLIERID__']);
Route::get('/get__golfbySupplier/{supplierid}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__GOLF__BY__SUPPLIERID__']);
Route::get('/get__ticket_supplierid/{supplierid}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TICKET__SUPPLIERID__']);
Route::get('/transfer/zones/{supplierId}/{ZoneType?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__ZONE__SUPPLIERID__']);
Route::get('/get_Closed_Tour/{suplierid}/{closedtourcode}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__CLOSED__TOUR__']);
Route::get('/get__ticket/{supplierid}/{ticketcode}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TICKET__SUPPLIER__TICKETCODE__']);
Route::get('/get__transport/{supplierid}/{currency?}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRANSPORT__SUPPLIERID__CURRENCY__']);
Route::get('/get__transport_id/{supplierid}/{transportid}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRANSPORT__SUPPLIERID__TRANSPORTID__']);
Route::get('/get__transfer_supplierid_transferid/{supplierid}/{transferid}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__TRANSFER__SUPPLIERID__TRANSFERID__']);
Route::get('/get__hotel_supplierid_provider_code/{supplierid}/{providercode}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__HOTEL__BY__SUPPLIERID__PROVIDER__CODE']);
Route::get('/get_closedTour_optionCode/{suplierid}/{closedtourcode}/{optionCode}', [__BOOKPERFECT__CONTROLLER__::class, '__GET__CLOSED__TOUR__CODE__BY__OPTION__CODE__']);

