<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK;

use Illuminate\Support\ServiceProvider;

final class FilamentSDKServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadTranslationsFrom(
            path: __DIR__ . '/lang',
            namespace: 'filament-sdk'
        );
    }
}
