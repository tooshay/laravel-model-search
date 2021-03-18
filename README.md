# Handy macro for searching text through related models.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tooshay/laravel-model-search.svg?style=flat-square)](https://packagist.org/packages/tooshay/laravel-model-search)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/tooshay/laravel-model-search/run-tests?label=tests)](https://github.com/tooshay/laravel-model-search/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/tooshay/laravel-model-search/Check%20&%20fix%20styling?label=code%20style)](https://github.com/tooshay/laravel-model-search/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/tooshay/laravel-model-search.svg?style=flat-square)](https://packagist.org/packages/tooshay/laravel-model-search)


This is a riff on [Freek Spatie's model search macro](https://freek.dev/1182-searching-models-using-a-where-like-query-in-laravel) that adds support for multiple search terms.

## Installation

You can install the package via composer:

```bash
composer require tooshay/laravel-model-search
```

## Usage

```php
$results = Product::whereLike(['name', 'type.name', 'tags.name'], 'SearchTerm')->get();
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

- [Roy Shay](https://github.com/tooshay)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
