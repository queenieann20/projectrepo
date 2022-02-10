<?php

$con=mysqli_connect("localhost", "root","", "purchase");

if(mysqli_connect_error()){
    echo"Cannot connect to Database";
    exit();
}
?>