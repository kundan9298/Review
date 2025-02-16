@extends('layout')

@section('meta_tag')
    <meta property="og:title" content="Global Radiance Review - Top business magazine and news headlines" />
    <meta name="keywords" content="global magazine, business review magazine, Best Business news Magazine usa, technology news magazine, entrepreneur magazine, digital magazine usa, magazine for IT professional, magazine article, top breaking news headlines usa, online leading print magazine usa, magazine article usa, Online technology magazine, global magazine, business review magazine, Global Radiance Review Magazine" />  
    <meta name="description" content="Global Radiance Review provide the latest news headlines, digital magazine, business news and online & print community of magazines for the entrepreneur & business leadersn" />
    <title>Global Radiance Review - Top business magazine and news headlines</title>
@endsection

@section('content')
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <!--section   -->
                    <div class="breadcrumbs-header fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs-header_url">
                                <a href="#">Home</a><span>Our Clients</span>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                        <div class="pwh_bg"></div>
                    </div>
                    <!-- section end  -->
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                @foreach($data as $list)
                                <div class="col-md-3 col-sm-4 col-lg-2 col-xl-1 ">
                                <a href="{{url('/feature/'.$list->url)}}">
                                <div class="oourClients">
                                    <img src="{{ url('public/assets/media/magazine_image/'.$list->feature_company_logo) }}" alt="{{$list->company_logo_alt}}">
                                </div></a>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </section>
                    <!--about end   -->
                </div>
                <!-- content  end-->
               @endsection