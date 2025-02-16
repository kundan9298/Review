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
            <div class="breadcrumbs-header fl-wrap">
               <div class="container">
                  <div class="breadcrumbs-header_url">
                     <a href="#">Home</a><span>About</span>
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
                     <div class="col-md-12">
                        <div class="section-title sect_dec">
                           <h2>About Us</h2>
                           <h4>Who we are</h4>
                        </div>
                        <div class="about-wrap">
                           <p>Global Radiance Review is a team of confident intellects committed to providing a robust platform for all prominent business executives. Our logo perfectly represents the international coverage we aim to deliver to all the mainstream startups and consortiums to share their views and ideologies. At Global Radiance Review, we encourage positivity, and our eagerness to assist and understand the efforts made by all of our members to create and promote a more innovative, more approved business environment in the future speaks of our passion.
                              <br>
                              <br>
                              With cooperative professionals on board, successful managers, CEOs, CTOs, CIOs, IT VPs, and other IT professionals are the ones we include in our community. That is why we are proud to call ourselves the number one most trusted online and print network worldwide.
                              <br>
                              <br>
                              Our magazine issue provides a reliable platform for world leaders to be authentic and express their thoughts and experiences with the readers. While you read about another remarkable entrepreneurial experience, our primary goal remains to encourage all the new brains to start their journey. At Global Radiance Review, we have precisely polished our gem writers who have shown the magic of their words by pushing the boundaries in business magazines. Big business tycoons have continuously shown trust in us as reliable partners. We provide a safe space for startups to market their ideas and reflect their values to garner potential customers and clients.
                              <br>
                              <br>
                              You will find all the technologists and entrepreneurs at Global Radiance Review, also known as the gathering place for all. We keep our website up to date with all the latest news, blogs, and information about everything technology. Cloud, Big Data, Mobility, Networking, IoT, Software, Security, and Cyber Security are among the sectors in which you can find everything. Some areas the given industries are related to include Energy and Utility, Education, ERP, Health, Real Estate, Automotive, Telecom, and Retail.
                              <br>
                              <br>
                              We have proficiently assisted many leaders in stepping forward with a content-driven approach to drive a more extensive crowd which has helped them get newer clients. If you own a startup or a big fortune company, get connected with Global Radiance Review for business-related assistance. 
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="sec-dec"></div>
            </section>
            <!--about end   -->
            </div>
            <!-- content  end-->
 @endsection