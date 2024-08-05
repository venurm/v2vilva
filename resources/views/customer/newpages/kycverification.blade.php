@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="KYC verification, Know Your Customer, identity verification, compliance solutions, secure verification, digital KYC">
<meta name="description" content="Streamline your compliance processes with Vilva Business's KYC Verification solutions, providing secure and efficient identity verification for customer onboarding.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>KYC Verification Solutions - Vilva Business</title>


@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>KYC Verification Solutions</h1>
                <p style="color:black; ,font-size: 40px;">KYC Verification, crucial process used by financial institutions and other regulated entities to verify the identity of their customers. The goal of KYC is to prevent fraud, money laundering, and other illicit activities by ensuring that businesses know who their customers are and understand their financial behaviors and risks..</p>
                
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
                <h3>Regulatory Compliance
                </h3>
                <p> Ensures adherence to legal and regulatory requirements, minimizing the risk of fines and legal issues. By following KYC protocols, businesses can avoid penalties associated with non-compliance. This adherence helps maintain operational integrity and fosters a positive reputation.</p>
            </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Improved Customer Trust
                </h3>
                <p>Builds confidence among customers by demonstrating a commitment to secure and responsible business practices. Effective KYC processes show that a business prioritizes the protection of customer information. This trust can lead to stronger customer relationships and increased loyalty.</p>

                </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Streamlined Processes
                </h3>
                <p>Facilitates faster and more efficient onboarding by establishing clear customer verification procedures. KYC procedures simplify the verification process, reducing delays and administrative burdens. This efficiency enhances overall customer experience and operational effectiveness.</p>
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