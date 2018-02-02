<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestEcho extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:print';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test case for laravel ct';

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
        echo date('Y-m-d h:i:s',time());
        echo ' hello yuli,this is a test case!'.PHP_EOL;
    }
}
