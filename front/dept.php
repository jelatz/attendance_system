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
    <title>Admin Department Page</title>
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
                        <a href="dept.php" class="nav-link active">Departments</a>
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
            <h1 style="color:#FFD700;" class="px-3 my-4"><strong>Departments</strong></h1>
            </div>
            <p class="fw-bold fw-5 mt-lg-3 px-lg-3">List of Departments</p>
            <!-- SEARCH AND ADD ADMIN BUTTON -->
            <div class="row justify-content-between px-lg-3">
                <div class="col-auto">
                    <form class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit" name="search">
                                <i class="fas fa-search z-index-master"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-auto text-end">
                    <button class="btn btn-sm text-white" style="background-color: #27235e;" type="button" data-bs-toggle="modal"
                        data-bs-target="#addOfficer">Add Department</button>
                </div>
            </div>
            <!-- SEARCH AND ADD ADMIN BUTTON -->
            <!-- MODAL FOR ADD ADMIN -->
            <div class="modal fade" tabindex="-1" id="addOfficer">
                <div class="modal-dialog modal-dialog-centered" id="admin">
                    <div class="modal-content p-4">
                        <div class="modal-header border-0">
                            <h1 class="modal-title fs-5">Add New Department</h1>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <label for="dept" class="form-label">Department Name:</label>
                                <input type="text" class="form-control" required>
                                <label for="deptBldng" class="form-label mt-2">Department Building: </label>
                                <input type="text" class="form-control" required>
                                <label for="deptFloor" class="form-label mt-2">Department Floor:</label>
                                <input type="text" class="form-control" required>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 text-center">
                                        <button class="btn btn-small mt-3 w-100 text-white" name="createDept" type="submit"
                                            style="background-color: #333333;">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL FOR ADD ADMIN -->
            <!-- TABLE -->
            <div class="row mt-4 text-center">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Department</th>
                                    <th scope="col">Building</th>
                                    <th scope="col">Floor</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sample</td>
                                    <td>sample</td>
                                    <td>sample</td>
                                    <td class="d-flex gap-2 justify-content-center">
                                        <button class="btn m-0 p-0" data-bs-toggle="modal" data-bs-target="#deptView">
                                            <i class="fa fa-pen-to-square text-primary"></i>
                                        </button>
                                        <button class="btn m-0 p-0" data-bs-toggle="modal" data-bs-target="#deptDelete">
                                            <i class="fa fa-trash text-danger"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- MODAL FOR EDIT DEPARTMENT DETAILS -->
            <div class="modal fade" id="deptView">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content p-4">
                        <div class="modal-header border-0">
                            <h1 class="modal-title fs-5">Department Name</h1>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <div class="row mb-3">
                                    <label for="deptName" class="col-sm-4 col-form-label text-nowrap">Department Name: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="deptName" value="CCS">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="deptBldng" class="col-sm-4 col-form-label">Building: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="deptBldng" value="Jueco">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="deptFloor" class="col-sm-4 col-form-label">Floor: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="deptFloor" value="5">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 text-center">
                                        <button class="btn btn-small mt-3 w-100 text-white" name="updateDept" type="submit"
                                            style="background-color: #333333;">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL FOR EDIT DEPARTMENT DETAILS -->
            <!-- MODAL FOR DELETE DEPARTMENT -->
            <div class="modal fade" id="deptDelete">
                <div class="modal-dialog modal-dialog-centered border-0">
                    <div class="modal-content p-4">
                        <div class="modal-header border-0">
                            <h1 class="modal-title fs-5">Delete Department</h1>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this department?</p>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 text-center">
                                    <button class="btn btn-small mt-3 w-100 text-white" name="deleteDept" type="submit"
                                        style="background-color: #333333;">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL FOR DELETE DEPARTMENT -->
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