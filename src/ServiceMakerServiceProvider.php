<?php

namespace Kimchanhyung98\ServiceMaker;

use Illuminate\Support\ServiceProvider;

class ServiceMakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
//            $this->publishes([
//                __DIR__ . './config/service-maker.php' => config_path('service-maker.php'),
//            ], 'config');

            $this->commands([
                MakeService::class,
            ]);
        }
    }
}
