<?php
use App\Service\PrimeNumberService;

class PrimeNumberServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testNumberIsValidPrimeNumber()
    {
        $number = new PrimeNumberService();
        $this->assertTrue($number->isPrimeNumber(2));
    }

    public function testNumberIsInvalidAndNotPrimeNumber()
    {
        $number = new PrimeNumberService();
        $this->assertFalse($number->isPrimeNumber(1));
        $this->assertFalse($number->isPrimeNumber(- 1));
    }

    public function testNumberIsValidAndNotPrimeNumber()
    {
        $number = new PrimeNumberService();
        $this->assertFalse($number->isPrimeNumber(4));
    }

    public function testCheckPrimeNumberIsInArray()
    {
        $number = new PrimeNumberService();
        print_r($number->getPrimeNumbersArray());
        $this->assertContains(2, $number->getPrimeNumbersArray());
    }

    public function testCheckNotPrimeNumberIsInArray()
    {
        $number = new PrimeNumberService();
        $this->assertNotContains(- 1, $number->getPrimeNumbersArray());
        $this->assertNotContains(4, $number->getPrimeNumbersArray());
    }
}

