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
    <link rel="stylesheet" href="../css/home.css">

    <title>Our Lady of Fatima University Quezon City</title>
  </head>
  <body>
    <div class="head-main vh-100 overflow-hidden">
      <header class="header">
        <nav class="navbar navbar-expand-lg  border-bottom border-4 border-success">
          <div class="container-fluid">
            <div class="nav-logo  ms-3 mt-3"> 
              <!-- d-none d-sm-flex -->
              <a class="navbar-brand align-items-end" href="#">
                <img class="img-fluid" src="../img/logo.png" alt="">
                <p class="lead my-0 me-3">Quezon City</p>
              </a>
            </div>
            <!-- <div class="nav-logo-sm d-sm-none ms-3">
              <a class="navbar-brand" href="#">
                <img class="img-fluid" src="../img/university-seal2.png" alt="">
              </a>
            </div> -->
            <div class="d-none d-lg-flex ul-form" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link" href="../portal/portal.php">OLFU Portal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Our Program</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../admission/admissionform.php">Apply Now</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                
              </ul>
              <form class="d-flex align-content-end">
                <div class="search-btn">
                  <div class="search active">
                      <div class="icon"></div>
                      <div class="input">
                          <input type="text" placeholder="search" id="mysearch">
                      </div>
                      <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
                  </div>
              </div>
              </form>
              
            </div>
            <button class="btn btn-success d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa fa-bars" aria-hidden="true"></i></button>
        
              <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                  <div class="offcanvas-title nav-logo" id="offcanvasScrollingLabel">
                    <a class="navbar-brand" href="#">
                      <img class="img-fluid" src="../img/logo.png" alt="">
                    </a>
                  </div>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="../portal/portal.php">OLFU Portal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Our Program</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="../admission/admissionform.php">Apply Now</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admission
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../admission/admissionform.php">Apply Now!</a></li>
                        <li><a class="dropdown-item" href="#">Enroll Now</a></li>
                        <li><a class="dropdown-item" href="#">About Admission</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">School Calendar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Links</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Campus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Canvas</a>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </nav>
        <nav id="navbar">
          <ul class="nav justify-content-center d-none d-lg-flex" id="menu">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admission
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../admission/admissionform.php">Apply Now!</a></li>
                <li><a class="dropdown-item" href="#">Enroll Now</a></li>
                <li><a class="dropdown-item" href="#">About Admission</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">School Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Links</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Campus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Canvas</a>
            </li>
          </ul>
        </nav>
        
        
      </header>
      <main class="main">
        <div class="container-fluid">
          <section class="section">
              <div class="logo-center">
                  <img src="../img/university-seal2.png" class="image_logo10" alt="">
              </div>
              <div class="olfu-name">
                  <h2>OUR LADY OF FATIMA <span>UNIVERSITY</span></h2>
              </div>
              <div class="button-apply">
                  <button class="btn btn-center"><a href="../admission/admissionform.php">APPLY NOW</a></button>
              </div>
          </section>
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