@extends('layout')

@section('meta_tag')
    <meta property="og:title" content="Global Radiance Review - Top business magazine and news headlines" />
    <meta name="keywords" content="global magazine, business review magazine, Best Business news Magazine usa, technology news magazine, entrepreneur magazine, digital magazine usa, magazine for IT professional, magazine article, top breaking news headlines usa, online leading print magazine usa, magazine article usa, Online technology magazine, global magazine, business review magazine, Global Radiance Review Magazine " />  
    <meta name="description" content="Global Radiance Review provide the latest news headlines, digital magazine, business news and online & print community of magazines for the entrepreneur & business leadersn" />
    <title> Global Radiance Review - Top business magazine and news headlines</title>
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
                                <a href="{{url('/magazine')}}">MAGAZINE</a>
                                <a href="{{url('magazine/'.$magazineData->slug)}}">{{$magazineData->issue_name}}</a><span>LISTING</span>
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
                    <!--section   -->

                    <div class="issue_logo">
                        <a href="{{url('magazine/'.$magazineData->slug)}}"> <img src="{{ url('public/assets/media/magazine_image/'.$magazineData->issue_logo) }}" alt=""></a>
                    </div>
                    <section>
    <div class="container">
        <!-- CHECKOUT TABLE -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="cart-title">{{$magazineData->issue_month}} Edition {{$magazineData->issue_year}}</h4>
                <table class="table table-border checkout-table">
                    <tbody>
                        <tr>
                            <th>S. No</th>
                            <th>Company</th>
                            <th>Management</th>
                            <th>Description</th>
                        </tr>
                        @foreach($data as $index => $list)
                            <tr>
                              
                                <td class="hidden-xs">
                                    <h5 class="product-name ">{{$index + 1}}</h5>
                                </td>
                         
                                <td class="hidden-xs">
                                    <a href="{{$list->feature_company_website}}" target="_blank">
                                        <img class="img-responsive" style="width:170px; height:80px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                        text-align: center; padding:1%" src="{{ url('public/assets/media/magazine_image/'.$list->feature_company_logo) }}" alt="Company Logo">
                                    </a>
                                </td>
                                <td class="hidden-xs">
                                    <h5 class="product-name ">{{$list->feture_people_name}} <br> 
                                    <hr>
                                    {{$list->feature_people_position}}</h5>
                                </td>
                                 <td class="hidden-xs">
                                    <h5 class="order-money">{{$list->feature_pepople_description}}</h5>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /CHECKOUT TABLE -->
    </div>
</section>

                </div>
                <!-- content  end-->
                @endsection