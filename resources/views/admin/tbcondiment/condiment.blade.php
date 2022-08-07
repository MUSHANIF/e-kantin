@extends('admin.home')
@section('search')
<form action="" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    @csrf
<div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn" style="background-color: #ff9106;" type="submit">
            <i class="fas fa-search fa-sm text-white"></i>
        </button>
    </div>
</div>
</form>
@endsection
@section("button")
<a href="create" class="d-none d-sm-inline-block btn btn-sm text-white  shadow-sm" style="background-color: #ff9106;"><i
    class="fas fa-download fa-sm text-white"></i>Tambah</a>
@endsection
@section('isi')
<div class="container">
    
    <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead class="align-self-center text-center">
            <th>Store ID</th>
            <th>Produk ID</th>
            <th>Condiment ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Images</th>
            <th colspan="2">Action</th>
        </thead>
        @foreach ($datas as $key) 
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black">
                <td data-label="Store ID"><p>{{ $key->StoreID }}</p></td>
                <td data-label="Product ID"><p>{{ $key->ProdID }}</p></td>
                <td data-label="Condiment ID"><p>{{ $key->CondID }}</p></td>
                <td data-label="Name"><p>{{ $key->name }}</p></td>
                <td data-label="Price"><p>{{ $key->price }}</p></td>
                <td data-label="images"><img src="/assets/images/condiment/{{ $key->images }}"
                    style="height: 100px; width: 150px;"></td>
                <td class="text-center justify-content-center align-self-center d-flex">
                    <a class="btn btn-info" href="{{ url('admin/condiment/'.$key->id.'/edit') }}">Ubah</a>
                    <form action="{{ url('admin/condiment/'.$key->id) }}" method="POST" >
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger ms-2">Delete</button>
                    </form>
                    
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
</div>
@endsection