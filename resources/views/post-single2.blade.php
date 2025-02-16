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
                    <div class="breadcrumbs-header fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs-header_url">
                                @php
                                $string = $data->slug;
                            $modifiedString = str_replace('-', ' ', $string);
                            @endphp
                                <a href="/">Home</a><span>{{$modifiedString}}</span>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover </span>
                            </div>
                        </div>
                        <div class="pwh_bg"></div>
                    </div>
                    <!-- section end  -->

                   
                
                    <section>
                        <div class="container">
                            <div class="row">

                                <div class="col-md-8">
                                
                                    <div class="main-container fl-wrap fix-container-init">

                                        <!-- single-post-header  -->
                                        <div class="single-post-header fl-wrap">
                                            <a class="post-category-marker" href="{{url('magazine/'.$data->slug)}}">{{$modifiedString}}</a>
                                            <div class="clearfix"></div>
                                            <h1>{{$data->title}}</h1>
                                            <!-- <h4>Perspiciatis unde omnis iste natus error sit voluptatem.</h4> -->
                                            <div class="clearfix"></div>
                                            <!-- <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Mark Rose</span></a></div> -->
                                            <!-- <span class="post-date"><i class="far fa-clock"></i> 05 April 2022</span> -->
                                            <!-- <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i> 4 </li>
                                                <li><i class="fal fa-eye"></i>  980 </li>
                                            </ul> -->
                                        </div>
                                        <!-- single-post-header end   -->
                                     
                                   <!-- single-post-media   -->
                                        <div class="single-post-media fl-wrap">
                                            <div class="single-slider-wrap fl-wrap">
                                                <div class="single-slider fl-wrap">
                                                    <!--<div class="swiper-container">-->
                                                       <img src="{{ url('public/assets/media/magazine_image/'.$data->image) }}" alt="{{$data->image_alt}}">
                                                    <!--</div>-->
                                                </div>
                                                
                                                <!--<div class="ss-slider-controls2">-->
                                                <!--    <div class="ss-slider-pagination pag-style"></div>-->
                                                <!--</div>-->
                                                
                                                <!--<div class="ss-slider-cont ss-slider-cont-prev"><i class="fas fa-caret-left"></i></div>-->
                                                <!--<div class="ss-slider-cont ss-slider-cont-next"><i class="fas fa-caret-right"></i></div>-->
                                            </div>
                                        </div>
                                        <!-- single-post-media end   -->
                                        <!-- single-post-content   -->
                                        <div class="single-post-content  fl-wrap">
                                            <div class="fs-wrap smpar fl-wrap">
                                                <!-- <div class="fontSize"><span class="fs_title">Font size: </span><input type="text" class="rage-slider" data-step="1" data-min="15" data-max="20" value="15"></div> -->
                                                <!-- <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div> -->
                                                
                                                <!--<div class="show-more-snopt-tooltip">-->
                                                <!--    <a href="#comments" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Write a Comment</a>-->
                                                <!--    <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>-->
                                                <!--</div>-->
                                                <!--<a class="print-btn" href="javascript:window.print()" data-microtip-position="bottom"><span>Print</span><i class="fal fa-print"></i></a>-->
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="single-post-content_text" id="font_chage">
                                                  
                                                   
                                               <?php $ddd= $data->details; 
                                               
                                               $ddd =  str_replace(['<strong>', '</strong>'], ['<b>', '</b>'], $ddd);
                                               
                                               ?>
                                               
                                               {!! htmlspecialchars_decode($ddd) !!}

                                           
                                
                                            </div>
                                            <div class="single-post-footer fl-wrap">
                                                <div class="post-single-tags">
                                                    <span class="tags-title"><i class="fas fa-tag"></i> Tags : </span>
                                                    <div class="tags-widget">
                                                    @foreach(explode(', ', $data->tags) as $tag)
                                                        <a href="#" class="your-link-class">{{ $tag }}</a>
                                                    @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-post-nav"   -->
                                            <div class="single-post-nav fl-wrap">
                                            @if($prevPost!=null)
                                                <a href="/feature/{{ $prevPost->url }}" class="single-post-nav_prev spn_box">
                                                    <div class="spn_box_img">
                                                        <img src="{{ url('public/assets/media/magazine_image/'.$prevPost->image) }}" class="respimg" alt="">
                                                    </div>
                                                    <div class="spn-box-content">
                                                        <span class="spn-box-content_subtitle"><i class="fas fa-caret-left"></i> Prev Post</span>
                                                        
                                                        <span class="spn-box-content_title">{{$prevPost->title}}</span>
                                                       
                                                    </div>
                                                </a>
                                                @endif
                                                @if($nextPost!=null)
                                                <a href="/feature/{{ $nextPost->url }}" class="single-post-nav_next spn_box">
                                                    <div class="spn_box_img">
                                                        <img src="{{ url('public/assets/media/magazine_image/'.$nextPost->image) }}" class="respimg" alt="">
                                                    </div>
                                                    <div class="spn-box-content">
                                                        <span class="spn-box-content_subtitle">Next Post <i class="fas fa-caret-right"></i></span>
                                                        
                                                        <span class="spn-box-content_title">{{$nextPost->title}}</span>
                                                       
                                                    </div>
                                                </a>
                                                @endif
                                            </div>
                                            <!-- single-post-nav"  end   -->
                                        </div>
                                        <!-- single-post-content  end   -->
                                        <div class="limit-box2 fl-wrap"></div>
                                       
                                        <!--post-author end-->		
                                        <div class="more-post-wrap  fl-wrap">
                                            <div class="pr-subtitle prs_big">Related Posts</div>
                                            <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                                <div class="row">

                                                @foreach($coverStory as $list )
                                                    <div class="col-md-6">
                                                        <!--list-post-->	
                                                        <div class="list-post fl-wrap">
                                                            <!-- <a class="post-category-marker" href="category.html">Science</a> -->
                                                            <div class="list-post-media">
                                                                <a href="{{url('magazine/'.$list->slug)}}">
                                                                    <div class="bg-wrap">
                                                                        <div class="bg" data-bg="{{ url('public/assets/media/magazine_image/'.$list->image) }}"></div>
                                                                    </div>
                                                                </a>
                                                                <span class="post-media_title">{{$list->image_alt}}</span>
                                                            </div>
                                                            <div class="list-post-content">
                                                                <h3><a href="{{url('magazine/'.$list->slug)}}">{{$list->title}}</a></h3>
                                                                <!-- <span class="post-date"><i class="far fa-clock"></i>  05 April 2022</span> -->
                                                            </div>
                                                        </div>
                                                        <!--list-post end-->						  
                                                    </div>
                                                    @endforeach
                                                
                                                </div>
                                            </div>
                                        </div>
                                       					  
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- sidebar   -->
                                    <div class="sidebar-content fl-wrap fixed-bar">
                                        <!-- box-widget -->
                                       					
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Latest Issues</div>
                                            <div class="box-widget-content">
                                                <div class="sb-categories_bg">
                                                    @foreach($latestIssueName as $list)
                                                    <!-- sb-categories_bg_item -->
                                                    <a href="{{url('/magazine/'.$list->slug)}}" class="sb-categories_bg_item">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="https://t3.ftcdn.net/jpg/06/81/75/32/240_F_681753253_wtzr25gNl1fHZBoDWQ55EyJ3w38eGO1s.jpg"></div>
                                                            <div class="overlay"></div>
                                                        </div>
                                                        <div class="spb-categories_title"><span></span>{{$list->issue_name}}</div>
                                                        <div class="spb-categories_counter">{{$list->issue_year}}</div>
                                                    </a>
                                                    <!-- sb-categories_bg_item  end-->
                                                    @endforeach
                                                   												
                                                    												
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        					
                                    						
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="single-grid-slider slider_widget">
                                                    <div class="slider_widget_title">Editor's Choice</div>
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">
                                                            @foreach($editorsNews as $list)
                                                            <!-- swiper-slide-->  
                                                            <div class="swiper-slide">
                                                                <div class="grid-post-item     fl-wrap">
                                                                    <div class="grid-post-media gpm_sing">
                                                                        <div class="bg-wrap">
                                                                            <div class="bg" data-bg="{{ url('public/assets/media/news_image/'.$list->image) }}"></div>
                                                                            <div class="overlay"></div>
                                                                        </div>
                                                                        <div class="grid-post-media_title">
                                                                            <!-- <a class="post-category-marker" href="category.html">Technology</a> -->
                                                                            <h4><a href="{{url('article/'.$list->slug)}}">{{$list->title}}</a></h4>
                                                                         
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
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <!-- content-tabs-wrap -->
                                                <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                                    <div class="content-tabs fl-wrap">
                                                        <ul class="tabs-menu fl-wrap no-list-style">
                                                            <li class="current"><a href="#tab-popular"> Press News </a></li>
                                                            <li><a href="#tab-resent">Resent News</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--tabs -->                       
                                                    <div class="tabs-container">
                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-popular" class="tab-content first-tab">
                                                                <div class="post-widget-container fl-wrap">

                                                                @foreach($pressNews as $list)
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="{{url('press-release/'.$list->slug)}}"><img src="{{ url('public/assets/media/news_image/'.$list->image) }}"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="{{url('press-release/'.$list->slug)}}">{{ Illuminate\Support\Str::limit(strip_tags($list->title), $limit = 55, $end = '...') }}</a></h4>
                                                                       
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
                                                                    @foreach($resentNews as $list)
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="{{url($list->category.'/'.$list->slug)}}"><img src="{{ url('public/assets/media/news_image/'.$list->image) }}"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="{{url($list->category.'/'.$list->slug)}}">{{ Illuminate\Support\Str::limit(strip_tags($list->title), $limit = 55, $end = '...') }}</a></h4>
                                                                    
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
                                    </div>
                                    <!-- sidebar  end -->
                                </div>
                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section  -->
                    <div class="gray-bg ad-wrap fl-wrap">
                        <div class="content-banner-wrap">
                            <!-- <img src="images/all/banner.jpg" class="respimg" alt=""> -->
                        </div>
                    </div>
                    <!-- section end -->
                </div>
                <!-- content  end-->
               @endsection