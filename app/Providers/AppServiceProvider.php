<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();


        //   \Cache::set('mert','bulut');
        $cat = \Cache::remember('categories', now()->addDay(), function () {
            return Category::all();
        });
        $datas = \Cache::remember('data', now()->addDay(), function () {
            return Category::with('subCategories')
                ->where('up_id', 0)
                ->get()
                ->toArray();
        });
//bütün blade sayfalarıyla paylaş
        \View::share('categories', $cat);
        \View::share('data', $datas);
    }
}
