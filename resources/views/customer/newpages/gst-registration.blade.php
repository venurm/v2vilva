@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="GST registration, GST application, GST eligibility, GST compliance">
<meta name="description" content="Register for GST with Vilva Business. Our experts guide you through the GST registration process, ensuring compliance and efficiency for your business. Contact us today to get started with GST registration.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>GST Registration - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">
<body>
    <div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>GST Registration  </h1>
                <p style="color:black; ,font-size: 40px;">At GST Registration, we provide a streamlined mobile solution designed to simplify the GST registration process for businesses. Our app features advanced tools for automated data collection, real-time compliance checks, and secure document management. With a user-friendly interface, we guide users through each step of the registration process, from gathering necessary information to submitting applications. Our solution ensures that businesses can achieve seamless GST registration, meet regulatory requirements, and start benefiting from GST compliance with minimal hassle. By focusing on efficiency and accuracy, we help businesses navigate the complexities of GST registration with ease.!</p>
                
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
                <h3>Legal Recognition and Credibility
                </h3>
                <p>GST registration formally recognizes your business as a legitimate supplier, enhancing its credibility and trustworthiness in the marketplace.                </p>
            </div>
            </div>
            <div class="col-md-3 col-12 ">
                <div class="layout-col-2 mt-3">

                <div class="top-bg-c"></div>
                <div class="imgforcol">
                   <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Input Tax Credit Benefits
                </h3>
                <p>By claiming input tax credits on purchases, your business can lower its tax liability, leading to improved financial efficiency and cash flow.
                </p>
</div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">

                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Streamlined Tax Compliance
                </h3>
                <p>GST simplifies the tax structure by merging multiple indirect taxes into one, making tax management and compliance easier and more efficient.</p>
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