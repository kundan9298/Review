@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="testimonials">Back</a>
         </nav>



         <form action="testimonialsadd" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categroy*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="categroy" required>
                  <option>Please Select Categroy</option>
                  <option value="testimonial">Testimonial</option>
                
                </select>
              </div>
 
              <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Slug*</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Type URL Of webiste" required>
              </div>

                <div class="form-group mt-3">
                <label for="title">Name*</label>
                <input type="text" class="form-control" name="Name" id="title" placeholder="Type title of Story" required>
                </div>

                <div class="form-group mt-3">
                  <label for="title">Position*</label>
                  <input type="text" class="form-control" name="Position" id="Position" placeholder="Type title of Story" required>
                  </div>
       
        
            <div class="form-group mt-3" >
              <label for="details">comments*</label>
              <textarea class="form-control" name="content-details" id="details"  rows="3" required></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="image">Enter Image </label>
                <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group mt-3">
                <label for="image-alt">Image Alt</label>
                <input type="text" class="form-control" id="image-alt" name="image-alt" placeholder="Type Image Alt Name">
                </div>

           


                  <div class="form-group mt-3">
                    <label for="meta-title">Meta Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="meta-title" placeholder="Type meta title">
                    </div>

                    <div class="form-group mt-3">
                        <label for="meta-keyword">Meta Keyword</label>
                        <input type="text" class="form-control" id="meta-keyword" name="meta-keyword" placeholder="Type meta keyword">
                        </div>
           
            
                <div class="form-group mt-3">
                  <label for="meta-Desc">Meta Description</label>
                  <textarea class="form-control" id="meta-Desc" name="meta-Desc" rows="3"></textarea>
                </div>

            
    
                <button type="submit" class="btn btn-primary mt-4 btn-lg btn-block">Submit</button>

          </form>



      <!--//app-card-body-->		
   </div>
   <!--//app-card-->
   <script src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>
   <script src="{{ asset('public/ckfinder/ckfinder.js') }}"></script>
   <script>
    var editData=CKEDITOR.replace( 'content-details' );
    CKFinder.setupCKEditor( editData );
    CKEDITOR.config.extraPlugins = 'colorbutton, font';
    CKEDITOR.config.extraPlugins = 'font';
   
    </script>
</div>
<!--//tab-pane-->

@endsection