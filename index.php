<?php
// 1-A program that calculates the average of the numbers in an array of n elements. The array is filled with random numbers. 
// $arr = [1, 2, 3, 4, 5, 6];
// $sum = 0;
// for ($i = 0; $i < count($arr); $i++) {
//     $sum += $arr[$i];
// }
// echo ($sum / count($arr));
// Anthor Solution
// function avg(...$arr)
// {
//     $sum = array_sum($arr);
//     $count = count($arr);
//     return $sum / $count;
// }
// echo avg(1, 2, 3, 4, 5, 6);

// 2.	A program in which an array contains 10 numbers and another array 2D of size 2x5. What is required is that the second array is dictated by the first array.
// $arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $arr2 = [][];


// 3.	A program in which an array of a group of numbers and print the largest and smallest number
// function maxAndMin(...$arr)
// {
//     echo "Largest number is: " . max($arr);
//     echo "<br>";
//     echo "Smallest number is: " . min($arr);
// }
// maxAndMin(1, 10, 5, 2, 11);

// 4.	The program, in which an array contains 10 numbers, and you store a number and calculates how many numbers are greater  than or equal and how many numbers are smaller  than this number inside
// function GreaterAndSmaller($numberComper, ...$arr)
// {
//     $greatNum = 0;
//     $smallNum = 0;
//     foreach ($arr as  $item) ($item >= $numberComper) ? $greatNum++ : $smallNum++;
//     echo "Numbers Smaller than ($numberComper) =  $smallNum <br>";
//     echo "Numbers Greater than ($numberComper) =  $greatNum <br>";
// }
// GreaterAndSmaller(3, 1, 10, 5, 2, 11);

// 5.	Create a function that takes an array of names and returns an array where only the first letter of each name is capitalized.
// function FirstLetterUpperCase(...$arr)
// {
//     // $UpperLetter = [];
//     foreach ($arr as  $value) {
//         $UpperLetter[] = ucfirst($value);
//     }
//     echo "<pre>";
//     print_r($UpperLetter);
//     echo "</pre>";
// }

// Anthor Solution But What is Wrong in This Code
// function FirstLetterUpperCase(...$arr)
// {
//     $UpperLetter = [];
//     array_map(fn ($value) => array_push($UpperLetter, ucfirst($value)), $arr);
//     echo "<pre>";
//     print_r($UpperLetter);
//     echo "</pre>";
// }
// FirstLetterUpperCase("eraasoft", "backend", "group313");


// 6.	Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements. Note that you must do this in-place without making a copy of the array.
// function ZerosToEnd(...$arr)
// {
//     $zeroCount = 0;
//     $newArr = [];

//     foreach ($arr as $value) {
//         if ($value === 0) {
//             $zeroCount++;
//         } else {
//             $newArr[] = $value;
//         }
//     }

//     // Add zeros to the end of the array
//     for ($i = 0; $i < $zeroCount; $i++) {
//         $newArr[] = 0;
//     }
//     echo "<pre>";
//     print_r($newArr);
//     echo "</pre>";
// }

// ZerosToEnd(0, 1, 0, 3, 12);

// 7.	Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1.
// function searchInArray(...$arr)
// {
//     echo (array_search("Bob", $arr)) ? "1" : "-1";
// }

// echo searchInArray("Alice", "Charlie", "Dave");

// 8.	Create a function that takes a array of numbers and returns the second largest number.
// function secondNumber(...$arr)
// {
//     rsort($arr);
//     echo $arr[1];
// }
// secondNumber(11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// 9.	A program containing an array of different numbers and store a number $x If the number is not in the array prints not found and if it exists prints found and prints this number characteristics like

// function checkNumber($number, ...$arr)
// {
//     $key = ["Found", "Pos OR Neg", "Digits", "Prime", "Even OR Odd"];

//     function posORNeg($number)
//     {
//         return ($number > 0) ? "Positive Number" : "Negative Number";
//     }

//     function Digits($number)
//     {
//         return strlen((string) $number);
//     }

//     function primeCheck($number)
//     {
//         if ($number <= 1) {
//             return "Not Prime";
//         }

//         for ($i = 2; $i <= sqrt($number); $i++) {
//             if ($number % $i === 0) {
//                 return "Not Prime";
//             }
//         }

//         return "Prime";
//     }

//     function EvenOROdd($number)
//     {
//         return ($number % 2 == 0) ? "Even Number" : "Odd Number";
//     }

//     if (in_array($number, $arr)) {
//         $infoNumber = ["Yes", posORNeg($number), Digits($number), primeCheck($number), EvenOROdd($number)];
//         $newArr = array_combine($key, $infoNumber);
//         echo "<pre>";
//         print_r($newArr);
//         echo "</pre>";
//     } else {
//         echo "Not Found";
//     }
// }
// checkNumber("505", 100, 505, 222);