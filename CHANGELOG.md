# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2026-01-31

### Added

- Initial release
- Azure Blob Storage URL generation with SAS (Shared Access Signature) tokens for Spatie Laravel Media Library
- `UrlGeneratorService` implementing Spatie's media URL generator interface
- `getUrl()` method for generating media URLs with SAS token authentication
- `getTemporaryUrl()` method for temporary media URL generation
- Configuration support via `AZURE_STORAGE_ENDPOINT`, `AZURE_STORAGE_CONTAINER`, and `AZURE_STORAGE_SAS_TOKEN` environment variables
- Laravel service provider with auto-discovery support
- Support for PHP 8.2+
- Support for Laravel 10.x, 11.x, and 12.x
- Support for Spatie Media Library 10.x and 11.x
- Integration with `azure-oss/storage-blob-laravel` package
