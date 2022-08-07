@extends('layout.condiment')

@section('condiment')
    <div class="container">
        <div class="m-5 text-center"><h2>Custom Pemesanan</h2><hr></div>
    </div>
<div class="container">
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
                </div>
                

                <hr color="#E52E5E5">
                <div class="row">
                    <div class="col-12 text-left">
                        <h4 class="order-name">
                            Extra for {{ $key->name }}
                        </h4>
                        <p class="paragraf">Opsional</p>
                    </div>
                    {{-- <div class="col col-xs-6 text-right" align="right">
                    </div> --}}
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
                                <h3 class="price">+ {{ $item->price }}</h3> 
                            </div>
                            <div class="col col-xs-1">
                                <input type="checkbox" id="c1" name="cc" class="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="#E52E5E5">
                @endforeach
                

               
               {{-- <div class="row">
                    <div class="col col-xs-6 text-left my-3">
                        <h4 class="order-name">
                            Telur dadar
                        </h4>
                    </div>
                    <div class="col col-xs-6 text-right align-self-center" align="right">
                        <div class="row">
                            <div class="col col-xs-11 harga">
                                <h3 class="price">+ 2.000</h3> 
                            </div>
                            <div class="col col-xs-1">
                                <input type="checkbox" id="c1" name="cc" class="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="#E52E5E5">
                <div class="row">
                    <div class="col col-xs-6 text-left my-3">
                        <h4 class="order-name">
                            Ayam
                        </h4>
                    </div>
                    <div class="col col-xs-6 text-right align-self-center" align="right">
                        <div class="row">
                            <div class="col col-xs-11 harga">
                                <h3 class="price">+ 5.000</h3> 
                            </div>
                            <div class="col col-xs-1">
                                <input type="checkbox" id="c1" name="cc" class="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="#E52E5E5">
                <div class="row">
                    <div class="col col-xs-6 text-left my-3">
                        <h4 class="order-name">
                            Acar
                        </h4>
                    </div>
                    <div class="col col-xs-6 text-right align-self-center" align="right">
                        <div class="row">
                            <div class="col col-xs-11 harga">
                                <h3 class="price">Gratis</h3> 
                            </div>
                            <div class="col col-xs-1">
                                <input type="checkbox" id="c1" name="cc" class="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="#E52E5E5">
               <div class="row">
                    <div class="col col-xs-6 text-left my-3">
                        <h4 class="order-name">
                            Bawang Goreng
                        </h4>
                    </div>
                    <div class="col col-xs-6 text-right align-self-center" align="right">
                        <div class="row">
                            <div class="col col-xs-11 harga">
                                <h3 class="price">Gratis</h3> 
                            </div>
                            <div class="col col-xs-1">
                                <input type="checkbox" id="c1" name="cc" class="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="#E52E5E5">
               <div class="row"> --}}
                    {{-- <div class="col col-xs-6 text-left my-3"> --}}
                        {{-- <h4 class="order-name">
                            Kerupuk
                        </h4>
                    </div>
                    <div class="col col-xs-6 text-right align-self-center" align="right">
                        <div class="row">
                            <div class="col col-xs-11 harga">
                                <h3 class="price">Gratis</h3> 
                            </div>
                            <div class="col col-xs-1">
                                <input type="checkbox" id="c1" name="cc" class="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>

        
        </div>
    </div>
</div>
<div class="row">
    <div class="custom-pemesanan">
        <div class="row">
            <div class="col col-xs-12 mt-4 mb-4 detail-trans">
                <div class="row">
                    <div class="col col-xs-6 text-left">
                        <div class="col-8" style="color: rgb(0, 0, 0)">
                            
                    </div>
                    <div class="col-12 text-left">
                        <h4 class="order-name">
                            Catatan
                        </h4>
                        <p class="paragraf">Opsional</p>
                    </div>
                    <div class="row">
                        <form>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" placeholder="Tambahkan Note Disini!..">
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
{{-- <button class="tambah-pesanan fixed-bottom" type="submit">Tambah Pesanan</button>  --}}

</div>

@endsection