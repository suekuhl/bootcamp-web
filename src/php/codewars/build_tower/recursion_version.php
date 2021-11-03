<?php


function around($x) {
    $max = $x;
    $string = builder($x, $max);
    $rows = explode('-', $string);
    $tree = array_reverse($rows);
    return $tree;

}

function builder($x, $max) {

    if ($x === 1) {
        //$tree[] = '*';
        //return "*";
        $stars .= str_repeat(' ', ($max - $x)) . '*' . str_repeat(' ', ($max - $x));;
        return $stars;

    } else {

        $stars = str_repeat(' ', ($max - $x)) . str_repeat('*',(2 * $x) - 1) . str_repeat(' ', ($max - $x));
        $stars .= '-'.builder($x - 1, $max);

        return $stars;
    }
}
var_dump(around(4));


/**
 *
 * 1. stop when $x == $max
 * 2. Start from 1 till $x
 * 3.
 */
/*
function builder($x)
{
    return recurtion(1, 0, $x);
}

function recurtion($startX, $index, $max) {
    if ($index === $max) {
        return;
    }

    $tree = "";
    if ($index === 0) {
        $countStars = $startX;
    }else {
        $countStars = $startX + 2;
    }

    $stars = str_repeat('*',$countStars);
    $empty = str_repeat(' ', ($max - $startX));
    $tree .= $empty . $stars . $empty . "<br>";
    $tree .= recurtion($countStars, $index + 1, $max);

    return $tree;
}

*/

/*
function builder($x, $max) {

    if ($x === 1) {
        $star = '*';
        $empty = str_repeat(' ', ($max - $x));
        return $empty . $star . $empty;
    } else {
        $tree = [];
        $stars = str_repeat('*',(2 * $x) - 1);
        $empty = str_repeat(' ', ($max - $x));
        $row[] = $empty.$stars.$empty;

        array_unshift($tree, $row);

        array_unshift($tree, (builder(($x - 1), $max)));
    }
    return $tree;
}
*/
/*
function builder($x) {

    if ($x === 1) {
        //$tree[] = '*';
        return "*";
    } else {

        $stars = str_repeat('*',(2 * $x) - 1);
        $tree[] = $stars;

        $tree[] = builder($x - 1);

    }
    return $tree;
}
*/
//var_dump(builder(1, 3));

//foreach (builder(3) as $x) {
//    echo $x . "<br>";
//}
/*
for ($i = 1; $i < $x + 2; $i = $i + 2 )
{
    $stars = str_repeat('*', $x-($x-$i));
}
*/