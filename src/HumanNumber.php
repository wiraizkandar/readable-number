<?php

namespace Wiraizkandar\ReadableNumber;

class HumanNumber
{
	/**
	 * @param int $number
	 * @return string
	 */
    public static function numberForHumans(int $number, int $maxDecimal = 1): string
    {
        if ($number >= 1000 && $number < 1000000) {
            return sprintf('%s%s', round($number / 1000, $maxDecimal, PHP_ROUND_HALF_DOWN), 'K');
        }

        if ($number >= 1000000 && $number < 1000000000) {
            return sprintf('%s%s', round($number / 1000000, $maxDecimal, PHP_ROUND_HALF_DOWN), 'M');
        }

        if ($number >= 1000000000 && $number < 1000000000000) {
            return sprintf('%s%s', round($number / 1000000000, $maxDecimal, PHP_ROUND_HALF_DOWN), 'B');
        }

        return (string) $number;
    }
}