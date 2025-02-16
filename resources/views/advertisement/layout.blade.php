<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        
        <meta name="robots" content="index, follow" />
         @section('meta_tag')
        @show
  
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('assets/logo/favicon.png')}}">
        
       
    </head>
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->
            <!-- header -->
            <header class="main-header">
                <!-- top bar -->
                <div class="top-bar fl-wrap">
                    <div class="container">
                        <div class="date-holder">
                            <span class="date_num"></span>
                            <span class="date_mounth"></span>
                            <span class="date_year"></span>
                        </div>
                        <div class="header_news-ticker-wrap">
                            <div class="hnt_title">Hot News :</div>
                            <div class="header_news-ticker fl-wrap">
                                <ul>
                                    @foreach($resentNews as $story)
                                    <li><a href="{{ url($story->category.'/'.$story->slug) }}">{{ $story->title }}</a></li>
                                      @endforeach
                                
                                </ul>
                            </div>
                            <div class="n_contr-wrap">
                                <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                                <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                            </div>
                        </div>
                        <ul class="topbar-social">
                            <li><a href="https://www.linkedin.com/company/global-radiance-review/" target="_blank"><i class="fab fa-linkedin"></i></a></li>

                            <li><a href="https://www.facebook.com/globalradiancereview" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/GlobalRadiance" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/global_radiance_review/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- top bar end -->
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <!-- logo holder  -->
                        <a href="{{url('/')}}" class="logo-holder"><img src="{{asset('assets/logo/525 x 525 (1)-black.png')}}" alt=""></a>
                        <!-- logo holder end --> 
                        <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>

                        <!-- <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i> <span class="header-tooltip">Sign In</span></div> -->
                        <!-- <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span></div> -->
                        <!-- header-search-wrap -->
                        <div class="header-search-wrap novis_sarch">
                            <div class="widget-inner">
                                <form action="#">
                                    <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                                    <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!-- header-search-wrap end -->





                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{url('/')}}" class="">Home</a>
                                 
                                    </li>
                                    <li>
                                        <a href="#">Technology<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="{{url('big-data')}}">Big Data</a></li>
                                            <li><a href="{{url('cloud')}}">Cloud</a></li>
                                            <li><a href="{{url('iot')}}">IOT</a></li>
                                            <li><a href="{{url('it-services')}}">IT Services </a></li>
                                            <li><a href="{{url('mobility')}}">Mobility</a></li>
                                            <li><a href="{{url('networking')}}">Networking</a></li>
                                            <li><a href="{{url('cyber-security')}}">Cyber Security</a></li>
                                            <li><a href="{{url('software')}}">Software</a></li>
                                            <!-- <li> -->
                                                <!-- <a href="#">Single<i class="fas fa-caret-down"></i></a> -->
                                                <!--second level -->
                                                <!-- <ul>
                                                    <li><a href="post-single.html">Style 1</a></li>
                                                    <li><a href="post-single2.html">Style 2</a></li>
                                                </ul> -->
                                                <!--second level end-->
                                            <!-- </li> -->
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li><a href="#">Industry<i class="fas fa-caret-down"></i></a>

                                    <ul>
                                      <li><a href="{{url('food-beverage')}}">Food & Beverage</a></li>
                                      <li><a href="{{url('media-entertainment')}}">Media & Entertainment</a></li>
                                      <li><a href="{{url('education')}}">Education</a></li>
                                      <li><a href="{{url('health')}}">Health</a></li>
                                      <li><a href="{{url('real-estate')}}">Real Estate</a></li>
                                      <li><a href="{{url('retail')}}">Retail</a></li>
                                      <li><a href="{{url('banking-finance')}}">Banking & Finance</a></li>
                                      <li><a href="{{url('telecom')}}">Telecom</a></li>
                                      <li><a href="{{url('legal')}}">Legal</a></li>
                                    </ul>
                                  
                                  
                                  </li>

                                    <li><a href="{{url('magazine')}}">Magazines</a></li>

                                    <li>
                                        <a href="#">Blog <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="{{url('article')}}">Article</a></li>
                                            <li><a href="{{url('cxos')}}">CXOs</a></li>
                                            <li><a href="{{url('startups')}}">Startups</a></li>
                                            <li><a href="{{url('business')}}">Business</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#">Featured<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="{{url('our-clients')}}">Our Clients</a></li>
                                            <li><a href="{{url('press-release')}}">Press Release</a></li>
                                  
                                        </ul>
                                        <!--second level end-->
                                    </li>

                                    <li><a href="{{url('clients-speak')}}">Clients Speak</a></li>

                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                    </div>
                </div>
            </header>
            <!-- header end  -->




            @yield('content')





            
                <!-- footer -->
                <footer class="fl-wrap main-footer">
                    <div class="container">
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap fl-wrap">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-content">
                                            <a href="{{url('/')}}" class="footer-logo"><img src="{{asset('assets/logo/3000 x (1).png')}}" alt=""></a>
                                            <p>Global Radiance Review For business and technology professionals, the world's most trusted online and print network. Think-provoking CEOs, CIOs, CTOs, IT VPs and managers, as well as a slew of other IT professionals, make up our community. </p>
                                            <div class="footer-social fl-wrap">
                                                <ul>
                                                <li><a href="https://www.linkedin.com/company/global-radiance-review/" target="_blank"><i class="fab fa-linkedin"></i></a></li>

                                                    <li><a href="https://www.facebook.com/globalradiancereview" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://twitter.com/GlobalRadiance" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.instagram.com/global_radiance_review/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Categories </div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap">
                                                <ul>
                                                    <li> <a href="{{url('software')}}">Technology</a></li>
                                                    <li> <a href="{{url('health')}}">Industry</a></li>
                                                    <li> <a href="{{url('cxos')}}">CXOs</a></li>
                                                    <li> <a href="{{url('startups')}}">Startups</a></li>
                                                    <li> <a href="{{url('our-clients')}}">Our Clients</a></li>
                                                    <li> <a href="{{url('business')}}">Business</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Links</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap">
                                                <ul>
                                                    <li> <a href="{{url('/')}}">Home</a></li>
                                                    <li> <a href="{{url('about-us')}}">About</a></li>
                                                    <li> <a href="{{url('contact-us')}}">Contact Us</a></li>
                                                    <li> <a href="{{url('magazine')}}">Magazine</a></li>
                                                    <li> <a href="{{url('clients-speak')}}">Clients Speak</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->								
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form fl-wrap">
                                                <p>Want to be notified when we launch a new Magazine or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->
                    </div>
                    <div class="footer-bottom fl-wrap">
                        <div class="container">
                            <div class="copyright"><span>&#169; Global Radiance Review</span> . All rights reserved. </div>
                            <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                            <div class="subfooter-nav">
                                <ul>
                                    <li><a href="{{url('privacy-policy')}}">Terms & Conditions</a></li>
                                    <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->  			
                <!--<div class="aside-panel">-->
                    <!--<ul>-->
                        <!--<li> <a href="{{url('magazine')}}"><i class="far  fa-podium"></i><span>Magazine</span></a></li>-->
                        <!--<li> <a href="#"><i class="far fa-atom"></i><span>Technology</span></a></li>-->
                        <!--<li> <a href="#"><i class="far fa-user-chart"></i><span>Business</span></a></li>-->
                        <!--<li> <a href="#"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>-->
                        <!--<li> <a href="#"><i class="far fa-flask"></i><span>Science</span></a></li>-->
                    <!--</ul>-->
                <!--</div>-->
            </div>
            <!-- wrapper end -->
            <!-- cookie-info-bar -->
            <!-- <div class="cookie-info-bar">
                <div class="container">
                    <div class="cookie-info-bar_title"><i class="fal fa-cookie"></i>Our site uses cookies. Learn more about our use of cookies: <a href="#">Cookie policy</a></div>
                    <a href="#" class="sicb_btn color-bg">Accept</a> 
                    <a href="#" class="sicb_btn">Reject</a> 
                </div>
            </div> -->
            <!-- cookie-info-bar end -->	
            <!--register form -->
            <div class="main-register-container">
                <div class="reg-overlay close-reg-form"></div>
                <div class="main-register-holder">
                    <div class="main-register-wrap fl-wrap">
                        <div class="main-register_bg">
                            <div class="bg-wrap">
                                <div class="bg par-elem "  data-bg="images/bg/2.jpg"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="mg_logo"><img src="assets/images/logo2.png" alt=""></div>
                        </div>
                        <div class="main-register tabs-act fl-wrap">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                            </ul>
                            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                            <!--tabs -->
                            <div id="tabs-container">
                                <div class="tab">
                                    <!--tab -->
                                    <div id="tab-1" class="tab-content first-tab">
                                        <div class="custom-form">
                                            <form method="post" name="registerform">
                                                <label>Username or Email Address <span>*</span> </label>
                                                <input name="email" type="text" onClick="this.select()" value="">
                                                <label>Password <span>*</span> </label>
                                                <input name="password" type="password" onClick="this.select()" value="">
                                                <div class="filter-tags">
                                                    <input id="check-a" type="checkbox" name="check" checked>
                                                    <label for="check-a">Remember me</label>
                                                </div>
                                                <div class="lost_password">
                                                    <a href="#">Lost Your Password?</a>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-2" class="tab-content">
                                            <div class="custom-form">
                                                <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                                    <label>Full Name <span>*</span> </label>
                                                    <input name="name" type="text" onClick="this.select()" value="">
                                                    <label>Email Address <span>*</span></label>
                                                    <input name="email" type="text" onClick="this.select()" value="">
                                                    <label>Password <span>*</span></label>
                                                    <input name="password" type="password" onClick="this.select()" value="">
                                                    <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                </div>
                                <!--tabs end -->
                                <div class="log-separator fl-wrap"><span>or</span></div>
                                <div class="soc-log  fl-wrap">
                                    <p>For faster login or register use your social account.</p>
                                    <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
        var clientSwiper = new Swiper('.client-swiper', {
            loop: true,
            slidesPerView: 5,
            spaceBetween: 10,
            autoplay: {
                delay: 900, 
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // Customize the configuration for different screen sizes
                468: {
                    slidesPerView: 2,
                },

                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
    });
</script>
    </body>
</html>