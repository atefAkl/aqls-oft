<?php
protected function schedule(Schedule $schedule)
{
    // Run a command every day at midnight
    $schedule->command('reports:generate')->daily();

    // Run a job every 5 minutes
    $schedule->job(new \App\Jobs\SyncOrdersJob)->everyFiveMinutes();

    // Run a closure every Monday at 8 AM
    $schedule->call(function () {
        \App\Models\User::inactive()->delete();
    })->mondays()->at('08:00');
}
