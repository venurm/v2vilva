@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for ecommerce, ecommerce app, online store app, digital retail app">
<meta name="description" content="Discover our ecommerce management app designed to streamline operations and enhance online sales. Explore how our app can empower your ecommerce business with efficiency and growth.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Ecommerce - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">
<body>
    <div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>App for Ecommerce </h1>
                <p style="color:black; ,font-size: 40px;">At  App for E-commerce, we develop powerful mobile solutions that drive growth and efficiency for online retailers. Our expert team integrates advanced technologies, including WhatsApp API for seamless customer communication, AI chatbots for personalized shopping assistance, and e-commerce SaaS features for robust store management. We design intuitive apps that streamline product browsing, enhance the checkout process, and facilitate order tracking. By focusing on innovation and user experience, we help e-commerce businesses boost sales, improve customer satisfaction, and stay competitive in the dynamic digital marketplace.!</p>
                
            </div>
        </div>
    </div>
<div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Boosted Customer Engagement
                </h3>
                <p>An Android eCommerce app provides personalized shopping experiences, push notifications for promotions and new arrivals, and easy access to customer support, which can significantly increase user engagement and retention.</p>
            </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="layout-col-2 mt-3">

                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Shopping Experience
                </h3>
                <p>The app offers a streamlined, user-friendly interface for browsing, searching, and purchasing products. Features like one-touch checkout, saved payment methods, and real-time inventory updates improve the shopping experience and reduce cart abandonment.</p>
            </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">

                <div class="top-bg"></div>
                <div class="imgforcol-test">
                     <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Increased Sales and Loyalty
                </h3>
                <p>By providing exclusive deals, rewards programs, and personalized recommendations, an eCommerce app can drive higher sales and foster customer loyalty. Additionally, the app's convenience encourages repeat purchases and enhances brand loyalty.</p>
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