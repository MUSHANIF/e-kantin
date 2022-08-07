
    

    @extends('dashboard.navbar2')
    
    @section('container')
    <form method="POST" action="{{ url('superadmin/user/' .$log->UserID) }}" >
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
          <label for="formGroupExampleInput">StoreID</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="StoreID" value="{{ $log->StoreID }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">name</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="name" value="{{ $log->name }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">email</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="email" value="{{ $log->email }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">password</label>
          <input type="hidden" class="form-control" id="formGroupExampleInput2" name="password" value="{{ $log->password }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Mobile</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="Mobile" value="{{ $log->Mobile }}">
        </div>
        
        <div class="form-group">
          <label for="formGroupExampleInput">LastLogin</label>
          <input type="date" class="form-control" id="formGroupExampleInput" name="LastLogin" value="{{ $log->LastLogin }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Active</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="Active" value="{{ $log->Active }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Level</label>
          {{-- <input type="text" class="form-control" id="formGroupExampleInput2" name="level" value="{{ $log->level }}">
           --}}
           <select class="form-select" aria-label="Default select example" name="level" value="">
            <option selected>{{ $log->level }}</option>
            <option value="superadmin">superadmin</option>
            <option value="admin">admin</option>
            <option value="manager">manager</option>
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
      </form>
    @endsection
