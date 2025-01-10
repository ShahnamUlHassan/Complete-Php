<?php
$users=["shahnam","hassnain","waqas","izhaar"];

foreach($users as $x){
    if($x=="waqas"){
        continue;
    }
    echo $x;
    echo "<br/>";
    // // if($x=="waqas"){
    // //     break;
    // }
}
foreach($users as $x):
    echo $x;
    echo "<br>";
    endforeach



?>