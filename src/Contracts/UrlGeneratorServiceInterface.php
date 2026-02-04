<?php

namespace BornMT\AzureBlobUrlGenerator\Contracts;

interface UrlGeneratorServiceInterface
{
    public function getUrl(): string;
    public function getTemporaryUrl(\DateTimeInterface $expiration, array $options = []): string;
}
