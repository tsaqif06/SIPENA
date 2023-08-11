<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Ruang;
use App\Observers\RuangObserver; // Pastikan import ini benar
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Ruang::observe(RuangObserver::class);
    }
}
