<?php

namespace App\Providers;

use App\Modules\Article\Observers\ArticleObserver;
use App\Modules\Core\Article;
use App\Modules\Core\User;
use App\Modules\User\Observers\UserObserver;
use Illuminate\Support\Facades\Blade;
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

        Blade::directive('localizeURL', function($expression) {
            return
                "<?php echo LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), $expression) ?>";
        });

        Article::observe(ArticleObserver::class);

        User::observe(UserObserver::class);
    }
}
