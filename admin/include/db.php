<?php

//define connection elements
$dbHost = "localhost";
$dbDatabase = "Indicator_Project";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$connect = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);

//set unicode character
$connect->query("set names utf8");
//mysqli_set_charset($connection, "utf8");


if (mysqli_connect_errno()) {
    echo "Database Connect Failed : " . mysqli_connect_error();
}

?>