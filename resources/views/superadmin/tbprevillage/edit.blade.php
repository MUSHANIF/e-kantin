@extends('dashboard.navbar2')

@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Edit Previllage</h2></div>
    <form method="POST" action="{{ url('superadmin/previllage/' .$previllage->id) }}" >
        @csrf
            <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="formGroupExampleInput">User ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="UserID" value="{{ $previllage->UserID }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Modul ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="ModulID" value="{{ $previllage->ModulID }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Previllage</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="Previllage" value="{{ $previllage->Previllage }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Level</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="Level" value="{{ $previllage->Level }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Active</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="Active" value="{{ $previllage->active }}">
        </div>
        <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
    </form>
</div>
@endsection
