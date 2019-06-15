<?php

    //To start the session
    session_start();

    require "db/connection.php";
    require "db/functions.php";

    logout();
    
    //redirect the page to login
    header("Location: login.php");
?>