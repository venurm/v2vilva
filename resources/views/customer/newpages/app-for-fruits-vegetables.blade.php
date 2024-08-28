@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for fruits and vegetables, grocery app, fresh produce app, farm-to-table app">
<meta name="description" content="Explore our fruits and vegetables app designed to offer fresh produce and enhance customer satisfaction. Discover how our app can simplify your shopping experience for healthy choices.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Fruits & Vegetables - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
    <!--<div class="banner ">-->
    <!--    <div class="heading-about">-->
    <!--        <div class="text-center container">-->
    <!--            <h1>App for Ecommerce </h1>-->
    <!--            <p style="color:black; ,font-size: 40px;">AtApp for Fruits & Vegetables, we create specialized mobile solutions designed to streamline the purchase and delivery of fresh produce. Our team integrates advanced features such as WhatsApp API for effortless communication with customers, AI chatbots for personalized recommendations, and e-commerce SaaS solutions for efficient inventory and order management. Our apps are designed to offer a seamless shopping experience, from browsing a diverse selection of fruits and vegetables to placing orders and tracking deliveries. By focusing on innovation and user-friendly design, we help businesses enhance customer satisfaction, optimize operations, and thrive in the competitive fresh produce market.!</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=BePoG2ONkTw">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Apps for Fruits and Vegetables</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Apps for Fruits and Vegetables</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
  <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4  mt-3">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Freshness and Quality Tracking
                </h3>
                <p>An Android app can provide real-time information on the freshness and quality of fruits and vegetables, allowing customers to make informed purchasing decisions and ensuring they receive the best produce.</p>
            </div>
        </div>
            <div class="col-md-4 col-12 mt-3">
                <div class="layout-col-2 mt-3">

                <div class="top-bg-c"></div>
                <div class="imgforcol">
                     <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Convenient Ordering and Delivery
                </h3>
                <p> The app can streamline the ordering process, offering features like easy selection of products, scheduling of deliveries, and tracking of orders. This convenience enhances the customer experience and drives repeat business.</p>
</div>
            </div>

            <div class="col-md-4 col-12 mt-3">
                <div class="layout-col-2 mt-3">

                <div class="top-bg"></div>
                <div class="imgforcol-test">
                   <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Personalized Recommendations and Offers
                </h3>
                <p> By analyzing customer preferences and purchase history, the app can provide tailored recommendations and exclusive offers. This personalization increases customer satisfaction and boosts sales through targeted promotions.p>
            </div>
</div>
        </div>

    </div>
    <div class="start-project mt-5 ">
        <div class="row mx-auto">
            <div class="col-12 col-md-6 project">
                <img src="{{ asset('internal/templatestwoimages/project.png') }}" alt="" class='img-fluid'srcset="">
            </div>
            <div class="col-12 col-md-6 project-des" style="color:#001e60;">
                <div class="project-des-con">
                    <h2>Your Road to Success Begins Here – Let’s Build Together!</h2>
                    <p>Grow your fresh produce business with a dedicated app. Offer seamless ordering, track deliveries, and connect with your customers directly to ensure top-quality service!</p>

                        <div class="layout-btn">
                            <button type="button"><a href="/contact" target="_blank" style="color:white;">See the Results</a> &nbsp;&nbsp;&nbsp;   <i class="ri-arrow-right-line"></i>
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
    videoSrc: 'https://www.youtube.com/watch?v=BePoG2ONkTw'
  });
</script>
@endsection