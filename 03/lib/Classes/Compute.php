<?php

namespace Lib;

class Compute
{


    public function calculate(Array $data):float|string
    {
        if (empty($data)) {
            return 0.0;
        }

        $action = ($data['action'] ?? 'plus');
        $x      = (int) ($data['a'] ?? 0);
        $y      = (int) ($data['b'] ?? 0);


        return $this->{$action}($x, $y);
    }//end calculate()


    public function plus($a, $b):float
    {
        return ($a + $b);
    }//end plus()


    private function minus($a, $b):float
    {
        return ($a - $b);
    }//end minus()


    private function multiply($a, $b):float
    {
        return ($a * $b);
    }//end multiply()


    private function divide($a, $b):string|float
    {
        return ( $b == 0 ) ? 'Invalid input B' : ($a / $b);
    }//end divide()


    private function equal($a, $b):string
    {
        return ($a == $b) ? 'A = B' : 'A != B';
    }//end equal()
}//end class
