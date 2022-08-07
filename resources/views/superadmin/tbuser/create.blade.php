@extends('dashboard.navbar2')
    
@section('container')
<form method="POST" action="{{ url('superadmin/user') }}" >
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">StoreID</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="StoreID">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Name</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="name">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">email</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="email">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Password</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="password">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Mobile</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="Mobile">
    </div>
    
    <div class="form-group">
      <label for="formGroupExampleInput2">LastLogin</label>
      <input type="date" class="form-control" id="formGroupExampleInput2" name="LastLogin">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Active</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" name="Active">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Level</label>
      {{-- <input type="text" class="form-control" id="formGroupExampleInput2" name="level"> --}}
      <select class="form-select" aria-label="Default select example" name="level">
        <option selected>Plih level!</option>
        <option value="5">superadmin</option>
        <option value="4">admin</option>
        <option value="3">manager</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
  </form>
@endsection
