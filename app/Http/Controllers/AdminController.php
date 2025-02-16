<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Technology;
use App\Models\Industry;
use App\Models\Magazines;
use App\Models\Article;
use App\Models\Business; 
use App\Models\Feature;
use App\Models\PressRelease;
use App\Models\Startup;
use App\Models\cover_story;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    



    public function index(Request $request)
    {
        $model=new signup();
        $model->name=$request->POST('signup-name');
        $model->email=$request->POST('signup-email');
        $model->password=Hash::make($request->POST('signup-password'));
        $model->save();
        echo "<span style='text-align:center; color:green; font-size:18px; font-style:bold;'>Signup Sucessfull</span>";
        return view('admin/login');
        
        
    }
    // signup end coding 


    // login coding start 
    public function login(Request $request)
    {
        $email = $request->post('signin-email');
        $pass = $request->post('signin-password');
    
        $result = DB::table('signups')->where('email', $email)->first();
    
        if (!$result) {
            $request->session()->flash('error', 'Please enter valid login and password');
            return redirect('/admin/login');
        }
    
        $passresult = $result->password;
    
        if (Hash::check($pass, $passresult)) {
            if (isset($result->id)) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/index');
            } else {
                $request->session()->flash('error', 'Please enter valid login and password');
                return redirect('/admin/login');
            }
        } else {
            $request->session()->flash('error', 'Please enter valid login and password');
            return redirect('/admin/login');
        }
    }
    
    // login end coding 

// logout start coding 
    public function logout(Request $request){
        \Session::flush();        
         Auth::logout();  
        $request->session()->flash('error','Logout Sucessfull');
        return redirect('/admin/login');

    }
    // logout end coding 

    
    // Admin Deshboard Coding start 
    public function logindex(){
        $tech=DB::table('technologies')->count('id');
        $insd=DB::table('industries')->count('id');
        $mag=DB::table('magazines')->count('id');
        $test=DB::table('testimonials')->count('id');
        $article=DB::table('articles')->count('id');
        $business=DB::table('businesses')->count('id');

       
        
   
        
        return view('admin/index',['tech' => $tech, 'insd' => $insd, 'mag' =>$mag, 'testimonials' => $test, 'article' => $article, 'business' => $business]);
    }






    
    // /Admin Technology Start  
    public function admin_tech(){
        $result=DB::table('technologies')->orderBy('id','DESC')->paginate(10);
        return view('admin/technology')->with('data',$result);

    }

    public function tech_addData(){
        return view('admin/tech_addData');
    }

    public function techsubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|max:2048',
    
           ]);

        $model=new Technology();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 

        $model->category=$request->POST('categroy');
        $model->slug=$series;
        $model->title=$request->POST('title');
        $model->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $model->image_alt=$request->POST('image-alt');
        $model->tranding=$request->POST('tranding');
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-Desc');
        $model->meta_keyword=$request->POST('meta-keyword');
         $model->tags=$request->POST('meta-tags');
        $model->status=1;
        $model->save();
        return redirect('admin/technology');
            
    }

    public function techdeletedata(Request $request, $id){
         
        $result=DB::table('technologies')->where(['id'=>$id])->delete();

        return redirect('admin/technology');

    }

    public function techupdateview(Request $request, $id){
        
        $data=technology::find($id);
        return view('admin.tech_update',['data'=>$data]);
        

    }

    public function techupdatedata(Request $request){
        $data=technology::find($request->id);
        $validatedData = $request->validate([
            'image' => 'max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
  
        $series = str_replace(' ', '-', $request->POST('slug')); 

        $data->category=$request->POST('categroy');
        $data->slug=$series;
        $data->title=$request->POST('title');
        $data->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        $data->tranding=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-Desc');
        $data->meta_keyword=$request->POST('meta-keyword');
         $data->tags=$request->POST('meta-tags');
        $data->status=1;
        $data->save();
        return redirect('admin/technology');
    }








    
    
    // /Admin industry Start  
    public function admin_ind(){
        $result=DB::table('industries')->orderBy('id','DESC')->paginate(10);
        return view('admin/industry')->with('data',$result);

    }

    public function ind_addData(){
        return view('admin/ind_addData');
    }

    public function indsubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

        $model=new industry();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $model->category=$request->POST('categroy');
        $model->slug=$series;
        $model->title=$request->POST('title');
        $model->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $model->image_alt=$request->POST('image-alt');
        // $model->tranding=$request->POST('tranding');
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-Desc');
        $model->meta_keyword=$request->POST('meta-keyword');
        $model->tags=$request->POST('meta-tags');
        // $model->status=1;
        $model->save();
        return redirect('admin/industry');
            
    }

    public function inddeletedata(Request $request, $id){
         
        $result=DB::table('industries')->where(['id'=>$id])->delete();

        return redirect('admin/industry');

    }

    public function indupdateview(Request $request, $id){
        
        $data=industry::find($id);
        return view('admin.ind_update',['data'=>$data]);
        

    }

    public function indupdatedata(Request $request){
      
        $data=industry::find($request->id);
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $data->category=$request->POST('categroy');
        $data->slug=$series;
        $data->title=$request->POST('title');
        $data->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        // $data->tranding=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-Desc');
        $data->meta_keyword=$request->POST('meta-keyword');
        $data->tags=$request->POST('meta-tags');
        // $data->status=1;
        $data->save();
        return redirect('admin/industry');
    }






    

    
    // /Admin Magazine Start  
    public function admin_magazine(){
        $result=DB::table('magazines')->orderBy('id','DESC')->paginate(10);
        return view('admin/magazine')->with('data',$result);

    }

    public function magazine_addData(){
        return view('admin/magazine_addData');
    }

    public function magazinesubmitdata(Request $request){

        $validatedData = $request->validate([
            'magazine_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:7048',
    
           ]);

           $validatedData = $request->validate([
            'issue_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:7048',
    
           ]);
           
           
        //     $request->validate([
        //     'digital_magazine' => 'required|mimes:pdf|max:2048',
        // ]);
        
        

        $model=new magazines();

        if($request->hasfile('magazine_image')){
            $image=$request->file('magazine_image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->magazine_image=$image_name;
        }

        if($request->hasfile('issue_logo')){
            $image=$request->file('issue_logo');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->issue_logo=$image_name;
        }
        
        
        
        
        
      if ($request->hasFile('digital_magazine')) {
    $file = $request->file('digital_magazine');
    $fileName = $file->getClientOriginalName();

    // Define the destination path in the public directory
    $destinationPath = public_path('assets/media/pdf');

    // Move the file to the public folder (e.g., public/assets/media/pdf)
    $file->move($destinationPath, $fileName);

    // Save the file name or path to the database
    $data->digital_magazine = $fileName;

    // Optionally return success message
    // return back()->with('success', 'PDF uploaded successfully!');
}
        

        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        // $model->category=$request->POST('categroy');
        $model->slug=$series;
        $model->issue_name=$request->POST('issue_name');
        $model->issue_year=$request->POST('issue_year');
        $model->issue_month=$request->POST('issue_month');
        // $model->image_alt=$request->POST('image-alt');
        // $model->article_ontop=$request->POST('tranding');
        // $model->meta_title=$request->POST('meta-title');
        // $model->meta_description=$request->POST('meta-keyword');
        // $model->meta_keyword=$request->POST('meta-Desc');
        // $model->status=1;
        $model->save();
        return redirect('admin/magazine');
            
    }

    public function magazinedeletedata(Request $request, $id){
         
        $result=DB::table('magazines')->where(['id'=>$id])->delete();

        return redirect('admin/magazine');

    }

    public function magazineupdateview(Request $request, $id){
        
        $data=magazines::find($id);
        return view('admin.magazine_update',['data'=>$data]);
        

    }

    public function magazineupdatedata(Request $request){

        
    
        $data=magazines::find($request->id);
        $validatedData = $request->validate([
            'magazine_image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

       

        if($request->hasfile('magazine_image')){
            $image=$request->file('magazine_image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->magazine_image=$image_name;
        }

        if($request->hasfile('issue_logo')){
            $image=$request->file('issue_logo');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->issue_logo=$image_name;
        }
        
        
       if ($request->hasFile('digital_magazine')) {
    $file = $request->file('digital_magazine');
    $fileName = $file->getClientOriginalName();

    // Define the destination path in the public directory
    $destinationPath = public_path('assets/media/pdf');

    // Move the file to the public folder (e.g., public/assets/media/pdf)
    $file->move($destinationPath, $fileName);

    // Save the file name or path to the database
    $data->digital_magazine = $fileName;

    // Optionally return success message
    // return back()->with('success', 'PDF uploaded successfully!');
}
        

        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $data->issue_year=$request->POST('issue_year');
        $data->issue_month=$request->POST('issue_month');
         $data->issue_name=$request->POST('issue_name');
        $data->slug=$series;
      
        // $data->status=1;
        $data->save();
        return redirect('admin/magazine');
    }

  




        
    // /Admin Cover Start  
    public function admin_cover(){
        $result=DB::table('cover_stories')->orderBy('id','DESC')->paginate(10);
        return view('admin/cover')->with('data',$result);

    }

    public function cover_addData(){
        $result=DB::table('magazines')->orderBy('id','DESC')->get();
       
        return view('admin/cover_addData')->with('data',$result);
    }

    public function coversubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);

        $model=new cover_story();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            // $image->move(public_path('media/magazine_image'), $image_name);
             $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('url')); 
        $series_title = str_replace(' ', '-', $request->POST('issue_slug')); 
  
        $model->magazine_id=$request->POST('issue_name');
        $model->issue_title=$request->POST('issue_title');
        
        $model->slug=$series_title;
        $model->url=$request->POST('issue_slug');
        $model->title=$request->POST('title');
        $model->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $model->image_alt=$request->POST('image-alt');
        // $model->article_ontop=$request->POST('tranding');
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-Desc');
        $model->meta_keyword=$request->POST('meta-keyword');
           $model->tags=$request->POST('meta-tags');
        $model->status=1;
        $model->save();
        return redirect('admin/cover');
            
    }

    public function coverdeletedata(Request $request, $id){
         
        $result=DB::table('cover_stories')->where(['id'=>$id])->delete();

        return redirect('admin/cover');

    }

    public function coverupdateview(Request $request, $id){
        
        $data=cover_story::find($id);
        $result=DB::table('magazines')->orderBy('id','DESC')->get();
        return view('admin.cover_update',['data'=>$data])->with('magdata',$result);
        

    }

    public function coverupdatedata(Request $request){
      
        $data=cover_story::find($request->id);
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            // $image->move(public_path('media/news_image'), $image_name);
            // $image->move(public_path('media/magazine_image'), $image_name);
             $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $data->magazine_id=$request->POST('issue_name');
        $data->issue_title=$request->POST('issue_title');
        
        $data->slug=$series;
        $data->title=$request->POST('title');
        $data->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        // $model->article_ontop=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-Desc');
        $data->meta_keyword=$request->POST('meta-keyword');
        $data->tags=$request->POST('meta-tags');
        $data->status=1;
        $data->save();
        return redirect('admin/cover');
    }






    
    
    
    // /Admin Feature Start  
    public function admin_feature(){
        $result=DB::table('features')->orderBy('id','DESC')->paginate(10);
        return view('admin/feature')->with('data',$result);

    }

    public function feature_addData(){
        $result=DB::table('magazines')->orderBy('id','DESC')->get();
        return view('admin/feature_addData')->with('data',$result);
    }

    public function featuresubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

        $model=new feature();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }

        if($request->hasfile('logo')){
            $image=$request->file('logo');
            
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->feature_company_logo=$image_name;
        }


        $series = str_replace(' ', '-', $request->POST('url')); 
        $series_slug = str_replace(' ', '-', $request->POST('issue_title')); 
  
        $model->magazine_id=$request->POST('issue_name');
        $model->slug=$series_slug;
        $model->url=$series;
        $model->title=$request->POST('title');
        $model->details=$request->POST('content-details');
        $model->image_alt=$request->POST('image-alt');
        $model->feature_company_name=$request->POST('feature_company_name');
        $model->feature_company_website=$request->POST('feature_company_website');
        $model->feture_people_name=$request->POST('feture_people_name');
        $model->feature_people_position=$request->POST('feature_people_position');
        $model->feature_pepople_description=$request->POST('feature_pepople_description');
        // $model->feature_company_logo=$request->POST('feature_company_name');
        $model->company_logo_alt=$request->POST('logo-alt');
   
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-Desc');
        $model->meta_keyword=$request->POST('meta-keyword');
        $model->tags=$request->POST('meta-tags');
        $model->execlusive_interview=$request->POST('execlusive_interview');
        $model->status=1;
        $model->save();
        return redirect('admin/feature');
            
    }

    public function featuredeletedata(Request $request, $id){
         
        $result=DB::table('features')->where(['id'=>$id])->delete();

        return redirect('admin/feature');

    }

    public function featureupdateview(Request $request, $id){
        $result=DB::table('magazines')->orderBy('id','DESC')->get();
        
        $data=feature::find($id);
        return view('admin.feature_update',['datas'=>$data])->with('data',$result);;
        

    }

    public function featureupdatedata(Request $request){
      
        $datass=feature::find($request->id);

        
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

       

           if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $datass->image=$image_name;
        }

        if($request->hasfile('logo')){
            $image=$request->file('logo');
            
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/magazine_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $datass->feature_company_logo=$image_name;
        }


        $series = str_replace(' ', '-', $request->POST('url')); 
        $series_slug = str_replace(' ', '-', $request->POST('issue_title')); 
  
        $datass->magazine_id=$request->POST('issue_name');
        $datass->slug=$series_slug;
        $datass->url=$series;
        $datass->title=$request->POST('title');
        $datass->details=$request->POST('content-details');
        $datass->image_alt=$request->POST('image-alt');
        $datass->feature_company_name=$request->POST('feature_company_name');
        $datass->feature_company_website=$request->POST('feature_company_website');
        $datass->feture_people_name=$request->POST('feture_people_name');
        $datass->feature_people_position=$request->POST('feature_people_position');
        $datass->feature_pepople_description=$request->POST('feature_pepople_description');
        // $model->feature_company_logo=$request->POST('feature_company_name');
        $datass->company_logo_alt=$request->POST('logo-alt');
   
        $datass->meta_title=$request->POST('meta-title');
        $datass->meta_description=$request->POST('meta-Desc');
        $datass->meta_keyword=$request->POST('meta-keyword');
        $datass->tags=$request->POST('meta-tags');
        $datass->execlusive_interview=$request->POST('execlusive_interview');
        $datass->status=1;
        $datass->save();
        return redirect('admin/feature');
       }







       
    // /Admin Article Start  
    public function admin_article(){
        $result=DB::table('articles')->orderBy('id','DESC')->paginate(10);
 
        return view('admin/article')->with('data',$result);

    }

    public function article_addData(){
        return view('admin/article_addData');
    }

    public function articlesubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

        $model=new article();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $model->category=$request->POST('categroy');
        $model->slug=$series;
        $model->title=$request->POST('title');
        $model->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $model->image_alt=$request->POST('image-alt');
        $model->article_ontop=$request->POST('tranding');
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-Desc');
        $model->meta_keyword=$request->POST('meta-keyword');
         $model->tags=$request->POST('meta-tags');
        // $model->status=1;
        $model->save();
        return redirect('admin/article');
            
    }

    public function articledeletedata(Request $request, $id){
         
        $result=DB::table('articles')->where(['id'=>$id])->delete();

        return redirect('admin/article');

    }

    public function articleupdateview(Request $request, $id){
        
        $data=article::find($id);
        return view('admin.article_update',['data'=>$data]);
        

    }

    public function articleupdatedata(Request $request){
      
        $data=article::find($request->id);
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $data->category=$request->POST('categroy');
        $data->slug=$series;
        $data->title=$request->POST('title');
        $data->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        $data->article_ontop=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-Desc');
        $data->meta_keyword=$request->POST('meta-keyword');
        $data->tags=$request->POST('meta-tags');
        // $data->status=1;
        $data->save();
        return redirect('admin/article');
    }






///press Release############################

    public function admin_press_release(){
        
        $result=DB::table('pressreleases')->orderBy('id','DESC')->paginate(10);
        return view('admin/press_release')->with('data',$result);

    }

  public function admin_press_addData(){
      
        return view('admin/press_release_addData');
    }

 public function pressreleaseadd(Request $request){
     


        $validatedData = $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

        $models=new pressrelease();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $models->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $models->category=$request->POST('categroy');
        $models->slug=$series;
        $models->title=$request->POST('title');
        $models->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $models->image_alt=$request->POST('image-alt');
        $models->article_ontop=$request->POST('tranding');
        $models->meta_title=$request->POST('meta-title');
        $models->meta_description=$request->POST('meta-Desc');
        $models->meta_keyword=$request->POST('meta-keyword');
        $models->tags=$request->POST('meta-tags');
       
        // $model->status=1;
        $models->save();
        return redirect('admin/press-release');
            
    }
    
    
      public function pressreleasedeletedata(Request $request, $id){
         
        $result=DB::table('pressreleases')->where(['id'=>$id])->delete();

        return redirect('admin/press-release');

    }
    
    
    
        public function pressreleaseupdateview(Request $request, $id){
         
        $data=pressrelease::find($id);
      
        return view('admin.press_release_update',['data'=>$data]);
        

    }
    
    
    
    
    
    public function pressreleaseupdatedata(Request $request){
      
        $data=pressrelease::find($request->id);
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $data->category=$request->POST('categroy');
        $data->slug=$series;
        $data->title=$request->POST('title');
        $data->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        $data->article_ontop=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-Desc');
        $data->meta_keyword=$request->POST('meta-keyword');
            $data->tags=$request->POST('meta-tags');
        // $data->status=1;
        $data->save();
        return redirect('admin/press-release');
    }




       
    // /Admin Business Start  
    public function admin_business(){
        $result=DB::table('businesses')->orderBy('id','DESC')->paginate(10);
        return view('admin/business')->with('data',$result);

    }

    public function business_addData(){
        return view('admin/business_addData');
    }

    public function businesssubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

        $model=new business();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $model->category=$request->POST('categroy');
        $model->slug=$series;
        $model->title=$request->POST('title');
        $model->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $model->image_alt=$request->POST('image-alt');
        // $model->article_ontop=$request->POST('tranding');
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-Desc');
        $model->meta_keyword=$request->POST('meta-keyword');
        $model->tags=$request->POST('meta-tags');
        // $model->status=1;
        $model->save();
        return redirect('admin/business');
            
    }

    public function businessdeletedata(Request $request, $id){
         
        $result=DB::table('businesses')->where(['id'=>$id])->delete();

        return redirect('admin/business');

    }

    public function businessupdateview(Request $request, $id){
        
        $data=business::find($id);
        return view('admin.business_update',['data'=>$data]);
        

    }

    public function businessupdatedata(Request $request){
      
        $data=business::find($request->id);
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $data->category=$request->POST('categroy');
        $data->slug=$series;
        $data->title=$request->POST('title');
        $data->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        // $data->article_ontop=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-Desc');
        $data->meta_keyword=$request->POST('meta-keyword');
        $data->tags=$request->POST('meta-tags');
        // $data->status=1;
        $data->save();
        return redirect('admin/business');
    }






    
    
    // /Admin Startups Start  
    public function admin_startup(){
        $result=DB::table('startups')->orderBy('id','DESC')->paginate(10);
        return view('admin/startup')->with('data',$result);

    }

    public function startup_addData(){
        return view('admin/startup_addData');
    }

    public function startupsubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

        $model=new startup();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $model->category=$request->POST('categroy');
        $model->slug=$series;
        $model->title=$request->POST('title');
        $model->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $model->image_alt=$request->POST('image-alt');
        // $model->article_ontop=$request->POST('tranding');
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-Desc');
        $model->meta_keyword=$request->POST('meta-keyword');
         $model->tags=$request->POST('meta-tags');
        // $model->status=1;
        $model->save();
        return redirect('admin/startup');
            
    }

    public function startupdeletedata(Request $request, $id){
         
        $result=DB::table('startups')->where(['id'=>$id])->delete();

        return redirect('admin/startup');

    }

    public function startupupdateview(Request $request, $id){
        
        $data=startup::find($id);
        return view('admin.startup_update',['data'=>$data]);
        

    }

    public function startupupdatedata(Request $request){
      
        $data=startup::find($request->id);
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/news_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 
  
        $data->category=$request->POST('categroy');
        $data->slug=$series;
        $data->title=$request->POST('title');
        $data->details=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        // $data->article_ontop=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-Desc');
        $data->meta_keyword=$request->POST('meta-keyword');
           $data->tags=$request->POST('meta-tags');
        // $data->status=1;
        $data->save();
        return redirect('admin/startup');
    }




    
    // /Admin testimonials Start  
    public function admin_testimonials(){
        $result=DB::table('testimonials')->orderBy('id','DESC')->paginate(10);
        return view('admin/testimonials')->with('data',$result);

    }

    public function testimonials_addData(){
        return view('admin/testimonials_addData');
    }

    public function testimonialssubmitdata(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);

        $model=new testimonial();

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/testimonial_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
        $series = str_replace(' ', '-', $request->POST('slug')); 

        $model->category=$request->POST('categroy');
        $model->slug=$series;
        $model->Name=$request->POST('Name');
        $model->Position=$request->POST('Position');
        $model->comments=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $model->image_alt=$request->POST('image-alt');
        // $model->tranding=$request->POST('tranding');
        $model->meta_title=$request->POST('meta-title');
        $model->meta_description=$request->POST('meta-keyword');
        $model->meta_keyword=$request->POST('meta-Desc');
        // $model->status=1;
        $model->save();
        return redirect('admin/testimonials');
            
    }

    public function testimonialsdeletedata(Request $request, $id){
         
        $result=DB::table('testimonials')->where(['id'=>$id])->delete();

        return redirect('admin/testimonials');

    }

    public function testimonialsupdateview(Request $request, $id){
        
        $data=testimonial::find($id);
        // echo "welcome";
        
        return view('admin.testimonials_update',['data'=>$data]);
        

    }

    public function testimonialsupdatedata(Request $request){
        $data=testimonial::find($request->id);
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);

       

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
            $image->move(public_path('assets/media/testimonial_image'), $image_name);
            // $image->storeAs('/public/media/brand',$image_name);
            $data->image=$image_name;
        }
  
        $series = str_replace(' ', '-', $request->POST('slug')); 

        $data->category=$request->POST('categroy');
        $data->slug=$series;
        $data->Name=$request->POST('Name');
        $data->Position=$request->POST('Position');
        $data->comments=$request->POST('content-details');
        // $model->image=$request->POST('image');
        $data->image_alt=$request->POST('image-alt');
        // $model->tranding=$request->POST('tranding');
        $data->meta_title=$request->POST('meta-title');
        $data->meta_description=$request->POST('meta-keyword');
        $data->meta_keyword=$request->POST('meta-Desc');
        // $model->status=1;
        $data->save();
        return redirect('admin/testimonials');
    }

    



    // admin interview 
    
    public function interview_data(Request $request){
        $model=new interview();
        //  $model->category=$request->POST('categroy');
        $model->name=$request->POST('name');
        $model->company_name=$request->POST('company-name');
        $model->designation=$request->POST('designation');
        $model->location=$request->POST('location');
        $model->compay_website_url=$request->POST('compay-website-url');
        $model->email=$request->POST('email');
        $model->contact_number=$request->POST('contact-number');
         $model->save();
          $client_name=$request->POST('name');
        
        //  return ["msg" => "Thank you Radiance Family"];
        return redirect()->back()->with('success', 'Thank You!'); 
        
    }
    
        public function interviewsubmitdata(){
            $result=DB::table('interviews')->orderBy('id','DESC')->get();
            return view('admin/get-an-interview')->with('data',$result);
        }

        public function interview_data_view(Request $request, $id){
            echo $id;
            $result=DB::table('interviews')->where(['id' => $id])->get();

            return view('admin/interviewData')->with('data',$result);
        }
        
        
        
        
        
        //admin contact from
        
           public function contactform(){
            $result=DB::table('get_in_touches')->orderBy('id','DESC')->paginate(10); 
            return view('admin/contactform')->with('data',$result);
        }

        public function contactformview(Request $request, $id){
            echo $id;
            $result=DB::table('get_in_touches')->where(['id' => $id])->get();

            return view('admin/interviewData')->with('data',$result);
        }



        ///admin video Create

        public function admin_video(){
            $result=DB::table('videos')->orderBy('id','DESC')->paginate(10);
            return view('admin/videoShow')->with('data',$result);
    
        }
    
        public function video_addData(){
            return view('admin/video_addData');
        }
    
        public function videosubmitdata(Request $request){
    
            $validatedData = $request->validate([
                'image' => 'required|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
        
               ]);


               $validatedData = $request->validate([
                'video' => 'mimes:mp4,avi,wmv|max:100048',
        
               ]);

            $model=new Video();

            $series = str_replace(' ', '-', $request->POST('slug')); 
      
            $model->category=$request->POST('categroy');
            $model->sub_category=$request->POST('sub-category');
            $model->slug=$series;
            $model->title=$request->POST('title');
            $model->video_link=$request->POST('video_link');
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $ext = $image->extension();
                $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
                $image->move(public_path('assets/media/video/news_image'), $image_name);
                $model->image = $image_name;
            }         
            $model->image_alt=$request->POST('image-alt');
            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $ext = $video->extension();
                $video_name = date('Y-m-d') . '_' . time() . '.' . $ext;
                $video->move(public_path('assets/media/video/news_video'), $video_name);
                $model->video = $video_name;
            }
            $model->video_alt=$request->POST('video-alt');
            $model->Video_ontop=$request->POST('tranding');
      
             $model->tag=$request->POST('meta-tags');
  
            $model->save();
            return redirect('admin/video');
                
        }
    
        public function Videodeletedata(Request $request, $id){
             
            $result=DB::table('video')->where(['id'=>$id])->delete();
    
            return redirect('admin/video');
    
        }
    
        public function videoupdateview(Request $request, $id){
            
            $data=Video::find($id);
            return view('admin.video_update',['data'=>$data]);
            
    
        }
    
        public function videoupdatedata(Request $request) {
            // Find the existing data
            $data = Video::find($request->id);
        
            // Check if the data exists
            if (!$data) {
                // Handle the case where the data with the given ID is not found
                return redirect('admin/video')->with('error', 'Video not found.');
            }
        
            // Validate the request data
            $validatedData = $request->validate([
                'image' => 'mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
                'video' => 'mimes:mp4,avi,wmv|max:100048',
                // Add other validation rules as needed
            ]);
        
            // Update the model properties
            $series = str_replace(' ', '-', $request->input('slug'));
            $data->category = $request->input('category');
            $data->sub_category = $request->input('sub-category');
            $data->slug = $series;
            $data->title = $request->input('title');
            $data->video_link = $request->input('video_link');
        
            // Update image if provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $ext = $image->extension();
                $image_name = date('Y-m-d') . '_' . time() . '.' . $ext;
                $image->move(public_path('assets/media/video/news_image'), $image_name);
                $data->image = $image_name;
            }
        
            $data->image_alt = $request->input('image-alt');
        
            // Update video if provided
            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $ext = $video->extension();
                $video_name = date('Y-m-d') . '_' . time() . '.' . $ext;
                $video->move(public_path('assets/media/video/news_video'), $video_name);
                $data->video = $video_name;
            }
        
            $data->video_alt = $request->input('video-alt');
            $data->Video_ontop = $request->input('tranding');
            $data->tag = $request->input('meta-tags');
        
            // Save the updated data
            $data->save();
        
            return redirect('admin/video')->with('success', 'Video updated successfully.');
        }
        
    
    

}
