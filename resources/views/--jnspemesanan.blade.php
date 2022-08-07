@extends('layout.jnspemesanan')

@section('jnspemesanan')
<?php
clrNoTrx();
clrKantin();
clrKantinName();
clrSegment();
clrProductID();
clrProductQty();
clrSumOfOrder();
?>
<div class="container">
    <h1 class="text-center mt-5">Jenis Pemesanan</h1>
  
    <div class="row pt-3 align-self-center">
        <form action="/jns/tambah" method="post" enctype="multipart/form-data">
             @csrf
            <div class="d-grid gap-2">
                {{-- <input type="hidden" value="{{ getNoTrx() }}" name="trxNo"> --}}
                {{-- <input type="hidden" value="1" name="StoreID"> 
                <input type="hidden" value="1" name="trxNo">  --}}
                {{-- <input type="hidden" value="{{ $tanggal }}" name="tgl">  --}}
                <input type="hidden" value="Dine In" name="jnstrx"> 
                <button class="btn mt-4 p-3 text-white" id="" type="submit">Dine In</button>
            </div>
        </form>
    </div>
    <div class="row pt-3 align-self-center">
        <form action="/jns/tambah" method="post" enctype="multipart/form-data">
             @csrf
            <div class="d-grid gap-2">
                {{-- <input type="hidden" value="{{ getNoTrx() }}" name="trxNo"> --}}
                {{-- <input type="hidden" value="1" name="StoreID"> 
                <input type="hidden" value="1" name="trxNo">  --}}
                 {{-- <input type="hidden" value="{{ $tanggal }}" name="tgl">  --}}
                <input type="hidden" value="Take Away" name="jnstrx">  
                <button class="btn mt-4 p-3 text-white" id="" type="submit">Take Away</button>
            </div>
        </form>
    </div>
    <div class="row pt-3 align-self-center">
        <form action="/jns/tambah" method="post" enctype="multipart/form-data"> 
             @csrf
            <div class="d-grid gap-2">
                {{-- <input type="hidden" value="{{ getNoTrx() }}" name="trxNo"> --}}
                {{-- <input type="hidden" value="1" name="StoreID"> 
                <input type="hidden" value="1" name="trxNo">  --}}
                {{-- <input type="hidden" value="{{ $tanggal }}" name="tgl">  --}}
                <input type="hidden" value="Delivery" name="jnstrx"> 
                <button class="btn mt-4 p-3 text-white" id="" type="submit" >Delivery</button>
            </div>
        </form>
    </div>   
</div>
@endsection