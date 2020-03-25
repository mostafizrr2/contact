<?php
namespace Mostafiz\Contact;

use Illuminate\Support\ServiceProvider;
class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //  dd("ok"); 
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/admin/contact'),
        ]);

    }

    public function register()
    {

    }
    
}