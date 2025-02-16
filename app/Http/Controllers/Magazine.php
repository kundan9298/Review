<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Magazines;
use App\Models\Feature;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;

class Magazine extends Controller
{
    public function topStory(){
        $queryResult = DB::select("SELECT * FROM features ORDER BY id DESC limit 2");

        return view('index2', ['topStories' => $queryResult]);


    }
    
    
    
    public function digitalMagazine(Request $request, $year, $month, $slug){
        $magazineData = Magazines::where('slug', $slug)->first();
        
       
        
        
       
        return view('digital', ['magdetails' => $magazineData]);
        
     
    }
    
    
    public function viewPdf(Request $request, $slug){
        //  $filePath = public_path('pdf/'.$slug);
         $filePath = storage_path('app/public/pdf/' . $slug);

        // Check if the file exists
        if (File::exists($filePath)) {
            // Return the PDF file inline (to be viewed in the browser)
            return response()->file($filePath, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
            ]);
        } else {
            // If file doesn't exist, return a 404 response
            abort(404, 'File not found.');
        }
        
    }
    
 
    
    

    public function index(){

        $data = DB::select("SELECT * FROM magazines ORDER BY id DESC" );
       
        $resentNews = $this->getRecentNews();

        return view('magazine', ['magazineHomePage' => $data,  'resentNews' => $resentNews,]);
    }

    protected function formatDateInArray($array) {
        foreach ($array as $item) {
            $item->formattedDate = Carbon::parse($item->created_at)->format('d M Y');
        }
        return $array;
    }



    public function filterContent(Request $request)
    {
        
        $filter = $request->input('filter');

        
        $filteredData = $this->getFilteredData($filter);

        return view('magazineChildOne', ['magazineHomePage' => $filteredData]);
    }

    private function getFilteredData($filter)
    {
        if ($filter === 'All') {
            return Magazines::orderBy('id', 'desc')->get();
        } else {
            return Magazines::where('issue_year', $filter)->orderBy('id', 'desc')->get();

        }
    }

 
    public function issueOpen(Request $request, $slug){

        $magData = Magazines::where('slug', $slug)->first();
       
        if ($magData) {
            // Now you can access properties on $magData
            $idOfMagazine = $magData->id;
            $coverData = DB::select('select * from cover_stories where magazine_id = '.$idOfMagazine);

            $featureData = DB::select('select * from features where magazine_id = '.$idOfMagazine);
            
            
            $resentNews = $this->getRecentNews();

            // dd($featureData);
            return view('magazineProfile', 
            [
                'resentNews' => $resentNews,
                'coverData' => $coverData,
                'featureData' => $featureData,
                'magData' => $magData
            ]
        );

        } else {
            // Handle the case where no matching record was found
            dd('Magazine not found');
        }

    }


    public function featureStory(Request $request, $slug){
        // $data=DB::table('features')->where(['url'=>$slug])->get();
        $data = Feature::where('url', $slug)->first();
        $catName = 'djk';
        $dataId = $data->id;
        
        
        


       

        $coverStory = DB::table('cover_stories')->inRandomOrder()->limit(2)->get();
        
        $nextPost = Feature::where('id', '>', $dataId)->first();
        $prevPost = Feature::where('id', '<', $dataId)->first();
        $latestIssueName = Magazines::orderby('id', 'desc')->limit(4)->get();
    
        $editorsNews= $this->formatDateInArray(DB::select("SELECT * FROM articles ORDER BY id DESC limit 2"));

        $resentNews = $this->getRecentNews();
        $pressNews = $this->getPressNews();
        return view('post-single2',
         [
            'data' => $data, 
            'resentNews' => $resentNews,
            'nextPost' => $nextPost,
            'prevPost' => $prevPost,
            'catName' => $catName,
            'coverStory' => $coverStory,
            'latestIssueName' => $latestIssueName,
            'editorsNews' => $editorsNews,
            'pressNews' => $pressNews,
            
        ]);
    }


    public function profileListing(Request $request, $slug){

        $magazineData = Magazines::where('slug', $slug)->first();
        $resentNews = $this->getRecentNews();

        if ($magazineData) {
            $magId = $magazineData->id;
            $data = Feature::where('magazine_id', $magId )->get();
            return view('listing',['data'=>$data, 'magazineData' => $magazineData,  'resentNews' => $resentNews,]);
        } else {
            // Handle the case where no matching record is found
            dd("Magazine not found");
        }

        

        
       
    }
    
    
    public function coverStory(Request $request, $slug){
   $data = DB::table('cover_stories')
    ->whereRaw("`slug` = '{$slug}'")
    ->first();

// Decode HTML entities in the 'details' field
$data->details = htmlspecialchars_decode($data->details);

// The rest of your code remains unchanged
$catName = 'Cover';
$dataId = $data->id;

$coverStory = DB::table('cover_stories')->inRandomOrder()->limit(2)->get();
$nextPost = DB::table('cover_stories')->where('id', '>', $dataId)->first();
$prevPost = DB::table('cover_stories')->where('id', '<', $dataId)->first();
$latestIssueName = DB::table('magazines')->orderby('id', 'desc')->limit(4)->get();
$editorsNews = $this->formatDateInArray(DB::select("SELECT * FROM articles ORDER BY id DESC limit 2"));
$resentNews = $this->getRecentNews();
$pressNews = $this->getPressNews();

return view('post-single3', [
    'data' => $data, 
    'resentNews' => $resentNews,
    'nextPost' => $nextPost,
    'prevPost' => $prevPost,
    'catName' => $catName,
    'coverStory' => $coverStory,
    'latestIssueName' => $latestIssueName,
    'editorsNews' => $editorsNews,
    'pressNews' => $pressNews,
]);

        
    }


    public function ourClients(Request $request){


        $data = Feature::orderBy('id', 'desc')->get();
        $resentNews = $this->getRecentNews();
        return view('ourClients',['data'=>$data,   'resentNews' => $resentNews,]);
    }


    public function clientSpeak(Request $request){
        $data = DB::table('testimonials')->select('*')->orderBy('id', 'desc')->get();


        $resentNews = $this->getRecentNews();
        return view('clientSpeak',[ 'data'=>$data,'resentNews' => $resentNews,]);
    }





    private function getRecentNews()
    {
        return $this->formatDateInArray(DB::select("SELECT id, title, slug, image, category, created_at, updated_at FROM businesses UNION SELECT id, title, slug, image, category, created_at, updated_at FROM industries UNION SELECT id, title, slug, image, category, created_at, updated_at FROM technologies ORDER BY created_at DESC limit 4"));
    }

    private function getPressNews(){
        return $this->formatDateInArray(DB::select("SELECT * FROM pressreleases ORDER BY id DESC limit 4"));
    }
}
