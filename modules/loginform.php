<?php

    require "db/connection.php";
    require "db/functions.php";
    
    
    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        $status = login($conn,$username,$password);
        
        echo "<h3>".$status."</h3>";
    }

?>
<form method="post" action="login.php">
    <div>
        <label>Enter Username</label>
        <input type="text" name="username" class="form-control" placeholder="Enter your username">
    </div>
    <div>
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your valid password">
    </div>

    <button type="submit" class="btn btn-success mt-4">Login</button>
</form>