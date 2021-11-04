<?php

//Exercises from that chapter:

//1. Code for a sum function
function sum($arr)
{
    //base case
    if($arr == [])
    {
        return 0;
    }
    else //recursive case
    {   $firstVal = array_shift($arr);
        return $firstVal + sum($arr);
    }
}
var_dump(sum([1]));

//2. Recursive function to count the number of items in a list
/*function countList($list)
{
    if()
}*/

//3. Find maximum number in a list

//4. base case and recursive case for binary search