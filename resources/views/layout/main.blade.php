<?php
        $store = '2';
        $ProdID ='0';
        $name ='0';
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>e-Canteen{{ $title }}</title>
  </head>
  <body>
  @include('partials.navbar') 

  <section>
    <div class="container mt-4">
      @include('partials.carousel')
    </div>
  </section>

  {{-- <section>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="border-radius: 15px">
    <div class="carousel-item active">
      <img src="assets/images/carousel.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/carousel.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/carousel.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
  </section> --}}
<section>
    @yield('home')
</section>

<section>
  @include('partials.footer')
</section>




   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      function login(){
          const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
      
        Toast.fire({
          icon: 'success',
          title: 'Signed in successfully'
        })
      }
    </script>
  </body>
</html>