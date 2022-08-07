@extends('dashboard.index')
@section('search')
<form action="{{ url('superadmin/store') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    @csrf
<div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}">
    <div class="input-group-append">
        <button class="btn" style="background-color: #ff9106;" type="submit">
            <i class="fas fa-search fa-sm text-white"></i>
        </button>
    </div>
</div>
</form>
@endsection
@section("search2")
<form action="{{ url('superadmin/store') }}" method="GET" class=" navbar-search form-inline mr-auto w-100 navbar-search">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small"
            placeholder="Search for..." aria-label="Search"
            aria-describedby="basic-addon2" name="cari" value="{{ request('cari') }}">
        <div class="input-group-append">
            <button class="btn" style="background-color: #ff9106;" type="submit">
                <i class="fas fa-search fa-sm text-white"></i>
            </button>
        </div>
    </div>
</class=>
@endsection
@section("button")
<a class="btn btn-sm  mb-4" href="store/create">Tambah</a>
@endsection
@section('isi')
<div class="container">
    
    <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead>
            <th>Store ID</th>
            <th>Store Name</th>
            <th>Location</th>
            <th>Image</th>
            <th>QR Code</th>
            <th>Url</th>
            <th>Active</th>
            <th colspan="2">Action</th>
        </thead>
        @foreach ($datas as $key)
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black;">
                <td data-label="Store ID">{{ $key->StoreID }}</td>
                <td data-label="Store Name">{{ $key->StoreName }}</td>
                <td data-label="Location">{{ $key->Location }}</td>
                <td data-label="Image"><img src="/assets/images/store/{{ $key->Image }}"
                    style="height: 100px; width: 150px;"></td>
                <td data-label="QR Code">{{ $key->QrCode }}</td>
                <td data-label="Url">{{ $key->Url }}</td>
                <td data-label="Active">{{ $key->active }}</td>
                <td class="text-center justify-content-center align-self-center d-flex">
                    
                    <a class="btn btn-info" href="{{ url('superadmin/store/'.$key->id.'/edit') }}">Ubah</a>
                    <form action="{{ url('superadmin/store/'.$key->id) }}" method="POST" ">
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
