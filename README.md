# Number Format Currency

<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_currency/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_currency/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_currency/license.svg" alt="License"></a>

Currently ONLY supporting the following currencies: EUR, USD and GBP.

## Install

```
composer require davidvandertuijn/number_format_currency
```

## Usage

```php
number_format_currency('1000.99', 2, 'EUR'); // 1.000,99
number_format_currency('1000.99', 2, 'USD'); // 1,000.99
```

### Comments

This is a simple formatter, a more advanced formatter is <a href="https://php.net/money_format">money_format</a>.