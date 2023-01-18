<?php 
$title="Posts";
include_once("../includes/head.php");
include '../controllers/PostsController.php';
?>

<body style="height: 100vh;">    
<?php include_once '../includes/sidenav.php'; ?>

<!-- TABLEAU -->
<div class="tableContainer m-4">
    <div class="d-flex justify-content-end m-3">
        <button href="#modal-posts" data-bs-toggle="modal" class="btn btn-primary d-flex " ><i class="bi bi-plus-circle-dotted me-2" ></i>Add Post</button>
    </div>
    
  <table class="table table-dark table-hover table-striped "  id="myTable">
    <thead>
      <tr>
        <th class="text-center" scope="col">Img</th>
        <th class="text-center" scope="col">Title</th>
        <th class="text-center" scope="col">Category</th>
        <th class="text-center" scope="col">Description</th>
        <th class="text-center" scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>

    
      <tr class="text-center">
        <td class="align-middle"><img class="" src="../assets/upload/Chad.jpg" alt="postImg" width="50px"></td>
        <td class="align-middle">Cyber Security</td>
        <td class="align-middle">Security</td>
        <td class="align-middle" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, ipsa?</td>
        <td class="align-middle" >
            <div class="d-flex flex-wrap justify-content-around">
                <a href="#" type="button" class="btn btn-warning d-flex" ></i>Update</a>
                <a href="#" type="button" class="btn btn-danger d-flex" ></i>Delete</a>
            </div>
        </td>
      </tr>
      
    </tbody>
    </table>
</div>
    
<!-- MODAL -->
<div class="modal fade" id="modal-posts" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="" method="POST" id="form" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-title"><?php if(isset($_GET['updateId'])){echo 'Update';} else { echo 'Add';}?> Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- HIDDEN INPUT  -->
                  <input type="hidden" value="<?php if(isset($modalRow)) echo $modalRow['id'] ?>" name="posts-id">
                  <div class="mb-3">
                    <label class="form-label" >Title</label>
                    <input name="title" type="text" class="form-control" id="title" value="<?php if(isset($modalRow)) echo $modalRow['title']; ?>" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Categories</label>
                    <select class="form-select" id="category" name="category" required>
                      <option disabled hidden selected>Please select</option>
                      <option <?php if(isset($modalRow)){ echo ($modalRow['name']=='A')  ?  'selected' : '';}?> value="A">ANIME</option>
                      <option <?php if(isset($modalRow)){ echo ($modalRow['name']=='B')  ?  'selected' : '';}?> value="B">BATMAN</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="10" id="product-description" name="description" required>hhh</textarea>
                  </div>
                  <div class="mb-3">
                    <label class="col-md-4 control-label mb-1" for="filebutton">Post Image</label>
                    <div class="col-md-4">
                    <input id="postImage" name="postImage" class="input-file" type="file">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" >Owner</label>
                    <input disabled name="owner" type="text" class="form-control" id="owner" value="<?php if(isset($modalRow)) echo $modalRow['title']; ?>" required/>
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
</body>

<?php include_once '../includes/corejs.php'; ?>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
});
</script>

</html>