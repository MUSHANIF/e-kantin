@extends('dashboard.index')
@section("button")
<a class="btn btn-sm  mb-4" href="price/create">Tambah</a>
@endsection
@section('isi')
    
            
        <table class="table mt-3" cellpadding="10" cellspace="0">
            <thead>
                <th>Store ID</th>
                <th>Location ID</th>
                <th>Price ID</th>
                <th>Product ID</th>
                <th>Price</th>
                <th>Active</th>
                <th colspan="2">Action</th>
            </thead>
            @foreach ($datas as $key)
            <tbody>
                <tr class="align-self-center" style="border: 1px solid black;">
                    <td data-label="Store ID">{{ $key->StoreID }}</td>
                    <td data-label="Location ID">{{ $key->LocID }}</td>
                    <td data-label="Price ID">{{ $key->PriceID }}</td>
                    <td data-label="Product ID">{{ $key->ProdID }}</td>
                    <td data-label="Price">Rp. {{ $key->price }}</td>
                    <td data-label="Active">{{ $key->active }}</td>
                    <td class="text-center justify-content-center align-self-center d-flex">
                      
                        <a class="btn btn-info" href="{{ url('superadmin/price/'.$key->id.'/edit') }}">Ubah</a>
                    <form action="{{ url('superadmin/price/'.$key->id) }}" method="POST" ">
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
