@extends('layout.main')

@section('home')
<section>
    <div class="container mt-4">
        <div class="col-12">
            <h1 class="text-center">KEDAI KANTIN</h1>  
        </div> 

     
        <div id="card-kedai" class="row mt-4">
            
            <div class="col-4 mb-4 d-flex justify-content-center">
                <a href="{{ url('menu') }}">
                    <div class="card rounded">  
                        <img src="assets/images/kedai1.jpg" class="card-img-top">       
                        <h6 class="card-title"><b>Kakakaka</b></h6>
                    </div>
                </a>
            </div>
        
             <div class="col-4 mb-4 d-flex justify-content-center">
                <a href="">
                    <div class="card rounded">
                        <img src="assets/images/kedai2.jpg" class="card-img-top">       
                        <h6 class="card-title"><b>KEDAI BANG JAW</b></h6>
                    </div>
                </a>
            </div>           
            <div class="col-4 mb-4 d-flex justify-content-center">
                <a href="">
                    <div class="card rounded">
                        <img src="assets/images/kedai3.jpg" class="card-img-top">       
                        <h6 class="card-title"><b>KEDAI BU SOIH</b></h6>
                    </div>
                </a>
            </div>
             <div class="col-4 mb-4 d-flex justify-content-center">
                <a href="">
                    <div class="card rounded">
                        <img src="assets/images/kedai4.jpg" class="card-img-top">       
                        <h6 class="card-title"><b>KEDAI BU AMIN</b></h6>
                    </div>
                </a>
            </div>
             <div class="col-4 mb-4 d-flex justify-content-center">
                 <a href="">
                    <div class="card rounded">
                        <img src="assets/images/kedai5.jpg" class="card-img-top" >       
                        <h6 class="card-title"><b>KEDAI KANG JOS</b></h6>
                    </div>
                </a>
            </div>
            <div class="col-4 mb-4 d-flex justify-content-center">
                 <a href="">
                    <div class="card rounded">
                        <img src="assets/images/kedai6.jpg" class="card-img-top" >       
                        <h6 class="card-title"><b>KEDAI BU NUR</b></h6>
                    </div>
                </a>
            </div>
        </div>     
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-4 ">
            <h5 class="text-center" style="color: #A3A3A3">Di Dukung Oleh : </h5>
        </div>
        <div class="row mt-2 mb-5">
            <div class="d-flex justify-content-center -2">
                <img src="assets/images/trx/gopay.png" alt="Gopay" style="width: 3rem">
                <img src="assets/images/trx/ovo.png" alt="Ovo" style="width: 3rem">
                <img src="assets/images/trx/dana.png" alt="Dana" style="width: 2rem">
                
            </div>
        </div>
    </div>
</section>
  
@endsection