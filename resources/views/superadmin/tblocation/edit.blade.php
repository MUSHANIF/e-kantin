    @extends('dashboard.navbar2')

    @section('container')
    <div class="container">
        <div class="m-5 text-center"><h2>Edit Lokasi</h2></div>
        <form method="POST" action="{{ url('superadmin/location/' .$loc->LocID) }}" >
            @csrf
                <input type="hidden" name="_method" value="PATCH">
         
            <div class="form-group">
                <label for="formGroupExampleInput2">Lokasi Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="LocName" value="{{ $loc->LocName }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">harga</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="price" value="{{ $loc->Price }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Active</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="Active" value="{{ $loc->active }}">
            </div>
            <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
        </form>
    </div>
    @endsection
