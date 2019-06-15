<?php

    require "db/connection.php";
    require "db/functions.php";
    
    if(isset($_REQUEST['name'])){
        $name = $_REQUEST['name'];
        $description = $_REQUEST['description'];
        $price = $_REQUEST['price'];
        $image = $_REQUEST['image'];
        
       insert($conn,$name,$description,$price,$image);
        
        echo "One record inserted";
    }
    
?>
        <form method="get" action="insert.php">
            
        <label>Enter the name</label><br>
        <input type="text" name="name"><br>
            
        <label>Description</label><br>
        <input type="text" name="description"><br>
            
          
        <label>Price</label><br>
        <input type="text" name="price"><br>
        
        <label>Image</label><br>
        <input type="text" name="image"><br>
            
        <button type="submit">
            Create item    
        </button>
        </form>