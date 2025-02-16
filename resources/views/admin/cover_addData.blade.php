@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="cover">Back</a>
         </nav>



         <form action="coveradd" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Magazine Name*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="issue_name" required>
                  <option>Please Select Magazine</option>
                  @foreach($data as $list)
                  <option value="{{$list->id}}">{{$list->issue_name}}</option>
                  @endforeach
              
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Issue Title*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="issue_title" required>
                  <option>Please Select Title</option>
                  @foreach($data as $list)
                  <option value="{{$list->issue_name}}">{{$list->issue_name}}</option>
                  @endforeach
              
                </select>
              </div>
 
              <div class="form-group">
                <label for="exampleFormControlSelect1">Issue Slug*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="issue_slug" required>
                  <option>Please Select Title</option>
                  @foreach($data as $list)
                  <option value="{{$list->issue_name}}">{{$list->issue_name}}</option>
                  @endforeach
              
                </select>
              </div>

              <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Url*</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Type URL Of webiste" required>
              </div>

                <div class="form-group mt-3">
                <label for="title">Title*</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Type title of Story" required>
                </div>
       
        
            <div class="form-group mt-3" >
              <label for="details">Details*</label>
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

                {{-- <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Article On Top*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tranding" required>
                      <option>Select</option>
                      <option value="0">Yes</option>
                      <option value="1">No</option>
                   
                    </select>
                  </div> --}}


                  <div class="form-group mt-3">
                    <label for="meta-title">Meta Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="meta-title" placeholder="Type Meta Title">
                  </div>

                  <div class="form-group mt-3">
                        <label for="meta-keyword">Meta Keyword</label>
                        <input type="text" class="form-control" id="meta-keyword" name="meta-keyword" placeholder="Type Meta Keyword">
                  </div>
           
            
                  <div class="form-group mt-3">
                    <label for="meta-Desc">Meta Description</label>
                    <textarea class="form-control" id="meta-Desc" name="meta-Desc" rows="3"></textarea>
                  </div>
                  
                    <div class="form-group mt-3">
                    <label for="meta-tags">Tags</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="meta-tags" placeholder="Type Meta tags">
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