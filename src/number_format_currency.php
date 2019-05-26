<?php

/**
 * Number Format Currency.
 *
 * @param mixed $sValue
 * @param int $iDecimals
 * @param mixed $sCurrency
 *
 * @return string
 */
function number_format_currency(?string $sValue, int $iDecimals = 2, ?string $sCurrency): string
{
    $fValue = number_format_to_decimal($sValue);

    switch ($sCurrency) {
        case 'EUR':
            return $fValue ? number_format($fValue, $iDecimals, ',', '.') : number_format(0, $iDecimals, ',', '.');
        case 'USD':
            return $fValue ? number_format($fValue, $iDecimals, '.', ',') : number_format(0, $iDecimals, '.', ',');
        case 'GBP':
            return $fValue ? number_format($fValue, $iDecimals, ',', '.') : number_format(0, $iDecimals, ',', '.');
        default:
            return $fValue ? number_format($fValue, $iDecimals, ',', '.') : number_format(0, $iDecimals, ',', '.');
    }
}
