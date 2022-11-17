<?php

namespace Wiraizkandar\ReadableNumber;

class ReadableNumber
{
	/**
	 * @param int $number
	 * @return string
	 */
	public static function numberForHumans(int $number, int $maxDecimal = 1): string
	{
		if ($number > 1000 && $number < 1000000) {
			return sprintf('%d%s', round($number / 1000, $maxDecimal), 'K');
		}

		if ($number >= 1000000 && $number < 1000000000) {
			return sprintf('%d%s', round($number / 1000000, $maxDecimal), 'M');
		}

		if ($number >= 1000000000 && $number < 1000000000000) {
			return sprintf('%d%s', round($number / 1000000000, $maxDecimal), 'B');
		}

		return $number;
	}
}