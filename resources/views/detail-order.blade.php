@extends('layout.detail-order')

@section('detail-order')
<section id="DetailOrder">
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-xs-12 mt-2 text-center">
                <h1>Detail Pesanan</h1>
                <hr color="black" >
            </div>

            <div class="container">
                @foreach($order as $key)
                
                <div class="row mt-3 mb-3">
					<form action="{{ route('detail-order.destroy',$key->ProdID) }}"  method="POST" > 
                     @method('delete')
					 @csrf
                 
                    <div class="col col-xs-12 mt-1 mb-1 detail-order">
                        <div class="row">
                            <div class="col col-xs-6 text-left">
                                <h6 class="order-name">{{ $key->ProdID .'-' .$key->Product .' [ ' . str_replace('.00','',$key->Qty) .' ]'  }} </h6>
								<input type="hidden" value="{{ str_replace('.00','',$key->Qty) }}" name="Qty" > 
									<input type="hidden" value="{{ $key->ProdID}}" name="ProdID">
									<button  style="border: none; background-color:transparent; color: blue;" type="submit" class="btn btn-danger ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                    </svg>  Delete</button>
                            </div>
                            <div class="col col-xs-6 text-right" align="right">
                                <h6 class="price"><sup>Rp </sup>{{ $key->Price }}</h6>
                            </div>
                        </div> 
					 </div>
					</form>
                </div>
                @endforeach
                
            </div>

        </div>
    </div>

    <div class="fixed-bottom">
        <div class="d-block col-12 col-xs-12 text-center pt-3 m-auto" id="BtnCustom" align="center" style="background-color: white; ">    
            <a type="button" class="btn btnorder" href="{{ url('detail-transaction') }}">Pesan</a>
        </div>
        <div class="d-block col-12 col-xs-12 text-center m-auto" id="BtnBack" align="center" >
            <a type="button" class="btn btnBack"  type="button" value="Go Back" onclick="window-history.back()">Back</a>
        </div> 
		
    </div>

    
</section>

@endsection