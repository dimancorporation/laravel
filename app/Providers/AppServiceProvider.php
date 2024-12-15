<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Services\MyDealService::class);
//        $this->app->singleton(\App\Services\Crest::class);
        $this->app->singleton(\App\Services\BitrixService::class, function ($app) {
            return new \App\Services\BitrixService(
                config('services.bitrix24.base_url'),
                config('services.bitrix24.access_token')
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
