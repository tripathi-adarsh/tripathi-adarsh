<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\testingJob;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        testingJob::dispatch()->delay(now()->addSecond(60));
            dd('SMS Sent after 60 second.');
    }
}

