@extends('layout.menu')

@section('menu')
     <div class="container">
        <div class="m-5 text-center">
		<h2>{{ getKantinName() }}  </h2>
		<h4 class="text-center">{{ getSegment() }}</h4>
		<h4>Order No: {{getNoTrx()}} </h4>
		</div>
      
        <div class="row justify-content-center">
            <div class="col-sm-8 align-self-center">
                @foreach($datas as $key)
                <form action="{{ url('menu/'.$hash->encodeHex($key->StoreID)) }}"  class="align-center" method="GET">
                    @endforeach
                    {{-- <input type="hidden" value="2" name="store"> --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                
                                {{-- <input type="text" class="form-control" name="cari" placeholder="Search" value="{{ request('cari') }}" id="form" > --}}
                                
                                <select class="form-select  mb-3" aria-label=".form-select-lg example" name="cari" id="form"  >
                                    <option value=""><i class="fas fa-search"></i>Cari Menu disini!</option>
                                  
                                    @foreach($datas as $key)
                                    <option value="{{ $key->name }}">{{ $key->name }}</option>
                                    @endforeach
                                  </select>
                               
                                    <div class="input-group-append">
                                        <div class="col-sm-12">
                                        <input type="submit" value="Cari" class="btn btn-secondary" style="background-color: #FF9106">
                                        {{-- <button class="btn btn-outline-secondary" value="cari" type="submit">Cari</button> --}}
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      

        <div id="card-menu" class="row text-center">
           
                @foreach($datas as $key)
                @if(!$datas->isEmpty())
                <div  class="col-6 col-md-3 d-flex justify-content-center">
                    <div class="card mt-4 ">
                        <img class="card-img-top" src="/assets/images/product/{{ $key->images }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="name">{{ $key->name }}</p>
                            <p class="price"><sup>Rp </sup>{{ $key->price }}</p>
                            {{-- <div class="card-action">
                                <button class="btn btn-default btn-number" onclick="handleCounterMin()">-</button>
                                <input type="text" id="counter" class="counter text-center input-number" value="1" min="1" max="30">
                                <button class="btn btn-default btn-number" onclick="handleCounterPlus()">+</button>
                            </div> --}}
                            {{-- <div class="card-action">
                                <input class="text-center ms-2" id="counter" name="counter" type="number" min="1" max="10" value="1" style="width: 100px; margin-buttom: 10px; border: 1px solid #FF9106;">
                            </div> --}}
                            <div class="align-self-center">
                                    {{-- <input type="hidden" value="{{ getKantin() }}" name="StoreID">
                                    <input type="hidden" value="{{ updateTrx() }}" name="trxNo"> --}}
                                    {{-- <button class="btn"  type="submit"  style="background-color: #FF9106; color:aliceblue; border-radius: 10px; width: 100%">Beli</button> --}}
                                @if ($key->unit != '0')
                                <a onclick="document.getElementById('input').submit()" href="{{ url('/condiment/'.$key->ProdID) }} " class="btn"  style="background-color: #FF9106; color:aliceblue; border-radius: 10px; width: 100%"><b>Beli</b></a>
                                @else
                                <a  class="btn"  style="background-color: #e78a10d2; color:aliceblue; border-radius: 10px; width: 100%"><b>Stok Habis!</b></a>
                                @endif
                                    
                            </div>
                        </div>
                    </div>
                </div>
                    
                @else
                    <p class="text-center fs-4">Barang tidak ada!</p>
                
                @endif
              
     
                @endforeach
        </div>
        @if (getSumOfOrder() == 0)
        @else
        <div class="container fixed-bottom pb-2">
            <div class="col-12 detail py-2 ps-4" style="background-color: #F9C449; border-radius: 15px; margin-top: 15px;">
                <div class="row align-items-center">
                    <div class="col-8" style="color: black">
                          <p><b>{{ getKantinName() }}</b></p>
					    <h6> {{ getSumOfOrder()}}</h6>
                      
                    </div>
                    <div class="col-4 text-center">
                        <a href="/detail-order" style="text-decoration: none; color: white;"><b>Review Order</b></a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        

    </div>


@endsection

