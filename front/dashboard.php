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
    <title>Teacher Page</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid flex-lg-column gap-5 p-lg-0">
            <a href="#" class="navbar-brand">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="width: inherit;" id="navbarContent">
                <ul class="navbar-nav mb-2 mb-lg-0 gap-2">
                    <li class="nav-item w-100">
                        <a href="dashboard.php" class="nav-link active">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a href="studentes.php" class="nav-link">Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="subjects.php" class="nav-link">Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a href="changePass.php" class="nav-link">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a href="Logout" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->
    <!-- START CONTENT -->
    <div id="content-wrapper">
        <section>
            <div class="row justify-content-end">
                <div class="col-lg-3 text-end">
                    <button class="btn btn-secondary px-5" type="button" data-bs-toggle="modal" data-bs-target="#addTeacher">Add</button>
                </div>
            </div>
            <div class="inner-content">
                <h2>Teachers</h2>
                <div class="table-responsive mt-5">
                    <table class="table table-hover text-center">
                        <thead style="background-color: #AEA8A8;">
                            <tr>
                                <th scope="col" style="border-top-left-radius: 10px;">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Subjects</th>
                                <th scope="col" style="border-top-right-radius: 10px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">sample</td>
                                <td scope="row">jlad</td>
                                <td scope="row">jladaudrey@gmail.com</td>
                                <td scope="row">Math</td>
                                <td scope="row">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#view" class="btn p-0 m-0">
                                    <i class="fa fa-eye text-primary mx-2"></i>
                                    </button>
                                    <button type="button" class="btn p-0 m-0" data-bs-toggle="modal" data-bs-target="#delete">
                                    <i class="fa fa-trash text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- START MODAL FOR VIEW AND DELETE ACTIONS -->
                    <div class="modal fade" id="view">
                        <div class="modal-dialog modal-dialog-centered modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row text-center mt-2">
                                        <div class="col-lg-6">
                                        <i class="fa-regular fa-user fs-1"></i>
                                            <img src="#" alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <h5><strong>Professor Jlad</strong></h5>
                                            <p>Masters in Information Technology</p>
                                        </div>
                                    </div>
                                    <div class="row flex-column text-center">
                                        <div class="col-6">
                                            <p>Email Address:</p>
                                            <p>Date Joined:</p>
                                            <p>Address: </p>
                                            <p>Subjects: </p>
                                        </div>
                                        <div class="col-6">
                                            <p>place all the details here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END MODAL FOR VIEW AND DELETE ACTIONS -->
                <!-- START MODAL FOR DELETE ACTION -->
                    <div class="modal fade" id="delete">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1>Delete Teacher</h1>
                                </div>
                         
                            <div class="modal-body">
                                <p>Are you sure you want to delete this teacher?</p>
                                <div class="row justify-content-center gap-5">
                                    <div class="col-lg-1">
                                        <button class="btn btn-primary">Yes</button>
                                    </div>
                                    <div class="col-lg-1">
                                        <button class="btn btn-danger" data-bs-dismiss="modal" >No</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                <!-- END MODAL FOR DELETE ACTION -->
            </div>
        </section>
    </div>
    <!-- END CONTENT -->
    <!-- START MODAL FOR ADDING TEACHER -->
    <div class="modal fade" id="addTeacher" tabindex="-1" aria-labelledby="addTeacherLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h1 id="addTeacherLabel" class="modal-title fs-5">
                        Add Teacher
                    </h1>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Teacher Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 col-form-label" for="address">Address:</div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 col-form-label" for="email">Email Address: </div>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 col-form-label" for="qualification">Qualifications: </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 col-form-label" for="subjects">Subject: </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 col-form-label" for="dateJoined">Date Joined: </div>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 col-form-label" for="image">Upload Image: </div>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" required accept="image/jpeg, image/png">
                                <small class="text-danger">Only .jpg and .png is allowed*</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input type="submit" name="teacher" value="Submit" class="btn btn-primary w-25 ms-auto me-2 rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL FOR ADDING TEACHER -->
    <!-- SCRIPTS -->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>