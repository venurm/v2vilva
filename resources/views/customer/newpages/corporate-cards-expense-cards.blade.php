@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="corporate cards, expense cards, business expense management, corporate spending">
<meta name="description" content="Discover Vilva Business's corporate cards and expense cards for efficient business expense management. Streamline your corporate spending with our comprehensive card solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Corporate Cards & Expense Cards - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">


<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Corporate Cards & Expense Cards</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">At Corporate Cards & Expense Cards, we offer a comprehensive solution designed to streamline expense management and enhance financial control for businesses. Our corporate and expense card services provide employees with convenient payment options while giving companies the tools to manage and monitor spending effectively.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=QyhwSYhX09s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Corporate Cards And Expense Cards</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Corporate Cards And Expense Cards</span> </li>
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
                <h3>Simplified Expense Tracking
                </h3>
                <p> Corporate and expense cards streamline the process of tracking and managing business expenses by consolidating transactions into one system, making it easier to categorize, review, and report expenditures.</p>
            </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Financial Control
                </h3>
                <p>These cards offer real-time visibility and control over spending with features such as customizable limits, detailed transaction reports, and automated reconciliation, helping businesses maintain budget discipline and financial oversight.</p>
             </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Boosted Operational Efficiency
                </h3>
                <p>By reducing the need for manual expense reporting and reimbursement processes, corporate and expense cards enhance operational efficiency, allowing employees to make business purchases quickly and ensuring timely payments without administrative delays.</p>
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
    videoSrc: 'https://www.youtube.com/watch?v=QyhwSYhX09s'
  });
</script>
@endsection