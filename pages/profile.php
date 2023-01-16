<?php 
$title="Profile";


include_once("../includes/head.php");

?>

<body style="height: 100vh;">
<?php include_once '../includes/sidenav.php'; ?>

    <!-- Profile -->
    <div class="container p-5 mt-5" id="profile">
        <div class="main-body ">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Salah</h4>
                      <p class="badge text-bg-primary mb-1">Admin</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row justify-content-center ">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <input class="col-sm-9 text-secondary w-50" type="text"></input>
                  </div>
                  <hr>
                  <div class="row justify-content-center ">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <input class="col-sm-9 text-secondary w-50" type="email"></input>
                  </div>
                  <hr>
                  <div class="row justify-content-center ">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <input class="col-sm-9 text-secondary w-50" type="password"></input>
                  </div>
                  <hr>
                  <div class="row justify-content-center ">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Confirm Password</h6>
                    </div>
                    <input class="col-sm-9 text-secondary w-50" type="password" ></input>
                  </div>
                  <hr>
                  <div class="row ">
                    <div class="col-sm-12 d-flex justify-content-evenly">
                      <a class="btn btn-info text-white" target="__blank" href="#">Update</a>
                      <a class="btn btn-danger" href="#">Delete Account</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</body>
<?php include_once '../includes/corejs.php'; ?>
</html>