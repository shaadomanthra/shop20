<?php

    require "db/connection.php";
    require "db/functions.php";

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id']; 
        
        delete($conn,$id);
        echo "The item ".$id." is deleted";
    }else{
        echo "The id number is not given in url";
    }
    
    

?>