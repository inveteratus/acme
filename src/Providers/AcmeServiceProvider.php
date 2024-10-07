<?php

namespace Inveteratus\Acme\Providers;

use Illuminate\Support\ServiceProvider;

class AcmeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $basePath = realpath(__DIR__ . '/../..');

        $this->loadViewsFrom($basePath . '/resources/views', 'acme');

        $this->publishes([
            $basePath . '/resources/css/acme.css' => resource_path('css/acme.css'),
            $basePath . '/resources/css/acme' => resource_path('css/acme'),
            $basePath . '/resources/js/acme.js' => resource_path('js/acme.js'),
        ], 'acme-assets');

        $this->publishes([
            $basePath . '/resources/views' => resource_path('views/vendor/acme'),
        ], 'acme-views');
    }
}
