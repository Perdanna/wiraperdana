<?php

$fizz_buzz = '';

    foreach (range(1, 100) as $number) {
        if ($number % 3 == 0 && $number % 5 == 0) {
            $fizz_buzz .= "FizzBuzz ";
        } elseif ($number % 3 == 0) {
            $fizz_buzz .= "Fizz ";
        } elseif ($number % 5 == 0) {
            $fizz_buzz .= "Buzz ";
        } else {
            $fizz_buzz .= $number . " ";
        }
    }

echo $fizz_buzz;

?>
