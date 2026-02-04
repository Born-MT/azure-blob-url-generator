<?php

namespace BornMT\AzureBlobUrlGenerator;

use Illuminate\Support\ServiceProvider;
use BornMT\AzureBlobUrlGenerator\Contracts\UrlGeneratorServiceInterface;
use BornMT\AzureBlobUrlGenerator\Services\UrlGeneratorService;
use BornMT\AzureBlobUrlGenerator\Support\Configuration;

class UrlGeneratorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(Configuration::class, function () {
            return new Configuration(
                config('filesystems.disks.azure.endpoint'),
                config('filesystems.disks.azure.container'),
                config('filesystems.disks.azure.sasToken')
            );
        });

        // Bind service to interface
        $this->app->bind(
            UrlGeneratorServiceInterface::class,
            UrlGeneratorService::class
        );
    }

    public function boot(): void {}
}
