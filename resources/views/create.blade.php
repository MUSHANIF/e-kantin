
    @extends('layout.main')
    
    @section('container')
    <form method="POST" action="{{ url('kantin') }}" >
        @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">Store id</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="storeid">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Prod id</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="prodid">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">name</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="name">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">price</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="price">
          </div>
        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
      </form>
    @endsection
