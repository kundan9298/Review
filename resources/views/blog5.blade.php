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
                        <a href="/">Home</a><span>{{ $catName }}</span>
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
            <!-- section   -->

            @include('paginationData')

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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

        <script>
            $(document).ready(function () {
                $(document).on('click', '.pagination a', function (event) {
                    event.preventDefault();
                    var myurl = $(this).attr('href');
                    var page = myurl.split('page=')[1];
                    getData(page);
                     

                });


                function getData(page) {
                    $.ajax({
                        url: '?page=' + page,
                        type: "GET",
                        dataType: "html",
                        // headers: {
                        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        // },
                        success: function (data) {
                            console.log(data);
                            $('.main-container.fl-wrap').html(data);
                            initbg(data);

                           
                         
                        },
                        error: function (xhr, status, error) {
                            console.log("data not found");
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        </script>
    </div>
    <!-- wrapper end -->
@endsection
