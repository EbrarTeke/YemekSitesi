<?php
$server="localhost:3308";
$con=mysqli_connect($server,"root","","finaldb");
if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL:".mysqli_connect_errno();
}

?>