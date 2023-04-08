<?php
session_start();
isset($_SESSION['role']) ? $ro = $_SESSION['role'] : $ro = "";
if ($ro != "Admin") {
    header("Location: index.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        nav {
            background: #EDDCBC;
        }

        button {
            background: #F1BB93;
        }

        .sidebar {
            background-color: #EDDCBC;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 60px;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
    <script>
        $(function() {
            $("#navbar").load("nav_page.php");
        });

        function password_show_hide(inputId, showId, hideId) {
            let x = document.getElementById(inputId);
            let show_eye = document.getElementById(showId);
            let hide_eye = document.getElementById(hideId);
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <div id="navbar" class="mb-3"></div>
    <div class="container">
        <form action="Admin_addsave.php" method="post">
        
        <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                <?php
          if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 1) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Database Error
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION["p_error"]);
          } else if (isset($_SESSION["p_error"]) && $_SESSION["p_error"] == 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Success
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION["p_error"]);
          } 
          ?>
                    <div class="card text-dark bg-white border-warning">
                        <div class="card-header bg-warning text-white">
                            <center>Add Data</center>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3 ">

                                <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Database Table Select : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <select class="form-select form-control" aria-label="Default select example" id="table-select" name="option">
                                                <option selected>---( Database Table )---</option>
                                                <option value="coursedb">coursedb</option>
                                                <option value="teacherdb">teacherdb</option>
                                                <option value="teacherteach">teacherteach</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div id="input-boxes">
                                    <!-- Input boxes will be added dynamically here -->
                                </div>

                                <script>
                                    const tableSelect = document.getElementById('table-select');
                                    const inputBoxes = document.getElementById('input-boxes');

                                    tableSelect.addEventListener('change', (event) => {
                                        // Clear the input boxes
                                        inputBoxes.innerHTML = '';

                                        if (event.target.value === 'coursedb') {
                                            inputBoxes.innerHTML = `
                                            <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Course ID : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="CourseID" placeholder="Course ID">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Course Name : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="CourseName" placeholder="Course Name">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Unit : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="Unit" placeholder="Unit">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Course Detail : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <textarea type="text" class="form-control" name="CourseDetail" placeholder="Course Detail"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                            <div class="row mb-3">
                                <div class="col-1"></div>
                                <div class="col-md-10 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-warning btn-sm bi bi-save w-75"> Save </button>

                                </div>
                                <div class="col-1"></div>
                            </div>
                                                                    `;
                                        } else if (event.target.value === 'teacherdb') {
                                            inputBoxes.innerHTML = `
                                        <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Short Name : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ShortName" placeholder="Short Name">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Teacher Name : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="TName" placeholder="Teacher Name">
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                            <div class="row mb-3">
                                <div class="col-1"></div>
                                <div class="col-md-10 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-warning btn-sm bi bi-save w-75"> Save </button>

                                </div>
                                <div class="col-1"></div>
                            </div>
                                    
                                    
                                                                    `;
                                        } else if (event.target.value === 'teacherteach') {
                                            inputBoxes.innerHTML = `
                                        <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Course ID : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="CourseID" placeholder="Course ID">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label">Short Name : </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ShortName" placeholder="Short Name">
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                            <div class="row mb-3">
                                <div class="col-1"></div>
                                <div class="col-md-10 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-warning btn-sm bi bi-save w-75"> Save </button>

                                </div>
                                <div class="col-1"></div>
                            </div>
                                                                    `;
                                        }
                                    });
                                </script>



                            </div>
                        </div>
                    </div>
                    
                </div>
        </form>
    </div>

</body>

</html>