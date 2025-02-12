@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="virtual current accounts, digital banking, business accounts, online banking solutions, secure account management">
<meta name="description" content="Discover Virtual Current Accounts by Vilva Business, offering digital banking solutions for seamless account management and secure financial operations.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Virtual Current Accounts - Vilva Business</title>

@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Virtual Current Accounts </h1>-->
<!--                <p style="color:black; ,font-size: 40px;">At Virtual Current Accounts, we provide a sophisticated solution that allows businesses to manage their finances with greater flexibility and control. Our service enables the creation of virtual current accounts, which act as digital representations of traditional bank accounts. These accounts can be used to manage funds, process payments, and handle transactions with ease.!</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=DbyIixuuazM">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Virtual Current Accounts</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Virtual Current Accounts</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>

  <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Streamline banking with convenience </h5>
            <h2 style="color: #001e60;">Enable instant, cost-effective transactions </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Convenient Account Management </h3>
                <p>Allows users to manage accounts and transactions digitally without physical branches.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Cost-Effective Solutions </h3>
                <p> Reduces overhead costs related to physical infrastructure and banking services.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Real-Time Transactions</h3>
                <p>Facilitates instant transactions and updates, improving financial efficiency and responsiveness.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Simplify and automate financial tasks</h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                    <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Online Business Transactions</h3>
                    <p>Managing and processing business transactions without physical banking.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Expense Management</h3>
                    <p>Tracking and controlling business expenses through digital tools.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Real-Time Fund Transfers</h3>
                    <p> Facilitating instant transfers between accounts for improved liquidity.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Automated Bill Payments</h3>
                    <p>Setting up and automating regular bill payments and subscriptions.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Financial Reporting</h3>
                    <p>Generating real-time financial reports and statements for better decision-making.p>
                </div>

            </div>

        </div>
    </div>




    <div class="ready mt-5 pb-5 container">
        <div class="ready-des">
            <h3 style="color: #001e60;">Ready to Get Started? </h3>
            <h5 style="color: #28334a;">Experience device management, made easy!
            </h5>
            <div class="contact-us">
                <button type="button">Contact Us <i class="fa-solid fa-arrow-right"></i></button>
            </div>

        </div>
    </div>

     
</body>  
@include('customer.layouts.blogsection')

<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=DbyIixuuazM'
  });
</script>
@endsection