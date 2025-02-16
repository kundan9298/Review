@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="/admin/video">Back</a>
         </nav>



         <form action="{{route('video.update')}}" method="POST" enctype="multipart/form-data">
           @csrf 
            <div class="form-group">
                 <input type="hidden" name="id" value="{{$data['id']}}"/>
                 <label for="exampleFormControlSelect1">Categroy*</label>
                 <select class="form-control" id="exampleFormControlSelect1" name="category" required>
                   <option>Please Select Categroy</option>
                   @if($data['category'] == 'magazine')
                   <option value="magazine" selected>Magazine</option>
                   <option value="news" >News</option>
                   @elseif($data['category'] == 'news')
                   
                   <option value="magazine" >Magazine</option>
                   <option value="news" selected>News</option>
                   @else
                   <option value="magazine" >Magazine</option>
                   <option value="news" >News</option>
                   @endif
               
                 </select>
               </div>



               <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Sub-Category Name*</label>
                <input type="text" class="form-control" id="sub-category" name="sub-category" value="{{$data['sub_category']}}"  placeholder="eg:- Technology, Software, Big Data / Issue Name" required>
              </div>

 
              <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Slug*</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{$data['slug']}}"  placeholder="Type URL Of webiste" required>
              </div>

                <div class="form-group mt-3">
                <label for="title">Title*</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$data['title']}}" placeholder="Type title of Story" required>
                </div>
       
        
                <div class="form-group mt-3">
                <label for="video_link">Video Link*</label>
                <input type="text" class="form-control" name="video_link" id="video_link" value="{{$data['video_link']}}" placeholder="Type Video Link" >
                </div>
       
        <hr>
           

            <div class="form-group mt-2">
                <label for="image">Enter Image </label>
                <input type="file" class="form-control-file" name="image" value="{{$data['image']}}"  id="exampleFormControlFile1">
                <span>{{$data['image']}}</span>
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group mt-3">
                <label for="image-alt">Image Alt</label>
                <input type="text" class="form-control" id="image-alt" name="image-alt" value="{{$data['image_alt']}}"  placeholder="Type Image Alt Name">
                </div>

                <br>
                <br><hr>
                
            <div class="form-group mt-2">
                <label for="video">Enter Video </label>
                <input type="file" class="form-control-file" name="video"  id="exampleFormControlFile1">
                <span>{{$data['video']}}</span>
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group mt-3">
                <label for="video-alt">Video Alt</label>
                <input type="text" class="form-control" id="video-alt" name="video-alt" value="{{$data['video_alt']}}"  placeholder="Type Video Alt Name">
                </div>
                <br>
                <hr>


                <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Video On Top*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tranding" required>
                      <option>Select</option>
                      @if($data['video_ontop'] == 1)
                      <option value="1" selected>Yes</option>
                      <option value="0">No</option>
                      @elseif($data['video_ontop'] == 0)
                      <option value="1">Yes</option>
                      <option value="0" selected>No</option>
                        @elseif($data['video_ontop'] == '')
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                         @elseif($data['video_ontop'] !== '')
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                      @endif
                   
                    </select>
                  </div>


               
                
               <div class="form-group mt-3">
                    <label for="meta-tags">Tags</label>
                    <input type="text" value="{{$data['tag']}}" class="form-control" id="exampleFormControlInput1" name="meta-tags" placeholder="Type meta tags">
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