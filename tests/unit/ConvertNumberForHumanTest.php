<?php

namespace Wiraizkandar\ReadableNumber;

use PHPUnit\Framework\TestCase;
use Wiraizkandar\ReadableNumber\HumanNumber;

class ConvertNumberForHumanTest extends TestCase
{
    public function test_convert_to_thousand()
    {
        $number = 1000;
        $this->assertTrue(HumanNumber::numberForHumans($number) === '1K');
    }

    public function test_convert_to_thousand_with_decimal()
    {
        $number = 1450;
        $this->assertTrue(HumanNumber::numberForHumans($number,2) === '1.45K');
    }

    public function test_convert_to_million()
    {
        $number = 1000000;
        $this->assertTrue(HumanNumber::numberForHumans($number) === '1M');
    }

    public function test_convert_to_million_with_decimal(){
        $number = 1500000;
        $this->assertTrue(HumanNumber::numberForHumans($number) === '1.5M');
    }

    public function test_convert_to_billion()
    {
        $number = 1000000000;
        $this->assertTrue(HumanNumber::numberForHumans($number) === '1B');
    }
}