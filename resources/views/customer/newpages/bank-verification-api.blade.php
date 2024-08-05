@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="bank verification API, financial services API, verify bank accounts, secure API">
<meta name="description" content="Explore Vilva Business's bank verification API for secure and reliable verification of bank accounts. Integrate our API to streamline your financial services.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Bank Verification API - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Bank Verification API</h1>
                <p style="color:black; ,font-size: 40px;">At Bank Verification API, we offer a robust and secure solution designed to streamline the process of verifying bank account details in real-time. Our API enables businesses to instantly validate customer bank information, ensuring accuracy and reducing the risk of fraudulent transactions. By integrating our API into your systems, you can automate the verification process, which speeds up customer onboarding and improves the overall user experience.!</p>
                
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
                <h3>Enhanced Security and Fraud Prevention
                </h3>
                <p>Our bank verification APIs ensure secure transactions by verifying account details in real-time, reducing the risk of fraud and enhancing the safety of financial transactions.</p>
            </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">

                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Streamlined Onboarding and Compliance
                </h3>
                <p> The APIs simplify the customer onboarding process by quickly verifying bank details, ensuring compliance with regulatory requirements and reducing manual checks and administrative overhead.</p>
            </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="layout-col-2 mt-3">

                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Real-Time Verification and Accuracy
                </h3>
                <p> Our APIs provide instant and accurate verification of bank account information, improving the efficiency of financial operations and ensuring that transactions are processed smoothly and correctly.</p>
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