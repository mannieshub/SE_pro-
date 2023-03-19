<?php
session_start(); // Start the session

isset($_SESSION['role']) ? $ro = $_SESSION['role'] : $ro = "";
if ($ro == "") {
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
    <title>Addcourse</title>
    <link rel="stylesheet" href="global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      nav{
        background: #EDDCBC;
      }
      button{
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
      $(function(){
        $("#navbar").load("nav_page.php");
      });
      </script>
</head>
<body>
  <div id="navbar" class="mb-5"></div>
  <div class="container">
    <div class="row">
    <div class="col-4">

    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          <h3>Add Course to Database</h3>
        </div>
        <div class="card-body">
            <form action="addcourse_save.php" method="post">
              <br>
              <label for="topic">Select a Topic:</label>
              <select id="topic" name="topic">
                <option value="addcourse">------Add Course------</option>
              </select>
              <div class="mb-3 mt-3 row">
                <label class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                  <input type="text" placeholder="EX.08001112" class="form-control" name="CourseID" required>
                </div>
              </div>
              <div class="mb-3 mt-3 row">
                <label class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                  <input type="text" placeholder="EX.English" class="form-control" name="CourseName" required>
                </div>
              </div>
              
              <label for="message">CourseDetail:</label>
              <br>
              <textarea id="message" name="detail" class="form-control" rows="8" required ></textarea>
              <br>
              <input type="submit" value="Submit">
            </form>
        </div>
      </div>
      
    </div>
    <div class="col-4">
      
    </div>
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 text-center mt-3 fs-5"><a href="homepage.php"> Back to homepage</a></div>
      <div class="col-4"></div>
    </div>
  </div>
  </div>
  
  
</body>
</html>