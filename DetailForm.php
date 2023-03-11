<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseDetail</title>
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
    </script>
</head>

<body>
<div id="navbar"></div>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card my-4 text-dark bg-white border-info">
                    <div class="card-header text-white bg-info">
                        <div class="card-title">
                            <h4 class="bi bi-person-circle">&nbsp;<?= "CourseID"; ?></h4> <!-- From ID method get -->
                        </div>
                        <div class="card-subtitle">
                            [ <?= "CourseName" ?> ]
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h5><?= "DetailCourse" ?></h5>
                        </div>
                        <div class="card-subtitle">
                            <p>&nbsp;&nbsp;<?= "--" ?></p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#id<?= $row['0'] ?>-2" aria-expanded="false" aria-controls="collapseExample">
                            ดูความคิดเห็น (<?= "CommentCount" ?>)
                        </button>
                        <button class="btn btn-success mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#id<?= $row['0'] ?>-3" aria-expanded="false" aria-controls="collapseExample">
                            แสดงความคิดเห็น
                        </button>
                        <div class="collapse" id="id<?= $row['0'] ?>-2"> <!-- Comment loop fetch -->
                            <?php
                            $result = $conn->query("SELECT c.* , u.name FROM comment c , user u WHERE c.user_id = u.id AND c.post_id = " . $row['0'] . ";");

                            foreach ($result as $row1) {

                            ?>

                                <div class="container">
                                    <div class="card my-4 text-dark bg-white border-warning">
                                        <div class="card-header text-white bg-warning ">
                                            <div class="card-title">
                                                <h4 class="bi bi-person-circle">&nbsp;<?= $row1['5'] ?></h4>

                                            </div>
                                            <div class="card-subtitle">
                                                <?= $row1['2'] ?>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="card-subtitle">
                                                <p>&nbsp;&nbsp;<?= $row1['1'] ?></p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="collapse" id="id<?= $row['0'] ?>-3">
                        <div class="card text-dark bg-white border-success mx-5 my-3">
                            <div class="card-header bg-success text-white">แสดงความคิดเห็น</div>
                            <div class="card-body">
                                <form action="post_save1.php" method="post">
                                    <input type="hidden" name="post_id" value="<?= $row['0'] ?>">
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-lg-10">
                                            <textarea name="comment" class="form-control" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center>
                                                <button type="submit" class="btn btn-success btn-sm text-white">
                                                    <i class="bi bi-box-arrow-up-right me-1"></i>
                                                    ส่งข้อความ
                                                </button>
                                            </center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-1"></div>
        </div>

    </div>
</body>

</html>