@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for wholesalers, wholesale app, bulk order app, distributor app">
<meta name="description" content="Explore our wholesale management app designed to streamline bulk orders and enhance business efficiency. Discover how our app can optimize your wholesale operations and increase profitability.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Wholesalers - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about ">-->
<!--            <div class="text-center container">-->
<!--                 <h1>Shopify Solutions</h1>-->
<!--                <p style="color:black; ,font-size: 40px;"> App for Wholesalers, we develop tailored mobile solutions that streamline wholesale operations and enhance business efficiency. Our expert team integrates advanced technologies such as WhatsApp API for smooth communication, AI chatbots for automated support, and e-commerce SaaS features for effective inventory and order management. We design intuitive apps that simplify bulk ordering, manage supplier relationships, and track shipments. By focusing on innovation and operational efficiency, we help wholesalers optimize their processes, improve customer interactions, and gain a competitive edge in the market..</p>-->
                
<!--            </div> -->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=BePoG2ONkTw">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Apps for Wholesalers</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Apps for Wholesalers</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
<div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Streamline Order processing seamlessly </h5>
            <h2 style="color: #001e60;">Optimize wholesale operations efficiently. </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
  <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">               
  <h3 style="color: #001e60;">Streamlined Order Processing </h3>
                <p> An app can automate and simplify the order management process, reducing errors and saving time.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                 <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Real-Time Inventory Management </h3>
                <p> It provides up-to-date inventory tracking, helping wholesalers manage stock levels and avoid shortages or overstock situations.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                 <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Improved Customer Relationship Management (CRM)</h3>
                <p>The app can help manage customer interactions and data more effectively, fostering better relationships and improving customer satisfaction.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Automate and track orders efficiently </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                   <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Order Management</h3>
                    <p> Automating order processing, tracking, and fulfillment.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Inventory Control</h3>
                    <p>Real-time tracking of stock levels and automatic restocking alerts.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Customer Management</h3>
                    <p>Managing customer data, order history, and personalized offers.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Sales Analytics</h3>
                    <p>Providing insights and reports on sales performance and trends.</p>
                </div>
                <!-- <div class="row" id="row4">
                    <h3>AI-Driven Analytics</h3>
                    <p>Providing vast features to groww your business</p>
                </div>
                <div class="row" id="row4">
                    <h3>Marketing</h3>
                    <p>Stratergy to grow your online presence</p>
                </div> -->

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
    videoSrc: 'https://www.youtube.com/watch?v=BePoG2ONkTw'
  });
</script>
@endsection