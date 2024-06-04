<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Illuminate\Pagination\Paginator;
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
        Blade::directive('validationErr', function ($field) {
            return "<?php if (\$errors->has($field)): ?>
                        <span class=\"invalid-feedback\" role=\"alert\">
                            <strong><?php echo \$errors->first($field); ?></strong>
                        </span>
                    <?php endif; ?>";
        });
        
        Paginator::useBootstrap();
    }
}
