<?php 
$title="Dashboard";


include_once("../includes/head.php");

?>

<body style="height: 100vh;">
<?php include_once '../includes/sidenav.php'; ?>
        <!-- STATISTIC CARDS -->
        <div class="row m-5 flex-wrap justify-content-center ">
            <div class="col-xl-3 col-sm-6  mb-4">
            <div class="card border-3">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="mb-0 fw-bold">Posts</p>
                        <h5 class="mb-0">
                        300
                        </h5>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="icon shadow text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-4">
            <div class="card border-3">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="mb-0 fw-bold">Categories</p>
                        <h5 class=" mb-0">
                            5
                        </h5>
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="icon shadow text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers align-text-bottom" aria-hidden="true">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-4">
            <div class="card border-3">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="mb-0 fw-bold">Developpers</p>
                        <h5 class=" mb-0">
                        200
                        </h5>
                    </div>
                    </div>
                    <div class="col-4 text-end">
                    <div class="icon shadow text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6  mb-4">
            <div class="card border-3">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="mb-0 fw-bold">Admins</p>
                        <h5 class=" mb-0">
                        5
                        </h5>
                    </div>
                    </div>
                    <div class="col-4 text-end">
                    <div class="icon shadow text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="pt-5 ps-4 pe-4">
            <canvas id="myChart" style="max-height:500px;"></canvas>
        </div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Posts', 'Categories', 'Developpers', 'Admins'],
            datasets: [{
              label: 'Statistics',
              data: [10, 5, 20, 5],
              borderWidth: 2
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
       
       <?php include_once '../includes/corejs.php'; ?>
</html>
