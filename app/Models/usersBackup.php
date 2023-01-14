<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersBackup extends Model
{
    use HasFactory;
    protected $table = "usersbackup";
    protected $fillable = [
        'email',
        'Type',
    ];
}
