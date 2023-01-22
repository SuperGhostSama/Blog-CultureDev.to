<?php 
$title="Posts";
include_once("../includes/head.php");
include '../controllers/PostsController.php';

$Posts= new PostsController();
$allPosts= $Posts->getPostsWithOwner();
$Posts->addPosts();
$Posts->deletePosts();
$Posts->updatePosts();


include '../controllers/CategoryController.php';

$Category= new CategoryController();
$allCategories= $Category->getCategory();
?>

<body style="height: 100vh;">    
<?php include_once '../includes/sidenav.php'; ?>

<!-- TABLEAU -->
<div class="tableContainer m-4">
    <div class="d-flex justify-content-end m-3">
        <button href="#modal-posts" data-bs-toggle="modal" class="btn btn-primary d-flex " onclick="resetPostsForm()" ><i class="bi bi-plus-circle-dotted me-2" ></i>Add Post</button>
    </div>
    
  <table class="table table-dark table-hover table-striped "  id="myTable">
    <thead>
      <tr>
        <th class="text-center" scope="col">Img</th>
        <th class="text-center" scope="col">Title</th>
        <th class="text-center" scope="col">Category</th>
        <th class="text-center" scope="col">Owner</th>
        <th class="text-center" scope="col">Description</th>
        <th class="text-center" scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>

    
    <?php foreach($allPosts as $posts ) { ?>
      <tr class="text-center">
        <td class="align-middle"><img class="" src="../assets/upload/<?php echo $posts['image']; ?>" alt="postImg" width="50px"></td>
        <td class="align-middle"><?php echo $posts['title']; ?></td>
        <td class="align-middle"><?php foreach ($allCategories as $category) {
          if($posts['category_id']==$category['id']) echo $category['name'];
        }?></td>
        <td class="align-middle"><?php echo $posts['username']; ?></td>
        <td class="align-middle" ><?php echo $posts['description']; ?></td>
        <td class="align-middle" >
            <div class="d-flex flex-wrap justify-content-around">
                <a href="posts.php?updateId=<?php echo $posts['article_id']; ?>" onclick="" type="button" class="btn btn-warning d-flex" ></i>Update</a>
                <a href="posts.php?deleteId=<?php echo $posts['article_id']; ?>" type="button" class="btn btn-danger d-flex" ></i>Delete</a>
            </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
    </table>
</div>
        <?php 
          if(isset($_GET['updateId'])){
            $id = $_GET['updateId'];
            $result = $Posts -> OnePosts($id);
            $modalRow = $result[0];
          }
        ?>
<!-- MODAL -->
<div class="modal fade" id="modal-posts" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
          <form action="" method="POST" id="form" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-title"><?php if(isset($_GET['updateId'])){echo 'Update';} else { echo 'Add';}?> Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- HIDDEN INPUT  -->
                  <input type="hidden" value="<?php if(isset($modalRow)) echo $modalRow['article_id'] ?>" name="posts-id">
                  <div class="mb-3">
                    <label class="form-label" >Title</label>
                    <input name="title" type="text" class="form-control" id="title" value="<?php if(isset($modalRow)) echo $modalRow['title']; ?>" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Categories</label>
                    <select class="form-select" id="category" name="category" required>
                      <option disabled hidden selected>Please Select</option>
                      <?php foreach($allCategories as $category) {
                         if($modalRow['category_id'] == $category['id']){
                        echo '<option selected value="' . $category['id'] . '">' . $category['name'] . '</option>';
                          }else{
                            echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                          }
                            } ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="10" id="description" name="description" required><?php if(isset($modalRow)) echo $modalRow['description']; ?></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="col-md-4 control-label mb-1" for="filebutton">Post Image</label>
                    <div class="col-md-4">
                    <input id="postImage" name="postImage" class="input-file" type="file">
                    </div>
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
<script>
    <?php if (isset($_GET['updateId'])) { ?>
      window.onload = function() {
        $("#save").hide();
        $("#update").show();
        $("#modal-posts").modal("show");

      };
  <?php }
    ?>
  </script>
</html>