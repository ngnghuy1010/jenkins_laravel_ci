<?php
namespace App\Service;

class PrimeNumberService
{

    function getPrimeNumbersArray()
    {
        $primeNumbers = [];
        $count = 0;
        for ($i = 0; $i < 100; $i ++) {
            if ($this->isPrimeNumber($i)) {
                $primeNumbers[] = $i;
            }
        }
        return $primeNumbers;
    }

    function isPrimeNumber($number)
    {
        if (! is_int($number) || $number <= 1) {
            return false;
        }
        
        $n = 2;
        while ($n < $number) {
            if ($number % $n) {
                
                $n ++;
                continue;
            }
            
            return false;
        }
        
        return true;
    }
}