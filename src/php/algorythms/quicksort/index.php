<?php

//Exercises from that chapter:

//1. Code for a sum function
function sum($arr)
{
    //base case
    if ($arr == []) {
        return 0;
    }

    //recursive case
    $firstVal = array_shift($arr);
    return $firstVal + sum($arr);

}

//var_dump(sum([2, 4, 6]));

//2. Recursive function to count the number of items in a list
function countList($list)
{
    //base case
    if ($list == []) {
        return 0;
    }

    //recursive case
    array_shift($list);
    return 1 + countList($list);
}

//var_dump(countList([2, 4, 6, 5]));

//3. Find maximum number in a list
function maxNum($numbers)
{
    //base case
    if (count($numbers) === 2) {
        if ($numbers[0] > $numbers[1]) {
            return $numbers[0];
        }
        return $numbers[1];
    }

    //recursive case
    array_shift($numbers);
    $shorterNumsMax = maxNum($numbers);

    if ($numbers[0] > $shorterNumsMax) {
        return $numbers[0];
    }
    return $shorterNumsMax;
}

//var_dump(maxNum([2, 4, 1, 3]));

//4. base case and recursive case for binary search
function binarySearch($array, $x) {

    //base case
    if (count($array) === 1) {
        if ($array[0] === $x) {
            return 0;
        }
        return 'not in here';
    }

    //recursive case
// funktioniert nur mit true oder false, sonst zu kompliziert
    /*
    $low = 0;
    $high = count($array) - 1;
    $mid = floor(($low + $high)/2);
    print($mid . "<br>");
    if ($array[$mid] === $x) {
        return $array[$mid];
    } elseif ($array[$mid] < $x) {
        $arrayHalf = array_slice($array, $mid+1, $mid+1);
        echo "arraz < x: ";
       var_dump($arrayHalf);
       echo "<br>";
        return binarySearch($arrayHalf, $x);
    }

    $arrayHalf = array_slice($array, 0, $mid+1);
    echo "arraz < x";
    var_dump($arrayHalf);
    echo "<br>";
    return binarySearch($arrayHalf, $x);

}

var_dump(binarySearch([1, 2, 3], 1));
    */