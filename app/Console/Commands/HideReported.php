<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\Spamreport;
use App\Post;
class HideReported extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'HideReported:Posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hides Posts with 20 Bad Reports';

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
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
