<?php

namespace App\Console;

use App\Jobs\AtualizarAcoes;
use App\Jobs\AtualizarCriptos;
use App\Jobs\AtualizarFundos;
use App\Jobs\RealizarRequisicao;
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
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->everyMinute();
        // $schedule->job(new AtualizarAtivos)->everyTwoMinutes()->onFailure(function() {
        //     return AtualizarAtivos::dispatch()->delay(now()->addMinutes(10));
        // });

        // $schedule->job(new RealizarRequisicao("https://brapi.dev/api/v2/crypto/available"))->everyTwoMinutes();
        // $schedule->job(new AtualizarAcoes)->everyTwoMinutes();
        $schedule->job(new AtualizarFundos)->everyTwoMinutes();
        // $schedule->job(new AtualizarCriptos)->everyTwoMinutes();
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
