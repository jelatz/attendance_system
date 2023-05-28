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
    <title>Reports Page</title>
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
                        <a href="reports.php" class="nav-link active">Reports</a>
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
                <h1 style="color:#FDD700;" class="px-3 my-4"><strong>Reports</strong></h1>
            </div>
            <p class="fw-bold fw-5 mt-lg-3 px-lg-3">List of Reports</p>
            <!-- SEARCH AND ADD ADMIN BUTTON -->
            <div class="row justify-content-between px-lg-3">
                <div class="col-auto">
                    <form class="input-group" method="POST" action="#">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit" name="search">
                                <i class="fas fa-search z-index-master"></i>
                            </button>
                        </div>
                </div>
                <div class="col-auto text-end">
                    <button class="btn btn-sm text-white" name="download" style="background-color: #27235e;"
                        type="button" data-bs-toggle="modal" data-bs-target="#addOfficer">
                        Download Report
                    </button>
                </div>
                </form>
            </div>
            <!-- TABLE FOR REPORTS -->
            <div class="row justify-content-between mt-4">
                <div class="col">
                    <form action="#" method="POST">
                        <div class="table-responsive">
                            <table class="table table-borderless text-center">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Venue</th>
                                        <th scope="col">Total Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">
                                            <input type="checkbox">
                                        </td>
                                        <td scope="col">
                                            <a href="#" class="">sample</a>
                                        </td>
                                        <td scope="col">sample</td>
                                        <td scope="col">sample</td>
                                        <td scope="col">sample</td>
                                        <td scope="col">sample</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <!-- TABLE FOR REPORTS -->

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