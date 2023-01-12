<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\TransferCloudUserInfoToLocalDB;
use App\Models\usersBackup;
use App\Models\TableModel as TableModel;
use Illuminate\Support\Facades\Route;

class Methods extends Model
{
    public function matchUserBackup()
    {
        $__getUsersBackup = TransferCloudUserInfoToLocalDB::all();
        foreach ($__getUsersBackup as $items) {
            $match__process = usersBackup::where('email', '=', $items->userEmail)->get();
            if (count($match__process) > 0) {
                $update = TransferCloudUserInfoToLocalDB::where('userEmail', '=', $items->userEmail)->first();
                foreach ($match__process as $subItem) {
                    $update->typeSignup = $subItem->Type;
                    $update->save();
                }
            }
        }
    }
}
