@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="/admin/get-an-interview">Back</a>
         </nav>



    <style>
        body {
  background: #f7f7f7;
}

.form-box {
  max-width: 500px;
  margin: auto;
  padding: 50px;
  background: #ffffff;
  border: 10px solid #f2f2f2;
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 100%;
}
    </style>
    
    
    
    
    <div class="form-box">
  <h3><b><u>Client Contact Details</u></b></h3>
 <br>
  
  @foreach($data as $list)



  <form action="https://api.formbucket.com/f/c2K3QTQ" method="post">
    <div class="form-group">
      <label for="name"><b>Name:-</b></label>
      {{$list->name}}
    </div>

    <br>
    
     <div class="form-group">
      <label for="name"><b>Company Name:-</b></label>
      {{$list->company_name}}
    </div>
    
  
    <br>
    
    
     <div class="form-group">
      <label for="name"><b>Designation1:-</b></label>
      {{$list->designation}}
    </div>
    
    
    <br>
  
    
     <div class="form-group">
      <label for="name"><b>Location:-</b></label>
      {{$list->location}}
    </div>
    
    <br>
    
     <div class="form-group">
      <label for="name"><b>Website URL:-</b></label>
      {{$list->compay_website_url}}
    </div>
    
    <br>
    
     <div class="form-group">
      <label for="name"><b>Email:-</b></label>
      {{$list->email}}
    </div>
    
<br>
     <div class="form-group">
      <label for="name"><b>Contact Number:-</b></label>
      {{$list->contact_number}}
    </div>
    <br>
    
     <div class="form-group">
      <label for="name"><b>Date:-</b></label>
      {{$list->created_at}}
    </div>
   
  </form>
  @endforeach
</div>
	

@endsection