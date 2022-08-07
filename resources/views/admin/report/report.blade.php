<?php
$tanggal = date("Y-m-d");
?>
@extends('admin.home')
@section('search')
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    @csrf
<div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn" style="background-color: #ff9106;" type="button">
            <i class="fas fa-search fa-sm text-white"></i>
        </button>
    </div>
</div>
</form>
@endsection
@section("button")
<form action="{{ url('/admin/report/'.Auth::user()->StoreID) }}" method="GET">
    @csrf
    <br>
    <div class="container" >
        <div class="row" >
            <div class="container-fluid">
                <div class="form-group row" >

                    <div class="col">
                        <input type="date" class="form-control input-sm" name="tgl" id="toDate" value="<?= $tanggal ?>" required >
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary" name="search" title="Search">Cari!..</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('isi')
<div class="container">
    <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead class="align-self-center text-center">
            <th>Store ID</th>
            <th>Date</th>
            <th>trxNo</th>
            <th>jnstrx</th>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>NetSales</th>
            <th>Services</th>
            <th>Taxs</th>
            <th>Sales</th>
        </thead>
        @foreach ($datas as $key)
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black">
                <td data-label="Store ID"><p>{{ $key->StoreID }}</p></td>
                <td data-label="Date"><p>{{ $key->DATE }}</p></td>
                <td data-label="trxNo"><p>{{ $key->trxNo }}</p></td>
                <td data-label="jnstrx"><p>{{ $key->jnstrx }}</p></td>
                <td data-label="Product"><p>{{ $key->Product }}</p></td>
                <td data-label="Price"><p>{{ $key->Price }}</p></td>
                <td data-label="Qty"><p>{{ $key->Qty }}</p></td>
                <td data-label="NetSales"><p>{{ $key->NetSales }}</p></td>
                <td data-label="Services"><p>{{ $key->Services }}</p></td>
                <td data-label="Taxs"><p>{{ $key->Taxs }}</p></td>
                <td data-label="Sales"><p>{{ $key->Sales }}</p></td>
            </tr>
        </tbody>
        @endforeach

    </table>
</div>
@endsection
