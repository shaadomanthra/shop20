<?php

    require "db/connection.php";
    require "db/functions.php";
    

        
    if(isset($_REQUEST['name'])){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $description = $_REQUEST['description'];
        $price = $_REQUEST['price'];
        $image = $_REQUEST['image'];
        
       update($conn,$id,$name,$description,$price,$image);
        
        echo "One record updated";
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $result = retrieve_record($conn,$id);        
    }
    
?>

        <form method="get" action="update.php">
            
        <label>Enter the name</label><br>
        <input type="text" name="name" value="<?php  echo $result['name']; ?>"><br>
            
        <label>Description</label><br>
        <input type="text" name="description" value="<?php echo $result['description']; ?>"><br>
            
          
        <label>Price</label><br>
        <input type="text" name="price" value="<?php echo $result['price']; ?>"><br>
        
        <label>Image</label><br>
        <input type="text" name="image" value="<?php echo $result['image']; ?>"><br>
        
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <button type="submit">
            Update item    
        </button>
        </form>
