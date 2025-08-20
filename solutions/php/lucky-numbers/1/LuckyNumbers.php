<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        return implode($digitsOfNumber1) + implode($digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        return $number == strrev($number);
    }

    public function validate(string $input): string
    {
        var_dump($input);
         if ($input === '' || $input === null) {
        return 'Required field';
    }

    if ($input === '' || $input === null) {
            return 'Required field';
        }

        if ((int)$input <= 0) {
            return 'Must be a whole number larger than 0';
        }

        return '';
            
    }
}    
