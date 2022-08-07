    @extends('dashboard.navbar2')

    @section('container')
    <div class="container">
        <div class="m-5 text-center"><h2>Edit Price</h2></div>
        <form method="POST" action="{{ url('superadmin/price/' .$price->id) }}" >
            @csrf
                <input type="hidden" name="_method" id="id" value="PATCH">
            <div class="form-group">
                <label for="formGroupExampleInput2">Store ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="StoreID" value="{{ $price->StoreID }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Location ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="LocID" value="{{ $price->LocID }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Price ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="PriceID" value="{{ $price->PriceID }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Product ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="ProdID" value="{{ $price->ProdID }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="price" value="{{ $price->price }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Active</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="active" value="{{ $price->active }}">
            </div>
            <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
        </form>
    </div>
    @endsection
