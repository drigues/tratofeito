<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Vite;

class AppServiceProvider extends ServiceProvider
{
    public function boot(Vite $vite): void
    {
        // Build directory and new manifest filename used by laravel-vite-plugin v2
        $vite->useBuildDirectory('build');
        $vite->useManifestFilename('.vite/manifest.json');
    }
}
