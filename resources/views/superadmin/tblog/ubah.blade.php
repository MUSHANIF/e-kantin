@extends('dashboard.navbar2')
    
    @section('container')
    <form method="POST" action="{{ url('superadmin/blog/' .$log->LogID) }}" >
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
          <label for="formGroupExampleInput">UserID</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="UserID" value="{{ $log->UserID }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">ModulID</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="ModulID" value="{{ $log->ModulID }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Activity</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="Activity" value="{{ $log->Activity }}">
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
      </form>
    @endsection