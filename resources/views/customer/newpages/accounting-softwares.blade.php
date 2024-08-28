@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="accounting software, financial software, business accounting, manage finances">
<meta name="description" content="Explore top accounting software solutions with Vilva Business. Streamline your financial operations and manage your business finances efficiently with our recommended accounting software products.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Accounting Softwares - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
    <!--<div class="banner ">-->
    <!--    <div class="heading-about">-->
    <!--        <div class="text-center container">-->
    <!--            <h1>Accounting Softwares </h1>-->
    <!--            <p style="color:black; ,font-size: 40px;">At Accounting Softwares, we deliver robust mobile solutions designed to streamline financial management for businesses of all sizes. Our expert team integrates advanced features such as automated bookkeeping, real-time financial reporting, and secure data storage. Our user-friendly apps help businesses manage invoices, track expenses, and reconcile accounts effortlessly. With a focus on accuracy and ease of use, our solutions empower businesses to maintain financial clarity, ensure compliance, and make informed decisions. By leveraging the latest technology, we help businesses optimize their accounting processes and achieve financial success.!</p>-->
                
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <section class="page-title bg-overlay-black-60 jarallax" style="background-image: url(http://staging.vilvabusiness.com/vbtheme/images/Industry/acc2.png); height: 100%; width: 100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Accounting Software</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Accounting Software</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>

 <div class="features-layout2">
        <div class="row  mx-auto container ">
            <div class="col-12 col-md-4 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Accuracy
                </h3>
                <p>Automates calculations and data entry, reducing human errors and ensuring precise financial records.
                </p>
                </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">

                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Time Savings
                </h3>
                <p>Speeds up financial processes such as invoicing and expense tracking, allowing more time for strategic business activities.

                </p>
                </div>

            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">

                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Real-Time Insights
                </h3>
                <p>Provides up-to-date financial information and reports, facilitating informed decision-making and better financial management.
                </p>
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

@endsection