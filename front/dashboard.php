<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Admin Dashboard Page</title>
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid flex-lg-column px-lg-0">
            <a href="dashboard.html" class="navbar-brand mb-lg-5 mt-lg-5 text-white">Logo</a>
            <div class="welcome-message">
                <h3>Welcome</h3>
                <p class="text-center">Admin</p>
            </div>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-lg-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="dashboard.html" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">Accounts <span
                                class="fa fa-caret-down"></span></a>
                        <div class="dropdown-menu">
                            <a href="admin.html" class="dropdown-item">Admin</a>
                            <a href="officer.html" class="dropdown-item">Officer</a>
                            <a href="student.html" class="dropdown-item">Student</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="event.html" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="dept.html" class="nav-link">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a href="reports.html" class="nav-link">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.html" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- START CONTENT -->
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row d-flex align-items-center" id="header">
                <h1 class="px-3 my-0" style="color:#fec223;"><strong>Dashboard</strong></h1>
            </div>
            <div class="row mt-4 justify-content-evenly">
                <div class="col-lg-4 text-center">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-lg-4 text-center">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
            <div class="row px-lg-4">
                <p class="fw-bold fw-5 mt-lg-4">Ongoing Event</p>
                <form class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn" type="submit" name="search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <div class="row mt-lg-3">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table text-center table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Venue</th>
                                        <th scope="col">Departmet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">sample</td>
                                        <td scope="col">sample</td>
                                        <td scope="col">sample</td>
                                        <td scope="col">sample</td>
                                        <td scope="col">sample</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- START UPCOMMING EVENT -->
                <div class="row">
                    <div class="col-auto">
                        <p class="fw-bold fw-5 mt-lg-4">Upcomming Event</p>
                        <form class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit" name="search">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Event Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Department</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="col">sample</td>
                                    <td scope="col">sample</td>
                                    <td scope="col">sample</td>
                                    <td scope="col">sample</td>
                                    <td scope="col">sample</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- END UPCOMMING EVENT -->
            <!-- START LIST OF EVENTS -->
            <div class="row">
                <div class="col-auto">
                    <p class="fw-bold fw-5 mt-lg-4">List of Event</p>
                    <form class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit" name="search">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col">Event Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">sample</td>
                                <td scope="col">sample</td>
                                <td scope="col">sample</td>
                                <td scope="col">sample</td>
                                <td scope="col">sample</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <!-- END LIST OF EVENTS -->
        </div>
    </div>

    <!-- END CONTENT -->
    <!-- SCRIPTS -->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        // Get the canvas element
        var ctx = document.getElementById('myChart').getContext('2d');
    
        // Define the data for the bar graph
        var data = {
          labels: ['Red', 'Blue', 'Yellow'],
          datasets: [{
            label: 'For the school year 2023-2024 2nd Semester',
            data: [12, 19, 3],
            backgroundColor: [
              'rgba(255, 99, 102, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
          }]
        };
    
        // Initialize the bar graph
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: data,
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
       <script>
        // Get the canvas element
        var ctx = document.getElementById('myChart2').getContext('2d');
    
        // Define the data for the bar graph
        var data = {
          labels: ['Red', 'Blue', 'Yellow'],
          datasets: [{
            label: 'For the school year 2023-2024 2nd Semester',
            data: [12, 19, 3],
            backgroundColor: [
              'rgba(255, 99, 102, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
          }]
        };
    
        // Initialize the bar graph
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: data,
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
</body>

</html>