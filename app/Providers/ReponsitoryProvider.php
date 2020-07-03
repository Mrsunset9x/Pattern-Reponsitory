<?php

namespace App\Providers;

use App\reponsitory\CustomerReponsitory;
use App\reponsitory\CustomerReponsitoryInterface;
use Illuminate\Support\ServiceProvider;

class ReponsitoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CustomerReponsitoryInterface::class,CustomerReponsitory::class);
    }
}
