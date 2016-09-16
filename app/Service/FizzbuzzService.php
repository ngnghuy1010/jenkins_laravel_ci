<?php
namespace App\Service;

class FizzbuzzService
{

    function handle($interate)
    {
        $isFizz = ($interate % 3 === 0);
        $isBuzz = ($interate % 5 === 0);
        
        if ($isFizz && $isBuzz) {
            return 'Fizz Buzz';
        } elseif ($isBuzz) {
            return 'Buzz';
        } elseif ($isFizz) {
            return 'Fizz';
        } else {
            return '1';
        }
    }
}