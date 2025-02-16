@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="magazine">Back</a>
         </nav>



         <form action="magazineadd" method="POST" enctype="multipart/form-data">
           @csrf 
            <div class="form-group">
                <label for="exampleFormControlSelect1">Issue Year*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="issue_year" required>
                  <option>Please Select Year</option>
                   <option value="2026">2026</option>
                   <option value="2025">2025</option>
                    <option value="2024">2024</option>
                     <option value="2023">2023</option>
                     <option value="2022">2022</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>

                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Issue Month*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="issue_month" required>
                  <option>Please Select Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="Novmber">Novmber</option>
                  <option value="December">December</option>
              
                </select>
              </div>

 
              <div class="form-group mt-3">
                <label for="exampleFormControlInput1" >Slug*</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Type URL Of webiste" required>
              </div>

                <div class="form-group mt-3">
                <label for="title">Issue Name*</label>
                <input type="text" class="form-control" name="issue_name" id="title" placeholder="Type title of Story" required>
                </div>
       
        
            {{-- <div class="form-group mt-3" >
              <label for="details">Details*</label>
              <textarea class="form-control" name="content-details" id="details"  rows="3" required></textarea>
            </div> --}}

            <div class="form-group mt-4">
                <label for="image">Magazine Image </label>
                <input type="file" class="form-control-file" name="magazine_image" id="exampleFormControlFile1">
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
              </div>

              {{-- <div class="form-group mt-4">
                <label for="image-alt">Magazine Image Alt</label>
                <input type="text" class="form-control" id="image-alt" name="magazine_image-alt" placeholder="Type Image Alt Name">
                </div> --}}

                <div class="form-group mt-4">
                  <label for="image">Issue Logo </label>
                  <input type="file" class="form-control-file" name="issue_logo" id="exampleFormControlFile1">
                  @error('image')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                </div>
                
                
                
                
                
                
                
                 <div class="form-group mt-4">
                <label for="image">Digital Magazine </label>
                <input type="file" class="form-control-file" name="digital_magazine" id="exampleFormControlFile1" accept="application/pdf">
                @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
              </div>
              
              
              
  
                {{-- <div class="form-group mt-4">
                  <label for="image-alt">Issue Logo Alt</label>
                  <input type="text" class="form-control" id="image-alt" name="issue_logo_alt" placeholder="Type Image Alt Name">
                  </div> --}}

                {{-- <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Article On Top*</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tranding" required>
                      <option>Select</option>
                      <option value="0">Yes</option>
                      <option value="1">No</option>
                   
                    </select>
                  </div> --}}


                  {{-- <div class="form-group mt-3">
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
                </div> --}}

            
    
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