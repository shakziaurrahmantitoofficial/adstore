<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ads;

class adsexpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ads:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire ad disabled.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $adsData    = ads::get();
        foreach($adsData as $data){
           $expire  = $data->adstartTime + $data->duration;
            if($expire <= time()){
              $ads  = ads::find($data->id);
              $ads->status = 3;
              $ads->save();
            }
        }
        
        return Command::SUCCESS;
    }
}
