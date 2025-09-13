<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; 
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\CloudinaryAdapter;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;

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
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

            Storage::extend('cloudinary', function ($app, $config) {
            // return new Filesystem(new CloudinaryAdapter());
        });

        Route::middleware('api')
            ->prefix('api')
            ->group(function ($router) {
                $router->post('/chatbot', [ChatbotController::class, 'handleMessage'])->name('chatbot.handle');
            });
    }
}
