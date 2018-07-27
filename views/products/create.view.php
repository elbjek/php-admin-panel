<?php require "views/partials/header.view.php" ?>

<div class="col content reset ">
    <?php require "views/partials/searchbar.view.php" ?> 

    <div class="form create d-flex justify-content-center flex-column align-items-center">

        <form class="col-8  reset " action="/admin/products" method="POST" enctype="multipart/form-data">
        
        <div class="d-flex justify-content-end" >
                <a class="cancel" href="/admin/products">x</a>
        </div>  
        
        <h1>ADD NEW PRODUCT</h1>
        <div class="form-group">

                <input type="text" name="title" placeholder="Product title" id="title" class="form-control">
            </div>

            <div class="form-group">

                <textarea name="description" placeholder="Product description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            

            <div class="form-group">
                <label  class="image" for="image">Select Image<input type="file" name="image" id="image"  ></label>
            </div>

        <div class="buttons d-flex justify-content-center">
            <button >Submit</button>
            <button type="reset" >Reset</button>
        </div>

        </form>
    </div>

        
</div>
<?php require "views/partials/footer.view.php" ?>