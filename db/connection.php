<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop20";

    $conn = mysqli_connect($hostname,$username,$password,$dbname);

    if(!$conn)
        echo "Not connected";

    //To start the session
    session_start();
?>