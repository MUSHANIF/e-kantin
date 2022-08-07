@extends('dashboard.navbar2')


@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Tambah Product</h2></div>
<form action="{{ url('superadmin/product') }}" method="post" enctype="multipart/form-data">
    @csrf
     <div class="form-group">
        <label for="formGroupExampleInput">Store ID</label>
        <input type="text" class="form-control" id="StoreID" name="StoreID" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Product ID</label>
        <input type="text" class="form-control" id="ProdID" name="ProdID" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Cost</label>
        <input type="text" class="form-control" id="cost" name="cost" required>
    </div>
  
    <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="text" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">images</label>
        <input type="file" class="form-control" id="images" name="images">
        <img id="preview-image-before-upload" src="" alt="" style="width: 250px">
    </div>
     <button style="background-color: #FF9106;  border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
      <button type="reset" class="btn btn-danger mt-4">Reset</button>
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