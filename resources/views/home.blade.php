@extends('layout.main')

@section('home')
<section>
    <div class="container mt-2">
        <!-- ======================================================== -->
        <!-- ======================================================== -->
		<style>
			.btn{
				background-color: #FF9106;
				border-radius: 10px;
			}
		</style>		
		<table width="95%" align="center" >
		<div class="cor pt-20 align-self-center">
		<tr >
			<td width="30%">
			<form action="/jns/tambah" method="post" enctype="multipart/form-data">
				 @csrf
				<div class="d-grid gap-1">
					{{-- <input type="hidden" value="{{ getNoTrx() }}" name="trxNo"> --}}
					{{-- <input type="hidden" value="1" name="StoreID"> 
					<input type="hidden" value="1" name="trxNo">  --}}
					{{-- <input type="hidden" value="{{ $tanggal }}" name="tgl">  --}}
					<input type="hidden" value="Dine In" name="jnstrx"> 
					<button class="btn mt-1 p-2 text-white" id="" type="submit">DineIn</button>
				</div>
			</form>
			</td >
			<td width="30%">
			<form action="/jns/tambah" method="post" enctype="multipart/form-data">
				 @csrf
				<div class="d-grid gap-1">
					<input type="hidden" value="Take Away" name="jnstrx">  
					<button class="btn mt-1 p-2 text-white" id="" type="submit">Take Away</button>
				</div>
			</form>
			</td>
			<td width="30%">
			<form action="/jns/tambah" method="post" enctype="multipart/form-data"> 
				 @csrf
				<div class="d-grid gap-1">
					<input type="hidden" value="Delivery" name="jnstrx"> 
					<button class="btn mt-1 p-2 text-white" id="" type="submit" >Delivery</button>
				</div>
			</form>
			</td>
		</tr>	
		</div>
		</table>	
        <!-- ======================================================== -->
        <!-- ======================================================== -->
        <div class="col-12 ">
            <h1 class="text-center">KEDAI KANTIN {{ getNoTrx() }}</h1>  
            <h2 class="text-center">{{ getSegment() }}</h2>
        </div> 

		
        <div id="card-kedai" class="row mt-4">
            @foreach($datas as $key)
          
       
                {{-- <input type="hidden" name="menu"> --}}
                {{-- <div class="col-4 mb-4 d-flex justify-content-center">
                    <form action="" method="post" id="input">
                        @csrf
                        @method('PUT')
                        {{-- <input type="hidden" value="{{ getNoTrx() }}" name="trxNo"> --}}
                        {{-- <input type="hidden" value="{{ updateTrx( getNoTrx(), getKantin()) }}" name="trxNo"> --}}
                        {{-- <a onclick="document.getElementById('input').submit()" href="{{ url('menu/'.$key->StoreID) }}">
                            <div class="card rounded">  
                                <img src="/assets/images/store/{{ $key->Image }}" class="card-img-top">       
                                <h6 class="card-title"><b>{{ $key->StoreName }}</b></h6>
                            </div>
                        </a>
                     </form>
                </div> --}} 

                <div class="col-4 mb-4 d-flex justify-content-center">
              
                        {{-- <input type="hidden" value="{{ getNoTrx() }}" name="trxNo"> --}}
                        {{-- <input type="hidden" value="{{ updateTrx( getNoTrx(), getKantin()) }}" name="trxNo"> --}}
                        <a href="{{ url('menu/'.$hash->encodeHex($key->StoreID)) }}">
                            <div class="card rounded">  
                                <img src="/assets/images/store/{{ $key->Image }}" class="card-img-top">       
                                <h6 class="card-title"><b>{{ $key->StoreName }}</b></h6>
                            </div>
                        </a>
                  
                </div>

                  
             
                
         
            @endforeach
        </div>
          
    
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-4 ">
            <h5 class="text-center" style="color: #A3A3A3">Mendukung Pembayaran : </h5>
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