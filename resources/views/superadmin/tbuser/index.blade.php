@extends('dashboard.index')
@section('search')
<form action="{{ url('superadmin/user') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
<form action="{{ url('superadmin/user') }}" method="GET" class=" navbar-search form-inline mr-auto w-100 navbar-search">
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
<a class="btn btn-sm  mb-4" href="user/create">Tambah</a>
@endsection
@section('isi')


@if ($datas->count())
    
<table class="table mt-3" cellpadding="10" cellspace="0">
    <thead class="align-self-center text-center">
            <th>StoreID</th>
            <th>Name</th>
            <th>email</th>
            {{-- <th>Password</th> --}}
            <th>Mobile</th>    
            <th>Active</th>
            <th>Level</th>
            <th>Aksi</th>
       
    </thead>
    @foreach ($datas as $key )
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black;">
  
                <td data-label="StoreID">
                    <p>{{ $key->StoreID }}</p>
                </td>
  
                <td data-label="RealName">
                    <p>{{ $key->name }}</p>
                </td>
                <td data-label="email">
                    <p>{{ $key->email }}</p>
                </td>
                {{-- <td data-label="Pass">
                    <p>{{ $key->password }}</p>
                </td> --}}
                <td data-label="Mobile">
                    <p>{{ $key->Mobile }}</p>
                </td>
                <td data-label="Active">
                    <p>{{ $key->Active }}</p>
                </td>
                <td data-label="Level">
                    <p>{{ $key->level }}</p>
                </td>
                <td class="text-center justify-content-center align-self-center d-flex">
                
                
                <a class="btn btn-info" href="{{ url('superadmin/user/'.$key->UserID.'/edit') }}">Ubah</a>
                    <form action="{{ url('superadmin/user/'.$key->UserID) }}" method="POST" ">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger ms-2">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
  </table>
  @else
    <h2 class="text-center">Tidak ada di pencarian!</h2>
@endif
@endsection
