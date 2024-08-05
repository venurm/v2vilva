@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="FinTech solutions, financial technology, digital finance, banking technology, financial services, innovative fintech">
<meta name="description" content="Transform your financial operations with Vilva Business's FinTech solutions, offering innovative technology for digital finance, banking, and financial services.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>FinTech Solutions - Vilva Business</title>

@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>FinTech Solutions</h1>
                <p style="color:black; ,font-size: 40px;">FinTech Solutions, innovative technologies designed to improve and streamline financial services and operations. By leveraging advancements in technology, FinTech solutions enhance the efficiency, accessibility, and security of financial transactions and services, transforming the way businesses and consumers interact with financial systems.</p>
                
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
                <h3>Enhanced Efficiency
                </h3>
                <p> Automates financial processes and transactions, reducing the need for manual intervention. This increases speed and accuracy in managing finances, allowing users to handle complex tasks with ease. Streamlining operations leads to time and cost savings.</p>
            </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Greater Accessibility
                </h3>
                <p> Provides users with the ability to access financial services from anywhere at any time through digital platforms. This convenience allows for seamless transactions and financial management, overcoming geographical and time constraints. Enhanced accessibility improves overall user experience.</p>

                </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Advanced Analytics
                </h3>
                <p> Delivers data-driven insights and personalized recommendations to help users make informed financial decisions. By analyzing financial patterns and trends, fintech solutions offer tailored strategies for optimizing financial outcomes. This capability supports better financial planning and management.</p>
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