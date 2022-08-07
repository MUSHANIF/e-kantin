@extends('layout.main')
    
@section('container')
<div class="row">
    <div class="col">
        <a class="btn btn-info mb-4" href="kantin/create">Tambah</a>
    </div>
    <div class="col">
        <form action="{{ url('kantin') }}" method="GET">
        <div class="input-group mb-3">
        <input type="text" class="form-control" name="cari"  placeholder="Search" value="{{ request('cari') }}" >
        <div class="input-group-append">    
          <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
      </div>
    </form>
    </div>
</div>

@if ($datas->count())
    

    <table class="table-bordered table">
        <tr>
            <th>store id</th>
            <th>produk id</th>
            <th>name</th>
            <th>price</th>
            <th colspan="2">Aksi</th>
        </tr>
        
            @foreach ($datas as $key )
                <tr>
                    <td>{{ $key->storeid }}</td>
                    <td>{{ $key->prodid }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->price }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ url('kantin/'.$key->prodid.'/edit') }}">Ubah</a>
                        <form action="{{ url('kantin/'.$key->prodid) }}" method="POST" class="mt-3">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    
                </tr>
            
                
            @endforeach
        
    </table>
@else
    <h2 class="text-center">Tidak ada di pencarian!</h2>
@endif
@endsection
