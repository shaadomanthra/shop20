<?php
    require "db/connection.php";
    require "db/functions.php";

    logout();
    
    //redirect the page to login
    header("Location: login.php");
?>