# laravel-ip-whitelist

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alessandrodorazio/laravel-ip-whitelist.svg?style=flat-square)](https://packagist.org/packages/alessandrodorazio/laravel-ip-whitelist)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/alessandrodorazio/laravel-ip-whitelist/run-tests?label=tests)](https://github.com/alessandrodorazio/laravel-ip-whitelist/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alessandrodorazio/laravel-ip-whitelist/Check%20&%20fix%20styling?label=code%20style)](https://github.com/alessandrodorazio/laravel-ip-whitelist/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alessandrodorazio/laravel-ip-whitelist.svg?style=flat-square)](https://packagist.org/packages/alessandrodorazio/laravel-ip-whitelist)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-ip-whitelist.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-ip-whitelist)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require alessandrodorazio/laravel-ip-whitelist
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Alessandrodorazio\LaravelIpWhitelist\LaravelIpWhitelistServiceProvider" --tag="laravel-ip-whitelist-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Alessandrodorazio\LaravelIpWhitelist\LaravelIpWhitelistServiceProvider" --tag="laravel-ip-whitelist-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-ip-whitelist = new Alessandrodorazio\LaravelIpWhitelist();
echo $laravel-ip-whitelist->echoPhrase('Hello, Alessandrodorazio!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alessandro D'Orazio](https://github.com/alessandrodorazio)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
