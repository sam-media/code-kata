<?php
namespace CodeKata;

class ArabicToRoman
{
    private $conversion = array(
        40 => 'XL',
        50 => 'L',
        60 => 'LX',
        70 => 'LXX',
        80 => 'LXXX',
        90 => 'XC',
        100 => 'C',
        200 => 'CC',
        300 => 'CCC',
        400 => 'CD',
        500 => 'D',
        600 => 'DC',
        700 => 'DCC',
        800 => 'DCCC',
        900 => 'CM',
        1000 => 'M',
        2000 => 'MM',
        3000 => 'MMM',
    );

    function convert($number)
    {
        if($number <=3) {
            return str_repeat('I', $number);
        } elseif($number == 4) {
            return 'IV';
        } elseif($number >= 5 && $number <= 8) {
            $mod = $number % 5;
            return 'V' . str_repeat('I', $mod);
        } elseif($number == 9) {
            return 'IX';
        } elseif($number >= 10 && $number <= 39) {
            $div = $number/10;
            $mod = $number % 10;
            return str_repeat('X', $div) . $this->convert($mod);
        } else {
            $mod = $number % pow(10, strlen($number-10)-1);
            $conv = $this->conversion[$number - $mod];
            return $conv . $this->convert($mod);
        }
    }
}
