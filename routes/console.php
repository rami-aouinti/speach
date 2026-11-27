<?php
use Illuminate\Support\Facades\Artisan;
Artisan::command('about:speach', function () {
    $this->info('Speach Laravel + React application is ready.');
})->purpose('Display Speach application information');
