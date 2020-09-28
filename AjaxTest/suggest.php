<?php
// People Array @TODO - Get from DB
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get Query String
// print_r($people) ;
$q = $_REQUEST['q'];
// $q ="M";
// print_r(stristr($q,substr("Mikemerry",0,3)));
$suggestion = "";

// get suggestion
if($q !== ''){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $p){
        if(stristr($q,substr($p,0,$len))){
            if($suggestion === ''){
                $suggestion = $p;
            }else{
                $suggestion .= ", $p";
            }
        }
    }
}
echo $suggestion === "" ? "No Suggestion ": $suggestion;
