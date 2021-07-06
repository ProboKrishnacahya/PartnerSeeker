<?php

function my_connectDB(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "partnerseeker";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Error Connecting to Database");

    return $conn;
}

function my_closeDB($conn){
    mysqli_close($conn);
}

?>