# Laravel General Value Translations

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sedlatschek/laravel-general-value-translations.svg?style=flat-square)](https://packagist.org/packages/sedlatschek/laravel-general-value-translations)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sedlatschek/laravel-general-value-translations/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sedlatschek/laravel-general-value-translations/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sedlatschek/laravel-general-value-translations/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sedlatschek/laravel-general-value-translations/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sedlatschek/laravel-general-value-translations.svg?style=flat-square)](https://packagist.org/packages/sedlatschek/laravel-general-value-translations)

Add general value translations to your Laravel project.

## Installation

You can install the package via composer:

```bash
composer require sedlatschek/laravel-general-value-translations
```

## Usage

Add the key `general-values` to the validation language file:

```php
// lang/it/validation.php
return [
    'general-values' => [
        'today' => 'oggi'
    ]
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Simon Sedlatschek](https://github.com/sedlatschek)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
