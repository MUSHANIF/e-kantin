@extends('dashboard.navbar2')

@section('container')
<div class="container">
    <div class="m-5 text-center"><h2>Edit Store</h2></div>
    <form method="POST" action="{{ url('manager/store/' .$store->id) }}" enctype="multipart/form-data" >
        @csrf
            <input type="hidden" name="_method" id="id" value="PATCH">
        <div class="form-group">
            <label for="formGroupExampleInput2">Store ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="StoreID" value="{{ $store->StoreID }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Store Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="StoreName" value="{{ $store->StoreName }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Location</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="Location" value="{{ $store->Location }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">QR Code</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" name="QrCode" value="{{ $store->QrCode }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Url</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="Url" value="{{ $store->Url }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Active</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" name="active" value="{{ $store->active }}">
        </div>
          <div class="form-group">
                <label for="formGroupExampleInput">Images</label>
                <input type="file" class="form-control" id="images" name="Image" >

                <img id="preview-image-before-upload" src="/assets/images/store/{{ $store->Image }}" alt="" style="width: 250px">
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
