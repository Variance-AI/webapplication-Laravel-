<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class geoLocation extends Model
{
    use HasFactory;
    protected $table = 'geoLocation';
    protected $fillable = ['location', 'longitude', 'latitude', 'id'];
}
