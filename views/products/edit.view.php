<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<?php require "views/partials/searchbar.view.php" ?> 

    <div class="form edit  d-flex align-items-center flex-column ">
    <form  class="col-8 reset" action="/admin/products/update" method="POST">
        <div class="d-flex justify-content-end" >
                <a class="cancel" href="/admin/products">x</a>
        </div>  
         <h1>Edit Product Information</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= $product->title ?>">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $product->description ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" value="<?= $product->image ?>">
            </div>

            <input type="hidden" name="id" id="id" class="form-control" value="<?= $product->id ?>">
        <div class="buttons d-flex justify-content-center">
            <button >Submit</button>
            <button type="reset" >Reset</button>
        </div>

        </form>
    </div>
</div>
<?php require "views/partials/footer.view.php" ?>


<script>





</script>