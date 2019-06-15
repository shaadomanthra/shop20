<?php

    require "db/connection.php";
    require "db/functions.php";

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id']; 
        
        $result = retrieve_record($conn,$id);
        echo "<h1>".$result['name']."</h1><br>";
        echo "<p>".$result['description']."</p><br>";
        echo $result['price']."<br>";
        echo "<img src='". $result['image'] ."' width=200px >";
        
    }

    if(isset($_SESSION['name']))
        require "modules/editbuttons.php";
?>


   
        
        
        
        
        
        
        
        