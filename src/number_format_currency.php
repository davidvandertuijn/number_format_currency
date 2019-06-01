<?php

/**
 * Number Format Currency.
 *
 * @param float $fNumber
 * @param int $iDecimals
 * @param mixed $sCurrency
 *
 * @return string
 */
function number_format_currency(?float $fNumber, int $iDecimals = 2, ?string $sCurrency): string
{
    if (!is_float($fNumber)) {
        $fNumber = 0;
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
