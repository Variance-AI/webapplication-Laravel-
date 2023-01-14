<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\TableModel as TableModel;
use App\Models\SignupTypeModel as SignupTypeModel;
use Faker\Guesser\Name;

Route::get('/getUserType', function (Request $request) {
    $email = $request->Email;
    $data = TableModel::with('signuptype')->where('userEmail', '=', $request->Email)->first();
    $collection = json_decode($data, true);
    return ($collection['signuptype']['name']);
});
