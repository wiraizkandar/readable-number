<?php

namespace Wiraizkandar\ReadableNumber;

use PHPUnit\Framework\TestCase;

class ConvertNumberForHumanTest extends TestCase
{
    public function test_convert_to_thousand()
    {
        $number = 1000;
        $this->assertSame(HumanNumber::numberForHuman($number), '1K');
    }

    public function test_convert_to_thousand_with_decimal()
    {
        $number = 1450;
        $this->assertSame(HumanNumber::numberForHuman($number,2), '1.45K');
    }

    public function test_convert_to_million()
    {
        $number = 1000000;
        $this->assertSame(HumanNumber::numberForHuman($number), '1M');
    }

    public function test_convert_to_million_with_decimal(){
        $number = 1500000;
        $this->assertSame(HumanNumber::numberForHuman($number), '1.5M');
    }

    public function test_convert_to_billion()
    {
        $number = 1000000000;
        $this->assertSame(HumanNumber::numberForHuman($number), '1B');
    }

    public function test_convert_to_billion_with_decimal()
    {
        $number = 1500000000;
        $this->assertSame(HumanNumber::numberForHuman($number), '1.5B');
    }
}