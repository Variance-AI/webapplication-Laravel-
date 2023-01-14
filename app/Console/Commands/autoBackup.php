<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\__Indicator__;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class autoBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'autoBackup';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dateTime=Carbon::now()->format('Y-m-d H-i-s');
        Artisan::call('backup:run --only-db');
        // $__INDEX = __Indicator__::find(1);
        // if ($__INDEX->Indicator < 30) {
        //     $__INDEX->Indicator = intval($__INDEX->Indicator) + 1;
        //     $__INDEX->save();
        // } else {
        //     info('Backup Is Ready');
        //     $__INDEX->Indicator = 0;
        //     $__INDEX->save();
        // }
        return 0;
    }
}
