<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        \App\Console\Commands\TestEcho::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        //一个测试
        $filePath = '/Users/yuli/service_logs/test_blog';
        // $schedule->call(function () {
        //     echo date('Y-m-d h:i:s',time());
        //     echo " This is a test task echo....".PHP_EOL;
        // })->everyMinute()
        // ->appendOutputTo($filePath);


        //一个测试程序
        
        $schedule->command('command:print')
        ->mondays()
        ->timezone('Asia/Shanghai')
        ->withoutOverlapping()
        ->appendOutputTo($filePath);
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
