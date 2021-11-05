<?php
// Divide and Conquer -> divide problems in smaller problems with a base case as the simplest case
// and recursive case that makes the left over probem smaller and smaller until it reaches the base case (Euklid)
// with arrays the base case is often an empty array or with just 1 element

//Quicksort
// involves a pivot = picked element to compare other elements with to partition the array into sub-arrays, which
// eventually leads to the array being sorted
// the speed depends on the pivot
// merge sort algorithm (O(n log n)) is in worst case faster than quick sort (O(n²)) but in average quicksort is faster
// (O (n log n))
// sometimes a constant c multiplied with n makes a difference in speed of 2 different algorithms, but its usually ignored
// quick sort has a smaller constant than merge sort -> it is faster in average cases (depending on where the pivot is
// located in the array -> faster when it is in the middle -> choose random element in average case

function quickSort($arrQuick)
{
    $smallerArr = [];
    $biggerArr = [];
    if (count($arrQuick) < 2) {
        return $arrQuick;
    }
    $pivot = $arrQuick[0];

    foreach ($arrQuick as $key => $num) {
        if ($key === 0) {
            continue;
        }

        if ($num <= $pivot) {
            $smallerArr[] = $num;
            continue;
        }
        $biggerArr[] = $num;
    }


    $arrPiv[] = $pivot;

    if (count($smallerArr) === 0 && count($biggerArr) > 0) {

        array_unshift($biggerArr, $pivot);
        echo "<pre>";
        //var_dump($biggerArr);
        echo "</pre>";
        return $biggerArr;

    } elseif (count($smallerArr) > 0 && count($biggerArr) === 0) {
        $smallerArr[] = $pivot;
        echo "<pre>";
        //var_dump($smallerArr);
        echo "</pre>";
        return $smallerArr;
    }

    $mergedArr = array_merge(quickSort($smallerArr), $arrPiv, quickSort($biggerArr));
    //var_dump($mergedArr);
    return $mergedArr;


}

var_dump(quickSort([3, 1]));

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
function binarySearch($array, $x)
{

    //base case
    if (count($array) === 1) {
        if ($array[0] === $x) {
            return 0;
        }
        return 'not in here';
    }

    //recursive case
// funktioniert nur mit true oder false, sonst zu kompliziert

    $low = 0;
    $high = count($array) - 1;
    $mid = floor(($low + $high) / 2);
    print($mid . "<br>");
    if ($array[$mid] === $x) {
        return $array[$mid];
    } elseif ($array[$mid] < $x) {
        $arrayHalf = array_slice($array, $mid + 1, $mid + 1);
        echo "arraz < x: ";
        var_dump($arrayHalf);
        echo "<br>";
        return binarySearch($arrayHalf, $x);
    }

    $arrayHalf = array_slice($array, 0, $mid + 1);
    echo "arraz < x";
    var_dump($arrayHalf);
    echo "<br>";
    return binarySearch($arrayHalf, $x);

}

//var_dump(binarySearch([1, 2, 3], 1));