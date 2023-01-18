<?php 
$title="Posts";
include_once("../includes/head.php");

?>

<body style="height: 100vh;">    
<?php include_once '../includes/sidenav.php'; ?>

<!-- TABLEAU -->
<div class="tableContainer m-4">
    <div class="d-flex justify-content-end m-3">
        <button href="#modal-teams" data-bs-toggle="modal" class="btn btn-primary d-flex " ><i class="bi bi-plus-circle-dotted me-2" ></i>Add Post</button>
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
    
</body>

<?php include_once '../includes/corejs.php'; ?>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
});
</script>
</html>