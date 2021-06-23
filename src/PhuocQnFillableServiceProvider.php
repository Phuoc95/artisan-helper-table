<?php

namespace Phuocqn\Fillable;
// namespace App\Providers;

use Phuocqn\Fillable\App\Console\Commands\ShowTableFieldCommand;
use Phuocqn\Fillable\App\Console\Commands\ShowTableListCommand;
use Illuminate\Support\ServiceProvider;

class PhuocqnFillableServiceProvider extends ServiceProvider
{
    protected $package_name = 'fillable';

    protected $array_command = [
        ShowTableListCommand::class,
        ShowTableFieldCommand::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {}

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->array_command);
    }

}
