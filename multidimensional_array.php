<?php
// $user=["shahnam","lahore","shahnam@gmail.com"];

// $users=["shahnam","hassan","moon"]

$users=[
[1,"shahnam","lahore","shahnam@gmail.com"],
[2,"hassan","lahore","hassan@gmail.com"],
[3,"moon","lahore","moon@gmail.com"]
];
// echo "<pre>";
// print_r(($users));
// echo "<pre>";

for($i=0;$i<count($users);$i++){
// print_r($users[$i]);
// echo "<br>";

for($j=0;$j<count($users[$i]);$j++){
    echo $users[$i][$j];
    echo "<br>";
}
}
?>