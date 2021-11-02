<?php

/*
 * Recursion
 * - is a coding technique where a function calls itself
 * - the function has to be told when to stop itself
 * - problems are broken down in a base case and a recursive case
 * -> recursive case is the part where the function calls itself
 * -> base case is where the function stops calling itself (otherwise -> infinite loop)
 * - when a function gets called through another function, the other (calling) function is
 * paused in a partially completed state
 * - brings no performance benefit but makes solution clearer
 * - can take up lots of memory, instead you can use a loop or tail recursion
 * - a call stack is used to save all the variables for the multiple functions
 * - a stack is a data structure which can only be accessed from the top, you can
 * push (insert) and pop (remove) items from/at the top
 * - a variable x from the recursive function has a different copy of it in each call,
 * which cannot be accessed from a different one of those functions, one copy per call
 * - when a recursive function goes into an infinite loop you will get a stack overflow
 *
 */

function faculty(int $x) : int
{
    if ($x == 1) {
        return 1;
    } else {
        return $x * faculty($x-1);
    }
}

var_dump(faculty(3));