@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for boutiques, boutique app, boutique management, fashion app">
<meta name="description" content="Explore our boutique management app designed to streamline operations and enhance customer engagement. Discover how our app can empower your boutique business.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Boutiques - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">
<body>
    <div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>App for Boutiques</h1>
                <p style="color:black; ,font-size: 40px;">At App for Boutiques, we specialize in creating tailored mobile solutions that elevate the boutique shopping experience. Our team of experts integrates advanced features such as seamless WhatsApp API communication, intelligent AI chatbots, and e-commerce SaaS capabilities to enhance customer engagement and streamline operations. We design intuitive, user-friendly apps that reflect the unique style and personality of your boutique, ensuring that your customers enjoy a personalized shopping journey. Our focus is on delivering innovative solutions that not only meet the current needs of boutique businesses but also position them for future growth and success in the competitive retail landscape.!</p>
                
            </div>
        </div>
    </div>
 <div class="con-layout2 container">
        <h1>App for Boutiques
        </h1>
        <p>Elevate boutique shopping with a custom app <br> How can a boutique app transform your business?</p>

    </div>
    <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                     <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Customer Engagement
                </h3>
                <p>An Android app for boutiques can offer personalized features such as exclusive offers, loyalty programs, and notifications about new arrivals, keeping customers engaged and encouraging repeat visits.</p>
            </div>
            </div>
        
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">                
                    <div class="top-bg-c"></div>
                <div class="imgforcol">
                     <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Streamlined Shopping Experience
                </h3>
                <p>With a dedicated app, boutiques can provide a seamless shopping experience, including easy browsing, secure checkout, and real-time inventory updates. This convenience can lead to increased sales and improved customer satisfaction.</p>
            </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Brand Visibility and Loyalty
                </h3>
                <p> A boutique app enhances brand visibility by keeping your business on customers' home screens. It also builds brand loyalty through features like wish lists, personalized recommendations, and special promotions, strengthening customer relationships.</p>
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
