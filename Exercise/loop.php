<?php
/*
 * This is an array with some data we want to modify
 * when running through the for loop.
 */
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863),
    array('name' => 'Pierre', 'salt' => 215263)
);

for($i = 0; $i < count($people); ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
    // echo $people[$i]['salt'].PHP_EOL;
}

    /* foreach example : key and value */

    $a = array(
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "seventeen" => 17
    );

    foreach ($a as $k => $v) {
        // echo "\$a[$k] => $v.\n";
    }
    /* Unpacking nested arrays with list() */
    $array = [
        [1, 2,5],
        [3, 4,6],
    ];
    
    foreach ($array as list($a, $b,$c)) {
        // $a contains the first element of the nested array,
        // and $b contains the second element.

        // echo "A: $a; B: $b C: $c\n";
    }
    
// Dimentional array handling
    $movies =array(
        "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
        "action" => array("Die Hard", "Expendables"),
        "epic" => array("The Lord of the rings"),
        "romance" => array("Romeo and Juliet","No Strings Attached","3665 days")
        );

    // fetching movies name for category
        foreach($movies as $k => $mov){
            foreach ($mov as $v=>$m){
                if($k == 'romance'){
                    // echo $v ."-". $m.PHP_EOL;
                    
                }
            }
            // echo is_array($mov).PHP_EOL;
        }
        // echo count($movies).PHP_EOL;

        // Sorting Test
        $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Avatar");

        // sort($persons);
        // ksort($persons);
        // asort($persons);
        // print_r($persons);

        /*  Used to convert strings into an array variable  */
        $settings = explode(';', "host=localhost; db=sales; uid=root; pwd=demo"); 
        //print_r($settings);
        // echo is_array($settings);
?>