<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$planets = ["Mercury" , "Venus" , "Earth" , "Mars" , "Jupiter" , "Saturn" , "Uranus" ,
       "Neptune", "" , "" , NULL];

function planetSec($array, $value){

    $filtered_arr = array_filter($array);
    $random_arr = array_rand($filtered_arr, $value);
    $result = array_map(function ($item) use ($filtered_arr){
        return $filtered_arr[$item];
    }, $random_arr);

    return $result;

}

echo "<pre>";
print_r(planetSec($planets,2));
print_r(planetSec($planets,3));
print_r(planetSec($planets,2));
print_r(planetSec($planets,4));
print_r(planetSec($planets,5));
    


?>
</body>
</html>


