@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Magento solutions, e-commerce, business solutions, online store, Magento support">
<meta name="description" content="Explore Magento Solutions by Vilva Business, offering comprehensive support and services to optimize your e-commerce platform for success.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Magento Solutions - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Magento Solutions</h1>
                <p style="color:black; ,font-size: 40px;">AtMagento Solutions, we are a team of experts passionate about helping businesses thrive in the e-commerce space. With our deep knowledge of WhatsApp API, AI chatbots, and e-commerce SaaS solutions, we provide customized solutions that address the traditional, transformational, and future needs of our clients. Our focus on innovation and quality ensures that Magento-based businesses are equipped to succeed in a rapidly evolving digital landscape.!</p>
                
            </div>
        </div>
    </div>
    <div class="features-layout2">
        <div class="row   mx-auto container">
            <div class="col-12 col-md-4 ">
                <div class="layout-col-2  mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Multi-Store Management
                </h3>
                <p>Magento's multi-store capability allows businesses to manage multiple online stores from a single administrative dashboard. This feature simplifies the management process, enabling businesses to run different stores with unique catalogs, pricing, and languages, all while maintaining centralized control and consistency. This is particularly beneficial for businesses with multiple brands or those operating in various regions.</p>
            </div>
            </div>
            <div class="col-md-4 col-12">
                 <div class="layout-col-2  mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Highly Customizable and Scalable
                </h3>
                <p>Magento offers unparalleled customization options and scalability, allowing businesses to tailor their online store to their specific needs and grow seamlessly as their business expands. With a vast array of themes, extensions, and integrations, Magento ensures that your website can evolve with your business, providing a unique and optimized shopping experience for your customers.</p>

            </div>
             </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2  mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                   <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Robust Performance and Security
                </h3>
                <p> Magento is renowned for its robust performance capabilities, handling large volumes of traffic and extensive product catalogs without compromising on speed or reliability. Additionally, Magento's advanced security features protect your website from cyber threats, ensuring safe transactions and safeguarding customer data.</p>
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

