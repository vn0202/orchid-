<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;

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
    public function boot(Dashboard $dashboard)
    {
//          $dashboard->registerSearch([
//                  Post::class,
//                  //...Models
//                ]);
    }
}
