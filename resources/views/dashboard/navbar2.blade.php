<?php 
$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('assets/login/fonts/icomoon/style.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/login/css/owl.carousel.min.css') !!}">

    <!-- Bootstrap CSS login -->
    <link rel="stylesheet" href="{!! asset('assets/login/css/bootstrap.min.css') !!}">
    
    <!-- Style login-->
    <link rel="stylesheet" href="{!! asset('assets/login/css/style.css') !!}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      #form {
    width: 100%;
    padding-top: 10px;
      }

      #form .form-control {
          border-radius: 20px;
          background-color: #fee7ad;
          border-color: #f0e2e2;
          width: 100%;
          
      }

      #form .btn {
          color: #fbf2f2;
          background-color: #FF9106;
          border: none;
          border-radius: 20px;
          text-align: center;
          width: 50%;
      }

      #form .btn:hover {
          background-color: #fdb504;
          border-color: #f0e2e2;
      }

      #form a {
          color: #452c7c;
          text-decoration: none;
          font-weight: 40px;
      }

      #form a:hover {
          color: blue;
      }

      #form .link:hover {
          color: #ca3433;
      }

    </style>
    <title>Login</title>
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <a href="" class="text-white justify-content-center align-self-center" style="text-decoration: none"><img src="/assets/images/logo1.png" alt="Logo e-Canteen" style="width: 30px"><b class="ps-2">e-Canteen</b></a>
          <ul class="nav-menu" align="center">
            <li class="nav-item ms-auto">
                
              <a href="{{ url('/') }}" class="nav-link"><i class="bi bi-box-arrow-in-left"></i>Kembali </a>
            </li> 
             
          </ul>
          <div class="hamburger">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </div>
      </nav>
    </header>

        <div class="container mt-4">
            @yield('container')
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      const hamburger = document.querySelector(".hamburger");
      const navMenu = document.querySelector(".nav-menu");

      hamburger.addEventListener("click", mobileMenu);

      function mobileMenu() {
          hamburger.classList.toggle("active");
          navMenu.classList.toggle("active");
      }
//       const navLink = document.querySelectorAll(".nav-link");

// navLink.forEach(n => n.addEventListener("click", closeMenu));

// function closeMenu() {
//     hamburger.classList.remove("active");
//     navMenu.classList.remove("active");
// }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
     function coba() {
     Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
        })
      }
</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="{!! asset('assets/login/js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('assets/login/js/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/login/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/login/js/main.js') !!}"></script>
  </body>
</html>