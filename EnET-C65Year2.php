<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnET C-65 Year 2</title>
    
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
        .navbar.rounded-start {
      height: 60px;
    }

    .navbar-brand.text-dark {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    </style>
    <script>
      $(function(){
        $("#navbar").load("nav_page.php");
      });
      </script>
</head>
<body>
    <!--<nav class="navbar shadow-sm">
        <div class="container">
          <a class="navbar-brand fw-bold text-light fs-3" href="https://cit.kmutnb.ac.th/">CIT</a>
            <div class="col-3">
                <div class="btn-group">
                    <a href="homepage.php" style= "background-color: #F1BB93;"class="btn fw-bold text-light" aria-current="page">MainPage</a>
                    <a href="EnET60.php" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 60</a>
                    <a href="EnET65.php" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 65</a>
                  </div>

          
            </div>
            <div class="col-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="EnET-C 60 Year 1" aria-label="Search">
                    <button class="btn fw-bold text-light" style = "background-color: #F1BB93;"type="submit">Search</button>
                </form>
            
            </div>
            <div class="col-3">
                <div class="dropdown">
                    <button class="btn dropdown-toggle fw-bold text-light" style="background-color: #F1BB93;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Username
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                      <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                      <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </nav>-->
    <div id="navbar"></div>
<div class="container mt-4 ">
    <div class="row mb-4">
      <div class="col-4"></div>
      <div class="col-4">
        <nav class="navbar rounded-start rounded-end"style="background-color: #F1BB93;" >
          <div class="container-fluid">
          <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 2 ภาคการศึกษาที่ 1</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>

    <div class="row">
       
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513220</h5>
                  <p class="card-text">Electronics Practice I</p>
                  <input type="hidden" name="CourseID" value="030513220">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513334</h5>
                  <p class="card-text">Digital Circuit and Logic Design</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Microcontroller Systems</a>
                  <input type="hidden" name="CourseID" value="030513334">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513500</h5>
                  <p class="card-text">Engineering Electronics</p>
                  <input type="hidden" name="CourseID" value="030513500">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513600</h5>
                  <p class="card-text">Electronics Laboratory</p>
                  <input type="hidden" name="CourseID" value="030513600">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513322</h5>
                  <p class="card-text">Object-Oriented Programming</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Data Structure and Algorithm Analysis</a>
                  <input type="hidden" name="CourseID" value="030513322">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">040203211</h5>
                  <p class="card-text">Engineering Mathematics III</p>
                  
                  <input type="hidden" name="CourseID" value="040203211">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">08xxxxxxx</h5>
                  <p class="card-text">Social Sci. & Human. Elective Course</p>
                  <input type="hidden" name="CourseID" value="08xxxxxxx">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">08xxxxxxx</h5>
                  <p class="card-text">Social Sci. & Human. Elective Course</p>
                  <input type="hidden" name="CourseID" value="08xxxxxxx">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
    </div>
</div>

<div class="container mt-4 ">
  <div class="row mb-4">
    <div class="col-4"></div>
    <div class="col-4">
      <nav class="navbar rounded-start rounded-end"style="background-color: #F1BB93;">
        <div class="container-fluid">
        <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 2 ภาคการศึกษาที่ 2</span>
        </div>
      </nav>
    </div>
    <div class="col-4"></div>
  </div>
    <div class="row">
        
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513905</h5>
                  <p class="card-text">Database and Data Technology</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Web Application Development</a>
                  <input type="hidden" name="CourseID" value="030513905">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513335</h5>
                  <p class="card-text">Microcontroller Systems</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Computer Architecture</a>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Computer Practice I</a>
                  <input type="hidden" name="CourseID" value="030513335">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513326</h5>
                  <p class="card-text">Data Structure and Algorithm Analysis</p>
                  
                  <input type="hidden" name="CourseID" value="030513326">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513352</h5>
                  <p class="card-text">Artificial Intelligence</p>
                  
                  <input type="hidden" name="CourseID" value="030513352">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
    </div>
    <div class="row mt-4">
        
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513903</h5>
                  <p class="card-text">Computer Network System and Data Communication</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Cybersecurity</a>
                  <input type="hidden" name="CourseID" value="030513903">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">08xxxxxxx</h5>
                  <p class="card-text">Language Elective Course I</p>
                  <input type="hidden" name="CourseID" value="08xxxxxxx">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">xxxxxxxxx</h5>
                  <p class="card-text">Integrated Elective Course</p>
                  <input type="hidden" name="CourseID" value="xxxxxxxxx">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

       
    </div>
</div>

<div class="container mt-4 ">
  <div class="row">
    <div class="col-4">

    </div>
    <div class="col-4">
      <div aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagination-lg">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="EnET-C65Year1.php">1</a></li>
          <li class="page-item"><a class="page-link" href="EnET-C65Year2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="EnET-C65Year3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="EnET-C65Year4.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </div>
    </div> 
    <div class="col-4"></div>
  </div>
</div>
   
</body>
</html>