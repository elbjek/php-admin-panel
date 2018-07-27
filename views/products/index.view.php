
<?php require "views/partials/header.view.php" ?>
<div class="col content reset ">
<!-- SEARCHBAR INCLUDED -->
<?php require "views/partials/searchbar.view.php" ?>   

<!-- PRODUCT LIST AND ADD NEW BUTTON -->

<div class=" heading  d-flex align-items-center justify-content-between reset">
   <h4>Product List</h4>
   <a href="/admin/products/create" class="addNew  d-flex"><i class="fas fa-plus"></i>Add new product</a>
</div>

<table class="Table col reset ">
   <tr class="row">
      <th class="col">Image</th>
      <th class="col">Title</th>
      <th class="col">Description</th>
      <th class="col">Actions</th>
   </tr>
   <?php foreach ($products as $product): ?>
   <tr class="row  d-flex justify-content-center align-items-center">
      <td class="col">
         <div class="img d-flex justify-content-center align-items-center">  <img class="" src="<?= $product->image ?>" alt=img width="70px" > </div>
      </td>
      <td class="col">
         <?= substr($product->title, 0, 50) ?>
         ...
      </td>
      <td class="col">
         <?= substr($product->description, 0, 50) ?>
         ...
      </td>
     
      <td class="actions col d-flex align-items-center " >
         <a class="d-flex flex-column align-items-center reset" href="/admin/products/show?id=<?= $product->id ?>"><i class="fas fa-eye"></i> View</a> 
         
         <form   action="/admin/products/edit" method="get">
            <button class="d-flex flex-column align-items-center" >
            <input type="hidden" name="id" value="<?= $product->id ?>"><i class="fas fa-edit"></i>Edit</button>
         </form>
         
         <form  action="/admin/products/destroy" method="post">
            <button class="d-flex flex-column align-items-center">
            <input type="hidden" name="id" value="<?= $product->id ?>"><i class="fas fa-trash-alt"></i>Delete</button>
         </form>
      </td>
   </tr>
   <?php endforeach; ?> 
</table>

</div>
<?php require "views/partials/footer.view.php" ?>

<script>
    var form = document.querySelectorAll('.deleteForm');
    for(i=0; i<form.length;i+=1){
        form[i].addEventListener('submit',(event)=>{
            var x = confirm("Are you sure you want to delete?");
            if (x) return true;
            else return event.preventDefault();
        })
    }
</script>