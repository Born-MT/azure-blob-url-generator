<?php

namespace BornMt\AzureBlobUrlGenerator;

use Illuminate\Support\ServiceProvider;
use BornMt\AzureBlobUrlGenerator\Contracts\UrlGeneratorServiceInterface;
use BornMt\AzureBlobUrlGenerator\Services\UrlGeneratorService;
use BornMt\AzureBlobUrlGenerator\Support\Configuration;

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
