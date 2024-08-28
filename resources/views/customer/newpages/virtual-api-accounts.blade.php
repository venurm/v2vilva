@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="virtual API accounts, API integration, online payment APIs, secure API services">
<meta name="description" content="Discover Vilva Business's virtual API accounts for seamless integration of online payment APIs. Enhance your transactional capabilities with our secure API services.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Virtual API Accounts - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">


<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Virtual API Accounts</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">At Virtual API Accounts, we offer a cutting-edge solution that enables businesses to create and manage virtual accounts for streamlined financial operations. Our API allows you to generate unique virtual account numbers for customers, which can be used for easier reconciliation of payments, automated collection, and real-time tracking of transactions. This solution is particularly beneficial for businesses handling large volumes of transactions, as it simplifies the process of identifying and managing payments.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=Ojiv9Smi4XE">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Virtual Accounts API</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Virtual Accounts API</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
  <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                   <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Efficient Financial Management
                </h3>
                <p>Virtual account APIs streamline financial operations by automating the creation and management of virtual accounts, enabling businesses to handle transactions and reconciliations more efficiently and accurately.</p>
            </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Cash Flow Control
                </h3>
                <p>With virtual accounts, businesses can easily segregate funds for different purposes or departments, providing better control over cash flow and simplifying financial tracking and reporting.</p>
             </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Improved Reconciliation and Reporting
                </h3>
                <p>Virtual account APIs facilitate detailed transaction tracking and reconciliation by generating unique virtual accounts for different purposes, making it easier to manage and report on financial activities accurately.</p>
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
     
</body>  
@include('customer.layouts.blogsection')

<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=Ojiv9Smi4XE'
  });
</script>
@endsection