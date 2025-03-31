<?php

namespace App\Providers;

use App\Services\CommonService;
use App\Services\ResourceService;
use App\Interfaces\CommonInterface;
use App\Interfaces\ResourceInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Debugbar', \Barryvdh\Debugbar\Facades\Debugbar::class);
        $this->app->bind(CommonInterface::class, CommonService::class);
        $this->app->bind(ResourceInterface::class, ResourceService::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        JsonResource::withoutWrapping();
    }
}
