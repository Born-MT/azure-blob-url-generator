<?php

namespace BornMt\AzureBlobUrlGenerator\Services;

use BornMt\AzureBlobUrlGenerator\Contracts\UrlGeneratorServiceInterface;
use BornMt\AzureBlobUrlGenerator\Support\Configuration;
use Spatie\MediaLibrary\Support\UrlGenerator\DefaultUrlGenerator;

class UrlGeneratorService extends DefaultUrlGenerator implements UrlGeneratorServiceInterface
{
    public function __construct(protected Configuration $configuration) {}

    public function getUrl(): string
    {
        return $this->getSasUrl();
    }

    public function getTemporaryUrl(\DateTimeInterface $expiration, array $options = []): string
    {
        return $this->getSasUrl();
    }

    protected function getSasUrl(): string
    {
        return "{$this->configuration->endpoint}/{$this->configuration->container}/{$this->getPathRelativeToRoot()}?{$this->configuration->sasToken}";
    }
}
