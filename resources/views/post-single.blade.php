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
            <a href="/">Home</a><span>{{$catName}}</span>
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
   <!--section   -->
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="main-container fl-wrap fix-container-init">
                  <!-- single-post-header  -->
                  <div class="single-post-header fl-wrap">
                     <a class="post-category-marker" href="/{{$data->category}}">{{$catName}}</a>
                     <div class="clearfix"></div>
                     <h1>{{$data->title}}</h1>
                     <!-- <h4>Perspiciatis unde omnis iste natus error sit voluptatem.</h4> -->
                     <div class="clearfix"></div>
                     <!-- <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Mark Rose</span></a></div> -->
                     <span class="post-date"><i class="far fa-clock"></i>
                     {{ $data->formattedDate }}</span>
                     <ul class="post-opt">
                        @php
                        $usedNumbers = [];
                        $CommentusedNumbers = [];
                        $randomNumber = rand(100, 999);
                        $CommentrandomNumber = rand(1, 99);
                        while (in_array($randomNumber, $usedNumbers)) {
                        $randomNumber = rand(10, 999);
                        }
                        while (in_array($CommentrandomNumber, $usedNumbers)) {
                        $randomNumber = rand(1, 10);
                        }
                        $usedNumbers[] = $randomNumber;
                        $CommentusedNumbers[] = $CommentrandomNumber;
                        @endphp
                        <li><i class="far fa-comments-alt"></i> {{$CommentrandomNumber}} </li>
                        <li><i class="fal fa-eye"></i>  {{ $randomNumber }} </li>
                     </ul>
                  </div>
                  <!-- single-post-header end   -->
                  
                  
                  
                  <!-- single-post-media   -->
                  <div class="single-post-media fl-wrap">
                     <div class="single-slider-wrap fl-wrap">
                        <div class="single-slider fl-wrap">
                           <!--<div class="swiper-container">-->
                              <img src="{{ url('public/assets/media/news_image/'.$data->image) }}" alt="{{$data->image_alt}}">
                           <!--</div>-->
                        </div>
                        <div class="ss-slider-controls2">
                           <div class="ss-slider-pagination pag-style"></div>
                        </div>
                        <!--<div class="ss-slider-cont ss-slider-cont-prev"><i class="fas fa-caret-left"></i></div>-->
                        <!--<div class="ss-slider-cont ss-slider-cont-next"><i class="fas fa-caret-right"></i></div>-->
                     </div>
                  </div>
                  <!-- single-post-media end   -->
                  
                  
                  
                  <!-- single-post-content   -->
                  <div class="single-post-content spc_column fl-wrap">
                     <div class="single-post-content_column">
                        <div class="share-holder ver-share fl-wrap">
                           <div class="share-title">Share This <br> Article:</div>
                           <div class="share-container  isShare"></div>
                        </div>
                     </div>
                     <div class="fs-wrap smpar fl-wrap">
                        <div class="fontSize"><span class="fs_title">Font size: </span><input type="text" class="rage-slider" data-step="1" data-min="12" data-max="15" value="12"></div>
                        <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                        <div class="show-more-snopt-tooltip">
                           <a href="#comments" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Write a Comment</a>
                           <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                        </div>
                        <a class="print-btn" href="javascript:window.print()" data-microtip-position="bottom"><span>Print</span><i class="fal fa-print"></i></a>
                     </div>
                     <div class="clearfix"></div>
                     <div class="single-post-content_text" id="font_chage">
                        <p class="has-drop-cap">
                           <?php $ddd= $data->details; 
                              $ddd =  str_replace(['<strong>', '</strong>'], ['<b>', '</b>'], $ddd);
                              
                              ?>
                           {!! htmlspecialchars_decode($ddd) !!}
                        </p>
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
                        <a href="/{{ $prevPost->category }}/{{ $prevPost->slug }}" class="single-post-nav_prev spn_box">
                           <div class="spn_box_img">
                              <img src="{{ url('public/assets/media/news_image/'.$prevPost->image) }}" class="respimg" alt="">
                           </div>
                           <div class="spn-box-content">
                              <span class="spn-box-content_subtitle"><i class="fas fa-caret-left"></i> Prev Post</span>
                              <span class="spn-box-content_title">{{$prevPost->title}}</span>
                           </div>
                        </a>
                        @endif
                        @if($nextPost!=null)
                        <a href="/{{ $nextPost->category }}/{{ $nextPost->slug }}" class="single-post-nav_next spn_box">
                           <div class="spn_box_img">
                              <img src="{{ url('public/assets/media/news_image/'.$nextPost->image) }}" class="respimg" alt="">
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
                  <!-- post-author-->                                   
                  <!-- <div class="post-author fl-wrap">
                     <div class="author-img">
                         <img  src="images/avatar/1.jpg" alt="">	
                     </div>
                     <div class="author-content fl-wrap">
                         <h5>Written By <a href="author-single.html">Mark Rose</a></h5>
                         <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket..</p>
                     </div>
                     <div class="profile-card-footer fl-wrap">
                         <a href="author-single.html" class="post-author_link">View Profile <i class="fas fa-caret-right"></i></a>
                         <div class="profile-card-footer_soc">
                             <div class="profile-card-footer_title">Follow: </div>
                             <div class="profile-card-social">
                                 <ul>
                                     <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                     <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     </div> -->
                  <!--post-author end-->		
                  <div class="more-post-wrap  fl-wrap">
                     <div class="pr-subtitle prs_big">Top Stories</div>
                     <div class="list-post-wrap list-post-wrap_column fl-wrap">
                        <div class="row">
                           @foreach($featuredStory as $story)
                           <div class="col-md-6">
                              <!--list-post-->	
                              <div class="list-post fl-wrap">
                                 <!-- <a class="post-category-marker" href="category.html">Science</a> -->
                                 <div class="list-post-media">
                                    <a href="{{url('/feature/'.$story->url)}}">
                                       <div class="bg-wrap">
                                          <div class="bg" data-bg="{{ url('public/assets/media/magazine_image/'.$story->image) }}"></div>
                                       </div>
                                    </a>
                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                 </div>
                                 <div class="list-post-content">
                                    <h3><a href="{{url('/feature/'.$story->url)}}">{{$story->title}}</a></h3>
                                    <!-- <span class="post-date"><i class="far fa-clock"></i>  {{ $story->formattedDate }}</span> -->
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
                  <div class="box-widget fl-wrap">
                     <div class="box-widget-content">
                        <!--<div class="search-widget fl-wrap">-->
                        <!--    <form action="#">-->
                        <!--        <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />-->
                        <!--        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>-->
                        <!--    </form>-->
                        <!--</div>-->
                     </div>
                  </div>
                  <!-- box-widget  end -->						
                  <!-- box-widget -->
                  <div class="box-widget fl-wrap">
                     <div class="box-widget-content">
                        <div class="banner-widget fl-wrap">
                           <div class="bg-wrap bg-parallax-wrap-gradien">
                              <div class="bg  " data-bg="../public/assets/images/magazine-art.png"></div>
                           </div>
                           <div class="banner-widget_content">
                              <!--<h5>Visit our awesome merch and souvenir online shop.</h5>-->
                              <a href="{{url('magazine')}}" class="btn float-btn color-bg small-btn">Magazine</a>
                           </div>
                        </div>
                     </div>
                     <!--iframe use of linkedin-->
                     <div class="">
                        <div align="center">
                           <a class="twitter-timeline" data-height="400" data-width="600" data-dnt="true"  href="https://twitter.com/GlobalRadiance?ref_src=twsrc%5Etfw">Tweets by GlobalRadiance</a>
                           <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                     </div>
                  </div>
                  <!-- box-widget  end -->
                  <!-- box-widget -->
                  <div class="box-widget fl-wrap">
                     <div class="widget-title">Categories</div>
                     <div class="box-widget-content">
                        <ul class="cat-wid-list">
                           <li><a href="{{url('software')}}">Software</a></li>
                           <li><a href="{{url('networking')}}">Networking</a> </li>
                           <li><a href="{{url('education')}}">Education</a> </li>
                           <li><a href="{{url('cxos')}}">CXOs</a> </li>
                           <li><a href="{{url('startups')}}">Startups</a> </li>
                        </ul>
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
                  <!-- box-widget  end -->						
                  <!-- box-widget -->
                  <div class="box-widget fl-wrap">
                     <!--<div class="widget-title">Follow Us</div>-->
                     <div class="box-widget-content">
                        <!--<div class="social-widget">-->
                        <!--    <a href="#" target="_blank" class="facebook-soc">-->
                        <!--    <i class="fab fa-facebook-f"></i>-->
                        <!--    <span class="soc-widget-title">Likes</span>-->
                        <!--    <span class="soc-widget_counter">5486</span>-->
                        <!--    </a>-->
                        <!--    <a href="#" target="_blank" class="twitter-soc">-->
                        <!--    <i class="fab fa-twitter"></i>-->
                        <!--    <span class="soc-widget-title">Followers</span>-->
                        <!--    <span class="soc-widget_counter">4425</span>												-->
                        <!--    </a> -->
                        <!--    <a href="#" target="_blank" class="youtube-soc">-->
                        <!--    <i class="fab fa-linkedin"></i>-->
                        <!--    <span class="soc-widget-title">Followers</span>-->
                        <!--    <span class="soc-widget_counter"></span>												-->
                        <!--    </a> 												-->
                        <!--    <a href="#" target="_blank" class="instagram-soc">-->
                        <!--    <i class="fab fa-instagram"></i>-->
                        <!--    <span class="soc-widget-title">Followers</span>-->
                        <!--    <span class="soc-widget_counter">1456</span>												-->
                        <!--    </a> 														-->
                        <!--</div>-->
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
                                 <li class="current"><a href="#tab-popular"> Resent News </a></li>
                                 <li><a href="#tab-resent">Press News</a></li>
                              </ul>
                           </div>
                           <!--tabs -->                       
                           <div class="tabs-container">
                              <!--tab -->
                              <div class="tab">
                                 <div id="tab-popular" class="tab-content first-tab">
                                    <div class="post-widget-container fl-wrap">
                                       @foreach($resentNews as $story)
                                       <!-- post-widget-item -->
                                       <div class="post-widget-item fl-wrap">
                                          <div class="post-widget-item-media">
                                             <a href="{{url($story->category.'/'.$story->slug)}}"><img src="{{ url('public/assets/media/news_image/'.$story->image) }}"  alt=""></a>
                                          </div>
                                          <div class="post-widget-item-content">
                                             <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{ Illuminate\Support\Str::limit(strip_tags($story->title), $limit = 55, $end = '...') }} </a></h4>
                                             <ul class="pwic_opt">
                                                <li><span><i class="far fa-clock"></i> {{ $story->formattedDate }}</span></li>
                                                <!-- <li><span><i class="far fa-comments-alt"></i> 6</span></li> -->
                                                <!-- <li><span><i class="fal fa-eye"></i> 1227</span></li> -->
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
                                       @foreach($pressNews as $story)
                                       <!-- post-widget-item -->
                                       <div class="post-widget-item fl-wrap">
                                          <div class="post-widget-item-media">
                                             <a href="{{url($story->category.'/'.$story->slug)}}"><img src="{{ url('public/assets/media/news_image/'.$story->image) }}"  alt=""></a>
                                          </div>
                                          <div class="post-widget-item-content">
                                             <h4><a href="{{url($story->category.'/'.$story->slug)}}">{{ Illuminate\Support\Str::limit(strip_tags($story->title), $limit = 55, $end = '...') }}</a></h4>
                                             <ul class="pwic_opt">
                                                <li><span><i class="far fa-clock"></i>{{ $story->formattedDate }}</span></li>
                                                <!-- <li><span><i class="far fa-comments-alt"></i> 16</span></li> -->
                                                <!-- <li><span><i class="fal fa-eye"></i> 727</span></li> -->
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
         <!--<img src="images/all/banner.jpg" class="respimg" alt="">-->
      </div>
   </div>
   <!-- section end -->
</div>
<!-- content  end-->
@endsection