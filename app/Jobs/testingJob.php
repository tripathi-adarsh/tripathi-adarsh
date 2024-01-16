<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class testingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('2c87b02b', '3e3vFcizGLwb05bW');
        $client = new \Nexmo\Client($basic);

            $message = $client->message()->send([
                'to' => '919305173548',
                'from' => '919305173548',
                'text' => 'This is testing from adarsh tripathi'
            ]);
    }
}
