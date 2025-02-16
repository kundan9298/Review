@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="/admin/magazine">Back</a>
         </nav>



         <form action="{{route('magazine.update')}}" method="POST" enctype="multipart/form-data">
          @csrf
           <div class="form-group">
            <input type="hidden" name="id" value="{{$data['id']}}"/>

               <label for="exampleFormControlSelect1">Issue Year*</label>
               <select class="form-control" id="exampleFormControlSelect1" name="issue_year" required>
                 <option>Please Select Year</option>
                 @if($data['issue_year']=='2020')
                 <option value="2020" selected>2020</option>
                 <option value="2021">2021</option>
                 <option value="2022">2022</option>
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>

                 @elseif($data['issue_year']=='2021')
                 <option value="2020" >2020</option>
                 <option value="2021" selected>2021</option>
                 <option value="2022">2022</option>
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>
                 
                 @elseif($data['issue_year']=='2022')
                 <option value="2020" >2020</option>
                 <option value="2021" >2021</option>
                 <option value="2022" selected>2022</option>
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>

                 @elseif($data['issue_year']=='2023')
                 <option value="2020" >2020</option>
                 <option value="2021" >2021</option>
                 <option value="2022">2022</option>
                 <option value="2023" selected>2023</option>
                 <option value="2024">2024</option>

                 @elseif($data['issue_year']=='2024')
                 <option value="2020" >2020</option>
                 <option value="2021" >2021</option>
                 <option value="2022">2022</option>
                 <option value="2023">2023</option>
                 <option value="2024" selected>2024</option>

                 @elseif($data['issue_year']=='2025')
                 <option value="2020" >2020</option>
                 <option value="2021">2021</option>
                 <option value="2022">2022</option>
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>
                 <option value="2025" selected>2025</option>

                 @elseif($data['issue_year'] !=='')
                 <option value="2020" >2020</option>
                 <option value="2021">2021</option>
                 <option value="2022">2022</option>
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>
                 <option value="2025">2025</option>
                 @endif
             
               </select>
             </div>

             <div class="form-group">
               <label for="exampleFormControlSelect1">Issue Month*</label>
               <select class="form-control" id="exampleFormControlSelect1" name="issue_month" required>
                 <option>Please Select Month</option>

                 @if($data['issue_month']=='January')
                 <option value="January" selected>January</option>
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

                 @elseif($data['issue_month']=='February')
                 <option value="January">January</option>
                 <option value="February" selected>February</option>
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

                 @elseif($data['issue_month']=='March')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March" selected>March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='April')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April" selected>April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='May')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May" selected>May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='June')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June" selected>June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='July')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July" selected>July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='August')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August" selected>August</option>
                 <option value="September">September</option>
                 <option value="October">October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='September')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September" selected>September</option>
                 <option value="October">October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='October')
                 <option value="January">January</option>
                 <option value="February">February</option>
                 <option value="March">March</option>
                 <option value="April">April</option>
                 <option value="May">May</option>
                 <option value="June">June</option>
                 <option value="July">July</option>
                 <option value="August">August</option>
                 <option value="September">September</option>
                 <option value="October" selected>October</option>
                 <option value="Novmber">Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='Novmber')
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
                 <option value="Novmber" selected>Novmber</option>
                 <option value="December">December</option>

                 @elseif($data['issue_month']=='December')
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
                 <option value="December" selected>December</option>

                 @elseif($data['issue_month'] !=='')
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
                 <option value="December" >December</option>
                 @endif
             
               </select>
             </div>


             <div class="form-group mt-3">
               <label for="exampleFormControlInput1" >Slug*</label>
               <input type="text" class="form-control" value="{{$data['slug']}}" id="slug" name="slug" placeholder="Type URL Of webiste" required>
             </div>

               <div class="form-group mt-3">
               <label for="title">Issue Name*</label>
               <input type="text" class="form-control" value="{{$data['issue_name']}}" name="issue_name" id="title" placeholder="Type title of Story" required>
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
                   <span>{{$data['magazine_image']}}</span>
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
                     <span>{{$data['issue_logo']}}</span>
               </div>
               
               
                <div class="form-group mt-4">
                 <label for="image">Digital Magazine</label>
                 <input type="file" class="form-control-file" name="digital_magazine" id="exampleFormControlFile1" accept="application/pdf">
                 @error('image')
                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                     @enderror
                     <span>{{$data['digital_magazine']}}</span>
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