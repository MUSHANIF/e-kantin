    @extends('dashboard.navbar2')

    @section('container')
    <div class="container">
        <div class="m-5 text-center"><h2>Edit Modul</h2></div>
        <form method="POST" action="{{ url('superadmin/modul/' .$modul->ModulID) }}" >
            @csrf
                <input type="hidden" name="_method" value="PATCH">
            
            <div class="form-group">
                <label for="formGroupExampleInput2">Modul Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="ModulName" value="{{ $modul->ModulName }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Level</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="Level" value="{{ $modul->Level }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Active</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="Active" value="{{ $modul->Active }}">
            </div>
            <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
        </form>
    </div>
    @endsection
