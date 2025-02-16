@extends('layout')

@section('meta_tag')
<!-- Improved SEO Meta Tags -->
<meta property="og:title" content="{{ $data->meta_title ?? 'Global Radiance Review - Leading Business and Technology Insights' }}" />
<meta name="keywords" content="{{ $data->meta_keyword ?? 'global magazine, business magazine, technology magazine, entrepreneur news, business news USA, technology trends, leadership insights, innovation magazine, IT professional magazine, sustainability trends, digital business magazine' }}" />  
<meta name="description" content="{{ $data->meta_description ?? 'Global Radiance Review provides the latest business news, technology trends, leadership insights, and entrepreneurial stories from across the globe. Stay informed with in-depth articles and expert opinions.' }}" />

<!-- Add additional meta tags for social media -->
<meta property="og:description" content="{{ $data->meta_description ?? 'Discover in-depth business news, leadership trends, and technology insights with Global Radiance Review. Stay updated with the latest stories and expert opinions from industry leaders.' }}" />
<meta property="og:image" content="{{ $data->meta_image ?? 'https://globalradiancereview.com/assets/logo/525%20x%20525%20(1)-black.png' }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />

<!-- Twitter Cards for better visibility on Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $data->meta_title ?? 'Global Radiance Review - Leading Business and Technology Insights' }}">
<meta name="twitter:description" content="{{ $data->meta_description ?? 'Stay ahead with the latest business and technology trends, leadership insights, and entrepreneurial stories from around the globe.' }}">
<meta name="twitter:image" content="{{ $data->meta_image ?? 'https://globalradiancereview.com/assets/logo/525%20x%20525%20(1)-black.png' }}">

<!-- Title Tag for Search Engines -->
<title>{{ $data->title ?? 'Global Radiance Review - Leading Business and Technology Insights' }}</title>
@endsection

@section('content')

            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!-- hero-carousel-wrap    -->
                    <div class="hero-carousel-wrap fl-wrap">
                        <div class="hero-carousel fl-wrap full-height">
                            <div class="swiper-container full-height">
                                <div class="swiper-wrapper">

                                @foreach($businessStory as $story)
                                    
                                    <!-- swiper-slide    -->
                                    <div class="swiper-slide">
                                        <div class="hero-carousel-item fl-wrap">
                                            <div class="grid-post-item  bold_gpi  fl-wrap">
                                                <div class="grid-post-media gpm_sing">
                                                    <div class="bg" data-bg="{{ url('assets/media/news_image/'.$story->image) }}"></div>
                                                    
                                                    <div class="grid-post-media_title">
                                                        <a class="post-category-marker" href="{{url($story->category)}}">{{strtoupper($story->category)}}</a>
                                                        <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{$story->title}}</a></h4>
                                                       
                                                        <!-- <ul class="post-opt">
                                                            <li><i class="far fa-comments-alt"></i>  25 </li>
                                                            <li><i class="fal fa-eye"></i>  164 </li>
                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end    -->
                                    @endforeach


                                    <!-- swiper-slide    -->
                                    <div class="swiper-slide">
                                      @foreach($technologyStory as $story)

                                        <div class="hero-carousel-item hero-carousel-item_half fl-wrap">
                                            <div class="grid-post-item  bold_gpi  fl-wrap">
                                                <div class="grid-post-media gpm_sing">
                                                    <div class="bg" data-bg="{{ url('assets/media/news_image/'.$story->image) }}"></div>
                                                   
                                                    <div class="grid-post-media_title">
                                                        <a class="post-category-marker" href="{{url($story->category)}}">{{strtoupper($story->category)}}</a>
                                                        <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{$story->title}}</a></h4>
                                                       
                                                        <!-- <ul class="post-opt">
                                                            <li><i class="far fa-comments-alt"></i>  15 </li>
                                                            <li><i class="fal fa-eye"></i>  234 </li>
                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          @endforeach

                                    </div>


                                  
                               
                                     
                                    
                                    @foreach($industryStory as $story)
                                    <!-- swiper-slide    -->
                                    <div class="swiper-slide">
                                        <div class="hero-carousel-item fl-wrap">
                                            <div class="grid-post-item  bold_gpi  fl-wrap">
                                                <div class="grid-post-media gpm_sing">
                                                    <div class="bg" data-bg="{{ url('assets/media/news_image/'.$story->image) }}"></div>
                                                    
                                                    <div class="grid-post-media_title">
                                                        <a class="post-category-marker" href="{{url($story->category)}}">{{strtoupper($story->category)}}</a>
                                                        <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{$story->title}}</a></h4>
                                                        
                                                        <!-- <ul class="post-opt">
                                                            <li><i class="far fa-comments-alt"></i>  25 </li>
                                                            <li><i class="fal fa-eye"></i>  164 </li>
                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end    -->
                                    @endforeach		

                                    @foreach($startupStory as $story)
                                    <!-- swiper-slide    -->
                                    <div class="swiper-slide">
                                        <div class="hero-carousel-item fl-wrap">
                                            <div class="grid-post-item  bold_gpi  fl-wrap">
                                                <div class="grid-post-media gpm_sing">
                                                    <div class="bg" data-bg="{{ url('assets/media/news_image/'.$story->image) }}"></div>
                                                   
                                                    <div class="grid-post-media_title">
                                                        <a class="post-category-marker" href="{{url($story->category)}}">{{strtoupper($story->category)}}</a>
                                                        <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{$story->title}}</a></h4>
                                                       
                                                        <!-- <ul class="post-opt">
                                                            <li><i class="far fa-comments-alt"></i> 67 </li>
                                                            <li><i class="fal fa-eye"></i>  542 </li>
                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end    -->	
                                    @endforeach								
                                </div>
                            </div>
                        </div>
                        <div class="hero-carousel-controls">
                            <div class="hero-carousel-pag"></div>
                            <div class="clearfix"></div>
                            <div class="hc-cont hc-cont-next"><i class="fas fa-caret-right"></i></div>
                            <div class="hc-cont hc-cont-prev"><i class="fas fa-caret-left"></i></div>
                        </div>
                    </div>
                    <!-- hero-slider-wrap  end   -->

                    <!-- <hr style="width: 50%; height: 10px;"> -->

                     <!-- section -->
                     <section class="no-padding">
                        <div class="fs-carousel-wrap">
                            <div class="fs-carousel-wrap_title">
                                <div class="fs-carousel-wrap_title-wrap fl-wrap">
                                    <h4>Trending Magazine</h4>
                                    <h5>Don't Miss And  Stay Up-to-date. Top pic for you.</h5>
                                </div>
                                <div class="abs_bg"></div>
                                <div class="gs-controls">
                                    <div class="gs_button gc-button-next"><i class="fas fa-caret-right"></i></div>
                                    <div class="gs_button gc-button-prev"><i class="fas fa-caret-left"></i></div>
                                </div>
                            </div>
                            
                            <div class="fs-carousel fl-wrap">
                                <div class="swiper-container swipContainer ">
                                    <div class="swiper-wrapper ">

                                    @foreach($magazinePage as $mPage)
                                        <!-- swiper-slide-->  
                                        <div class="swiper-slide magswiper">
                                           

                                                      <a href="{{url('/magazine/'.$mPage->slug)}}">  <img src="{{ url('assets/media/magazine_image/'.$mPage->magazine_image) }}" alt="{{$mPage->slug}}">
                                                    </a>
                                                            
                                                
                                        </div>
                                        <!-- swiper-slide end-->
                                        @endforeach
                                                                              
                                        									
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section  -->
                    <div class="gray-bg ad-wrap fl-wrap">
                        <div class="content-banner-wrap">
                            <!-- <img src="assets/images/all/banner.jpg" class="respimg" alt=""> -->
                        </div>
                    </div>
                    <!-- section end -->


                    <!-- section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="main-container fl-wrap fix-container-init">
                                        <div class="section-title">
                                            <h2>Technology </h2>
                                            <h4>Don't miss daily news</h4>
                                            <div class="ajax-nav">
                                            <ul>
                                                <li><a href="#" class="ajax-link current_page" data-target="ajax-latest">Latest</a></li>
                                                <li><a href="#" class="ajax-link" data-target="ajax-bigData">Big Data</a></li>
                                                <li><a href="#" class="ajax-link" data-target="ajax-cloud">Cloud</a></li>
                                                <li><a href="#" class="ajax-link" data-target="ajax-software">Software</a></li>
                                                 <li><a href="#" class="ajax-link" data-target="ajax-networking">Networking</a></li> 
                                            </ul>
                                            </div>
                                        </div>
                                        <div class="ajax-wrapper fl-wrap">
                                            <div class="ajax-loader"><img src="assets/images/loading.gif" alt=""/></div>

                                            <div id="ajax-content" class="fl-wrap">

                                            
                                            </div>
                                        </div>

                                        
                                        <div class="content-banner-wrap cbw_mar">
                                            <!--<img src="assets/images/all/banner.jpg" class="respimg" alt="">-->
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="section-title sect_dec">
                                            <h2>Top Stories</h2>
                                            <h4>Don't miss daily news</h4>
                                        </div>
                                        <div class="grid-post-wrap">
                                            <div class="more-post-wrap  fl-wrap">
                                                <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                                    <div class="row">

                                                    @foreach ($topStories as $story)	
                                                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                                           
                                                        <!--list-post-->
                                                            <div class="list-post fl-wrap">
                                                                <a class="post-category-marker" href="">Profiles</a>
                                                                <div class="list-post-media">
                                                                    <a href="{{url('feature/'.$story->url)}}">
                                                                        <div class="bg-wrap">
                                                                            <div class="bg" data-bg="{{ url('assets/media/magazine_image/'.$story->image) }}"></div>
                                                                        </div>
                                                                    </a>
                                                                    <span class="post-media_title">{{$story->image_alt}}</span>
                                                                </div>
                                                                <div class="list-post-content">
                                                                    <h3><a href="{{url('feature/'.$story->url)}}">{{$story->title}}</a></h3>
                                                                    
                                                                </div>
                                                            </div>
                                                            <!--list-post end-->						  
                                                       
                                                       
                                                        </div>
                                                        @endforeach
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <!--grid-post-item-->
                                            <div class="single-grid-slider-wrap fl-wrap">
                                                <div class="single-grid-slider">
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">

                                                        @foreach($coverStory as $story)
                                                            <!-- swiper-slide-->  
                                                            <div class="swiper-slide">
                                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                                    <div class="grid-post-media gpm_sing">
                                                                        <div class="bg" data-bg="{{ url('assets/media/magazine_image/'.$story->image) }}"></div>
                                                                       
                                                                        <div class="grid-post-media_title">
                                                                            <a class="post-category-marker" href="{{url('magazine')}}">Cover</a>
                                                                            <h4><a href="{{url('cover-story/'.$story->slug)}}">{{$story->title}}</a></h4>
                                                                         
                                                                            <!-- <ul class="post-opt">
                                                                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                                                                <li><i class="fal fa-eye"></i>  164 </li>
                                                                            </ul> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- swiper-slide end-->
                                                            @endforeach

																
                                                        </div>
                                                        <div class="sgs-pagination sgs_ver "></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--grid-post-item end-->								
                                            <div class="more-post-wrap  fl-wrap">
                                                <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                                    <div class="row">
                                                      @foreach ($topStorySkip as $story)
                                                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                                            <!--list-post-->	
                                                            <div class="list-post fl-wrap">
                                                                <a class="post-category-marker" href="{{url('feature/'.$story->url)}}">Profiles</a>
                                                                <div class="list-post-media">
                                                                    <a href="{{url('feature/'.$story->url)}}">
                                                                        <div class="bg-wrap">
                                                                            <div class="bg" data-bg="{{ url('assets/media/magazine_image/'.$story->image) }}"></div>
                                                                        </div>
                                                                    </a>
                                                                    <span class="post-media_title">{{$story->image_alt}}</span>
                                                                </div>
                                                                <div class="list-post-content">
                                                                    <h3><a href="{{url('feature/'.$story->url)}}">{{$story->title}}</a></h3>
                                                                    
                                                                </div>
                                                            </div>
                                                            <!--list-post end-->						  
                                                        </div>
                                                        @endforeach
                                                        
                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <a href="blog2.html" class="dark-btn fl-wrap"> Read all News </a> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- sidebar   -->
                                    <div class="sidebar-content fl-wrap fix-bar">
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <!-- content-tabs-wrap -->
                                                <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                                    <div class="content-tabs fl-wrap">
                                                        <ul class="tabs-menu fl-wrap no-list-style">
                                                            <li class="current"><a href="#tab-popular"> Press Release </a></li>
                                                            <li><a href="#tab-resent">Resent News</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--tabs -->                       
                                                    <div class="tabs-container">

                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-popular" class="tab-content first-tab">
                                                                <div class="post-widget-container fl-wrap">
                                                                    @foreach($pressNews as $story)
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="{{url($story->category.'/'.$story->slug)}}"><img src="{{ url('assets/media/news_image/'.$story->image) }}"  alt="{{$story->image_alt}}"></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{ Illuminate\Support\Str::limit($story->title, $limit = 53, $end = '...') }}</a></h4>
                                                                            <ul class="pwic_opt">
                                                                               
                                                                                <!-- <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 654</span></li> -->
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                    @endforeach
                                                                  																										
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab  end-->

                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-resent" class="tab-content">
                                                                <div class="post-widget-container fl-wrap">
                                                                    
                                                                
                                                                  @foreach($resentNews as $story)

                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="{{url($story->category.'/'.$story->slug)}}"><img src="{{ url('assets/media/news_image/'.$story->image) }}"  alt="{{$story->image_alt}}"></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{ Illuminate\Support\Str::limit($story->title, $limit = 50, $end = '...') }}
</a></h4>
                                                                            <ul class="pwic_opt">
                                                                               
                                                                                <!-- <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 727</span></li> -->
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->		
                                                                    @endforeach												
                                                                   													
                                                                   												
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab end-->							
                                                    </div>
                                                    <!--tabs end-->  
                                                </div>
                                                <!-- content-tabs-wrap end -->
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->	
                                        
                                        
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div id="weather-widget" class="ideaboxWeather" data-city="New Jersey"></div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Follow Us</div>
                                            <div class="box-widget-content">
                                                <div class="social-widget">
                                                    <a href="https://www.facebook.com/globalradiancereview" target="_blank" class="facebook-soc">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span class="soc-widget-title">Facebook</span>
                                                    <span class="soc-widget_counter"></span>
                                                    </a>
                                                    <a href="https://twitter.com/GlobalRadiance" target="_blank" class="twitter-soc">
                                                    <i class="fab fa-twitter"></i>
                                                    <span class="soc-widget-title">Twitter</span>
                                                    <span class="soc-widget_counter"></span>												
                                                    </a> 
                                                    <a href="https://www.linkedin.com/company/global-radiance-review/" target="_blank" class="youtube-soc">
                                                    <i class="fab fa-linkedin"></i>
                                                    <span class="soc-widget-title">Linkedin</span>
                                                    <span class="soc-widget_counter"></span>												
                                                    </a> 												
                                                    <a href="https://www.instagram.com/global_radiance_review/" target="_blank" class="instagram-soc">
                                                    <i class="fab fa-instagram"></i>
                                                    <span class="soc-widget-title">Insagram</span>
                                                    <span class="soc-widget_counter"></span>												
                                                    </a> 														
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->						
                                        <!-- box-widget -->
                                        <!-- <div class="box-widget fl-wrap">
                                            <div class="widget-title">Popular Tags</div>
                                            <div class="box-widget-content">
                                                <div class="tags-widget">
                                                    <a href="#">Science</a>
                                                    <a href="#">Politics</a>
                                                    <a href="#">Technology</a>
                                                    <a href="#">Business</a>
                                                    <a href="#">Sports</a>
                                                    <a href="#">Food</a>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- box-widget  end													 -->
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="single-grid-slider slider_widget">
                                                    <div class="slider_widget_title">Editor's Choice</div>
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">

                                                        @foreach($editorsNews as $story)
                                                            <!-- swiper-slide-->  
                                                            <div class="swiper-slide">
                                                                <div class="grid-post-item     fl-wrap">
                                                                    <div class="grid-post-media gpm_sing">
                                                                        <div class="bg-wrap">
                                                                            <div class="bg" data-bg="{{ url('assets/media/news_image/'.$story->image) }}"></div>
                                                                            <div class="overlay"></div>
                                                                        </div>
                                                                        <div class="grid-post-media_title">
                                                                            <!-- <a class="post-category-marker" href="category.html">Technology</a> -->
                                                                            <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{$story->title}}</a></h4>
                                                                            <!-- <span class="video-date"><i class="far fa-clock"></i>16 january 2022</span> -->
                                                                            <!-- <ul class="post-opt">
                                                                                <li><i class="far fa-comments-alt"></i> 11 </li>
                                                                                <li><i class="fal fa-eye"></i>  55 </li>
                                                                            </ul> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- swiper-slide end-->
                                                            @endforeach
                                                        								
                                                          									
                                                        </div>
                                                        <div class="sgs-pagination sgs_hor "></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->					
                                    </div>
                                    <!-- sidebar  end -->
                                </div>
                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section   -->
                    <section class="dark-bg no-bottom-padding">
                        <div class="container">
                            <div class="main-video-wrap fl-wrap">
                                <div class="video-main-cont">
                                    <div class="video-section-title fl-wrap">
                                        <h2>Featured Video</h2>
                                        <h4>Stay up-to-date</h4>
                                        <a href="#">View All <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <a class="video-holder vh-main fl-wrap  image-popup"  href="#">
                                        <div class="bg"></div>
                                        <div class="overlay"></div>
                                        <div class="big_prom"> <i class="fas fa-play"></i></div>
                                    </a>
                                    <div class="video-holder-title fl-wrap">
                                        <div class="video-holder-title_item"><a href="#"></a></div>
                                        <span class="video-date"><i class="far fa-clock"></i> <strong></strong></span>
                                        <a class="post-category-marker" href="#"></a>
                                    </div>
                                    <div class="vh-preloader"></div>
                                </div>
                                <!-- video-links-wrap   -->
                                <div class="video-links-wrap">
                                    
                                    @foreach($video1 as $list)
                                    
                                    <!-- video-item  -->
                                    @if($list->video_link == null)
                                    <div class="video-item video-item_active fl-wrap" data-url="{{ url('assets/media/video/news_video/'.$list->video) }}" data-video-link="{{ url('assets/media/video/news_video/'.$list->video) }}">
                                        @else
                                        <div class="video-item video-item_active fl-wrap" data-url="{{$list->video_link}}" data-video-link="{{$list->video_link}}">
                                         @endif
                                        
                                        <div class="video-item-img fl-wrap">
                                            <img src="{{ url('assets/media/video/news_image/'.$list->image) }}" class="respimg" alt="">
                                            <div class="play-icon"><i class="fas fa-play"></i></div>
                                        </div>
                                        <div class="video-item-title">
                                            <h4>{{$list->title}} | </h4>
                                            
                                        </div>
                                        <!--<a class="post-category-marker" href="category.html"></a>-->
                                    </div>
                                    <!--video-item end   -->
                                    @endforeach
                                   	
                                   											
                                </div>
                                <!-- video-links-wrap end   -->
                            </div>
                        </div>
                        <div class="video_carousel-wrap fl-wrap">
                            <div class="container">
                                <div class="video_carousel-container">
                                    <div class="video_carousel_title">
                                        <h4>Popular Videos</h4>
                                        <div class="vc-pagination pag-style"></div>
                                    </div>
                                    <!-- fw-carousel  -->
                                    <div class="video_carousel  lightgallery">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                 @foreach($video2 as $list )
                                                <!-- swiper-slide-->  
                                                <div class="swiper-slide">
                                                    
                                                   
                                                    
                                                    <!-- video-item  -->
                                                    <div class="video-item fl-wrap">
                                                        <div class="video-item-img fl-wrap">
                                                            <img src="{{ url('assets/media/video/news_image/'.$list->image) }}" class="respimg" alt="">
                                                            @if($list->video_link == null)
                                                            
                                                            <a class="play-icon image-popup" href="{{ url('assets/media/video/news_video/'.$list->video) }}"><i class="fas fa-play"></i></a>
                                                            
                                                            @else
                                                            <a class="play-icon image-popup" href="{{$list->video_link }}"><i class="fas fa-play"></i></a>
                                                            @endif
                                                            
                                                            
                                                        </div>
                                                        <div class="video-item-title">
                                                            <h4><a href="#">{{$list->title}}</a></h4>
                                                           
                                                        </div>
                                                        <a class="post-category-marker" href="#">{{$list->sub_category}}</a>
                                                    </div>
                                                    <!--video-item end   -->
                                                    
                                                    
                                                </div>
                                                <!-- swiper-slide end-->  
                                                @endforeach
                                                									
                                               									
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fw-carousel end -->								
                                    <div class="cc-prev cc_btn"><i class="fas fa-caret-left"></i></div>
                                    <div class="cc-next cc_btn"><i class="fas fa-caret-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->

                    
                    <!-- section  -->
                    <section>
                        <div class="container">
                            <div class="section-title sect_dec">
                                <h2>Industry</h2>
                                <h4>Don't miss daily news</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">

                                            @foreach($industryStory as $story)
                                        <!--list-post-->	
                                        <div class="list-post fl-wrap">
                                            <a class="post-category-marker" href="#">{{ ucfirst(strtolower($story->category)) }}</a>
                                            <div class="list-post-media">
                                                <a href="{{url($story->category.'/'.$story->slug)}}">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{ url('assets/media/news_image/'.$story->image) }}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">{{$story->image_alt}}</span>
                                            </div>
                                            <div class="list-post-content">
                                                <h3><a href="{{url($story->category.'/'.$story->slug)}}">{{$story->title}} </a></h3>
                                               
                                                <p>{!! Illuminate\Support\Str::limit(strip_tags($story->details), $limit = 150, $end = '...') !!} </p>
                                                </div>
                                        </div>
                                        <!--list-post end-->	
                                        @endforeach			
                                    </div>
                                    <!-- <a href="blog2.html" class="dark-btn fl-wrap"> Read all News </a> -->
                                </div>
                                <div class="col-md-7">
                                    <div class="picker-wrap-container fl-wrap">
                                        <div class="picker-wrap-controls">
                                            <ul class="fl-wrap">
                                                <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                                <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                                <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                            </ul>
                                        </div>
                                        <div class="picker-wrap fl-wrap">
                                            <div class="list-post-wrap  fl-wrap">

                                            @foreach($industryBootomStory as $story)
                                                <!--list-post-->	
                                                <div class="list-post fl-wrap">
                                                    <div class="list-post-media">
                                                        <a href="{{url($story->category.'/'.$story->slug)}}">
                                                            <div class="bg-wrap">
                                                                <div class="bg" data-bg="{{ url('assets/media/news_image/'.$story->image) }}"></div>
                                                            </div>
                                                        </a>
                                                        <span class="post-media_title">{{$story->image_alt}}</span>
                                                    </div>
                                                    <div class="list-post-content">
                                                        <a class="post-category-marker" href="{{url($story->category)}}">{{ ucfirst(strtolower($story->category)) }}</a>
                                                        <h3><a href="{{url($story->category.'/'.$story->slug)}}">{{ Illuminate\Support\Str::limit($story->title, $limit = 50, $end = '...') }}
                                                        </a></h3>
                                                       
                                                        <p>{!! Illuminate\Support\Str::limit(strip_tags($story->details), $limit = 150, $end = '...') !!}

                                                                </p>
                                                    </div>
                                                </div>
                                                <!--list-post end-->

                                                @endforeach
                                               				
                                              				
                                               
                                            </div>
                                        </div>
                                        <div class="controls-limit fl-wrap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="limit-box"></div>
                    </section>
                    <!-- section end -->


                     <!-- section -->
<section>
    <div class="container">
        <div class="section-title sect_dec">
            <h2>Our Clients</h2>
            <h4>Don't miss brand story</h4>
        </div>

        <div class="swiper-container client-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->

                @foreach($ourClients1 as $list)
               

                <div class="swiper-slide ">
                    <div class="client-slideBottom">
                        <div class="magazine_slide">
                        <a href="{{url('feature/'.$list->url)}}">    <img src="{{ url('assets/media/magazine_image/'.$list->feature_company_logo) }}" alt="{{$list->company_logo_alt}}"> </a>
                         </div>
                    </div>
                </div>

                @endforeach                

                
         
            </div>
        
        </div>
        


        <div class="swiper-container client-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->

                @foreach($ourClients2 as $list)
               

               <div class="swiper-slide ">
                   <div class="client-slideBottom">
                       <div class="magazine_slide">
                        <a href="{{url('feature/'.$list->url)}}"> <img src="{{ url('assets/media/magazine_image/'.$list->feature_company_logo) }}" alt="{{$list->company_logo_alt}}"></a>
                         </div>
                   </div>
               </div>

               @endforeach 

               


              
         
            </div>
        
        </div>
    </div>
</section>




  </div>
                <!-- content  end-->

                
@endsection