@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="payment gateway solutions, online payment processing, secure payment gateways">
<meta name="description" content="Discover secure and efficient payment gateway solutions with Vilva Business. We provide reliable services for online payment processing and integration of secure payment gateways. Contact us to enhance your payment options.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Payment Gateway Solutions - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">


<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Payment Gateway Solutions</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">At Payment Gateway Solutions, we offer comprehensive mobile and web solutions that simplify and secure the payment process for businesses. Our expert team integrates advanced features such as multi-currency support, fraud detection, and seamless integration with popular e-commerce platforms.-->
<!--                We design user-friendly payment gateways that cater to a wide range of payment methods, ensuring smooth and secure transactions for both businesses and their customers.-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=BePoG2ONkTw">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Payment Gateway Solutions</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Payment Gateway Solutions</span> </li>
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
                <h3>Seamless Integration and User Experience
                </h3>
                <p> Our payment gateway solutions offer smooth integration with your existing systems and provide a user-friendly interface, ensuring a hassle-free payment experience for your customers and minimizing cart abandonment.</p>
            </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">

                </div>
                <h3>Robust Security and Fraud Prevention
                </h3>
                <p> We prioritize security with advanced encryption and fraud detection tools, protecting sensitive customer data and reducing the risk of fraudulent transactions, which enhances trust and compliance with industry standards.</p>
           </div>
            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
             <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">

                </div>
                <h3>Global Reach and Flexibility
                </h3>
                <p>Our payment gateway supports multiple currencies and payment methods, enabling you to cater to a global audience and adapt to diverse payment preferences, which can drive international sales and broaden your market reach.</p>
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
    videoSrc: 'https://www.youtube.com/watch?v=BePoG2ONkTw'
  });
</script>
@endsection