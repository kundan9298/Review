@extends('layout')

@section('meta_tag')
    <meta property="og:title" content="{{ $data->meta_title ?? 'Global Radiance Review - Top business magazine and news headlines' }}" />
    <meta name="keywords" content="{{ $data->meta_keyword ?? 'global magazine, business review magazine, Best Business news Magazine usa, technology news magazine, entrepreneur magazine, digital magazine usa, magazine for IT professional, magazine article, top breaking news headlines usa, online leading print magazine usa, magazine article usa, Online technology magazine, global magazine, business review magazine, Global Radiance Review Magazine' }}" />  
    <meta name="description" content="{{ $data->meta_description ?? 'Global Radiance Review provide the latest news headlines, digital magazine, business news and online & print community of magazines for the entrepreneur & business leadersn' }}" />
    <title>{{ $data->title ?? 'Global Radiance Review - Top business magazine and news headlines' }}</title>
@endsection

@section('content')


            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!--section   -->
                    <section class="hero-section">
                        <div class="bg-wrap hero-section_bg">
                            <div class="bg" data-bg="assets/images/all/cover.jpg"></div>
                        </div>
                        <div class="container">
                            <div class="hero-section_title">
                                <h2>Magazines</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div class="breadcrumbs-list fl-wrap">
                                <a href="#">Home</a> <span>Magazines</span>
                            </div>
                            <div class="scroll-down-wrap scw_transparent">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                    </section>
                    <!-- section end  -->
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-container fl-wrap fix-container-init">
                                        <div class="section-title">
                                            <h3>Sort by:</h3>
                                            <div class="steader_opt steader_opt_abs">
                                                <select name="filter-year" id="list-year" data-placeholder="Persons" class="style-select no-search-select">
                                                    <option>All</option>
                                                    <option>2024</option>
                                                    <option>2023</option>
                                                    <option>2022</option>
                                                    <option>2021</option>
                                                    <option>2020</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!--grid-post-wrap-->
                                        @include('magazineChildOne');
                                 
                                        <!--grid-post-wrap end-->
                                        <div class="clearfix"></div>
                                        <!-- <div class="load-more_btn"><i class="fal fa-undo"></i>Load More</div> -->
                                        
                                        
                                        <!--pagination-->
                                        <!--<div class="pagination">-->
                                        <!--    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i></a>-->
                                        <!--    <a href="#" class="current-page">01.</a>-->
                                        <!--    <a href="#" >02.</a>-->
                                        <!--    <a href="#">03.</a>-->
                                        <!--    <a href="#">04.</a>-->
                                        <!--    <a href="#" class="nextposts-link"><i class="fas fa-caret-right"></i></a>-->
                                        <!--</div>-->
                                        <!--pagination end-->	
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <!-- section  -->
                    <div class="gray-bg ad-wrap fl-wrap">
                        <div class="content-banner-wrap">
                            <!--<img src="images/all/banner.jpg" class="respimg" alt="">-->
                        </div>
                    </div>
                    <!-- section end -->
                </div>
                <!-- content  end-->
       

@endsection