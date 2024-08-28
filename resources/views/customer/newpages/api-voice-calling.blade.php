@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="API voice calling, voice call API, business communication, automated calls, Vilva Business">
<meta name="description" content="Explore Vilva Business's API voice calling solutions for seamless business communication. Enhance your outreach with our reliable and automated voice call API services.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>API Voice Calling - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>API Voice Calling</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">API Voice Calling, robust communication solution that allows businesses to integrate voice calling capabilities directly into their applications and systems. Through a simple API, businesses can automate voice calls for a wide range of use cases, including customer notifications, reminders, surveys, and more.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=fQHlN_-Gwrc">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>API based Voice Calling</h1>
          <p>Faster Time to Market</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>API based Voice Calling</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">API-Based Voice Calling</h5>
            <h2 style="color: #001e60;">Voice Integration, Redefined </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Customizable Integration</h3>
                <p>Our voice integration solution is designed to be incredibly flexible and adaptable, allowing you to seamlessly incorporate voice capabilities into any app or platform. Whether you’re developing a mobile application, a web-based tool.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Real-Time Communication </h3>
                <p>Our platform supports real-time voice communication, enabling instant and high-quality interactions between users. The technology is built to handle low-latency communication, ensuring that conversations are smooth and uninterrupted.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Global Reach</h3>
                <p>Our voice solution is designed with global connectivity in mind. It supports multiple languages and accents, allowing you to reach and interact with users from different regions and linguistic backgrounds without barriers.
                </p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;"> Key Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Target your audience to reach them</h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                    <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Support Automation</h3>
                    <p>Automate customer support with intelligent voice systems.
                    </p>
                </div>
              
                <div class="row" id="row3">
                    <h3>Appointment Scheduling </h3>
                    <p> Simplify scheduling with voice-based reminders and confirmations.
                    </p>
                </div>
                
                <div class="row" id="row4">
                    <h3>Feedback Collection 
                    </h3>
                    <p> Gather user feedback efficiently through automated calls.
                    </p>
                </div>

                <div class="row" id="row4">
                    <h3>Verification Processes
                    </h3>
                    <p> Securely authenticate users through voice recognition.
                    </p>
                    
                </div>
                <div class="row" id="row4">
                    
                    <p> Drive sales with automated, personalized voice outreach.

                    </p>
                    
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
@include('customer.layouts.blogsection')

<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=fQHlN_-Gwrc'
  });
</script>
@endsection
    