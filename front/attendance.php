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
    <title>Attendance Page</title>
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-bs-theme="dark">
        <div class="container-fluid flex-lg-column px-lg-0">
            <a href="event.php" class="navbar-brand mb-lg-5 mt-lg-5">Logo</a>
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
                        <a href="event.php" class="nav-link">Events</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">Dashboard</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a href="accounts.php" class="nav-link" data-bs-toggle="dropdown">Accounts <span
                                class="fa fa-caret-down"></span></a>
                        <div class="dropdown-menu" id="account">
                            <a href="admin.php" class="dropdown-item">Admin</a>
                            <a href="officer.php" class="dropdown-item ">Officer</a>
                            <a href="student.php" class="dropdown-item">Student</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="dept.php" class="nav-link">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a href="reports.php" class="nav-link">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
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
                <h1 class="px-3 my-4" style="color:#FFD700;"><strong>Attendance</strong></h1>
            </div>
            <p class="fw-bold fw-5 mt-lg-3 px-lg-3">
                (PLACE THE NAME OF THE EVENT HERE)
            </p>
            <!-- SEARCH BUTTON -->
            <div class="row justify-content-between px-lg-3 my-4">
                <div class="col-auto">
                    <form class="input-group">
                        <input type="search" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit" name="searchUpcomming">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- SEARCH BUTTON -->
            <!-- DROPDOWN TO FILTER THE COURSES -->
            <div class="row my-4 px-3">
                <div class="col-lg-3">
                    <select name="courses" id="course" class="form-select">
                        <option selected>Select a Course</option>
                        <option value="1">BSIT</option>
                        <option value="2">BSCS</option>
                        <option value="3">BSBA</option>
                    </select>
                </div>
                <!-- DROPDOWN TO FILTER THE COURSES -->
                <!-- DROPDOWN TO FILTER THE YEAR -->
                <div class="col-lg-3">
                    <select name="courses" id="course" class="form-select">
                        <option selected>Select Year Level</option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="3">4th</option>
                    </select>
                </div>
            </div>
            <!-- DROPDOWN TO FILTER THE YEAR -->
            <!-- TABLE -->
            <div class="row text-center">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Attendance</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- TABLE -->
        </div>
    </div>

    <!-- END CONTENT -->
    <!-- SCRIPTS -->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>