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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         \App\Product::creating(function ($model) {
        $tax = .20;
 
        if ($model->quantity < 10) { $model->price += $model->price * $tax;
        } else if ($model->quantity >= 10) {
            $model->price += $model->price * ($tax / 2);
        }
    });
    }
}
