<?php

/**
 * Number Format Currency.
 *
 * @param float|null $num
 * @param int $decimals
 * @param string|null $currency
 * @param string|null $notation
 *
 * @return string|null
 * @throws \Exception
 */
function number_format_currency(?float $num, int $decimals = 0, ?string $currency = null, ?string $notation = null)
{
    if (is_null($num)) {
        return null;
    }

    if (!is_null($notation)) {
        switch ($notation) {
            case 'English':
                return number_format($num, $decimals, '.', ',');
            case 'French':
                return number_format($num, $decimals, ',', ' ');
        }
    }

    if (is_null($currency)) {
        return null;
    }

    $currencies = [
        'ARS' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'AUD' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'BRL' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'CHF' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'CLP' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'CNY' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'COP' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'CZK' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'DKK' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'EUR' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'GBP' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'HKD' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'HUF' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'ILS' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'INR' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'JPY' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'KRW' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'MAD' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'MXN' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'MYR' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'NOK' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'NZD' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'PHP' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'PLN' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'RUB' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'SAR' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'SEK' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'SGD' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'THB' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'TRY' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'TWD' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'USD' => ['decimal_separator' => '.', 'thousands_separator' => ','],
        'VND' => ['decimal_separator' => ',', 'thousands_separator' => '.'],
        'ZAR' => ['decimal_separator' => '.', 'thousands_separator' => ','],
    ];

    if (!array_key_exists($currency, $currencies)) {
        throw new \Exception('Not Implemented');
    }

    return number_format($num, $decimals, $currencies[$currency]['decimal_separator'], $currencies[$currency]['thousands_separator']);
}
