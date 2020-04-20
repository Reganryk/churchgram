<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Hideoldposts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Hideposts:old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hides Posts From the Timeline';

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
