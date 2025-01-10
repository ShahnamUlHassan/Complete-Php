<?php
function sum($a,$b){
    echo $a+$b;
    echo "<br/>";
}
sum(20,50);
sum(100,200);
sum(33,66);
function userdata($name,$color){
    echo "<h1 style='color:$color'>$name</h1>";
    userdata("Shahnam","green");
    userdata("ul hassan","blue");
}
?>