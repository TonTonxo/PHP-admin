<!-- 
session_start();
if (isset($_SESSION["user"])) {
    header("location: ../admin dashboard/adminhome.php");
}

 -->
 <?php

    $host="localhost";
    $user="root";
    $password="";
    $db="sofe_final";

    $data=mysqli_connect($host, $user, $password, $db);
    if($data===false)
    {
      die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $username = $_POST["username"];
      $password = $_POST["password"];

      $sql= "select * from admin where username ='".$username."' AND password ='".$password."' ";

      $result=mysqli_query($data, $sql);

      $row=mysqli_fetch_array($result);

      if($row["usertype"]=="admin")
      {
        header("location:../admin dashboard/adminhome.php");
      }
      else
      {
        echo "Username and password incorrect";
      }
    }

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
    <link rel="stylesheet" href="../css/portal.css">

    

    <title>Our Lady of Fatima University Quezon City</title>
  </head>
  <body>
    <div class="head-main vh-100 overflow-hidden">
      <header class="header">
        <nav class="navbar navbar-expand-lg  border-bottom border-4 border-success">
          <div class="container-fluid d-flex justify-content-center">
            <div class="nav-logo d-none d-sm-flex ms-3 mt-3">
              <a class="navbar-brand" href="../homepage/home.php">
                <img class="img-fluid" src="../img/logo.png" alt="">
                <p class="lead my-0 text-success">Our Lady of Fatima University Portal</p>
              </a>
            </div>
            <div class="nav-logo-sm d-sm-none ms-3">
              <a class="navbar-brand" href="#">
                <img class="img-fluid" src="../img/university-seal2.png" alt="">
              </a>
            </div>
            
            
          </div>
    
        </nav>
        
        
      </header>
      <main class="main">
        <div class="container-fluid">
            <div class="portal-bg p-5 rounded-3 shadow-lg p-3 mb-5 bg-body rounded">
                <section class="section-1 d-none d-md-flex">
                    <img src="../img/olfulogo3.png" alt="">
                </section>
                <section class="section-2">
                    <!--
                      if(isset($_POST["login"])) {
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                        require_once "../database.php";
                        $sql = "SELECT * FROM users WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        if ($user) {
                            if(password_verify($password, $user["password"])) {
                              session_start();
                              $_SESSION["name"] = "yes"; 
                              header("location: ../admin dashboard/adminhome.php");
                              die();
                            }else{
                              echo "<div class='alert alert-danger'>Password does not work</div>";
                            }
                        }else{
                            echo "<div class='alert alert-danger'>Email does not work</div>";
                        }
                      }
                     -->
                    <h2>OLFU PORTAL</h2>
                    <form action="#" method="POST">
                        <div class="input-box">
                            <input type="text" name="username" required>
                            <label for="">USERNAME</label>
                            
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" required>
                            <label for="">PASSWORD</label> 
                        </div>
                        <div class="remember-forgot">
                            <label for="#">
                                <input type="checkbox">Remember me
                            </label>
                            <a href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" name="login" class="btn btn-center">LOGIN</button>
                    </form>
                </section>
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