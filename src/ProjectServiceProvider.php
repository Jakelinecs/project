<?php


/**
 * Created by PhpStorm.
 * User: jakeline
 * Date: 19/04/2019
 * Time: 22:15
 */
namespace generator\project;


use Illuminate\Support\ServiceProvider;


class ProjectServiceProvider extends ServiceProvider{



    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','project');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }


    public function register(){

    }

}