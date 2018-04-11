<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->Barang();
        $this->KategoriBarang();
        $this->Lokasi();
        $this->User();
    }


    public function Barang()
    {
      return $this->app->bind('App\Repositories\BarangRepository', 'App\Repositories\Eloquent\EloBarangRepository');
    }
    public function KategoriBarang()
    {
      return $this->app->bind('App\Repositories\KategoriBarangRepository', 'App\Repositories\Eloquent\EloKategoriBarangRepository');
    }
    public function Lokasi()
    {
      return $this->app->bind('App\Repositories\LokasiRepository', 'App\Repositories\Eloquent\EloLokasiRepository');
    }
    public function User()
    {
      return $this->app->bind('App\Repositories\UserRepository', 'App\Repositories\Eloquent\EloUserRepository');
    }
}
