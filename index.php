<?php

// Write a program in php to find the largest number among three numbers

$numbers = [1,2,3];


//write a program to check whether a string is palindrom string or not

$string = 'abba';

$iteratiions = strlen($string);
$newstr = '';
for($iteratiions; $iteratiions != -1; $iteratiions--){
    $newstr .= $string[$iteratiions];
}
// if($newstr === $string)
// {
//     echo "Palindrom String";
// }else{
//     echo 'Not a Palindrom';
// }


// Write a program in PHP to check if a given number is a prime number or not.

$number = 3;
$isprime = false;
for($i = 2;$i < $number; $i++){
   if($number % $i == 0 && $i !== 2){
        $isprime = true;
   }
}
if($prime)
{
    echo 'It\'s a prime number';
}else{
    echo 'Not a prime number';
}

// Write a PHP program to find the factorial of a given number.

// Write a program in PHP to reverse a given string without using any built-in functions.

// Write a PHP program to find the second largest number in an array of integers.

// Write a program in PHP to calculate the sum of digits of a given number.

// Write a PHP program to check if a given year is a leap year or not.

// Write a program in PHP to print the Fibonacci series up to a given number.

// Write a PHP program to find the GCD (Greatest Common Divisor) of two given numbers.