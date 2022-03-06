<?php

/**
 * Number Format Currency.
 *
 * @param float|null $value
 * @param int $decimals
 * @param string|null $currency
 * @param string|null $notation
 *
 * @return string|null
 * @throws \Exception
 */
function number_format_currency(?float $value, int $decimals = 2, ?string $currency = null, ?string $notation = null)
{
    if (is_null($value)) {
        return null;
    }

    if (!is_null($notation)) {
        switch ($notation) {
            case 'English':
                return number_format($value, $decimals, '.', ',');
            case 'French':
                return number_format($value, $decimals, ',', ' ');
        }
    }

    $currencies = [
        'ARS' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'AUD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'BRL' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'CHF' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'CLP' => ['dec_point' => '.', 'thousands_sep' => ','],
        'CNY' => ['dec_point' => '.', 'thousands_sep' => ','],
        'COP' => ['dec_point' => '.', 'thousands_sep' => ','],
        'CZK' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'DKK' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'EUR' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'GBP' => ['dec_point' => '.', 'thousands_sep' => ','],
        'HKD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'HUF' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'ILS' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'INR' => ['dec_point' => '.', 'thousands_sep' => ','],
        'JPY' => ['dec_point' => '.', 'thousands_sep' => ','],
        'KRW' => ['dec_point' => '.', 'thousands_sep' => ','],
        'MAD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'MXN' => ['dec_point' => '.', 'thousands_sep' => ','],
        'MYR' => ['dec_point' => '.', 'thousands_sep' => ','],
        'NOK' => ['dec_point' => '.', 'thousands_sep' => ','],
        'NZD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'PHP' => ['dec_point' => '.', 'thousands_sep' => ','],
        'PLN' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'RUB' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'SAR' => ['dec_point' => '.', 'thousands_sep' => ','],
        'SEK' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'SGD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'THB' => ['dec_point' => '.', 'thousands_sep' => ','],
        'TRY' => ['dec_point' => '.', 'thousands_sep' => ','],
        'TWD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'USD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'VND' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'ZAR' => ['dec_point' => '.', 'thousands_sep' => ','],
    ];

    if (!array_key_exists($currency, $currencies)) {
        throw new \Exception('Currency Not Implemented');
    }

    return number_format($value, $decimals, $currencies[$currency]['dec_point'], $currencies[$currency]['thousands_sep']);
}
