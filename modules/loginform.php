<?php

    require "db/connection.php";
    require "db/functions.php";
    
    $status = 0;
    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        $status = login($conn,$username,$password);
        
        echo "<h3>".$status."</h3>";
        header("Location: login.php");
    }

    if(isset($_SESSION['name']))
        require "modules/userdetails.php";
    else
        require "modules/loginformelement.php";

?>
