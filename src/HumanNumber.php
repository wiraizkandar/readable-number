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
        $totalSeparator = count(explode(",", (string)number_format($number))) - 1;
        switch ($totalSeparator) {
            case 1:
                $divider = 1000;
                $limiter = "K";
                break;
            case 2:
                $divider = 1000000;
                $limiter = "M";
                break;
            case 3:
                $divider = 1000000000;
                $limiter = "B";
                break;
            default:
                return (string)$number;
        }
        return sprintf('%s%s', round($number / $divider, $maxDecimal, PHP_ROUND_HALF_DOWN), $limiter);
    }
}