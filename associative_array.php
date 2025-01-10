<?php
$userdetails =[
    "name"=>"shahnam",
    "age"=>26,
    "city"=>"lahore",
    "email"=>"abc@test.com",
    "state"=>"punjab"
];
// echo $userdetails["age"];

foreach($userdetails as $key => $data) {
    echo $key ." is ". $data;
    echo "<br>";
}
?>