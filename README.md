# Slim Pulse API

[![PHP Version](https://img.shields.io/badge/php-8.2+-blue.svg)](https://www.php.net/)
[![Slim Framework](https://img.shields.io/badge/Slim-4.13-purple.svg)](https://www.slimframework.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

A clean, PSR-compliant microframework API architecture showcasing dependency injection, immutable PSR-7 requests, structured JSON responders, and custom middleware pipelines.

## Standards Implemented
- **PSR-7**: HTTP Message interfaces
- **PSR-11**: Dependency Injection Container (`php-di`)
- **PSR-15**: HTTP Handlers and Middleware
- **PSR-3**: Monolog Logger implementation

## Running the API
```bash
composer install
php -S localhost:8080 -t public
```
