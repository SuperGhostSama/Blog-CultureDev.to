<?php 
session_start();
$title="Home";
include_once("includes/head.php");

// die($_SESSION["id"]);
if(isset($_SESSION["id"])){
  header('location:pages/dashboard.php');
  die;
}
?>
<body style="background-color: #ffffff">
<?php include_once("includes/navbar.php"); ?>
  <!-- Carousel -->
  <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/img/Banner1.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item active">
              <img src="assets/img/Banner3.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item active">
              <img src="assets/img/Banner2.png" class="d-block w-100" alt="..." />
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>

  <!-- Latest Posts -->
  <div class="album py-5 ">
    <h3 class="text-center mb-3">Latest Posts</h3>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/dev.jfif" alt="article">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/dev.jfif" alt="article">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/dev.jfif" alt="article">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Us -->
  <section class="p-5" style="background-color: #e6e6e6;">
    <h3 class="fw-bold" id="aboutUsHeader">About Us</h3>
    <div class="d-flex  ">
        <div class="row">
            <div class="col-md-6 ">
                <p id="aboutUs">
                  Culture Dev is a social network designed specifically for developers. It aims to create a constructive and inclusive community where developers can connect, collaborate, and share knowledge. The platform offers a variety of features, such as forums, chat rooms, and code repositories, that enable developers to share their experiences, ask questions, and get feedback on their projects. Additionally, Culture Dev encourages diversity and inclusivity in its community, promoting open and respectful communication among members.
                </p>
            </div>
            <div class="col-md-6 align-self-start">
                <img id="thumbnail" class="img-thumbnail w-100" src="assets/img/dev.jfif" alt="code">
            </div>
        </div>
    </div>
  </section>
      
  <!-- Partners -->
  <section class="p-4">
    <h2 class="text-center mb-4">Our Partners</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img src="assets/img/Meta-Logo.png" alt="Partner 1" class="m-2" style="width: 150px;">
      <img src="assets/img/polygon.png" alt="Partner 2" class="m-2" style="width: 150px;">
      <img src="assets/img/polygon.png" alt="Partner 3" class="m-2" style="width: 150px;">
      <img src="assets/img/Meta-Logo.png" alt="Partner 4" class="m-2" style="width: 150px;">
    </div>
  </section>
      
  <!-- Footer -->
  <footer class="pt-5 ps-5 pe-5 " style="background-color: #4f4f4f; color: rgb(204, 202, 202)">
      <div class="row justify-content-center">
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 " style="color: white;">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 " style="color: white;">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 " style="color: white;">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 " style="color: white;">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 " style="color: white;">About</a></li>
          </ul>
        </div>
  
        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex flex-column flex-sm-row justify-content-center pt-4 mt-4 border-top ">
        <p>© 2023 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="" href="#"><i class="bi bi-twitter" width="24" height="24" style="color: white;"></i></use></svg></a></li>
          <li class="ms-3"><a class="" href="#"><i class="bi bi-instagram" width="24" height="24" style="color: white;"></i></use></svg></a></li>
          <li class="ms-3"><a class="" href="#"><i class="bi bi-facebook" width="24" height="24" style="color: white;"></i></a></li>
        </ul>
      </div>
  </footer> 
</body>
    <?php include_once 'includes/corejs.php'; ?>
</html>
