@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="video">Back</a>
         </nav>



         <form action="videoadd" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categroy*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="categroy" required>
                  <option>Please Select Categroy</option>
                  <option value="magazine">Magazine</option>
                  <option value="news">News</option>
              
                </select>
              </div>
 
              <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Sub-Category Name*</label>
                <input type="text" class="form-control" id="sub-category" name="sub-category" placeholder="eg:- Technology, Software, Big Data / Issue Name" required>
              </div>

              <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Slug*</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Type URL Of webiste" required>
              </div>

                <div class="form-group mt-3">
                <label for="title">Title*</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Type title of Story" required>
                </div>


                <div class="form-group mt-3">
                <label for="video_link">Video Link*</label>
                <input type="text" class="form-control" name="video_link" id="video_link" placeholder="Type Video Link" >
                </div>
       
        <hr>
           

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

                <br>
                <br><hr>
                
            <div class="form-group mt-2">
                <label for="video">Enter Video </label>
                <input type="file" class="form-control-file" name="video" id="exampleFormControlFile1">
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group mt-3">
                <label for="video-alt">Video Alt</label>
                <input type="text" class="form-control" id="video-alt" name="video-alt" placeholder="Type Video Alt Name">
                </div>
                <br>
                <hr>

                <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Video On Top*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tranding" required>
                      <option>Select</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                   
                    </select>
                  </div>


                
                
                 <div class="form-group mt-3">
                    <label for="meta-tags">Tags</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="meta-tags" placeholder="Type meta tags">
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
    // CKEDITOR.config.extraPlugins = 'font';
   
    </script>
</div>
<!--//tab-pane-->

@endsection