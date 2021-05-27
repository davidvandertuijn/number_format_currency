<?php

/**
 * Number Format Currency.
 *
 * @param float|null $fNumber
 * @param int $iDecimals
 * @param string|null $sCurrency
 *
 * @return string|null
 * @throws \Exception
 */
function number_format_currency(?float $fNumber, int $iDecimals = 2, ?string $sCurrency)
{
    if (is_null($sValue)) {
        return null;
    }

    $aCurrencies = [
        'EUR' => ['dec_point' => ',', 'thousands_sep' => '.'],
        'USD' => ['dec_point' => '.', 'thousands_sep' => ','],
        'GBP' => ['dec_point' => ',', 'thousands_sep' => '.']
    ];

    if (!array_key_exists($sCurrency, $aCurrencies)) {
        throw new \Exception('Not Implemented');
    }

    return number_format($fNumber, $iDecimals, $aCurrencies[$sCurrency]['dec_point'], $aCurrencies[$sCurrency]['thousands_sep']);
}
