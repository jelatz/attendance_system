<?php
session_start();
include_once "..\back\DBhelper.php";

// $lastname = $_SESSION['name'];

if(isset($_POST['logout'])){
    disconnect();
    header("Location: ..\index.php");
    exit();
}
if(isset($_POST['newEvent'])){
    $eventName = $_POST['event'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $compulsory = $_POST['compulsory'];
    $department = $_POST['department'];

    $add_event = addEvent($eventName, $date, $time, $venue, $department, $compulsory);

    if($add_event){
       echo '<script>alert("new event added!")</script>';
    }
}
?>

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
    <title>Events Page</title>
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-bs-theme="dark">
        <div class="container-fluid flex-lg-column px-lg-0">
            <a href="event.php" class="navbar-brand mb-lg-5 mt-lg-5">Logo</a>
            <div class="welcome-message">
                <h3 class="text-center">Welcome</h3>
                <p class="text-center">Mr. 
                <?php 
                if (isset($_SESSION['name'])) {
                    foreach ($_SESSION['name'] as $value) {
                      echo $value . " ";
                    }
                  }
                  ?>
            </p>
            </div>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-lg-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="event.php" class="nav-link active">Events</a>
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
                        <form action="#"></form>
                            <a href="../back/logout.php" class="nav-link">Logout</a>
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
                <h1 class="px-3 my-4" style="color:#FFD700;"><strong>Events</strong></h1>
            </div>
            <p class="fw-bold fw-5 mt-lg-3 px-lg-3">List of Events</p>
            <!-- SEARCH AND ADD ADMIN BUTTON -->
            <div class="row justify-content-between px-lg-3">
                <div class="col-auto">
                    <form class="input-group">
                        <input type="search" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit" name="searchList">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-auto text-end">
                    <button class="btn btn-sm text-white" style="background-color: #27235e;" type="button"
                        data-bs-toggle="modal" data-bs-target="#addOfficer">Add Event</button>
                </div>
            </div>
            <!-- SEARCH AND ADD EVENT BUTTON -->
            <!-- MODAL FOR ADD EVENT -->
            <div class="modal fade" tabindex="-1" id="addOfficer">
                <div class="modal-dialog modal-dialog-centered" id="admin">
                    <div class="modal-content p-4">
                        <div class="modal-header border-0">
                            <h1 class="modal-title fs-5">Add New Event</h1>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <label for="ename" class="form-label">Event Name:</label>
                                <input type="text" class="form-control" name="event" required>
                                <label for="date" class="form-label mt-2">Date: </label>
                                <input type="date" class="form-control" name="date" required>
                                <label for="time" class="form-label mt-2">Time:</label>
                                <input type="time" class="form-control" name="time" required>
                                <label for="venue" class="form-label">Venue:</label>
                                <input type="text" class="form-control" name="venue" required>
                                <label for="department" class="form-label mt-2">Department:</label>
                                <input type="text" class="form-control" name="department" required>
                                <select name="compulsory" id="compulsory" class="w-100 my-4 px-2" style="height: 2.3rem; border-radius: 15px;">
                                    <option selected>Select if compulsory or not</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 text-center">
                                        <button class="btn btn-small mt-3 w-100 text-white" name="newEvent" type="submit"
                                            style="background-color: #333333;">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL FOR ADD EVENT -->
            <!-- TABLE -->
            <div class="row mt-4 text-center">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Event Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sample</td>
                                    <td>sample</td>
                                    <td>sample</td>
                                    <td>sample</td>
                                    <td>sample</td>
                                </tr>
                            </tbody>
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