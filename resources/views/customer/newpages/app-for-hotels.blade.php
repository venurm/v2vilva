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
    <div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>App for Hotels</h1>
                <p style="color:black; ,font-size: 40px;">At  App for Hotels, we craft tailored mobile solutions that enhance every aspect of the guest experience. Our expert team leverages cutting-edge technologies such as WhatsApp API for seamless communication, AI chatbots for 24/7 support, and e-commerce SaaS features for efficient booking and management. We design intuitive apps that simplify reservations, provide detailed information about amenities, and streamline check-ins and check-outs. With a focus on innovation and user experience, we help hotels improve guest satisfaction, optimize operations, and stand out in a competitive hospitality industry.!</p>
                
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
                <h3>Enhanced Guest Experience
                </h3>
                <p>An Android app can provide guests with convenient features like mobile check-in/check-out, room service requests, and real-time booking management. This streamlines their stay and improves overall satisfaction.</p>
            </div>
        </div>
            <div class="col-md-4 col-12 ">
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

            <div class="col-md-4 col-12 ">
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
    