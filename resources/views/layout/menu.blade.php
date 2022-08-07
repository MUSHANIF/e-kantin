<?php
        $store = '2';
        $ProdID ='0';
        $name ='0';
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <link rel="stylesheet" href="{!! asset('assets/css/select2.min.css') !!}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    
    
    <title>e-Canteen</title>
<body>
    @include('partials.new-navbar')
    <section>
        @yield('menu')
        @include('sweetalert::alert')
    </section>
    
    <section>
        @include('partials.footer')
    </section>

   
    <script>
        $(document).ready(function() {
    $('#form').select2();
});
    </script>
     @if(getSumOfOrder() != 0 )
     <script>
         
            function deleted(){
                Swal.fire({
                    title: 'Info!',
                    text: "Yakin anda ingin membatalkan semua pesanan anda?",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya, saya batalkan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('input').submit()
                    }
                })
             }
          
        
        
     </script>
     @else
     <script>
         function deleted(){
            window.location.href = "/";
         }
     </script>
     @endif
</body>
</html>
