# Number Format Currency

<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_currency/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_currency/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_currency"><img src="https://poser.pugx.org/davidvandertuijn/number_format_currency/license.svg" alt="License"></a>

![Number Format Currency](https://cdn.davidvandertuijn.nl/github/number_format_currency.png)

## Install

```
composer require davidvandertuijn/number_format_currency
```

## Usage

```php
number_format_currency('1234.56', 2, 'EUR'); // 1.234,56
number_format_currency('1234.56', 2, 'USD'); // 1,234.56
```

Support for the currencies below:

| Country            | Currency           | Abbreviation/Code |
|--------------------|--------------------|-------------------|
| Argentina          | Argentine Peso     | ARS               |
| Australia          | Australian Dollar  | AUD               |
| Brazil             | Brazilian Real     | BRL               |
| Chile              | Chilean Peso       | CLP               |
| China              | Yuan Renminbi      | CNY               |
| Columbia           | Colombian Peso     | COP               |
| Czech Republic     | Czech Koruna       | CZK               |
| Denmark            | Danish Krone       | DKK               |
| European Union     | Euro               | EUR               |
| Hong Kong          | Hong Kong Dollar   | HKD               |
| Hungary            | Hungarian Forint   | HUF               |
| India              | Indian Rupee       | INR               |
| Israel             | New Israeli Shekel | ILS               |
| Japan              | Yen                | JPY               |
| Korea, Republic of | Won                | KRW               |
| Malaysia           | Malaysian Ringgit  | MYR               |
| Mexico             | Mexican Peso       | MXN               |
| Morocco            | Moroccan Dirham    | MAD               |
| New Zealand        | New Zealand Dollar | NZD               |
| Norway             | Norwegian Krone    | NOK               |
| Philippines        | Philippine Peso    | PHP               |
| Poland             | Zloty              | PLN               |
| Russian Federation | Russian Ruble      | RUB               |
| Saudi Arabia       | Saudi Riyal        | SAR               |
| Singapore          | Singapore Dollar   | SGD               |
| South Africa       | Rand               | ZAR               |
| Sweden             | Swedish Krona      | SEK               |
| Switzerland        | Swiss Franc        | CHF               |
| Taiwan             | New Taiwan Dollar  | TWD               |
| Thailand           | Baht               | THB               |
| Turkey             | Turkish Lira       | TRY               |
| UK/Great Britain   | Pound Sterling     | GBP               |
| United States      | US Dollar          | USD               |
| Vietnam            | Dong               | VND               |

### English or French Notation

```php
number_format_currency('1234.56', 2, 'CAD', 'English'); // 1,234.56
number_format_currency('1234.56', 2, 'CAD', 'French'); // 1 234,56
```
