@extends('dashboard.navbar2')
    
@section('container')
<form method="POST" action="{{ url('superadmin/blog') }}" >
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">user id</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="UserID">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Modul id</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="ModulID">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Activity</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="Activity">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
  </form>
@endsection
