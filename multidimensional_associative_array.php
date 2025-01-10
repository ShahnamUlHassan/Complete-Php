<?php
$users=[
    ["name"=>"Shahnam","age"=>"26","city"=>"lahore"],
    ["name"=>"Hassan","age"=>"25","city"=>"lahore"],
    ["name"=>"Moon","age"=>"27","city"=>"lahore"],  
];
foreach($users as $user){
    foreach($user as $key=> $item){
        echo "$key is $item";
        echo "<br/>";
    }
    echo "<br/>";echo "<br/>";
}
?>