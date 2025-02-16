@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="/admin/feature">Back</a>
         </nav>



         <form action="{{route('feature.update')}}" method="POST" enctype="multipart/form-data">
           @csrf 
           <div class="form-group">
            <input type="hidden" name="id" value="{{$datas['id']}}"/>
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
              <option >Please Select Title</option>
              @foreach($data as $list)
              <option value="{{$list->issue_name}}">{{$list->issue_name}}</option>
              @endforeach
          
            </select>
          </div>

          <div class="form-group mt-3">
            <label for="exampleFormControlInput1" >URL*</label>
            <input type="text" class="form-control" id="slug" value="{{$datas['url']}}" name="url" placeholder="Type URL Of webiste" required>
          </div>

            <div class="form-group mt-3">
            <label for="title">Title*</label>
            <input type="text" class="form-control" name="title" value="{{$datas['title']}}" id="title" placeholder="Type title of Story" required>
            </div>
   
    
        <div class="form-group mt-3" >
          <label for="details">Details*</label>
          <textarea class="form-control" name="content-details" id="details"  rows="3" required>{{$datas['details']}}</textarea>
        </div>

        <div class="form-group mt-2">
            <label for="image">Enter Image </label>
            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
            @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <span>{{$datas['image']}}</span>
          </div>

          <div class="form-group mt-3">
            <label for="image-alt">Image Alt</label>
            <input type="text" class="form-control" value="{{$datas['image_alt']}}" id="image-alt" name="image-alt" placeholder="Type Image Alt Name">
            </div>

  

              <div class="form-group mt-3">
                <label for="meta-title">Feature Company Name</label>
                <input type="text" class="form-control" value="{{$datas['feature_company_name']}}" id="exampleFormControlInput1" name="feature_company_name" placeholder="Enter Company Name">
              </div>

              <div class="form-group mt-3">
                <label for="meta-title">Feature Company Website</label>
                <input type="text" class="form-control" value="{{$datas['feature_company_website']}}" id="exampleFormControlInput1" name="feature_company_website" placeholder="Enter Company Website url">
              </div>

              <div class="form-group mt-3">
                <label for="meta-title">Feature Company People Name</label>
                <input type="text" class="form-control" value="{{$datas['feture_people_name']}}" id="exampleFormControlInput1" name="feture_people_name" placeholder="Enter Feature People Name">
              </div>

              <div class="form-group mt-3">
                <label for="meta-title">Feature Company People Position</label>
                <input type="text" class="form-control" value="{{$datas['feature_people_position']}}" id="exampleFormControlInput1" name="feature_people_position" placeholder="Enter Position Of feature ">
              </div>

              <div class="form-group mt-3">
                <label for="meta-title">Feature Company People Description</label>
                <input type="text" class="form-control" value="{{$datas['feature_pepople_description']}}" id="exampleFormControlInput1" name="feature_pepople_description" placeholder="Enter Company Description">
              </div>

              <div class="form-group mt-2">
                <label for="image">Enter logo of company </label>
                <input type="file" class="form-control-file" name="logo" id="exampleFormControlFile1">
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <span>{{$datas['feature_company_logo']}}</span>
              </div>

              <div class="form-group mt-3">
                <label for="image-alt">Logo Alt</label>
                <input type="text" class="form-control" value="{{$datas['company_logo_alt']}}" id="image-alt" name="logo-alt" placeholder="Type logo Alt Name">
                </div>


              <div class="form-group mt-3">
                <label for="meta-title">Meta Title</label>
                <input type="text" class="form-control" value="{{$datas['meta_title']}}" id="exampleFormControlInput1" name="meta-title" placeholder="Type Meta Title">
              </div>

              <div class="form-group mt-3">
                    <label for="meta-keyword">Meta Keyword</label>
                    <input type="text" class="form-control" value="{{$datas['meta_keyword']}}" id="meta-keyword" name="meta-keyword" placeholder="Type Meta Keyword">
              </div>
       
        
              <div class="form-group mt-3">
                <label for="meta-Desc">Meta Description</label>
                <textarea class="form-control" id="meta-Desc"  name="meta-Desc" rows="3">{{$datas['meta_description']}}</textarea>
              </div>
              
               <div class="form-group mt-3">
                <label for="meta-tags">Tags</label>
                <input type="text" class="form-control" value="{{$datas['tags']}}" id="exampleFormControlInput1" name="meta-tags" placeholder="Type Meta Tags">
              </div>


             <div class="form-group mt-3">
               <label for="exampleFormControlSelect1">Execlusive Interview*</label>
               <select class="form-control" id="exampleFormControlSelect1" name="execlusive_interview" required>
                <option>Select</option>
                @if($datas['execlusive_interview'] == '1')
                <option value="1" selected>Yes</option>
                <option value="0">No</option>

                @elseif($datas['execlusive_interview'] == '0')
                <option value="1" >Yes</option>
                <option value="0" selected>No</option>

                @elseif($datas['execlusive_interview'] == '')
                <option value="1">Yes</option>
                <option value="0">No</option>

                @elseif($datas['execlusive_interview'] !== '')
                <option value="1">Yes</option>
                <option value="0">No</option>

                @endif
              
               </select>
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
//   CKEDITOR.config.extraPlugins = 'font';
    </script>
</div>
<!--//tab-pane-->

@endsection