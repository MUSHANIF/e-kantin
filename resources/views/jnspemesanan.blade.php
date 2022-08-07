
@extends('layout.jnspemesanan') 

@section('jnspemesanan') 
<?php
clrNoTrx();
clrKantin();
clrSegment();
clrProductID();
clrProductQty();
clrSumOfOrder();
?>
<div class="container">
{{-- <h1 class="text-center mt-2">Jenis Pemesanan</h1> --}}
    
        <div class="row pt-3 align-self-center">
        <form action="/jns/tambah" method="post" enctype="multipart/form-data">
             @csrf
            <div class="d-grid gap-2">
                <input type="hidden" value="1" name="trxNo">  
                <input type="hidden" value="Dine In" name="jnstrx"> 
                <button class="btn mt-4 p-3 text-white" id="" type="submit"><b>Dine In</b></button>
            </div>
        </form>
    </div>
    <div class="row pt-2 align-self-center">
        <form action="/jns/tambah" method="post" enctype="multipart/form-data">
             @csrf
            <div class="d-grid gap-2">
                <input type="hidden" value="1" name="trxNo">  
                <input type="hidden" value="Take Away" name="jnstrx">  
                <button class="btn mt-4 p-3 text-white" id="" type="submit"><b>Take Away</b></button>
            </div>
        </form>
    </div>
    <div class="row pt-2 align-self-center">
        <form action="/jns/tambah" method="post" enctype="multipart/form-data"> 
             @csrf
            <div class="d-grid gap-2">
                <input type="hidden" value="1" name="trxNo">  
                <input type="hidden" value="Delivery" name="jnstrx"> 
                <button class="btn mt-4 p-3 text-white" id="" type="submit"><b>Delivery</b></button>
            </div>
        </form>
    </div>   
</div>
@endsection