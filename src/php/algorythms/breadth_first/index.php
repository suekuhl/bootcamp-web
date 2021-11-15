<?php


// write the function with different coding language some time to work with a queue

$graph = [];
$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj", "peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thom", "johnny"];
$graph["anuj"] = [];
$graph["peggy"] = [];
$graph["thom"] = [];
$graph["johnny"] = [];


$line = [
    "you" => [
        "alice" => [
            "peggy" => null
        ],
        "bob" => [
            "anuj" => null,
            "peggy" => null

        ],
        "claire" => [
            "thom" => null,
            "johnny" => null
        ]
    ]

];

//$line["you"]["bob"]["anuj"];




foreach ($line["you"] as $name => $others) {
//    if($you ) {
//
//    }
    echo $name . "<br>";



    if($name === "bob") {
        print_r($others);
        break;
    }
}