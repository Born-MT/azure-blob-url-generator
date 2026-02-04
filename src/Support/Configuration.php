<?php

namespace BornMT\AzureBlobUrlGenerator\Support;

class Configuration
{
    public function __construct(
        public string $endpoint,
        public string $container,
        public string $sasToken,
    ) {}
}
