<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('news.cards', function($view) {
          if(\Route::is('home'))
          {
            $featured_news = \App\News::getFeatured();
          }
          elseif (\Route::is('news'))
          {
            $featured_news = \App\News::latest()->get();
          }
          else
          {
            $featured_news = \App\News::getFeatured();
          }
          $view->with(compact('featured_news'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function () {
          return new Stripe(config('services.stripe.secret'));
        });
    }
}
