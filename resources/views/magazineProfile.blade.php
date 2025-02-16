@extends('layout')

@section('meta_tag')
    <!-- Your meta tags here -->
@endsection

@section('content')
<!-- wrapper -->
<div id="wrapper">
    <!-- content    -->
    <div class="content">
        <div class="breadcrumbs-header fl-wrap">
            <div class="container">
                
                <div class="breadcrumbs-header_url">
                    <a href="{{url('/')}}">Home</a>
                    <a href="{{url('magazine')}}">Magazine</a>
                    <span>{{$magData->issue_name}}</span>
                </div>
                
                
                <div class="scroll-down-wrap">
                    @php
            
                    $issuemonth = strtolower($magData->issue_month);
                    $issueyear = strtolower($magData->issue_year);
                    $digitalslug = strtolower($magData->slug);
                    @endphp
                    
                    @if($magData->digital_magazine)
                    <a target="_blank" href="{{url('/digital/'.$issueyear.'/'.$issuemonth.'/'.$digitalslug)}}"> <button type="button" class="btn btn-outline-danger">Digital View</button></a>
                    @else
                    <a href="#"> <button type="button" class="btn btn-outline-danger">Digital View</button></a>
                    @endif
                    
                </div>
                
                
            </div>
            <!--<div class="pwh_bg"></div>-->
        </div>

        <!-- cover part -->
        <div class="coverTop ">
            <div class="container">
                <div class="row">
                    <!-- Left column -->
                    <div class="col-md-6">
                        @foreach($coverData as $list)
                            <div class="text">
                                <a href="#">
                                    <p class="title">{{ $list->title}}</p>
                                </a>
                                <p class="details">{!! Illuminate\Support\Str::limit(htmlspecialchars_decode(strip_tags($list->details)), $limit = 400, $end = '...') !!}</p>
                                <a href="{{ url('cover-story/' . $list->slug) }}"><span>Read More >></span></a>
                            </div>
                        @endforeach
                    </div>
                    <!-- Right column -->
                    <style>
.coverImageShow {
    position: relative; /* This will help in positioning the span */
}

.image-box {
    width: 100%;              /* Full width of the parent container */
    max-width: 300px;          /* Set a max width for the image box */
    height: 450px;             /* Fixed height for the image box */
    overflow: hidden;          /* Hide overflow for oversized images */
    margin: 0 auto;            /* Center the image box horizontally */
    display: flex;
    flex-direction: column;    /* Align elements in a column (span on top, image below) */
    align-items: center;       /* Center the content horizontally */
    justify-content: flex-start; /* Align content to the top */
    border-radius: 8px;        /* Optional: Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Add depth */
    padding: 10px;             /* Add padding to the box */
}

.cover-title {
    font-size: 1.9rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;      /* Space between the title and the image */
    text-align: center;
}

.image-box img {
    width: 100%;               /* Make the image fill the width of the box */
    height: 100%;              /* Make the image fill the height of the box */
    object-fit: cover;         /* Crop and fill the box, preserving the aspect ratio */
    border-radius: 8px;        /* Optional: Match border-radius of the box */
}


                    </style>
                   <div class="col-md-6 coverImageShow">
                        <div class="image-box">
                            <span class="cover-title">On The Cover</span>
                            <img src="{{ url('public/assets/media/magazine_image/'.$magData->magazine_image) }}" alt="" class="img-fluid cover-image">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="coverEndColor">
            <span>MEET THE LEADERS</span>
        </div>

        <div class="issue_logo">
            @php
            $listingUrl = $magData->slug;
            $issueUrl = strtolower($listingUrl);
            @endphp
            <a href="{{url('listing/'. $magData->slug)}}"> <img src="{{ url('public/assets/media/magazine_image/'.$magData->issue_logo) }}" alt="" class="img-fluid issue-logo"></a>
        </div>

        <div class="leaderProfile">
            <div class="container">
                <div class="row">
                    @foreach($featureData as $story)
                        <div class="col-md-4 col-lg-4 col-sm-6 mb-4">
                            <div class="card h-100">
                                 <a class="maglink" href="{{ url('feature/' . $story->url) }}">
                                <img src="{{ url('public/assets/media/magazine_image/'.$story->image) }}" alt="Leader Image" class="card-img-top img-fluid rounded leader-image">
                                <div class="card-body" style="height: 250px;"> <!-- Set a fixed height for the card body -->
                                   
                                        <h4 class="card-title"><b>{!! Str::limit($story->title, ) !!}</b></h4>
                                    </a>
                                    <p class="card-text">
                                        {!! Illuminate\Support\Str::limit(htmlspecialchars_decode(strip_tags($story->details)), $limit = 250, $end = '...') !!}
                                    </p>
                                    <a href="{{ url('feature/' . $story->url) }}" class="mt-auto btn btn-primary btn-read-more">Read More >></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom Styles */
    .maglink:hover{
        color:red;
    }
    .card-title{
        font-size:14px;
        margin-top:10px;
        margin-bottom:10px;
    }
    .card-text{
        font-size:13px;
        padding:2%;
        margin-bottom:10px;
    }
    .cover-title {
        font-size: 1.9rem;
        font-weight: 700;
        color: #333;
        margin-top:10px;
        margin-bottom:10px;
        
    }

    .cover-image {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .issue-logo {
        margin-top: 20px;
    }

    .leader-image {
        width:100%;
        height: auto;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-read-more {
        background-color: #007bff;
        color: #fff;
        transition: background-color 0.3s ease-in-out;
        margin-top:10px;
    }

    .btn-read-more:hover {
        background-color: #0056b3;
    }
</style>

@endsection
