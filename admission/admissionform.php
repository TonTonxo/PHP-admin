<!-- 
session_start();
if (isset($_SESSION["user"])) {
    header("location: ../admin dashboard/adminhome.php");
}

 -->
 <?php

    // $host="localhost";
    // $user="root";
    // $password="";
    // $db="sofe_final";

    // $data=mysqli_connect($host, $user, $password, $db);
    // if($data===false)
    // {
    //   die("connection error");
    // }

    // if($_SERVER["REQUEST_METHOD"]=="POST")
    // {
    //   $username = $_POST["username"];
    //   $password = $_POST["password"];

    //   $sql= "select * from admin where username ='".$username."' AND password ='".$password."' ";

    //   $result=mysqli_query($data, $sql);

    //   $row=mysqli_fetch_array($result);

    //   if($row["usertype"]=="admin")
    //   {
    //     header("location:../admin dashboard/adminhome.php");
    //   }
    //   else
    //   {
    //     echo "Username and password incorrect";
    //   }
    // }

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="../img/universitylogo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <!-- styles CSS -->
    <link rel="stylesheet" href="../css/admission.css">

    

    <title>Our Lady of Fatima University Quezon City</title>
  </head>
  <body>
    <div class="head-main">
      <header class="header">
        <nav class="navbar navbar-expand-lg  border-bottom border-4 border-success">
          <div class="container-fluid d-flex justify-content-center">
            <div class="nav-logo d-none d-sm-flex ms-3 mt-3">
              <a class="navbar-brand" href="../homepage/home.php">
                <img class="img-fluid" src="../img/logo.png" alt="">
                <p class="lead my-0 text-success">Our Lady of Fatima University Admission Form</p>
              </a>
            </div>
            <div class="nav-logo-sm d-sm-none ms-3">
              <a class="navbar-brand" href="#">
                <img class="img-fluid" src="../img/university-seal2.png" alt="">
              </a>
            </div>
            
            
          </div>
    
        </nav>
        <div class="container">
          <ul class="nav nav-tabs">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Application</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Contact Info</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Previous School</a>
              </li>
          </ul>
        </div>
        
        
      </header>
      <main class="main">
        <div class="container-fluid">
          <div class="container rounded col-8 p-5 m-5">
            <div class="col-3 mb-3">
              <label for="semester" class="form-label">Semester</label>
              <select class="form-select" aria-label="Default select example" id="semester">
              <option selected>Pick Semester</option>
              <option value="1">First Semester</option>
              <option value="2">Second Semester</option>
              <option value="3">Summer</option>
            </select>
            </div>
            <div class="mb-3">
              <label for="lname" class="form-label">Last Name *</label>
              <input type="text" class="form-control" id="lname" placeholder="Last Name">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Another label</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Another label</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
            </div>
            <div class="row mb-3">
            <label for="inputBDay" class="form-label">Date of Birth *</label>
            <div class="col-md-4">
              <select id="inputBDay" class="form-select">
                <option selected>Month</option>
                <option>January</option>
                <option>Febuary</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
            </div>
            <div class="col-md-4">
              <select id="inputBDay" class="form-select">
                <option selected>Day</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>

              </select>
            </div>
            <div class="col-md-4">
              <select id="inputBDay" class="form-select">
                <option selected>Year</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>

              </select>
            </div>
            </div>
            <div class="mb-3 col-6">
              <label for="formGroupExampleInput2" class="form-label">Another label</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
            </div>
            <div class="col-md-2">
              <label for="gender" class="form-label">Sex/Gender *</label>
              <select id="gender" class="form-select">
                <option selected>Sex/Gender</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <div class="col">
              <label for="gender" class="form-label">Seeking Admission as *</label>
              <select id="gender" class="form-select">
                <option selected>Admission type</option>
                <option>Freshman</option>
                <option>Transferee</option>
                <option>Degree Holder</option>
              </select>
            </div>
            
            
          </div>
        


            
        </div>
      </main>
    </div>
    <footer class="footer-distributed">

      <div class="footer-left">
          <img src="../img/olfulogo4.png" alt="">
      
          <p class="footer-company-name">Copyright © 2023 <strong>Our Lady of Fatima University</strong> All rights reserved</p>
      </div>
      
      <div class="footer-center">
          <div>
              <i class="fa-solid fa-location-dot"></i>
              <p><span>#1 Esperanza St., Hilltop Mansion Heights, Lagro,</span>
              Quezon City</p>
          </div>
      
          <div>
              <i class="fa fa-phone"></i>
              <p>(02)8891-3198/ (02) 84206003/89625964</p>
          </div>
          <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:basiceducation-qc@fatima.edu.ph">basiceducation-qc@fatima.edu.ph</a></p>
          </div>
      </div>
      <div class="footer-right">
          <p class="footer-company-about">
              <span>About Us</span>
              <strong>Our Lady of Fatima University</strong> The university has a vibrant student culture and is known as the “Home of the Topnotchers”. Is there anything else you would like to know about OLFU QC?
          </p>
          <div class="footer-icons">
              <a href="https://www.facebook.com/groups/2371826923036754/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
              <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              <a href="#" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
              <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          </div>
      </div>
      </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script>
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.search');
        icon.onclick = function()
        {
            search.classList.toggle('active')
        }
    </script>
    <script>
      // js for sticky navbar
      var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
        // end of js sticky navbar
    </script>
  </body>
</html>