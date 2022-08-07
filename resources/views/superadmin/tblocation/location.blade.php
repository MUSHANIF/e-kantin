@extends('dashboard.index')
@section("button")
<a class="btn btn-sm  mb-4" href="location/create">Tambah</a>
@endsection
@section('isi')
<div class="container">
    {{-- <div class="m-5 text-center"><h2>Location</h2></div>
    <div class="row">
            <div class="col-sm-2">
                <a class="btn btn-info mb-4" style="background-color: #FF9106; border: unset" href="location/create">Tambah</a>
            </div>
            <div class="col-sm-8 align-self-center ">
                <form action="{{ url('/search') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="cari"  placeholder="Search" value="{{ request('cari') }}" >
                        <div class="input-group-append">    
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
    </div> --}}
    <table class="table-bordered table">
        <thead>
            <th>Location ID</th>
            <th>Location name</th>
            <th>Price</th>
            <th>Active</th>
            
        </thead>
        @foreach ($datas as $key)
        <tbody>
            <tr>
            
                <td data-label="Location Name">{{ $key->LocName }}</td>
                <td data-label="Price">{{ $key->Price }}</td>
                <td data-label="Active">{{ $key->active }}</td>
                <td class="text-center justify-content-center align-self-center d-flex">
                    <a class="btn btn-info" href="{{ url('superadmin/location/'.$key->LocID.'/edit') }}">Ubah</a>
                    <form action="{{ url('superadmin/location/'.$key->LocID) }}" method="POST" >
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