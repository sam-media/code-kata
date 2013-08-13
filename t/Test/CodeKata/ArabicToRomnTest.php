<?php

class ArabicToRomnTest extends PHPUnit_Framework_TestCase
{
    function setUp()
    {
        $this->convertor = new CodeKata\ArabicToRoman();
    }

    function testUpTo10()
    {
        $this->assertEquals(
            'I',
            $this->convertor->convert(1)
        );

        $this->assertEquals(
            'II',
            $this->convertor->convert(2)
        );

        $this->assertEquals(
            'III',
            $this->convertor->convert(3)
        );

        $this->assertEquals(
            'IV',
            $this->convertor->convert(4)
        );

        $this->assertEquals(
            'V',
            $this->convertor->convert(5)
        );

        $this->assertEquals(
            'VI',
            $this->convertor->convert(6)
        );

        $this->assertEquals(
            'VII',
            $this->convertor->convert(7)
        );
        $this->assertEquals(
            'VIII',
            $this->convertor->convert(8)
        );


        $this->assertEquals(
            'IX',
            $this->convertor->convert(9)
        );

        $this->assertEquals(
            'X',
            $this->convertor->convert(10)
        );

    }

    public function testUpTo20()
    {
        $this->assertEquals(
            'XI',
            $this->convertor->convert(11)
        );

        $this->assertEquals(
            'XII',
            $this->convertor->convert(12)
        );

        $this->assertEquals(
            'XIII',
            $this->convertor->convert(13)
        );

        $this->assertEquals(
            'XIV',
            $this->convertor->convert(14)
        );

        $this->assertEquals(
            'XV',
            $this->convertor->convert(15)
        );

        $this->assertEquals(
            'XVI',
            $this->convertor->convert(16)
        );

        $this->assertEquals(
            'XVII',
            $this->convertor->convert(17)
        );

        $this->assertEquals(
            'XVIII',
            $this->convertor->convert(18)
        );

        $this->assertEquals(
            'XIX',
            $this->convertor->convert(19)
        );

        $this->assertEquals(
            'XX',
            $this->convertor->convert(20)
        );

    }

    public function testUpTo39()
    {
        $this->assertEquals(
            'XXI',
            $this->convertor->convert(21)
        );

        $this->assertEquals(
            'XXVIII',
            $this->convertor->convert(28)
        );

        $this->assertEquals(
            'XXX',
            $this->convertor->convert(30)
        );

        $this->assertEquals(
            'XXXIX',
            $this->convertor->convert(39)
        );
    }

    public function testUpTo49()
    {
        $this->assertEquals(
            'XL',
            $this->convertor->convert(40)
        );
        $this->assertEquals(
            'XLI',
            $this->convertor->convert(41)
        );

        $this->assertEquals(
            'XLIX',
            $this->convertor->convert(49)
        );
    }

    public function testUpTo99()
    {
        $this->assertEquals(
            'L',
            $this->convertor->convert(50)
        );

        $this->assertEquals(
            'LIX',
            $this->convertor->convert(59)
        );

        $this->assertEquals(
            'LX',
            $this->convertor->convert(60)
        );
        $this->assertEquals(
            'LXIII',
            $this->convertor->convert(63)
        );

        $this->assertEquals(
            'LXX',
            $this->convertor->convert(70)
        );

        $this->assertEquals(
            'LXXIV',
            $this->convertor->convert(74)
        );

        $this->assertEquals(
            'LXXX',
            $this->convertor->convert(80)
        );

        $this->assertEquals(
            'XC',
            $this->convertor->convert(90)
        );

        $this->assertEquals(
            'XCIX',
            $this->convertor->convert(99)
        );
    }

    public function testUpperThan100()
    {
        $this->assertEquals(
            'CI',
            $this->convertor->convert(101)
        );

        $this->assertEquals(
            'CIX',
            $this->convertor->convert(109)
        );

        $this->assertEquals(
            'CXI',
            $this->convertor->convert(111)
        );

        $this->assertEquals(
            'CXCIX',
            $this->convertor->convert(199)
        );

        $this->assertEquals(
            'CCXI',
            $this->convertor->convert(211)
        );

        $this->assertEquals(
            'CDXCIX',
            $this->convertor->convert(499)
        );

        $this->assertEquals(
            'DXCIX',
            $this->convertor->convert(599)
        );

        $this->assertEquals(
            'DCXCIX',
            $this->convertor->convert(699)
        );

        $this->assertEquals(
            'DCCXCIX',
            $this->convertor->convert(799)
        );

        $this->assertEquals(
            'DCCCXCIX',
            $this->convertor->convert(899)
        );

        $this->assertEquals(
            'CMXCIX',
            $this->convertor->convert(999)
        );


        $this->assertEquals(
            'M',
            $this->convertor->convert(1000)
        );

        $this->assertEquals(
            'MMCMXCIX',
            $this->convertor->convert(2999)
        );
        $this->assertEquals(
            'MMMCMXCIX',
            $this->convertor->convert(3999)
        );


    }
}
