@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="social media management, social media marketing, social media services, business promotion, Vilva Business">
<meta name="description" content="Discover Vilva Business's social media management and marketing services for effective business promotion and engagement. Enhance your online presence with our comprehensive social media strategies.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Social Media Management & Marketing - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Social Media Management & Marketing</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">Social Media Management & Marketing, comprehensive strategy designed to build, manage, and grow your brand’s presence across various social media platforms. By combining content creation, community engagement, and targeted advertising, businesses can effectively connect with their audience, enhance brand awareness, and drive conversions.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=WuRf2bDf25U">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Social Media Management & Marketing</h1>
          <p>to build an ad and run it across social networks</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Social Media Management & Marketing</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
   <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Elevate Your Presence with Social Strategy</h5>
            <h2 style="color: #001e60;">Optimize Your Brand with Social Mastery </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Efficient Content Scheduling </h3>
                <p>Streamline your posting schedule across multiple platforms with automated tools, ensuring consistent and timely content delivery.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Targeted Advertising</h3>
                <p> Reach specific demographics and interests through targeted ads, maximizing the relevance of your marketing efforts and improving ROI.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Comprehensive Performance Analytics </h3>
                <p>Access detailed insights into social media performance, helping you understand what's working and adjust your approach for better results.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Streamline Social Strategy Efficiently </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                    <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Content Scheduling</h3>
                    <p>Plan posts effortlessly across platforms.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Ad Campaign Management</h3>
                    <p>Optimize targeted social media ads.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Engagement Analysis</h3>
                    <p>Track and improve audience interactions.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Brand Monitoring</h3>
                    <p>Manage brand reputation and feedback.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Performance Reporting</h3>
                    <p> Measure and enhance marketing success.</p>
                </div>

            </div>

        </div>
    </div>




    <div class="ready mt-5 pb-5 container">
        <div class="ready-des">
            <h3 style="color: #001e60;">Ready to Get Started? </h3>
            <h5 style="color: #28334a;">Experience device management, made easy!
            </h5>
            <div class="contact-us">
                <button type="button">Contact Us <i class="fa-solid fa-arrow-right"></i></button>
            </div>

        </div>
    </div>

     
</body>  
<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=WuRf2bDf25U'
  });
</script>
@include('customer.layouts.blogsection')

@endsection