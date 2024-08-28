@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for hotels, hotel management app, hospitality app, accommodation app">
<meta name="description" content="Discover our hotel management app tailored to streamline operations and enhance guest experiences. Explore how our app can optimize your hotel's efficiency and service quality.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Hotels - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
    <!--<div class="banner ">-->
    <!--    <div class="heading-about">-->
    <!--        <div class="text-center container">-->
    <!--            <h1>App for Hotels</h1>-->
    <!--            <p style="color:black; ,font-size: 40px;">At  App for Hotels, we craft tailored mobile solutions that enhance every aspect of the guest experience. Our expert team leverages cutting-edge technologies such as WhatsApp API for seamless communication, AI chatbots for 24/7 support, and e-commerce SaaS features for efficient booking and management. We design intuitive apps that simplify reservations, provide detailed information about amenities, and streamline check-ins and check-outs. With a focus on innovation and user experience, we help hotels improve guest satisfaction, optimize operations, and stand out in a competitive hospitality industry.!</p>-->
                
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=0n6-5TFgPRA">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>App for Hotels</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>App for Hotels</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
 <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4 mt-3">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                      <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Guest Experience
                </h3>
                <p>An Android app can provide guests with convenient features like mobile check-in/check-out, room service requests, and real-time booking management. This streamlines their stay and improves overall satisfaction.</p>
            </div>
        </div>
            <div class="col-md-4 col-12 mt-3 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                     <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Efficient Booking Management
                </h3>
                <p>With an app, hotels can offer a seamless booking experience, including instant reservations, special promotions, and personalized offers. This helps drive direct bookings and reduces reliance on third-party platforms.</p>

            </div>
            </div>

            <div class="col-md-4 col-12 mt-3">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                     <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Improved Operational Efficiency
                </h3>
                <p>The app can integrate with hotel management systems to streamline operations, manage guest requests, and optimize room allocation. This leads to better resource management and increased operational efficiency.</p>
            </div>
        </div>
        </div>

    </div>
    <div class="start-project mt-5">
        <div class="row container mx-auto">
            <div class="col-12 col-md-6 project">
                 <img src="{{ asset('internal/templatestwoimages/project.png') }}" alt="" class='img-fluid'srcset="">
            </div>
            <div class="col-12 col-md-6 project-des" style="color:#001e60;">
                <div class="project-des-con">
                    <h2>Your Future is Bright – Start Shining with Vilva Business!</h2>
                    <p>Enhance guest satisfaction with our tailored hotel app solutions. Simplify bookings, improve service, and create a memorable stay for your customers with just a tap!</p>

                        <div class="layout-btn">
                            <button type="button"><a href="/contact" target="_blank" style="color:white;"> Become a Member</a>&nbsp;&nbsp;&nbsp;   <i class="ri-arrow-right-line"></i>
                            </button>
                </div>
                
                
                </div>
               
            </div>

        </div>
    </div>
</body>  
@include('customer.layouts.blogsection')

<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=0n6-5TFgPRA'
  });
</script>
@endsection
    