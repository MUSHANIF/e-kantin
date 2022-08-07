<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <title>e-Canteen</title>
    <style>
        .custom-pemesanan{
            border: 1px solid rgba(229, 229, 229, 0.56);
            box-sizing: border-box;
            box-shadow: 2px 4px 8px 2px rgba(0, 0, 0, 0.3);
            background-color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 15px;
            margin-top: 15px;
            height: auto;
        }

        .custom-pemesanan .order-name {
            font-size: 18px;
            font-weight: medium;
            color: #000000;
        }

        .custom-pemesanan .paragraf {
            font-size: 15px;
            font-weight: medium;
            color: #707070;
        }

        .custom-pemesanan .price {
            font-size: 15px;
            font-weight: bold;
            color: #707070;
        }

        .custom-pemesanan .price sup {
            font-size: 15px;
            color: #a3a3a3;
        }

        .checkbox {
            height: 25px;
            width: 25px;
            background-color: white;
            border-radius: 8px;
            vertical-align: middle;
            border: 1px solid #dddddd;
            appearance: none;
            -webkit-appearance: none;
            outline: none;
            cursor: pointer;
            box-shadow: 2px 3px 5px 1px rgba(0, 0, 0, 0.3);
        }
        .checkbox:checked {
            background-color: #FF9106;
        }

        .custom-pemesanan .form-control{
            border-radius: 8px;
            background-color: #FDF9F9;
            color: #707070
        }
        /* .tambah-pesanan{
            color: #FFFFFF;
            font-size: 15px;
            background-color: #FF9106;
            padding-top: 20px;
            padding-bottom: 10px;
            padding-left: 5px;
            padding-right: 5px;
            padding-bottom: 15px;
            margin-top: 15px;
            border: none;
            border-radius: 8px; 
            height: auto;
        } */

        /* .btnCustom {
            background-color: #FF9106;
            border: none;
            border-radius: 8px;
            color: white;
            /* padding: 14px 150px; */
            font-size: 22px;
            text-align: center;
            font-weight: 600;
            /* padding: 8px 150px; */
            width: 100%;
            padding-top: 8px;
            padding-bottom: 8px

            /* position: relative; */
        } */
        
        /* .btnCustom:hover {
            background-color: #ffa63a;
            color: white;


        } */


        /* #BtnCustom {
            position: fixed;
        
        } */
    </style>
<body>
    @include('partials.new-navbar')
    <section class="container">
        @yield('condiment')
    </section>

    @include('partials.footer')

 
        
    @include('partials.button-custom')


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
