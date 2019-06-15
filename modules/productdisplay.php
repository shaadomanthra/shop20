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
?>

<div class="mt-4">
    <a href="update.php?id=<?php echo $result['id']; ?>">
        <button class="btn btn-success">Edit</button>
    </a>
    
    <a href="delete.php?id=<?php echo $result['id']; ?>">
        <button class="btn btn-danger">Delete</button>
    </a>
    
</div>
   
        
        
        
        
        
        
        
        