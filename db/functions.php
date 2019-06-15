<?php

    // This function is to retrieve the data from table
    function retrieve($conn){
        $sql = "SELECT * from items";
        $result = mysqli_query($conn,$sql);
        return $result;
       
    }

    // This function is used to insert the data into table
    function insert($conn,$name,$description,$price,$image){
         //To insert the data into table
        $sql = "INSERT INTO items      
                (id,name,description,price,image) 
                VALUES (null,'$name','$description',$price,'$image')";

        $status = mysqli_query($conn,$sql);


    }


    // This function is for retriving one record
    function retrieve_record($conn,$id){
        $sql = "SELECT * from items WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        $apple = mysqli_fetch_assoc($result);
        
        return $apple;
    }

    //This function is for updating
    function update($conn,$id,$name,$description,$price,$image){
        $sql = "UPDATE items 
                SET name='$name',
                description='$description',
                price=$price,image='$image' 
                WHERE id=$id";
        
            
        $status = mysqli_query($conn,$sql);
  
    }

    //This function is to delete the record
    function delete($conn,$id){
        $sql = "DELETE FROM items 
                WHERE id=$id";
        $status = mysqli_query($conn,$sql);
        
    }

    // This function is used to verify the user credentails
    function login($conn,$username,$password){
        
        $sql = "SELECT * FROM users WHERE username='$username'";
        
        $result = mysqli_query($conn,$sql);
        $userdetails = mysqli_fetch_assoc($result);
        
        if($userdetails){
            if($userdetails['password']==$password){
                $status = "Login Successful";
            }else{
                $status = "Incorrect Password";
            } 
        }else{
            $status = "User not found. Kindly Register";
        }
        
        return $status;
        
    }















    

?>