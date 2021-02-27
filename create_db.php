<?php

$servername ="127.0.0.1";
$username ="root"; 
$password =""; 

$handler = mysqli_connect($servername, $username, $password); 

if(!$handler) {

    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully!", "<br>";
}



mysqli_query($handler,'CREATE DATABASE biz');



if(mysqli_query($handler,'CREATE DATABASE biz')) {

    echo "Database created successfully", "<br>";
}


?>