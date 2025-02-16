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
                            <div class="bg" data-bg="https://img.freepik.com/free-photo/smiling-corporate-woman-suit-talking-mobile-phone-having-business-call-smartphone-standin_1258-95637.jpg?w=826&t=st=1705034370~exp=1705034970~hmac=13220eca1d6dd088faf0b4c340eed057cf33a3b828097accbe5f990c6b584f78"></div>
                        </div>
                        <div class="container">
                            <div class="hero-section_title">
                                <h2>Our Conatcts</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div class="breadcrumbs-list fl-wrap">
                                <a href="#">Home</a> <span>Contacts Us</span>
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
                                <div class="col-md-4">
                                    <div class="pr-subtitle prs_big">Details</div>
                                    <!--card-item -->
                                    <ul class="contacts-list fl-wrap">
                                        <li><span><i class="fal fa-map-marker"></i> Address :</span> 5 Greentree Centre, 525 Route 73 N,  </li>
                                        <li>  Ste 104, Marlton, NJ 08053 USA </li>
                                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="tel:+18563340566">+1(856) 334-0566</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="mailto:sales@globalradiancereview.com">sales@globalradiancereview.com</a></li>
                                    </ul>
                                    <!--card-item end -->
                                    <div class="contact-social fl-wrap">
                                        <span class="cs-title">Find us on: </span>
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- box-widget -->
                                    <div class="box-widget-content fl-wrap">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.810886211698!2d-74.93811438525563!3d39.90086619477606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c135a4b596b339%3A0x68bab058f90c375a!2sGlobal%20Radiance%20Review%20LLC!5e0!3m2!1sen!2sin!4v1640856242638!5m2!1sen!2sin"
                width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->				
                                </div>
                                <div class="col-md-8">
                                    <div class="pad-con fl-wrap">
                                        <div class="pr-subtitle prs_big">Contact Us</div>
                                        <p>Do you have a doubt? We would love to help you out!</p>
                                        <div id="contact-form" style="margin-top: 20px;">
                                            <div id="message"></div>

                                            <form  class="custom-form"  id="contactpost" >
                                                @csrf
                                                <fieldset>
                                                    <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                                    <input type="text"  name="email" id="email" placeholder="Email Address*" value="" required/>
                                                    <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                </fieldset>
                                                <button class="btn   color-bg float-btn" type="submit" id="submit">Send message <i class="fas fa-caret-right"></i></button>
                                            </form>

                                            <!-- <div id="message">dsjh</div> -->



                                        </div>
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        <!-- contact form  end-->
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 	
                                        <script>
                                            $(document).ready(function() {
                                                $('#contactpost').submit(function(e) {
                                                    e.preventDefault();

                                                    const formData = new FormData(this);

                                                    // alert('sd');
                                                    console.log('df');

                                                    $.ajax({
                                                        type:'post',
                                                        url: '{{url("contact-us")}}',
                                                        data:jQuery('#contactpost').serialize(),
                                                        dataType:'json',
                                                        success: function(response) {
                                                            // Handle the response message
                                                            console.log('success');
                                                            
                                                            $('#message').text(response.message);
                                                            $('.custom-form')[0].reset();

                                                            Swal.fire({
                                                            title: "Thank you for reaching out!",
                                                            text: "Your inquiry has been successfully submitted. We'll be in touch shortly.",
                                                            icon: "success"
                                                            });
                                                        },

                                                    });

                                                });
                                            });
                                        </script>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- content  end-->
                @endsection