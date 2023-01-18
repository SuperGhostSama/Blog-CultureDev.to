<?php 
$title="Categories";
include_once("../includes/head.php");

?>

<body style="height: 100vh;">
<?php include_once '../includes/sidenav.php'; ?>

    <!-- Button -->
    <div class="d-flex justify-content-end m-4">
        <button class="btn btn-primary">+ Add Category</button>
    </div>

    <!-- Table -->
    <div class="p-5" >
        <table class="table table-dark table-hover table-bordered text-center" id="test">
        <thead>
          <tr class="fs-3">
            <th scope="col">Categories</th>
            
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">anime</th>
            <td>
                <button class="btn btn-danger">Update</button>
                <button class="btn btn-warning">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">blockchain</th>
            <td>
                <button class="btn btn-danger">Update</button>
                <button class="btn btn-warning">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">developement</th>
            <td>
                <button class="btn btn-danger">Update</button>
                <button class="btn btn-warning">Delete</button>
            </td>
          </tr>
        </tbody>
        </table>
    </div>
</body>
<?php include_once '../includes/corejs.php'; ?>
</html>