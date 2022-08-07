<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    {{-- <style>
        #DetailOrder .input-group{
        font-weight: 400;
        }

        .trans{
            width: 100;
        }

        #DetailOrder .detail-order{
            border: 1px solid rgba(229, 229, 229, 0.56);
            box-sizing: border-box;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            background-color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            /* margin-bottom: 15px; */
            margin-top: 15px;  
        }

        .new a{
            color: white;
            font-weight: 500;
        }

        .link{
            color: white;
        }

        .link:hover{
            color: rgb(228, 224, 224);
        }

        #DetailOrder hr .detail-order{
            width: 100;
            color: #E5E5E5;
        }

        #DetailOrder p{
            font-size: 16px;
            color: #000000;
            margin-left: 8px;
        }

        #DetailOrder a{
            text-decoration: none;
        }

        #DetailOrder .counter{
            border: none;
            text-align: center;
            font-weight: 400;
            width: 30px;
        }

        .btnorder{
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
        
        .detail{
            background-color: white;
            padding-top: 80px;
        }
    </style> --}}
    <title>{{ $title }}</title>
<body>
      @include('partials.navbar3')
    <section class="container">
        @yield('detail-order')
    </section>

    
    

    @include('partials.footer')
    
    {{-- @include('partials.button-dtl') --}}


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     {{-- <script>
        $('.btn-number').click(function(e){

            
        e.preventDefault();
    
            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {
            
                    if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                    } 
                    if(parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if(type == 'plus') {

                    if(currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                 }
            } else {
                input.val(0);
                }
            });
            $('.input-number').focusin(function(){
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number').change(function() {
    
                minValue =  parseInt($(this).attr('min'));
                maxValue =  parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());
    
                name = $(this).attr('name');
                if(valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if(valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
    
    
            });
            $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
     </script> --}}
     <script>
        const counter1 = document.getElementById("counter1");
        let counterValue1 = counter1.value;

        function handleCounterMin1() {
            counter1.value = --counterValue1;
        }

        function handleCounterPlus1() {
            counter1.value = ++counterValue1;
        }

        const counter2 = document.getElementById("counter2");
        let counterValue2 = counter2.value;

        function handleCounterMin2() {
            counter2.value = --counterValue2;
        }

        function handleCounterPlus2() {
            counter2.value = ++counterValue2;
        }

        const counter3 = document.getElementById("counter3");
        let counterValue3 = counter3.value;

        function handleCounterMin3() {
            counter3.value = --counterValue3;
        }

        function handleCounterPlus3() {
            counter3.value = ++counterValue3;
        }

        const counter4 = document.getElementById("counter4");
        let counterValue4 = counter4.value;

        function handleCounterMin4() {
            counter4.value = --counterValue4;
        }

        function handleCounterPlus4() {
            counter4.value = ++counterValue4;
        }

        const counter5 = document.getElementById("counter5");
        let counterValue5 = counter5.value;

        function handleCounterMin5() {
            counter5.value = --counterValue5;
        }

        function handleCounterPlus5() {
            counter5.value = ++counterValue5;
        }
    </script>

    


</body>
</html>
