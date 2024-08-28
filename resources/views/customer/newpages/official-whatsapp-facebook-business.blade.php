@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="official WhatsApp Business, Facebook Business, business communication, social media marketing, Vilva Business">
<meta name="description" content="Explore Vilva Business's official WhatsApp Business and Facebook Business solutions for efficient communication and social media marketing. Enhance your business outreach with our integrated services.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Official WhatsApp Business & Facebook Business - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Official WhatsApp Business & Facebook Business</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">Official WhatsApp Business & Facebook Business, is a powerful duo designed to elevate business communication and customer engagement. By combining the strengths of these two leading platforms, businesses can seamlessly connect with their audience, manage interactions, and drive growth.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=_Dd9Ko2HLbo">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Official WhatsApp Business & Facebook Business Setup</h1>
          <p>Keep up with your Facebook accounts by creating, scheduling posts.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Official WhatsApp Business & Facebook Business Setup</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>

  <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Seamless Communication
                </h3>
                <p>Enable efficient and direct communication with your customers through WhatsApp and Facebook, improving response times and satisfaction.
                </p>
                </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Professional Branding
                </h3>
                <p> Establish a strong, professional presence on both platforms, enhancing your brand’s credibility and reach.
                </p>
                </div>

            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Integrated Tools
                </h3>
                <p> Access a suite of business tools and features that streamline customer management, marketing, and analytics for better overall performance.
                </p>
                </div>
            </div>

        </div>

    </div>
    <div class="start-project mt-5">
        <div class="row mx-auto">
            <div class="col-12 col-md-6 project">
               <img src="{{ asset('internal/templatestwoimages/project.png') }}" alt="" class='img-fluid'srcset="">
            </div>
            <div class="col-12 col-md-6 project-des" style="color:#001e60;">
                <div class="project-des-con">
                    <h2>Start your project with Us today</h2>
                    <p>Get started with our cutting-edge e-commerce solutions today and elevate your online business with tailored strategies and innovative technology. Transform your customer experience and drive growth effortlessly!</p>

                        <div class="layout-btn">
                            <button type="button">Start a Project &nbsp;&nbsp;&nbsp;   <i class="ri-arrow-right-line"></i>
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
    videoSrc: 'https://www.youtube.com/watch?v=_Dd9Ko2HLbo'
  });
</script>
@endsection
    