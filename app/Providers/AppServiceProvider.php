<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;

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
    public function boot(): void
    {
        Model::unguard();        

        View::share('siteTitle', 'Data Lulusan Peserta Didik Provinsi Papua');
        View::share('siteDescription', 'Sistem Informasi Data Lulusan Peserta Didik Provinsi Papua');
        View::share('siteFavicon', 'favicon.png');
        View::share('siteLogo', 'logo_provinsi_papua.png');
        View::share('siteDomain', 'https://datalulusanpapua.info');
    }
}
