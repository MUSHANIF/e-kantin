@extends('dashboard.navbar2')

@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Tambah Modul</h2></div>
<form action="{{ url('superadmin/modul') }}" method="post">
    @csrf
    
    <div class="form-group">
        <label for="formGroupExampleInput">Modul Name</label>
        <input type="text" class="form-control" id="ModulName" name="ModulName" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Level</label>
        <input type="text" class="form-control" id="Level" name="Level" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Active</label>
        <input type="text" class="form-control" id="Active" name="Active" required>
    </div>
     <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
     <button type="reset" class="btn btn-danger mt-4">Reset</button>
</form>
</div>
@endsection
