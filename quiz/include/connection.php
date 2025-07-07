<?php


    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "quiz_website";


    $connection = mysqli_connect($servername, $username, $dbpassword, $dbname);

    if(!$connection){
        die("Database connection failed");
    }  else {
        //echo "Database connect hugyaa!!";
    }
?>