@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="/admin/technology">Back</a>
         </nav>



         <form action="{{route('tech.update')}}" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                 <input type="hidden" name="id" value="{{$data['id']}}"/>
                <label for="exampleFormControlSelect1">Categroy*</label>
                <select class="form-control" id="exampleFormControlSelect1"  name="categroy" required>
                  <option>Please Select Categroy</option>
                  
                  @if($data['category'] == 'big-data') 
                  <option value="big-data" selected>Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software">Software</option>

                  @elseif($data['category'] == 'cloud') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud" selected>Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software">Software</option>

                  @elseif($data['category'] == 'iot') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot" selected>IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software">Software</option>

                  @elseif($data['category'] == 'it-services') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services" selected>It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software">Software</option>

                  @elseif($data['category'] == 'mobility') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility" selected>Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software">Software</option>

                  @elseif($data['category'] == 'networking') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking" selected>Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software">Software</option>

                  @elseif($data['category'] == 'cyber-security') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security" selected>Cyber Security</option>
                  <option value="software">Software</option>

                  @elseif($data['category'] == 'software') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software" selected>Software</option>
                  
                  
                     @elseif($data['category'] == '') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software" selected>Software</option>
                  
                  
                  @elseif($data['category'] !== '') 
                  <option value="big-data">Big Data</option>
                  <option value="cloud">Cloud</option>
                  <option value="iot">IOT</option>
                  <option value="it-services">It Services</option>
                  <option value="mobility">Mobility</option>
                  <option value="networking">Networking</option>
                  <option value="cyber-security">Cyber Security</option>
                  <option value="software" selected>Software</option>
                  @endif
                </select>
              </div>
 
              <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Slug*</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{$data['slug']}}"  placeholder="Type URL Of webiste" required>
              </div>

                <div class="form-group mt-3">
                <label for="title">Title*</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$data['title']}}" placeholder="Type title of Story" required>
                </div>
       
        
            <div class="form-group mt-3" >
              <label for="details">Details*</label>
              <textarea class="form-control" name="content-details" id="details"  rows="3" required>{{$data['details']}}</textarea>
            </div>

            <div class="form-group mt-2">
                <label for="image">Enter Image </label>
                <input type="file" class="form-control-file" name="image"  id="exampleFormControlFile1">
                <span>{{$data['image']}}</span>
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group mt-3">
                <label for="image-alt">Image Alt</label>
                <input type="text" class="form-control" id="image-alt" value="{{$data['image_alt']}}" name="image-alt" placeholder="Type Image Alt Name">
                </div>

                <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Tranding*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tranding" required>
                      <option>Select</option>
                      @if($data['tranding'] == '1')
                      <option value="1" selected>Yes</option>
                      <option value="0">No</option>
                      @elseif($data['tranding'] == '0')
                      <option value="1" selected>Yes</option>
                      <option value="0">No</option>
                      @endif
                   
                    </select>
                  </div>


                  <div class="form-group mt-3">
                    <label for="meta-title">Meta Title</label>
                    <input type="text" value="{{$data['meta_title']}}" class="form-control" id="exampleFormControlInput1" name="meta-title" placeholder="Type meta title">
                    </div>

                    <div class="form-group mt-3">
                        <label for="meta-keyword">Meta Keyword</label>
                        <input type="text" value="{{$data['meta_keyword']}}" class="form-control" id="meta-keyword" name="meta-keyword" placeholder="Type meta keyword">
                        </div>
           
            
                <div class="form-group mt-3">
                  <label for="meta-Desc">Meta Description</label>
                  <textarea class="form-control"  id="meta-Desc" name="meta-Desc" rows="3">{{$data['meta_description']}}</textarea>
                </div>

   <div class="form-group mt-3">
                    <label for="meta-tags">Tags</label>
                    <input type="text" value="{{$data['tags']}}" class="form-control" id="exampleFormControlInput1" name="meta-tags" placeholder="Type meta Tags">
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