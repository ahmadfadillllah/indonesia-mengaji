<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Carbon;

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
        Blade::directive('currency', function ( $expression ) {
            return "Rp<?php echo number_format($expression,0,',','.'); ?>";
        });

        Blade::directive('date', function ( $expression ) {
            return Carbon::parse($expression)->format('D, Y-m-d H:i:s');
        });
    }
}
