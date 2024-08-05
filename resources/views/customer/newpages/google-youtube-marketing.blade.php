@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Google marketing, YouTube marketing, video advertising, digital marketing, Vilva Business">
<meta name="description" content="Discover Vilva Business's Google and YouTube marketing solutions for effective video advertising and digital marketing strategies. Enhance your online presence with our targeted campaigns.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Google & YouTube Marketing - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Google & YouTube Marketing</h1>
                <p style="color:black; ,font-size: 40px;">Google & YouTube Marketing, we are a team of experts passionate about helping businesses thrive in the e-commerce space. With our deep knowledge of WhatsApp API, AI chatbots, and e-commerce SaaS solutions, we provide customized solutions that address the traditional, transformational, and future needs of our clients. Our focus on innovation and quality ensures that Magento-based businesses are equipped to succeed in a rapidly evolving digital landscape.!</p>
                
            </div>
        </div>
    </div>
 <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4 ">
                <div class="layout-col-2 mt-3" >
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Comprehensive Reach
                </h3>
                <p>Tap into a vast audience through Google Search and YouTube, increasing your brand’s visibility across multiple channels.
                </p>
                </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3" >
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Data-Driven Insights
                </h3>
                <p> Utilize detailed analytics to refine your strategies and maximize your marketing ROI.
                </p>
                </div>

            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3" >
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Engagement
                </h3>
                <p>  Capture attention with compelling video content on YouTube and targeted search ads on Google, driving more interactions and conversions.
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

<!-- 
    <div class="counter-wrapper row">
        <div class="counter">
            <h1 class="count" data-target="1254">0</h1>
            <p>New Visiters Every Week</p>
        </div>
        <div class="counter">
            <h1 class="count" data-target="195">0</h1>
            <p>Happy customers </p>
        </div>
        <div class="counter">
            <h1 class="count" data-target="2172">0</h1>
            <p>Won Amazing Awards</p>
        </div>
        <div class="counter">
            <h1 class="count" data-target="72">72</h1>
            <p>our products</p>
        </div>
    </div> -->
</body>  
@endsection