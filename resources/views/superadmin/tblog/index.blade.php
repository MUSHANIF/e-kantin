@extends('dashboard.index')
@section("button")
{{-- <button type="button" class="btn btn-sm btn-outline-secondary" href="blog/create">Tambah</button> --}}
<a class="btn btn-sm mb-4" href="blog/create">Tambah</a>
@endsection
@section('isi')
<table class="table mt-3" cellpadding="10" cellspace="0">
  <thead class="align-self-center text-center">
      <th>UserID</th>
      <th>ModulID</th>
      <th>Activity</th>
      <th>Aksi</th>
     
  </thead>
  @foreach ($datas as $key )
      <tbody>
          <tr class="align-self-center" style="border: 1px solid black;">

              <td data-label="UserID">
                  <p>{{ $key->UserID }}</p>
              </td>

              <td data-label="ModulID">
                  <p>{{ $key->ModulID }}</p>
              </td>
              <td data-label="Activity">
                  <p>{{ $key->Activity }}</p>
              </td>
              <td class="text-center justify-content-center  align-self-center d-flex"  >
                <a class="btn btn-info ms-4" href="{{ url('superadmin/blog/'.$key->LogID.'/edit') }}">Edit</a>
                <form action="{{ url('superadmin/blog/'.$key->LogID) }}" method="POST" ">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger ms-2">Delete</button>
              </form>

              </td>
          </tr>
      </tbody>
      @endforeach
</table>
{{-- <thead>
    <tr class="">
      <th scope="col">UserID</th>
      <th scope="col">ModulID</th>
      <th scope="col">Activity</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $key )
    <tr>
        <td>{{ $key->UserID }}</td>
        <td>{{ $key->ModulID }}</td>
        <td>{{ $key->Activity }}</td>
        
        <td>
            <a class="btn btn-info" href="{{ url('blog/'.$key->LogID.'/edit') }}">Edit</a>
            
        </td>
        <td><form action="{{ url('blog/'.$key->LogID) }}" method="POST" ">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form></td>
        
    </tr>

    @endforeach
  </tbody> --}}

@endsection 


