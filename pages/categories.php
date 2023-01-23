<?php 
$title="Categories";
include_once("../includes/head.php");
include '../controllers/CategoryController.php';

$Category= new CategoryController();
$allCategories= $Category->getCategory();
$Category->addCategory();
$Category->deleteCategory();
$Category->updateCategory();

?>

<body style="height: 100vh;">
<?php include_once '../includes/sidenav.php'; ?>
<!-- MESSAGE NOTIFICATION -->
<?php
            if(isset($_SESSION['categoryDelete'])){?>

            <div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="success-alert">
              <strong><?= $_SESSION['categoryDelete'];?></strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          <?php unset($_SESSION['categoryDelete']);}?>
      
        <!-- Button -->
        <div class="d-flex flex-wrap justify-content-end m-4 ">
                <button href="#modal-categories" data-bs-toggle="modal" class="btn btn-primary d-flex "  onclick="resetCategoryForm()"><i class="bi bi-plus-circle-dotted me-2" ></i>Add Category</button>
        </div>
        
    <!-- Table -->
    <div class="p-5" >
        <table class="table table-dark table-hover table-bordered text-center" id="myTable">
        <thead>
          <tr >
            <th class="text-center" scope="col">Categories</th>
            
            <th class="text-center" scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>


        <?php foreach($allCategories as $category ) { ?>
          <tr>
            <th scope="row"><?php echo $category['name']; ?></th>
            <td>
                <a href="categories.php?updateId=<?php echo $category['id']; ?>" type="button" class="btn btn-warning">Update</a>
                <a href="categories.php?deleteId=<?php echo $category['id']; ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
        </table>
    </div>

    <?php 
          if(isset($_GET['updateId'])){
            $id = $_GET['updateId'];
            $result = $Category -> OneCategory($id);
            $modalRow = $result[0];
          }
        ?>
     <!-- MODAL -->
     <div class="modal fade" id="modal-categories" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="" method="POST" id="form" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-title"><?php if(isset($_GET['updateId'])){echo 'Update';} else { echo 'Add';}?> Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- HIDDEN INPUT  -->
                  <input type="hidden" value="<?php if(isset($modalRow)) echo $modalRow['id']; ?>" name="category-id">
                  <div class="mb-3">
                    <label class="form-label" >Categories</label>
                    <input name="category" type="text" class="form-control" id="category" value="<?php if(isset($modalRow)) echo $modalRow['name']; ?>" oninput="validateCategory()" required/>
                    <div id="validateCategory"></div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" >Cancel</button>
                <button type="submit" name="save" class="btn btn-primary task-action-btn" id="save">Save</button>
                <button type="submit" name="update" class="btn btn-warning task-action-btn" id="update">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
<script src="../assets/js/formValidation.js"></script>
</body>
<?php include_once '../includes/corejs.php'; ?>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
});
</script>
<script>
    <?php if (isset($_GET['updateId'])) { ?>
      window.onload = function() {
        $("#save").hide();
        $("#update").show();
        $("#modal-categories").modal("show");
      };
  <?php }
    ?>
  </script>
</html>