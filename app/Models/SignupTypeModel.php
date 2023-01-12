<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignupTypeModel extends Model
{
    use HasFactory;
    protected $table='signuptypes';
    // public function callTable(){
    //     return $this->belongsTo(TableModel::class);
    // }
}
