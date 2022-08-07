<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('/assets/css/style.css') !!}">
    <script src="https://unpkg.com/vue@3"></script>
    <script src="{!! asset('/assets/js/vue.js') !!}"></script>
    <title>e-Canteen</title>
    {{-- <style>
        * {
            box-sizing: border-box;
        }

        .btnBayar{
            background-color: #ff9106;
            border: none;
            border-radius: 8px;
            color: white;
            padding: 8px 150px;
            font-size: 22px;
            text-align: center;
            font-weight: 600;

            /* position: relative; */
        }

        .btnBayar:hover {
            background-color: #ffa63a;
            color: white;
        }

        /* #BtnBayar {
            position: fixed;
            bottom: 30px;
        } */

        .detail{
            background-color: white;
            padding-top: 80px;
        }

        #DetailBayar .input-group{
            font-weight: 400;
        }

        .detail-trans{
            border: 1px solid rgba(229, 229, 229, 0.56);
            box-sizing: border-box;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            background-color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 15px;
            margin-bottom: 15px;
            margin-top: 15px;
        }
        .pajak {
            font-weight: 200;
        }
        #card-menu .card .card-action {
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        #card-menu .card-action .btn {
            font-size: 0.64rem;
            font-weight: bold;
            background-color: #e3ebf3;
            border: none;
            outline: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.2s;
        }

        .card-action .btn:hover {
            transform: scale(1.1, 1.1);
        }
        .card-action .btn:active {
            transform: unset;
        }

        .card-action .counter {
            width: 30px;
            text-align: center;
            padding: 8px;
            outline: none;
            border: none;
            font-weight: bold;
            background-color: unset;
            font-size: 0.8rem;
            color: #000000;
        }

        .box{
            background-color: white;
            background-size: cover;
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
    </style> --}}
<body>
     @include('partials.navbar3')
    <section>
        @yield('detail-transaction')
    </section>

    @include('partials.footer')

    {{-- @include('partials.button-trx') --}}

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="/vendor/vue/vue.js"></script>
     <script src="https://unpkg.com/vue-toasted"></script>
     
     <script>
        Vue.use(Toasted);
  
        var register = new Vue({
          el: "#register",
          
          data: {
           
            is_open: true,
            
          },
        });
      </script>
</body>
</html>