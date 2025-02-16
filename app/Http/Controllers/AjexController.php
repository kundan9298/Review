<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Response;
use App\Models\Article;
use App\Models\Business;
use App\Models\cover_story;
use App\Models\Feature;
use App\Models\Industry;
use App\Models\Magazines;
use App\Models\PressRelease;
use App\Models\Startup;
use App\Models\Technology;
use Illuminate\Support\Facades\Validator;


class AjexController extends Controller
{
    
     public function subscribe(Request $request)
    {
        // echo 'Hello';
        // 
        // die();
        // Validate email
        $validator = Validator::make($request->all(), [
             'email' => 'required|email|unique:newsletters,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400);
        }
        
        $email= $request->email;

        // // // Insert into database
        // // Subscription::create(['email' => $request->email]);
        
        // $email = $request->input('email');
        DB::insert('INSERT INTO newsletters (name, email, created_at, updated_at) VALUES (?, ?, ?, ?)', [
            'Subscribe', $email, now(), now()
        ]);

        return response()->json(['success' => 'Email subscribed successfully!']);
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                public function ajaxGet()
            {
                $queryResult = DB::select("SELECT * FROM technologies WHERE category = 'big-data' ORDER BY id DESC LIMIT 5");

                // Check if any data is retrieved
                if (!empty($queryResult)) {
                    $ids = [];
                    $category = [];
                    $title = [];
                    $slug = [];
                    $details = [];
                    $image = [];
                    $image_alt = [];

                    // Iterate through each object in the array
                    foreach ($queryResult as $item) {
                        // Access the properties of each object
                        $ids[] = $item->id;
                        $category[] = $item->category;
                        $title[] = $item->title;
                        
                        $slug[] = $item->slug;
                        
                        $details[] = Str::limit($item->details, 150);
                        $image[] = $item->image;
                        $image_alt[] = $item->image_alt;
                        // $created_at[] = $item->created_at;
                       // Corrected date formatting
                        $formattedDate = Carbon::parse($item->created_at)->format('d M Y');
                        $created_at[] = $formattedDate;
                    }

                    // You can use the arrays of properties as needed

                    $responseData = [
                        'ids' => $ids,
                        'category' => $category,
                        'title' => $title,
                        'slug' => $slug,
                        'details' => $details,
                        'image' => $image,
                        'image_alt' => $image_alt,
                        'created_at' => $created_at,
                    ];

                    return response()->json($responseData);
                } else {
                    // Handle the case where no data is retrieved
                    return response()->json([
                        'error' => 'No data found',
                    ]);
                }
            }




            public function ajaxCloud()
            {
                $queryResult = DB::select("SELECT * FROM technologies WHERE category = 'cloud' ORDER BY id DESC limit 5");

                // Check if any data is retrieved
                if (!empty($queryResult)) {
                    $ids = [];
                    $category = [];
                    $title = [];
                    $slug = [];
                    $details = [];
                    $image = [];
                    $image_alt = [];

                    // Iterate through each object in the array
                    foreach ($queryResult as $item) {
                        // Access the properties of each object
                        $ids[] = $item->id;
                        $category[] = $item->category;
                        $title[] = $item->title;
                        $slug[] = $item->slug;
                        $details[] = Str::limit($item->details, 150);
                        $image[] = $item->image;
                        $image_alt[] = $item->image_alt;

                        $formattedDate = Carbon::parse($item->created_at)->format('d M Y');
                        $created_at[] = $formattedDate;
                    }

                    // You can use the arrays of properties as needed

                    $responseData = [
                        'ids' => $ids,
                        'category' => $category,
                        'title' => $title,
                        'slug' => $slug,
                        'details' => $details,
                        'image' => $image,
                        'image_alt' => $image_alt,
                        'created_at' => $created_at,
                    ];

                    return response()->json($responseData);
                } else {
                    // Handle the case where no data is retrieved
                    return response()->json([
                        'error' => 'No data found',
                    ]);
                }
            }



            public function ajaxbigData()
            {
                $queryResult = DB::select("SELECT * FROM technologies WHERE category = 'big-data' ORDER BY id DESC limit 5");

                // Check if any data is retrieved
                if (!empty($queryResult)) {
                    $ids = [];
                    $category = [];
                    $title = [];
                    $slug = [];
                    $details = [];
                    $image = [];
                    $image_alt = [];

                    // Iterate through each object in the array
                    foreach ($queryResult as $item) {
                        // Access the properties of each object
                        $ids[] = $item->id;
                        $category[] = $item->category;
                        $title[] = $item->title;
                        $slug[] = $item->slug;
                        $details[] = Str::limit($item->details, 150);
                        $image[] = $item->image;
                        $image_alt[] = $item->image_alt;

                        $formattedDate = Carbon::parse($item->created_at)->format('d M Y');
                        $created_at[] = $formattedDate;
                    }

                    // You can use the arrays of properties as needed

                    $responseData = [
                        'ids' => $ids,
                        'category' => $category,
                        'title' => $title,
                        'slug' => $slug,
                        'details' => $details,
                        'image' => $image,
                        'image_alt' => $image_alt,
                        'created_at' => $created_at,
                    ];

                    return response()->json($responseData);
                } else {
                    // Handle the case where no data is retrieved
                    return response()->json([
                        'error' => 'No data found',
                    ]);
                }
            }


            public function ajaxSoftware()
            {
                $queryResult = DB::select("SELECT * FROM technologies WHERE category = 'software' ORDER BY id DESC limit 5");

                // Check if any data is retrieved
                if (!empty($queryResult)) {
                    $ids = [];
                    $category = [];
                    $title = [];
                    $slug = [];
                    $details = [];
                    $image = [];
                    $image_alt = [];

                    // Iterate through each object in the array
                    foreach ($queryResult as $item) {
                        // Access the properties of each object
                        $ids[] = $item->id;
                        $category[] = $item->category;
                        $title[] = $item->title;
                        $slug[] = $item->slug;
                        $details[] = Str::limit($item->details, 150);
                        $image[] = $item->image;
                        $image_alt[] = $item->image_alt;

                        $formattedDate = Carbon::parse($item->created_at)->format('d M Y');
                        $created_at[] = $formattedDate;
                    }

                    // You can use the arrays of properties as needed

                    $responseData = [
                        'ids' => $ids,
                        'category' => $category,
                        'title' => $title,
                        'slug' => $slug,
                        'details' => $details,
                        'image' => $image,
                        'image_alt' => $image_alt,
                        'created_at' => $created_at,
                    ];

                    return response()->json($responseData);
                } else {
                    // Handle the case where no data is retrieved
                    return response()->json([
                        'error' => 'No data found',
                    ]);
                }
            }
            
            
            
            public function ajaxNetworking()
            {
                $queryResult = DB::select("SELECT * FROM technologies WHERE category = 'networking' ORDER BY id DESC limit 5");

                // Check if any data is retrieved
                if (!empty($queryResult)) {
                    $ids = [];
                    $category = [];
                    $title = [];
                    $slug = [];
                    $details = [];
                    $image = [];
                    $image_alt = [];

                    // Iterate through each object in the array
                    foreach ($queryResult as $item) {
                        // Access the properties of each object
                        $ids[] = $item->id;
                        $category[] = $item->category;
                        $title[] = $item->title;
                        $slug[] = $item->slug;
                        $details[] = Str::limit($item->details, 150);
                        $image[] = $item->image;
                        $image_alt[] = $item->image_alt;

                        $formattedDate = Carbon::parse($item->created_at)->format('d M Y');
                        $created_at[] = $formattedDate;
                    }

                    // You can use the arrays of properties as needed

                    $responseData = [
                        'ids' => $ids,
                        'category' => $category,
                        'title' => $title,
                        'slug' => $slug,
                        'details' => $details,
                        'image' => $image,
                        'image_alt' => $image_alt,
                        'created_at' => $created_at,
                    ];

                    return response()->json($responseData);
                } else {
                    // Handle the case where no data is retrieved
                    return response()->json([
                        'error' => 'No data found',
                    ]);
                }
            }



public function ajaxLatest()
            {
                $queryResult = DB::select("SELECT * FROM technologies ORDER BY id DESC LIMIT 5");


                // Check if any data is retrieved
                if (!empty($queryResult)) {
                    $ids = [];
                    $category = [];
                    $title = [];
                    $slug = [];
                    $details = [];
                    $image = [];
                    $image_alt = [];

                    // Iterate through each object in the array
                    foreach ($queryResult as $item) {
                        // Access the properties of each object
                        $ids[] = $item->id;
                        $category[] = $item->category;
                        $title[] = $item->title;
                        $slug[] = $item->slug;
                        $details[] = Str::limit($item->details, 150);
                        $image[] = $item->image;
                        $image_alt[] = $item->image_alt;

                        $formattedDate = Carbon::parse($item->created_at)->format('d M Y');
                        $created_at[] = $formattedDate;
                    }

                    // You can use the arrays of properties as needed

                    $responseData = [
                        'ids' => $ids,
                        'category' => $category,
                        'title' => $title,
                        'slug' => $slug,
                        'details' => $details,
                        'image' => $image,
                        'image_alt' => $image_alt,
                        'created_at' => $created_at,
                    ];

                    return response()->json($responseData);
                } else {
                    // Handle the case where no data is retrieved
                    return response()->json([
                        'error' => 'No data found',
                    ]);
                }
            }
            
            
            
            
            
            
            
            
                  public function sitemap(): Response
                            {
                                $article = Article::latest()->get();
                                $business = Business::latest()->get();
                                $coverstory = cover_story::latest()->get();
                                $feature = Feature::latest()->get();
                                $industry = Industry::latest()->get();
                                $magazine = Magazines::latest()->get();
                                $pressrelease = PressRelease::latest()->get();
                                $startup = Startup::latest()->get();
                                $technology = Technology::latest()->get();
                                
                                // print_r($magazine);
                                // die();
                                
                                
                                return response()->view('sitemap', 
                                [
                                    'article' => $article,
                                    'business' => $business,
                                    'coverstory' => $coverstory,
                                    'feature' => $feature,
                                    'industry' => $industry,
                                    'magazine' => $magazine,
                                    'pressrelease' => $pressrelease,
                                    'startup' => $startup,
                                    'technology' => $technology,
                                    
                                    ])->header('Content-Type', 'text/xml');
                            }









}
