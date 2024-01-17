<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\User;

class testcron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'holiday alert';
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
       
        $users = User::get();
        $emailarr = $users->toArray();
        $newarr=[];
        for($i=0 ; $i<count($emailarr) ; $i++){
            $newarr=$emailarr[$i]["email"];

        }

        foreach($users as $user){
            $username =['name' => $user->name];
            Mail::send('mail', compact('username'), function ($message) use($user)
            {   
                $message->to($user['email']);
                $message->subject('final testing');
                $message->from('adarshkumar.wscube@gmail.com');
            });
        }
    }
}
