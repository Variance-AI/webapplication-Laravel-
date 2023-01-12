<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableModel extends Model
{
    use HasFactory;
    protected $table = 'usertable';
    public function signuptype(){
        return $this->hasOne(SignupTypeModel::class,'id','typeSignup');
    }
}
