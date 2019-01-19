<?php

namespace devbook\siswa;

use Illuminate\Support\ServiceProvider;

class SiswaServiceProvider extends ServiceProvider {

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'siswa');
        $this->loadMigrationsFrom(__DIR__. '/database/migrations');
    }

    public function register(){

    }


}
