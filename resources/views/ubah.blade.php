
    @extends('layout.main')
    
    @section('container')
    <form method="POST" action="{{ url('kantin/' .$kantin->prodid) }}" >
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
          <label for="formGroupExampleInput">Store id</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="storeid" value="{{ $kantin->storeid }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Prod id</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="prodid" value="{{ $kantin->prodid }}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">name</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="name" value="{{ $kantin->name }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">price</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="price" value="{{ $kantin->price }}">
          </div>
        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
      </form>
    @endsection
