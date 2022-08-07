@extends('dashboard.index')
@section("button")
<a class="btn btn-sm  mb-4" href="condiment/create">Tambah</a>
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
                    <a class="btn btn-info" href="{{ url('superadmin/condiment/'.$key->id.'/edit') }}">Ubah</a>
                    <form action="{{ url('superadmin/condiment/'.$key->id) }}" method="POST" >
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