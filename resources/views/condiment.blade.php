@extends('layout.condiment')

@section('condiment')
    <div class="container text-center mt-4">
	
		<h2>Menu {{ getKantinName() }}  </h2>
		<h4 class="text-center">{{ getSegment() }}</h4>
		<h4>Order No: {{getNoTrx()}} </h4>
     <hr>
	</div>
<div class="container">
 <form action="condiment" method="POST" id="input" >
	<div class="row">
    <div class="custom-pemesanan">
        <div class="row">
            <div class="col col-xs-12 mt-4 mb-4 detail-trans">
                @foreach ($datas2 as $key) 
                
                <div class="row">
                    <div class="col-8 text-left" style="color: rgb(0, 0, 0)">
                        <h4 class="order-title">{{ $key->name }}</h4>
                    </div>
	                <div class="col-4 text-right" align="right">
                        <h3 class="price" style=""><sup>Rp</sup> {{ $key->price }}</h3>
                    </div>
					{{-- <h4 class="order-name">Jumlah : <span id="demo"></span></h4>
					<div class="slidecontainer" align="center">
                        <input type="hidden" name="ProductQty" value="{{ getProductQty() }}">
					    <input type="range" name="ProductQty" min="1" max="10" value="1" class="slider" id="myRange" align="center" style="width: 80%;">
                        <p> <span id="demo"></span></p>
                    </div> --}}
                    <div class="col-12">
                        <p>{{ $key->desc }}</p>
                    </div>
                </div>
                <hr color="#E52E5E5">
                @if ( $key->unit != '0')
                <div class="row">
                    <h4 class="order-name">Stok : {{ $key->unit }}</h4>
                </div>
                <div class="row">
                    <div class="col-12 text-left">
                        
                        <h4 class="order-name">Jumlah : <span id="demo"></span></h4>
                        <div class="slidecontainer" align="center">
                            <input type="hidden" name="ProductQty" value="{{ getProductQty() }}">
                            <input type="range" name="ProductQty" min="1" max="{{ $key->unit }}" value="1" class="slider" id="myRange" align="center" style="width: 80%;">
                            <p> <span id="demo"></span></p>
                        </div>
                        
                        @else
                        <h4 class="order-name">Stok habis!!!!!</h4>
                        @endif
                        
                        <hr>

                        <h4 class="order-name">
                            Extra for {{ $key->name }} <p class="paragraf">Opsional</p>
                        </h4>
                    </div>
                </div>
                @endforeach
                <hr color="#E52E5E5">

                @foreach ($datas as $item)
                <div class="row">
                    <div class="col col-xs-6 text-left my-3">
                        <h4 class="order-name">
                            {{ $item->name }}
                        </h4>
                    </div>
                    <div class="col col-xs-6 text-right align-self-center" align="right">
                        <div class="row">
                            <div class="col col-xs-11 harga">
                                <h3 class="price me-5 align-self-center">+ {{ $item->price }}</h3> 
                            </div>
                            <div class="col col-xs-1">
                                <input type="checkbox"  id="c1" name="cc" class="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="#E52E5E5">
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="custom-pemesanan">
        <div class="row">
            <div class="col col-xs-12 mt-4 mb-4 detail-trans">
                <div class="row">
                    <div class="col-12 text-left">
                        <h4 class="order-name">
                            Catatan <p class="paragraf">Opsional</p>
                        </h4>                      
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="desc" placeholder="Tambahkan Note Disini!..">
                        </div>
                    </div>
                    
                        
                    <?php $tanggal = date("Y-m-d"); ?>
						
                    <div  align="center" style="padding-top: 15px;">
                        <input type="hidden" name="StoreID" id="" value="{{ getKantin() }}">
                        <input type="hidden" name="trxNo" id="" value="{{ getNoTrx() }}">
                        <input type="hidden" name="tgl" value="{{ $tanggal }}">
                        <input type="hidden" name="jnsTrx" value="{{ getSegment() }}">
                        <input type="hidden" name="ProductID" value="{{ getProductID() }}">
                            
                            
                        <script>
                            var slider = document.getElementById("myRange");
                            var output = document.getElementById("demo");
                            output.innerHTML = slider.value;

                            slider.oninput = function() {
                                output.innerHTML = this.value;
                            }
                        </script>
                    </div>				
                </div>
                <div class="fixed-bottom">
                    <div class="d-block col-12 col-xs-12 text-center pt-3 m-auto" id="BtnBayar" align="center" style="background-color: white">
                        <a onclick="document.getElementById('input').submit()" type="button" class="btn btnCustom" >Order</a>
                    </div>
					<div class="d-block col-12 col-xs-12 text-center m-auto" id="BtnBack" align="center" >
                        <a type="button" class="btn btnBack"  type="button" value="Go Back" onclick="window-history.back()">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>

@endsection