<?php 
    //To start the session
    session_start();
?>

<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="product.php">Product </a>
      </li>
        
        <?php
        
            if(isset($_SESSION['name']))
                require "modules/linklogin.php";
            else
                require "modules/linknologin.php";

        ?>
        
    
    </ul>

  </div>
</nav>
        </header>