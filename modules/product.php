<?php

    require "db/connection.php";
    require "db/functions.php";

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id']; 
        
        $result = retrieve_record($conn,$id);
        echo $result['name']."<br>";
        echo $result['description']."<br>";
        echo $result['price']."<br>";
        echo "<img src='". $result['image'] ."' width=100px >";
        
    }
?>