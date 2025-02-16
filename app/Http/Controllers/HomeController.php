<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Feature;
// use Mail;


use Illuminate\Support\Facades\Mail;


use App\Models\check_eligibility;
class HomeController extends Controller
{
    public function homePage(){
    
        
        
        $businesStory = DB::select("
    SELECT id, category, slug, title, SUBSTRING(details, 1, 30) AS details, image, image_alt
    FROM businesses 
    ORDER BY id DESC 
    LIMIT 1
");
        
        // dd($businesStory);

$industryStory = DB::select("SELECT * FROM industries ORDER BY id DESC limit 1");
$technologyStory = DB::select("SELECT * FROM technologies ORDER BY id DESC limit 2");
$startupStory = DB::select("SELECT * FROM startups ORDER BY id DESC limit 1");
$topStory = DB::select("SELECT * FROM features WHERE execlusive_interview = '1' && status = '1' ORDER BY id DESC limit 4");
$coverStory = DB::select("SELECT * FROM cover_stories ORDER BY id DESC limit 1");

$magazinePage = DB::select("SELECT * FROM magazines ORDER BY id DESC limit 4");

$topStorySkip = DB::select("SELECT * FROM features WHERE execlusive_interview = '1' && status = '1' ORDER BY id DESC limit 6 OFFSET 4");

$resentNews = DB::select("SELECT id, title, slug, image, image_alt, category, created_at, updated_at FROM businesses UNION SELECT id, title, slug, image, image_alt, category, created_at, updated_at FROM industries UNION SELECT id, title, slug, image, image_alt, category, created_at, updated_at FROM technologies ORDER BY created_at DESC limit 4");

$pressNews = DB::select("SELECT * FROM pressreleases ORDER BY id DESC limit 4");

$editorsNews = DB::select("SELECT * FROM articles ORDER BY id DESC limit 2");

$industryBootomStory = DB::select("SELECT * FROM industries ORDER BY id DESC limit 4 OFFSET 1");

       


        $ourClients1 = Feature::
            select('id', 'slug', 'magazine_id', 'title', 'image', 'image_alt', 'feature_company_logo', 'company_logo_alt', 'url')->
            where('execlusive_interview', '=', '1')
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();
    
         $ourClients2 = Feature::
             select('id', 'slug', 'magazine_id', 'title', 'feature_company_logo', 'company_logo_alt', 'url')->
             where('execlusive_interview', '=', '1')
        ->orderBy('id', 'desc')
        ->skip(6)
        ->limit(6)
        ->get();
        
    //   dd($ourClients1);
    //     dd($ourClients1);
        
       $video1 = $this->formatDateInArray(DB::select("SELECT * FROM videos WHERE category = 'magazine' ORDER BY id DESC LIMIT 3"));
       $video2 = $this->formatDateInArray(DB::select("SELECT * FROM videos WHERE category = 'news' ORDER BY id DESC LIMIT 4"));


    



        return view('index2', [
            'topStories' => $topStory,
            'businessStory' => $businesStory,
            'industryStory' => $industryStory,
            'technologyStory' => $technologyStory,
            'startupStory' => $startupStory,
            'magazinePage' => $magazinePage,
            'coverStory' => $coverStory,
            'topStorySkip' => $topStorySkip,
            'resentNews' => $resentNews,
            'pressNews' => $pressNews,
            'editorsNews' => $editorsNews,
            'industryBootomStory' => $industryBootomStory,
            'ourClients1' => $ourClients1,
            'ourClients2' => $ourClients2,
            'video1' => $video1,
            'video2' => $video2,
        ]);



        
    }


    


    protected function formatDateInArray($array) {
        foreach ($array as $item) {
            $item->formattedDate = Carbon::parse($item->created_at)->format('d M Y');
        }
        return $array;
    }
    
    
    public function checkEligibility(){
        return view('advertisement/ad');
    }
    




public function ceSave(Request $request){
    $data = [
        'name' => $request->name, 
            'issue' => $request->issue, 
            'email' => $request->email, 
            'company' => $request->cname, 
            'messageType' => $request->message,  
        ];
    
    try {
        // Insert data into the database using the DB facade
        DB::table('check_eligibility')->insert([
            'name' => $request->name, 
            'issue_name' => $request->issue, 
            'email' => $request->email, 
            'company_name' => $request->cname, 
            'message' => $request->message, 
        ]);
        
        $recipientEmail = 'globalradiancereview@gmail.com';
        $subject = 'Check Eligibility';

        Mail::send('mail', $data, function($message) use ($recipientEmail, $subject){
            $message->to($recipientEmail);
            $message->subject($subject);
        });

        return response()->json(['message' => 'Data saved successfully'], 200);
    } catch (\Exception $e) {
        // Handle any exceptions that may occur during the insertion process
        return response()->json(['error' => 'Failed to save data: ' . $e->getMessage()], 500);
    }
}


}
