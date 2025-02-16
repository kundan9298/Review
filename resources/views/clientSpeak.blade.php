@extends('layout') @section('meta_tag')
<meta property="og:title" content="Global Radiance Review - Top business magazine and news headlines" />
<meta name="keywords" content="global magazine, business review magazine, Best Business news Magazine usa, technology news magazine, entrepreneur magazine, digital magazine usa, magazine for IT professional, magazine article, top breaking news headlines usa, online leading print magazine usa, magazine article usa, Online technology magazine, global magazine, business review magazine, Global Radiance Review Magazine" />
<meta name="description" content="Global Radiance Review provide the latest news headlines, digital magazine, business news and online & print community of magazines for the entrepreneur & business leadersn" />
<title>Global Radiance Review - Top business magazine and news headlines</title> @endsection @section('content') <style>
  /* @import url('https://fonts.googleapis.com/css?family=Montserrat');
   * {
   box-sizing: border-box;
   } */
  /* html,
   body {
   margin: 0;
   padding: 0;
   height: 100vh;
   width: 100%;
   font-family: Montserrat;
   }
   body {
   background: #1d81af;
   display: flex;
   justify-content: center;
   align-items: center;
   } */
  .testCode .container {
    width: 80%;
    height: 80%;
    display: grid;
    justify-content: center;
    align-content: center;
  }

  .testCode .container .testimonial-box {
    position: relative;
    width: 500px;
    height: 300px;
    margin-top: 50px;
    margin-bottom: 50px;

    &::before {
      content: '';
      position: absolute;
      top: 10px;
      left: -100px;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%), rgba(255, 255, 255, 0.8);
      box-shadow: -5px 5px 10px rgba(0, 0, 0, .3);
      z-index: -1;
    }

    &::after {
      content: '';
      position: absolute;
      bottom: 10px;
      right: -100px;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%), rgba(255, 255, 255, 0.8);
      box-shadow: 5px 5px 10px rgba(0, 0, 0, .3);
      z-index: -1;
    }

    .testimonial {
      display: grid;
      grid-template-rows: 1.3fr 0.7fr;
      box-shadow: 0 0 5px rgba(0, 0, 0, .5);
      width: 100%;
      height: 100%;
      background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
      padding: 10px 20px;
      position: relative;

      .fas {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        font-size: 25px;
        color: #222;
      }

      .testimonial-text {
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        padding: 25px 15px;
        width: 100%;
        font-weight: 600;
      }

      .testimonial-user {
        display: flex;
        align-items: center;
        font-weight: 600;

        .user-img {
          box-shadow: 0 0 10px rgba(0, 0, 0, .5);
          width: 60px;
          height: 60px;
          border-radius: 50%;
        }

        .user-info {
          margin: 0 20px;
          display: grid;
          grid-template-rows: 1fr 1fr;

          .user-name {
            font-weight: 800;
          }

          .user-job-details {
            margin: 5px 0 0 0;
            position: relative;
            display: flex;
            justify-content: space-between;

            .line {
              position: absolute;
              width: 2px;
              height: 100%;
              background: #000;
              left: 50%;
              top: 0;
              transform: translateX(-50%);
            }
          }
        }
      }
    }
  }
  }
</style>
<!-- wrapper -->
<div id="wrapper">
  <!-- content    -->
  <div class="content">
    <div class="breadcrumbs-header fl-wrap">
      <div class="container">
        <div class="breadcrumbs-header_url">
          <a href="{{url('/')}}">Home</a>
          <a href="{{url('/clients-speak')}}">Clients Speak</a>
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
    <div class="testCode">
      <div class="container">
        <div class="col-md-12">
          <div class="row"> @foreach($data as $list) <div class="col-md-6">
              <div class="testimonial-box ">
                <div class="testimonial">
                  <i class="fas fa-quote-right"></i>
                  <span class="testimonial-text">{{strip_tags($list->comments)}}</span>
                  <div class="testimonial-user">
                    <img src="{{ url('public/assets/media/testimonial_image/'.$list->image) }}" alt="{{$list->image_alt}}" class="user-img">
                    <div class="user-info">
                      <span class="user-name">{{$list->Name}}</span>
                      <div class="user-job-details">
                        <span class="user-job">{{$list->Position}} | </span>
                        <span class="user-post"> | {{$list->slug}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> @endforeach </div>
            
 
        </div>
      </div>
    </div>
  </div>
  <!-- content  end--> @endsection