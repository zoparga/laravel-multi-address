# Add many address to many model with a single trait. E.g.: many shipping address for a customer.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zoparga/laravel-multi-address.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-multi-address)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-multi-address/run-tests?label=tests)](https://github.com/zoparga/laravel-multi-address/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-multi-address/Check%20&%20fix%20styling?label=code%20style)](https://github.com/zoparga/laravel-multi-address/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zoparga/laravel-multi-address.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-multi-address)



## Installation

You can install the package via composer:

```bash
composer require zoparga/laravel-multi-address
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="zoparga\MultiAddress\MultiAddressServiceProvider" --tag="laravel-multi-address-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="zoparga\MultiAddress\MultiAddressServiceProvider" --tag="laravel-multi-address-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-multi-address = new zoparga\MultiAddress();
echo $laravel-multi-address->echoPhrase('Hello, zoparga!');
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

- [Papp Zoltán](https://github.com/zoparga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
