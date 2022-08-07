@extends('dashboard.index')
@section("button")
<a class="btn btn-sm  mb-4" href="modul/create">Tambah</a>
@endsection
@section('isi')
<div class="container">
    
    <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead>
            
            <th>Modul Name</th>
            <th>Level</th>
            <th>Active</th>
            <th colspan="2">Action</th>
        </thead>
        @foreach ($datas as $key)
        <tbody>
            <tr class="align-self-center" style="border: 1px solid black;">
                
                <td data-label="Modul Name">{{ $key->ModulName }}</td>
                <td data-label="Level">{{ $key->Level }}</td>
                <td data-label="Active">{{ $key->Active }}</td>
                <td class="text-center justify-content-center align-self-center d-flex">
                    
                    <a class="btn btn-info" href="{{ url('superadmin/modul/'.$key->ModulID.'/edit') }}">Ubah</a>
                    <form action="{{ url('superadmin/modul/'.$key->ModulID) }}" method="POST" ">
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
