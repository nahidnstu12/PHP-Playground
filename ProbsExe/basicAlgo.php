<?php
// Write a PHP program to check two given integers, 
// and return true if one of them is 30 or if their sum is 30

function exe3 ($a,$b){
    $c =0;
    if($a===30 || $b === 30 || $a+$b === 30){
        $c = 1;
    }

    return $c== 0 ?  "false" :  "true";

    // 2
    // return $a===30 || $b === 30 || $a+$b ==30;
    
}
    // echo exe3(3,27); //true
    // output [5,28] =>false

    //  6.Write a PHP program to remove the character in a given position of a given string. 
    // The given position will be in the range 0..string length -1 inclusive.

    function exe6($str,$pos){
        $last = strlen($str)-$pos;
        return substr($str,0,$pos).substr($str,$pos+1,$last);
    }
    // echo exe6("Password",3); //Pasword
    // output [absex,3] => abex

    // 7. Write a PHP program to exchange the first and 
    // last characters in a given string and 
    // return the new string.

    function exe7($str){
        $len = strlen($str); 
        return $len >1 ? substr($str,$len-1,1).substr($str,1,$len-2).substr($str,0,1):$str;
    }
    // echo exe7("password").PHP_EOL; //dassworp
    // echo exe7("pa"); //ap

    // 11.
    function exe11($str){
        $len = strlen($str);
        $part =substr($str,0,3);
        
        return $len > 3 ? $part.$str.$part : $str.$str.$str;
    }
    // echo exe11("python").PHP_EOL; //pytpythonpyt
    // echo exe11("js");   //jsjsjs

    // 21
    function exe21($a,$b){
        if($a <= 30 && $a >= 20 && $b <= 30 && $b >= 20 ){
            return max($a,$b);
        }else{
            return 0;
        }
        
    }
    // echo exe21(21,25); //25
    // echo exe21(20,30);  //30
    // echo exe21(11,5);   //0

    // 25
    function exe25($str,$times){
        $temp = '';
        for($i=0;$i<$times;$i++){
             $temp .= $str;
        }
        return $temp;
    }
    // echo exe25("pyt",3).PHP_EOL;    //pytpytpyt

    // 30 Write a PHP program to create a string like "aababcabcd" 
    // from a given string "abcd"
    function exe30($str){
        $tr ='';
        for($i=0;$i<strlen($str);$i++){
            for($j=0;$j<=$i;$j++){
                $tr.= $str[$j];
            }
        }
        return $tr;
    }
    // echo exe30("abcd").PHP_EOL; //ppypyt

    // 32. Write a PHP program to check a specified number is present in a given array of integers.
    function exe32($arr,$itm){
        // return in_array($itm,$arr);
        // return array_search($itm,$arr);
        if(in_array($itm,$arr)){
            return array_search($itm,$arr);
        }else{
            return "not found";
        }
        
    }
    $arr = [1,4,3,4];
    $i = 3;
    // echo exe32($arr,$i).PHP_EOL; //{1,2,2,3}, 2 =>true

    // 34. Write a PHP program to check whether the sequence of numbers 1, 2, 3 appears in a given array of integers somewhere
    function exe34($arr){
        for($i=0; $i<sizeof($arr)-2;$i++){
            if($arr[$i]== 1 && $arr[$i+1]== 2 && $arr[$i+2]== 3){
                return "found";
            }
            
        }
        return "not found";
    }
    // echo exe34([12,1,2,11,1,2,3]).PHP_EOL; //{1,2,3,3},found

    // 38. Write a PHP program to check if a triple is presents in an array of integers or not.
    function exe38($arr){
        for($i=0;$i<sizeof($arr)-1;$i++){
            $num = $arr[$i];
            if($num == $arr[$i+1] && $num == $arr[$i+2]){
                return "tripple found";
            }
        }
        return "Tripple not found";
    }
    // echo exe38([12,1,2,2,11,1,1,2,3]).PHP_EOL; //not found
    // echo sizeof($arr);
    // completed 40 apatoto


?>