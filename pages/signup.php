<?php 
$title="SignUp";

include_once("../includes/head.php");
?>

<body>
  <?php include_once("../includes/navbar.php"); ?>

    <!-- SignUp -->
    <div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">SignUp for free</h1> 
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form class="">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingText" placeholder="text">
                  <label for="floatingText">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword1" placeholder="Password">
                  <label for="floatingPassword1">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword2" placeholder="Password Confirmation">
                  <label for="floatingPassword2">Password Confirmation</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">SignUp</button>
                <small class="text-muted">Already have an account? <a href=""> Log In Now</a></small>
                <hr class="my-4">

                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                    <i class="bi bi-twitter"></i>
                  SignUp with Twitter
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                    <i class="bi bi-facebook"></i>
                  SignUp with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                    <i class="bi bi-github"></i>
                  SignUp with GitHub
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
<?php include_once '../includes/corejs.php'; ?>
</html>