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
    <title>System Admin Page</title>
</head>

<body>
    <!-- START TOP NAVBAR -->
    <div class="container-fluid mx-0 px-3 top-nav">
        <a href="dashboard.php" class="navbar-brand">LOGO</a>
        <div class="dropdown-center">
            <button type="button" class="btn btn-transparent" data-bs-toggle="dropdown" data-bs-target="#settings" data-bs-theme="dark">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <h5 class="p-2">Admin</h5>
                <li class="dropdown-item m-0 p-2 my-1">
                    <button type="button" class="btn m-0 p-0" onclick="darkmode">Darkmode</button>
                </li>
                <li class="dropdown-item m-0 p-2 my-1">
                    <a href="settings.php" class="nav-link">Settings</a>
                </li>
                <li class="dropdown-item m-0 p-2">
                    <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END TOP NAVBAR -->
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid mx-0 px-0">
            <a href="dashboard.php" class="brand">LOGO</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="welcome">
                        <h3 class="mt-5"><strong>Welcome</strong></h3>
                        <p class="mb-5">Admin!</p>
                    </div>
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown-center">
                        <button type="button" data-bs-toggle="dropdown" class="btn mx-0 px-0 dropdown-toggle border-0">Accounts</button>
                        <ul class="dropdown-menu bg-transparent border-0 p-2 account-dropdown">
                            <li class="nav-item">
                                <a href="admin.php" class="nav-link account">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a href="officer.php" class="nav-link account">Officer</a>
                            </li>
                            <li class="nav-item">
                                <a href="students.php" class="nav-link account">Students</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="event.php" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="departments.php" class="nav-link">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a href="Reports" class="nav-link">Reports</a>
                    </li>
                    <li class="nav-item darkmode">
                        <button type="button" class="btn m-0 p-0" onclick="darkmode">Darkmode</button>
                    </li>
                    <li class="nav-item settings">
                        <a href="settings.php" class="nav-link">Settings</a>
                    </li>
                    <li class="nav-item logout">
                        <a href="#" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <div id="content-wrapper">
        <section>
            <div class="container">
                <div class="row justify-content-evenly mt-5 gap-3">
                    <h1><strong class="text-dark">Dashboard</strong></h1>
                    <div class="col-lg-3 dash">
                        <p class="text-dark">Accounts</p>
                        <p class="text-dark text-end pe-3">15</p>
                    </div>
                    <div class="col-lg-3 dash">
                        <p class="text-dark">Events</p>
                        <p class="text-dark text-end pe-3">15</p>
                    </div>
                    <div class="col-lg-3 dash">
                        <p class="text-dark">Departments</p>
                        <p class="text-dark text-end pe-3">15</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="text-dark">
                        <strong class="text-dark fs-5"> Upcomming Events </strong>
                    </p>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-5">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success text-dark" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Event Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- SCRIPTS -->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>