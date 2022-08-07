    @extends('dashboard.navbar2')
    
    @section('container')
    <div class="container">
        <div class="m-5 text-center"><h2>Edit Product</h2></div>
        <form method="POST" action="{{ url('admin/product/' .$product->ProdID) }}"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
            <label for="formGroupExampleInput">Store ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="StoreID" value="{{ $product->StoreID }}">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2">Prod ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="ProdID" value="{{ $product->ProdID }}">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2">Cost</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="cost" value="{{ $product->cost }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">images</label>
                <input type="file" class="form-control" id="images" name="images" >

                <img id="preview-image-before-upload" src="/assets/images/product/{{ $product->images }}" alt="" style="width: 250px">
            </div>
            <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
        </form>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
    <script type="text/javascript">
        
    $(document).ready(function (e) {
    
    
    $('#images').change(function(){
                
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#preview-image-before-upload').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
    
    </script>

    @endsection