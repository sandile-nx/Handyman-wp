<?php
$Server ="localhost:3305";
$User ="root";
$pass ="admin";
$database ="hmend";
$conn = mysqli_connect($Server,$User,$pass,$database);


if(!$conn){
    echo "Failed to connect";
}
?>
