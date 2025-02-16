
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>advertisement-Check Eligibility </title>
  <link rel="stylesheet" href="{{asset('advertisement/style.css')}}">

</head>
<body>
  <!-- Responsive Contact Page with Dark Mode and Form Validation (vanilla JS).

*Designed & built for desktop and tablets with viewport width >= 720px and in landscape orientation.  -->

<div class="contact-container">
  <div class="left-col">
    <img class="logo" src="{{asset('advertisement/logo.png')}}"/>
  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label>
  <div class="description">Dark Mode</div>
</div>
    
    <h1>Check Eligibility</h1>
    <hr>
    <hr>
    <br>
    <p>To be featured in our upcoming award. Please fill the details below.</p>
    
    <form id="ceSubmit" method="post" class="custom-form">
        @csrf
        
      <!--  <label for="issue">Select our upcoming magazine </label>-->
      <!--  <br>-->
      <!--<select id="issue" name="issue">-->
      <!--  <option value="20 Smartest Companies of the year 2024">20 Smartest Companies of the year 2024</option>-->
      <!--  <option value="20 Most Innovative Companies to watch in 2024">20 Most Innovative Companies to watch in 2024</option>-->
      <!--  <option value="20 Best Companies to Watch in 2024">20 Best Companies to Watch in 2024</option>-->
      <!--  <option value="20 Most Trustworthy Companies of the year in 2024">20 Most Trustworthy Companies of the year in 2024</option>-->
      <!--</select>-->
      <!--<br>-->
      <!--<br>-->
      
      <label for="name">Full name</label>
  <input type="text" id="name" name="name" placeholder="Your Full Name" required>

  <label for="cname">Company Name</label>
  <input type="text" id="cname" name="cname" placeholder="Your Company Name" required>


      <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="Your Email Address" required>
      <label for="message">Message</label>

  <textarea rows="6" placeholder="Your Message" id="message" name="message" ></textarea>
      <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit">Send</button><!--</a>-->
  
</form>
<div id="error"></div>
<div id="success-msg"></div>
  </div>
</div>

<!-- Image credit: Oliver Sjöström https://www.pexels.com/photo/body-of-water-near-green-mountain-931018/  -->
</body>
<!--<script src="{{asset('advertisement/script.js')}}"></script>-->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 	
                                        <script>
                                            $(document).ready(function() {
                                                $('#ceSubmit').submit(function(e) {
                                                    e.preventDefault();

                                                    const formData = new FormData(this);

                                                    // alert('sd');
                                                    console.log('df');

                                                    $.ajax({
                                                        
                                                        type:'post',
                                                        url: '{{url("check-eligi")}}',
                                                        data:jQuery('#ceSubmit').serialize(),
                                                        dataType:'json',
                                                       
                                                        success: function(response) {
                                                            // Handle the response message
                                                            console.log('success');
                                                            
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
</html>




