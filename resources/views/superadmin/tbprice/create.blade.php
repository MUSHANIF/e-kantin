@extends('dashboard.navbar2')

@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Tambah Price</h2></div>
<form action="{{ url('superadmin/price') }}" method="post">
    @csrf
     <div class="form-group">
        <label for="formGroupExampleInput">Store ID</label>
        <input type="text" class="form-control" id="StoreID" name="StoreID" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Location ID</label>
        <input type="text" class="form-control" id="LocID" name="LocID" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Price ID</label>
        <input type="text" class="form-control" id="PriceID" name="PriceID" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Product ID</label>
        <input type="text" class="form-control" id="ProdID" name="ProdID" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="text" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Active</label>
        <input type="text" class="form-control" id="active" name="active" required>
    </div>
     <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
     <button type="reset" class="btn btn-danger mt-4">Reset</button>
</form>
</div>
@endsection
