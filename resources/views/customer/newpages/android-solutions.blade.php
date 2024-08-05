@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="android solutions, mobile app development, android development services">
    <meta name="description" content="Explore our Android solutions page for comprehensive mobile app development services. Contact us for custom Android app development tailored to your business needs.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Android Solutions - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">
<body>
   <div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Android Solutions</h1>
                <p style="color:black; ,font-size: 40px;">At Android Solutions, we are a team of skilled professionals dedicated to transforming your mobile app vision into reality. Our expertise extends across the latest advancements in Android development, integrating features such as WhatsApp API, AI chatbots, and e-commerce SaaS solutions to enhance user experiences. We offer bespoke solutions tailored to your unique business needs, ensuring that your Android applications are not only functional and engaging but also future-ready. With a focus on innovation and quality, we help you stay ahead in the competitive mobile landscape and achieve your strategic goals..!</p>
                
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
                <h3>Wide Market Reach
                </h3>
                <p> Android has the largest market share among mobile operating systems, providing access to a vast audience. Developing an Android app allows you to tap into this extensive user base, maximizing your app's visibility and potential downloads.</p>
            </div>
        </div>
            <div class="col-md-4 col-12 ">
                 <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                     <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Customizable and Flexible Development
                </h3>
                <p>Android's open-source nature offers a high level of customization and flexibility, allowing developers to create unique and tailored app experiences. This ensures that your app can be designed to meet specific business needs and provide a standout user experience.</p>

            </div>
            </div>

            <div class="col-md-4 col-12">
                 <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                     <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Integration with Google Services
                </h3>
                <p>Android apps can seamlessly integrate with various Google services and APIs, such as Google Maps, Google Pay, and Firebase. This enhances functionality, improves user experience, and leverages Google’s powerful tools to add valuable features to your app.</p>
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