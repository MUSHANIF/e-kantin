@extends('layout.detail-transaction')
    
@section('detail-transaction')
<section id="DetailTransaction" class="container">
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-xs-12 mt-5 text-center">
                <h1>Detail Pembayaran {{getNoTrx()}} </h1>
                <hr color="black">
            </div>
            <form action="detail-transaction" method="POST" id="input" >
                @csrf
                {{-- @method('PUT') --}}
                <div class="">            
                    <div class="row">
                            <div class="col col-xs-12 mt-4 mb-4 detail-trans">
                                <div class="row ">
                                    <div class="col col-xs-12 text-center">
                                        <h4 class="order-name">Daftar Pesanan</h4>
                                    </div>
                                </div>
                                 <hr color="#E52E5E5">
                                @foreach ($transaction as $item)
                                    <div class="row"> 
                                        
                                        <div class="col col-xs-6 text-left">
                                            <h6 class="order-name">{{ $item->Product .' [ ' . str_replace('.00','',$item->Qty) .' ]'  }} </h6>
                    
                                        </div>
                                        <div class="col col-xs-6 text-right" align="right">
                                            <h6 class="price"><sup>Rp </sup>{{ $item->Price }}</h6>
                                        </div>
                                    </div>                                
                                @endforeach
                            </div>
                        </div>    
               
                    <?php
                        $qty = 0;
                        $netsales = 0;
                        $services = 0;
                        $tax = 0;
                        $disc=0;
                        $sales = 0;
                    
                    ?>
                    @foreach ($transaction as $item)
                        <?php
                            $qty = $qty + $item->Qty;
                            $netsales = $netsales + $item->NetSales;
                            $services = $services + $item->Services;
                            $tax = $tax + $item->Taxs;
                            $sales = $sales + $item->Sales;
                        ?>
                    @endforeach
                
                    <div class="row">
                        <div class="col col-xs-12 mt-4 mb-4 detail-trans">
                            <div class="row ">
                                <div class="col col-xs-6 text-center">
                                    <h4 class="order-name">Detail transaksi</h4>
                                </div>
                            </div>
                            <hr color="#E52E5E5">
                            <div class="row">
                                <div class="col col-xs-6 text-left">
                                    <h5 class="order-name">
                                        Jumlah item yang dipesan
                                    </h5>
                                </div>
                                <div class="col col-xs-6 text-right" align="right">
                                    <h5>
                                        {{ $qty }}
                                    </h5>

                                </div>
                            </div>
                            <hr color="#E52E5E5">

                            <div class="row">
                                <div class="col col-xs-6 text-left">
                                    <h5 class="order-name">
                                        Sub total
                                    </h5>
                                    <h5 class="pajak">services</h5>
                                    <h5 class="pajak">Taxs</h5>

                                </div>

                                <div class="col col-xs-6 text-right" align="right">
                                    <h5>
                                        <sup>Rp {{ $netsales }}</sup>
                                    </h5>
                                    <h5 class="pajak"><sup>Rp {{ $services }} </sup></h5>
                                    <h5 class="pajak"><sup>Rp {{ $tax }}</sup></h5>
                                    

                                </div>
                            </div>
                            <hr color="#E52E5E5">
                            <div class="row">
                                <div class="col col-xs-6 text-left">
                                    <h4 class="order-name">
                                        Total
                                    </h4>

                                </div>

                                <div class="col col-xs-6 text-right" align="right">
                                    <h5>
                                        <sup>Rp {{ $sales }}</sup>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="register">
                        <div class="col col-xs-12 mt-4 mb-4 detail-trans">
                            <div class="row ">
                                <div class="col col-xs-12 text-center">
                                    <h4 class="order-name"><label  for="PayType">Payment Type</label></h4>
                                </div>
                            </div>
                            <hr color="#E52E5E5">
                            
                            <select id="PayType" name="PayType"  class="col col-12 mt-4 mb-4 detail-trans" v-model="is_open">
                                
                                <option selected :value="true" >CASH</option>
                                <option :value="false" >DEBIT CARD</option>
                                <option :value="false" >CREDIT CARD</option>
                                <option :value="false3" >ONLINE PAYMENT</option>
                                
                            </select>
                           
                                <input type="text" name="ReffNo" placeholder="Reff No" class="form-control mb-2" v-if="is_open == false">
                                
                                <input type="text" name="payment" placeholder="Payment" class="form-control mb-2" v-if="is_open == false3">
                               

                             
                        </div>
                        
                    </div>
                    <div class="row" v-if="is_open == true">
                        <div class="col col-xs-12 mt-4 mb-4 detail-trans">
                            <div class="row ">
                                <div class="col col-xs-12 text-center">
                                    <h4 class="order-name"><label  for="PayType">Cust Info</label></h4>
                                </div>
                            </div>
                            <hr color="#E52E5E5">
                            <input type="text" name="tblNo" placeholder="Table Number" class="form-control mb-2">
                            <input type="text" name="custname" placeholder="Name" class="form-control mb-2">
                            <input type="text" name="mobileno"  placeholder="No Teletphone" class="form-control mb-2">
                            <input type="text" name="address"  placeholder="Address for delivery only" class="form-control mb-2">
                        </div>
                    </div>
                </div>
                
                <div class="fixed-bottom">
                    <div class="d-block col-12 col-xs-12 text-center pt-3 m-auto" id="BtnBayar" align="center" style="background-color: white">
                        {{-- <input type="hidden" > --}}
                            <input type="hidden" name="totaltag" value="{{ $netsales }}">
                            <input type="hidden" name="tax" value="{{ $tax }}">
                            <input type="hidden" name="serv" value="{{ $services }}">
                            <input type="hidden" name="disc" value="{{ $disc }}">
                            <input type="hidden" name="grandTotal" value="{{ $sales }}">
                            <input type="hidden" name="status" value="close">
                        <button class="btn btnBayar" type="submit">Bayar</button>
                        {{-- <a onclick="document.getElementById('input').submit()" type="button" class="btn btnBayar" href="#">Bayar</a> --}}

					</div>
                    <div class="d-block col-12 col-xs-12 text-center m-auto" id="BtnBack" align="center" >
                        <a type="button" class="btn btnBack"  type="button" value="Go Back" onclick="window-history.back()">Back</a>
                    </div>
                </div>
            </form>
           
<script>
    const counter = document.getElementById("counter");
        let counterValue = counter.value;

        function handleCounterMin() {
            counter.value = --counterValue;
        }

        function handleCounterPlus() {
            counter.value = ++counterValue;
        }
        const counter2 = document.getElementById("counter2");
        let counterValue2 = counter2.value;

        function handleCounterMin2() {
            counter2.value = --counterValue2;
        }

        function handleCounterPlus2() {
            counter2.value = ++counterValue2;
        }
</script>               
@endsection