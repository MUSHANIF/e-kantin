@extends('dashboard.navbar2')

@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Tambah Store</h2></div>
<form action="{{ url('/manager/store') }}" method="post" enctype="multipart/form-data">
    @csrf
     <div class="form-group">
        <label for="formGroupExampleInput">Store ID</label>
        <input type="text" class="form-control" id="StoreID" name="StoreID" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Store Name</label>
        <input type="text" class="form-control" id="StoreName" name="StoreName" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Location</label>
        <input type="number" class="form-control" id="Location" name="Location" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">QR Code</label>
        <input type="number" class="form-control" id="QrCode" name="QrCode" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Url</label>
        <input type="text" class="form-control" id="Url" name="Url" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Active</label>
        <input type="number" class="form-control" id="active" name="active" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Images</label>
        <input type="file" class="form-control" id="images" name="Image" >

        <img id="preview-image-before-upload" src="" alt="" style="width: 250px">
    </div>
     <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
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
