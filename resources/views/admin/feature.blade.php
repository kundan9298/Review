@extends('admin/admin_deshboard_layout')
@section('deshboard')
<div class="app-wrapper">
   <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
         <h3>Features</h3>
         <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active"  href="feature-add">Add Data</a>
         </nav>
         <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
               <div class="app-card app-card-orders-table shadow-sm mb-5">
                  <div class="app-card-body">
                     <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                           <thead>
                              <tr>  
                                 <th class="cell">Id</th>
                                 <th class="cell">Title</th>
                                 <th class="cell">Issue Title</th>
                                 <th class="cell">Delete</th>
                                 <th class="cell">Update</th>
                               
                              </tr>
                           </thead>
                           <tbody>
							   @foreach($data as $list)
                              <tr>
                                 <td class="cell">{{$list->id}}</td>
                                 <td class="cell"><span class="truncate">{{$list->title}}</span></td>
                                 <td class="cell">{{$list->slug}}</td>
                                 <td class="cell"> <Button onclick="deleteProfile{{$list->id}}();" class="badge bg-danger">Delete</Button></a></td>
                                 <td class="cell"><Button onclick="updateProfile{{$list->id}}();" class="badge bg-success">Update</Button></a></td>
                         
                              </tr>
                              <script>
                                 //show a confirmation and redirect to the delete profile script
                                 function deleteProfile{{$list->id}}() {
                                   if (confirm("Do you really want to delete your profile?")) {
                                       location.href = 'feature_delete/{{$list->id}}';
                                   }
                               }

                               function updateProfile{{$list->id}}() {
                                   if (confirm("Do you really want to Update your profile?")) {
                                       location.href = 'feature_update/{{$list->id}}';
                                   }
                               }
                               </script>
							  @endforeach
   
                             
                           </tbody>
                        </table>
                     </div>
                     <!--//table-responsive-->
                  </div>
                  <!--//app-card-body-->		
               </div>
               <!--//app-card-->
                  <nav class="app-pagination">
                      {{ $data->links('pagination::bootstrap-4') }}
                 </nav>
               <!--//app-pagination-->
            </div>
            <!--//tab-pane-->
           
         <!--//table-responsive-->
      </div>
      <!--//app-card-body-->		
   </div>
   <!--//app-card-->
</div>
<!--//tab-pane-->

@endsection