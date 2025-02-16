<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Technology;
use App\Models\Industry;
use App\Models\Article;
use App\Models\Business;
use App\Models\Startup;
use App\Models\PressRelease;
use Carbon\Carbon;


class CategoryController extends Controller
{
    public function categoryPage(){
        // echo 'hello';
        return view('blog5');
    }

    public function bigData(Request $request, $slug=null){
        $categoryName = 'Big Data';
        if ($slug) {
            $specificData = Technology::where('category', 'big-data')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'big-data')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'big-data')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'big-data')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }

    public function cloud(Request $request, $slug=null){
        $categoryName = 'Cloud';
        if ($slug) {
            $specificData = Technology::where('category', 'cloud')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'cloud')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'cloud')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();

            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'cloud')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }


    public function iot(Request $request, $slug=null){
        $categoryName = 'IOT';
        if ($slug) {
            $specificData = Technology::where('category', 'iot')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'iot')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'iot')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'iot')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }

    public function itService(Request $request, $slug=null){
        $categoryName = 'IT Service';
        if ($slug) {
            $specificData = Technology::where('category', 'it-services')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'it-services')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'it-services')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'it-services')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }

    public function mobility(Request $request, $slug=null){
        $categoryName = 'Mobility';
        if ($slug) {
            $specificData = Technology::where('category', 'mobility')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'mobility')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'mobility')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'cloud')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }


    public function networking(Request $request, $slug=null){
        $categoryName = 'Networking';
        if ($slug) {
            $specificData = Technology::where('category', 'networking')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'networking')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'networking')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'networking')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }

    public function cyberSecurity(Request $request, $slug=null){
        $categoryName = 'Cyber Security';
        if ($slug) {
            $specificData = Technology::where('category', 'cyber-security')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'cyber-security')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'cyber-security')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'cyber-security')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }

    public function software(Request $request, $slug=null){
        $categoryName = 'Software';
       
        if ($slug) {
            $specificData = Technology::where('category', 'software')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Technology::where('id', '>', $getId)->where('category', 'software')->first();
            $prevPost = Technology::where('id', '<', $getId)->where('category', 'software')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Technology::where('category', 'Software')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        [
        'data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
        ]);
    }


    protected function formatDateInArray($array) {
        foreach ($array as $item) {
            $item->formattedDate = Carbon::parse($item->created_at)->format('d M Y');
        }
        return $array;
    }



    // Industry 
    public function foodBeverage(Request $request, $slug=null){
        $categoryName = 'Food Beverage';
        if ($slug) {
            $specificData = Industry::where('category', 'food-beverage')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'food-beverage')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'food-beverage')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'food-beverage')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }

    public function mediaEntertainment(Request $request, $slug=null){
        $categoryName = 'Media Entertainment';
        if ($slug) {
            $specificData = Industry::where('category', 'media-entertainment')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'media-entertainment')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'media-entertainment')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'media-entertainment')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }


    public function education(Request $request, $slug=null){
        $categoryName = 'Education';
        if ($slug) {
            $specificData = Industry::where('category', 'education')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'education')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'education')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'education')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }


    public function health(Request $request, $slug=null){
        $categoryName = 'Health';
        if ($slug) {
            $specificData = Industry::where('category', 'health')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'health')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'health')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'health')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }


    public function realEstate(Request $request, $slug=null){
        $categoryName = 'Real Estate';
        if ($slug) {
            $specificData = Industry::where('category', 'real-estate')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'real-estate')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'real-estate')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'real-estate')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }

    public function retail(Request $request, $slug=null){
        $categoryName = 'Retail';
        if ($slug) {
            $specificData = Industry::where('category', 'retail')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'retail')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'retail')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'retail')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }

    public function bankingFinance(Request $request, $slug=null){
        $categoryName = 'Banking Finance';
        if ($slug) {
            $specificData = Industry::where('category', 'banking-finance')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'banking-finance')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'banking-finance')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'banking-finance')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }

    public function telecom(Request $request, $slug=null){
        $categoryName = 'Telecom';
        if ($slug) {
            $specificData = Industry::where('category', 'telecom')->where('slug', $slug)->first();
            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'telecom')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'telecom')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,
           ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'telecom')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }


    public function legal( Request $request, $slug = null,){
        $categoryName = 'Legal';

        if ($slug) {
            $specificData = Industry::where('category', 'legal')->where('slug', $slug)->first();

            $getId = $specificData->id;

            $nextPost = Industry::where('id', '>', $getId)->where('category', 'legal')->first();
            $prevPost = Industry::where('id', '<', $getId)->where('category', 'legal')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();


            // dd($nextPost, $prevPost);
            
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,

             ]);
        }
    
        $data = $this->formatDateInArray(Industry::where('category', 'legal')->orderBy('created_at', 'desc')->paginate(2));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }





    public function article( Request $request, $slug = null,){
        $categoryName = 'Article';

        if ($slug) {
            $specificData = Article::where('category', 'article')->where('slug', $slug)->first();

            $getId = $specificData->id;

            $nextPost = Article::where('id', '>', $getId)->where('category', 'article')->first();
            $prevPost = Article::where('id', '<', $getId)->where('category', 'article')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();


            // dd($nextPost, $prevPost);
            
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,

             ]);
        }
    
        $data = $this->formatDateInArray(Article::where('category', 'article')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }




    public function cxos( Request $request, $slug = null,){
        $categoryName = 'CXOs';

        if ($slug) {
            $specificData = Business::where('category', 'cxos')->where('slug', $slug)->first();

            $getId = $specificData->id;

            $nextPost = Business::where('id', '>', $getId)->where('category', 'cxos')->first();
            $prevPost = Business::where('id', '<', $getId)->where('category', 'cxos')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();


            // dd($nextPost, $prevPost);
            
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,

             ]);
        }
    
        $data = $this->formatDateInArray(Business::where('category', 'cxos')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }



    public function business( Request $request, $slug = null,){
        $categoryName = 'Business';

        if ($slug) {
            $specificData = Business::where('category', 'business')->where('slug', $slug)->first();

            $getId = $specificData->id;

            $nextPost = Business::where('id', '>', $getId)->where('category', 'business')->first();
            $prevPost = Business::where('id', '<', $getId)->where('category', 'business')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();


            // dd($nextPost, $prevPost);
            
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,

             ]);
        }
    
        $data = $this->formatDateInArray(Business::where('category', 'business')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }
    
    





    public function startup( Request $request, $slug = null,){
        $categoryName = 'Startups';

        if ($slug) {
            $specificData = Startup::where('category', 'startups')->where('slug', $slug)->first();

            $getId = $specificData->id;

            $nextPost = Startup::where('id', '>', $getId)->where('category', 'startups')->first();
            $prevPost = Startup::where('id', '<', $getId)->where('category', 'startups')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();


            // dd($nextPost, $prevPost);
            
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,

             ]);
        }
    
        $data = $this->formatDateInArray(Startup::where('category', 'startups')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }
    
    


    




    public function press( Request $request, $slug = null,){
        $categoryName = 'Press Release';

        if ($slug) {
            $specificData = PressRelease::where('category', 'press-release')->where('slug', $slug)->first();

            $getId = $specificData->id;

            $nextPost = PressRelease::where('id', '>', $getId)->where('category', 'press-release')->first();
            $prevPost = PressRelease::where('id', '<', $getId)->where('category', 'press-release')->first();
            $pressNews = $this->getPressNews();
            $featuredStory = $this->getFeaturedStoryRandom();
            $resentNews = $this->getRecentNews();


            // dd($nextPost, $prevPost);
            
    
            if (!$specificData) {
                abort(404); 
            }

            $resentNews = $this->getRecentNews();
    
            return view('post-single', 
            [
                'data' => $specificData, 
                'catName' => $categoryName, 
                'resentNews' => $resentNews,
                'nextPost' => $nextPost,
                'prevPost' => $prevPost,
                'resentNews' => $resentNews,
                'featuredStory' => $featuredStory,
                'pressNews' => $pressNews,

             ]);
        }
    
        $data = $this->formatDateInArray(PressRelease::where('category', 'press-release')->orderBy('created_at', 'desc')->paginate(9));
    
        if ($request->ajax()) {
            return view('paginationData', ['data' => $data])->render();
        }

        $resentNews = $this->getRecentNews();

   
    
        return view('blog5', 
        ['data' => $data, 
        'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }


    public function aboutUs(){
        $categoryName = 'About Us';
       
        $resentNews = $this->getRecentNews();

        return view('aboutus', 
        [
            'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }


    public function contactUs(){
        $categoryName = 'About Us';
       
        $resentNews = $this->getRecentNews();

        return view('contacts', 
        [
            'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }


    
    public function privacyPolicy(){
        $categoryName = 'Privacy Policy';
       
        $resentNews = $this->getRecentNews();

        return view('privacypolicy', 
        [
            'catName' => $categoryName, 
        'resentNews' => $resentNews,
    ]);
    }
    
    
        public function contact(Request $request)
    {
      // Validate the request if needed
    $validatedData = $request->validate([
        // 'name' => 'string',
        'email' => 'required|email',
        // 'comments' => 'string',
    ]);

    // Insert data into the "get_in_touches" table using DB facade
    DB::table('get_in_touches')->insert([
        'name' => $request->name,
        'email' => $validatedData['email'],
        'message' => $request->comments,
        'created_at' =>now(),
        
        
        // Add other fields if needed
    ]);
        // Return a JSON response
        return response()->json(['message' => 'CF Form submitted successfully!']);
    }
    





    private function getRecentNews()
    {
        return $this->formatDateInArray(DB::select("SELECT id, title, slug, image, category, created_at, updated_at FROM businesses UNION SELECT id, title, slug, image, category, created_at, updated_at FROM industries UNION SELECT id, title, slug, image, category,  created_at, updated_at FROM technologies ORDER BY created_at DESC limit 4"));
    }

   

    private function getPressNews(){
        return $this->formatDateInArray(DB::select("SELECT * FROM pressreleases ORDER BY id DESC limit 4"));
    }


    private function getFeaturedStoryRandom(){
        return $this->formatDateInArray(DB::table('features')->where('execlusive_interview', '=', '1')->inRandomOrder()->limit(2)->get());
    }
    
   

}
