@extends('dashboard.index')

@section('isi')
<div class="container">
   
    <div class="trx">
        <table class="table-bordered table trans">
            <tr>
                <th>ID</th>
                <th>tanggal</th>
                <th>no trans</th>
                <th>no meja</th>
                <th>jenis trans</th>
                <th>total tag</th>
                <th>pajak</th>
                <th>pelayanan</th>
                <th>total</th>
                <th>pay tipe</th>
                <th>bayar</th>
                <th>kembalian</th>
                <th>aksi</th>
                
            </tr>
            @foreach ($data as $key) 
            <tr>
                <td data-label="ID">{{ $key->id }}</td>
                <td data-label="Date">{{ $key->tgl }}</td>
                <td data-label="No Trans">{{ $key->trxNo }}</td>
                <td data-label="No Table">{{ $key->tblNo }}</td>
                <td data-label="Jenis Trans">{{ $key->jnstrx }}</td>
                <td data-label="Total Tag">{{ $key->totaltag }}</td>
                <td data-label="Tax">{{ $key->tax }}</td>
                <td data-label="Serv">{{ $key->serv }}</td>
                <td data-label="Total">{{ $key->grandTotal }}</td>
                <td data-label="Pay Type">{{ $key->payType }}</td>
                <td data-label="Pay">{{ $key->pay }}</td>
                <td data-label="Change">{{ $key->change }}</td>
                <td>
                    <form action="{{ url('transaction/'.$key->id) }}" method="POST" class="mt-3">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
    
        </table>
    </div>
</div>
@endsection