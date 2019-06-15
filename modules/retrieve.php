<?php
    
    require "db/connection.php";
    require "db/functions.php";

    $result = retrieve($conn);
    
    foreach($result as $r){
?>

<div class="col-12 col-md-4">
    <div class="p-3 border bg-light">
        <img src="<?php echo $r['image']; ?>" class="w-100">
        <h2><?php echo $r['name']; ?></h2>
        <p><?php echo $r['description']; ?></p>
        <a href="product.php?id=<?php echo $r['id']; ?>">
            <button class="btn btn-primary">view </button>
        </a>
    </div>
</div>

<?php }  ?>





