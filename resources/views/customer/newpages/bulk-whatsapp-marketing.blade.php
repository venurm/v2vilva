@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="bulk WhatsApp marketing, WhatsApp messaging, business communication, marketing tools, Vilva Business">
<meta name="description" content="Explore Vilva Business's bulk WhatsApp marketing solutions to enhance your business communication and marketing strategies. Reach a wider audience effectively with our advanced messaging tools.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Bulk WhatsApp Marketing - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">



<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Bulk WhatsApp Marketing</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">AtBulk WhatsApp Marketing is a powerful strategy for businesses to connect with their audience directly and effectively through one of the most popular messaging platforms in the world. By leveraging WhatsApp’s extensive reach and high engagement rates, businesses can send personalized messages, promotional content, updates, and more to a large number of recipients simultaneously.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=yIOR2Vkmu-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Bulk WhatsApp Marketing</h1>
          <p>to create and maintain WhatsApp marketing campaigns</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Bulk WhatsApp Marketing</span> </li>
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
                <h3>Direct and Immediate Communication
                </h3>
                <p>Reach your audience instantly with messages delivered directly to their smartphones, ensuring higher visibility and quicker responses.
                </p>
                </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>High Engagement Rates
                </h3>
                <p>  WhatsApp messages have high open and read rates compared to traditional email or SMS marketing, making it a highly effective channel for engagement.
                </p>
             </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Rich Media Support
                </h3>
                <p>Send not only text but also images, videos, and documents to create more engaging and interactive campaigns.
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
    videoSrc: 'https://www.youtube.com/watch?v=yIOR2Vkmu-0'
  });
</script>
@endsection