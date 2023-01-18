<?php 
$title="login";


include_once("../includes/head.php");
include_once("../controllers/LoginController.php");

if(isset($_SESSION["id"])){
  header('location:dashboard.php');
  die;
}
?>

<body>
  <?php include_once("../includes/navbar.php"); ?>
   <!-- MESSAGE NOTIFICATION -->
   <?php
            if(isset($_SESSION['registerSuccess'])){?>

            <div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="success-alert">
              <strong><?= $_SESSION['registerSuccess'];?></strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          <?php unset($_SESSION['registerSuccess']);}?>
   <!-- MESSAGE NOTIFICATION -->
   <?php
            if(isset($_SESSION['passwordError'])){?>

            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" id="success-alert">
              <strong><?= $_SESSION['passwordError'];?></strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          <?php unset($_SESSION['passwordError']);}?>
   <!-- MESSAGE NOTIFICATION -->
   <?php
            if(isset($_SESSION['emailError'])){?>

            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" id="success-alert">
              <strong><?= $_SESSION['emailError'];?></strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          <?php unset($_SESSION['emailError']);}?>


    <!-- Login -->
    <div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">Log In for free</h1> 
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form method="POST">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="login">Log In</button>
                <small class="text-muted">Dont have an account yet? <a href="signup.php"> Create your account</a></small>
                <hr class="my-4">
                <!-- <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2> -->
                <!-- <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                    <i class="bi bi-twitter"></i>
                  Log In with Twitter
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                    <i class="bi bi-facebook"></i>
                  Log In with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                    <i class="bi bi-github"></i>
                  Log In with GitHub
                </button> -->
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
<?php include_once '../includes/corejs.php'; ?>
</html>