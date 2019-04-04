# Redirect all routes to another domain

[![Latest Version on Packagist](https://img.shields.io/packagist/v/devfaysal/laravel-domain-redirect.svg?style=flat-square)](https://packagist.org/packages/devfaysal/laravel-domain-redirect)
[![Build Status](https://img.shields.io/travis/devfaysal/laravel-domain-redirect/master.svg?style=flat-square)](https://travis-ci.org/devfaysal/laravel-domain-redirect)
[![Quality Score](https://img.shields.io/scrutinizer/g/devfaysal/laravel-domain-redirect.svg?style=flat-square)](https://scrutinizer-ci.com/g/devfaysal/laravel-domain-redirect)
[![Code Style](https://github.styleci.io/repos/179426466/shield?branch=master)](https://github.styleci.io/repos/179426466)
[![Total Downloads](https://img.shields.io/packagist/dt/devfaysal/laravel-domain-redirect.svg?style=flat-square)](https://packagist.org/packages/devfaysal/laravel-domain-redirect)

Redirect laravel routes to another domain using middleware.
Example: http://example.com/some-route will redirect to http://anothersite.com/some-route

## Installation

You can install the package via composer:

```bash
composer require devfaysal/laravel-domain-redirect
```

## Usage
Publish Config file to set domain
``` php
php artisan vendor:publish --tag=domainRedirect
```
add ```domainRedirect``` middleware to the routes that you want to redirect to the domain you just set in the config file

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hello@faysal.me instead of using the issue tracker.

## Credits

- [Faysal Ahamed](https://github.com/devfaysal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
