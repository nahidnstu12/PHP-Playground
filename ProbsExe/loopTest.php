<?php

// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. 
// There will be no hyphen(-) at starting and ending position.
function exe1($first,$lim){
    for($i=$first;$i<=$lim;$i++){
        if($i==$first ){
            echo $i;
        }elseif($lim== $i){
            echo "-$i";
        }
        else{
            echo "-$i";
        }
    }
}
// echo exe1(5,10).PHP_EOL;    //5-6-7-8-9-10

// 8. Write a PHP script that creates the following table using for loops.
//  Add cellpadding="3px" and cellspacing="0px" to the table tag.
function exe8(){
    $tbl = "";
    for($i=1;$i<=6;$i++){
        $tbl .= "<tr>";
        for($j=1;$j<=5;$j++){
        $tbl .= "<td>$i * $j = ".$i*$j."</td> ";
    }
    $tbl .= "</tr>";
    }
    return $tbl;
}
// echo exe8();

// 9. Write a PHP script using nested for loop that creates a chess board as shown below.
// Use table width="270px" and take 30px as cell height and width.
function exe9(){
    $tbl = "";
    $total = 0;
    for($i=1;$i<=8;$i++){
        $tbl .= "<tr>";
        for($j=1;$j<=8;$j++){
            $total = $i+$j;
            if($total %2 == 0){
            $tbl .= "<td style='width:20px;height:45px;background:#000'></td>";
            }else{
                $tbl .= "<td style='width:20px;height:45px; '></td>";
            }
        }
        $tbl .= "</tr>";
    }
    return $tbl;
}
// 10. Write a PHP script that creates the following table (use for loops)
function exe10(){
    $tbl = "";
    for($i=1;$i<=10;$i++){
        $tbl .= "<tr>";
        for($j=1;$j<=10;$j++){
        $tbl .= "<td>".$i*$j."</td>";
    }
    $tbl .= "</tr>";
    }
    return $tbl;
}
?>
<style>
    table{
        border: 1px solid #000;
    }
    td{
        padding: 15px;
        border: 1px solid #333333;
    }
</style>
<h1>Table</h1>
<table>
    <tbody>
        <?php //echo exe8() ?>
    </tbody>
</table>
<h1>Chess Board </h1>
<table >
    <tbody>
        <?php //echo exe9() ?>
    </tbody>
</table>
<h1>Sudoku </h1>
<table >
    <tbody>
        <?php //echo exe10() ?>
    </tbody>
</table>