<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<?php require "views/partials/searchbar.view.php" ?> 
<div class="show row reset d-flex align-items-center">
   

    <div class="col-12 d-flex justify-content-end "  >
            <a href="/admin/products" class="backtoall">Back to all</a>
    </div>
        <div class="img col-6">
            <img src="<?= $product->image ?>" alt="">
        </div>
        <div class=" col-6 info d-flex  align-items-top flex-column">
        <h3><?= $product->title ?></h3>
            <h6>Description</h6>
             <p><?= $product->description ?></p>
        
            <h5>Price</h5>
            <p>$36.99</p>

            <button><a href="/admin/products/edit">EDIT</a></button>
        </div>
    </div>
</div>
<?php require "views/partials/footer.view.php" ?>
