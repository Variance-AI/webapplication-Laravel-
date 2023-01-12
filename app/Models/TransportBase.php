<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportBase extends Model
{
    use HasFactory;
    protected $table = 'transport';
    protected $fillable = ['code', 'name', 'cityName', 'countryCode', 'geolocation_latitude', 'geolocation_longitude'];
}
