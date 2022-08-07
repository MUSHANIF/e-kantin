{{-- <?php
  $tanggal = date("Y-m-d");

?>
<div class="fixed-bottom">
    <form action="condiment" method="POST" id="input" >
        @csrf
       @method('PUT')
         <div class="d-block col-12 col-xs-12 text-center pt-3 pb-5 m-auto" id="BtnBayar" align="center" style="background-color: white">
            <input type="hidden" name="StoreID" id="" value="{{ getKantin() }}">
            <input type="hidden" name="trxNo" id="" value="{{ getNoTrx() }}">
            <input type="hidden" name="tgl" value="{{ $tanggal }}">
            <input type="hidden" name="jnsTrx" value="{{ getSegment() }}">
            <input type="hidden" name="ProductID" value="{{ getProductID() }}">
            <input type="hidden" name="ProductQty" value="{{ getProductQty() }}">
            <input type="hidden" name="namePrint" value="{{ getPesan() }}">
            <input type="range" name="ProductQty" min="1" max="10" value="1" class="slider" id="myRange">
      
            
            {{-- <a href="{{ url('detail-transaction') }}">
                <button type="submit" class="btn btnCustom">Pesan - Order </button>
            </a> --}}
            {{-- <a onclick="document.getElementById('input').submit()" type="button" class="btn btnCustom" >Beli - Order</a> --}}
        {{-- </div> --}}
    {{-- </form> --}}
{{-- </div> --}} --}}