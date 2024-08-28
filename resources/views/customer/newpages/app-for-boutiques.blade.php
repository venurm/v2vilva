@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for boutiques, boutique app, boutique management, fashion app">
<meta name="description" content="Explore our boutique management app designed to streamline operations and enhance customer engagement. Discover how our app can empower your boutique business.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Boutiques - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
    <!--<div class="banner ">-->
    <!--    <div class="heading-about">-->
    <!--        <div class="text-center container">-->
    <!--            <h1>App for Boutiques</h1>-->
    <!--            <p style="color:black; ,font-size: 40px;">At App for Boutiques, we specialize in creating tailored mobile solutions that elevate the boutique shopping experience. Our team of experts integrates advanced features such as seamless WhatsApp API communication, intelligent AI chatbots, and e-commerce SaaS capabilities to enhance customer engagement and streamline operations. We design intuitive, user-friendly apps that reflect the unique style and personality of your boutique, ensuring that your customers enjoy a personalized shopping journey. Our focus is on delivering innovative solutions that not only meet the current needs of boutique businesses but also position them for future growth and success in the competitive retail landscape.!</p>-->
                
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=0n6-5TFgPRA">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>App for Boutiques</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Event Signup / Ticket Sales Marketing</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>

 <div class="con-layout2 container">
        <h1>App for Boutiques
        </h1>
        <p>Elevate boutique shopping with a custom app <br> How can a boutique app transform your business?</p>

    </div>
    <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4 mt-3">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                     <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Customer Engagement
                </h3>
                <p>An Android app for boutiques can offer personalized features such as exclusive offers, loyalty programs, and notifications about new arrivals, keeping customers engaged and encouraging repeat visits.</p>
            </div>
            </div>
        
            <div class="col-md-4 col-12 mt-3">
                <div class="layout-col-2 mt-3">                
                    <div class="top-bg-c"></div>
                <div class="imgforcol">
                     <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Streamlined Shopping Experience
                </h3>
                <p>With a dedicated app, boutiques can provide a seamless shopping experience, including easy browsing, secure checkout, and real-time inventory updates. This convenience can lead to increased sales and improved customer satisfaction.</p>
            </div>
            </div>

            <div class="col-md-4 col-12 mt-3">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Brand Visibility and Loyalty
                </h3>
                <p> A boutique app enhances brand visibility by keeping your business on customers' home screens. It also builds brand loyalty through features like wish lists, personalized recommendations, and special promotions, strengthening customer relationships.</p>
            </div>
        </div>

        </div>

    </div>
    <div class="start-project mt-5 container">
        <div class="row mx-auto">
            <div class="col-12 col-md-6 project">
                <img src="{{ asset('internal/templatestwoimages/project.png') }}" alt="" class='img-fluid'srcset="">
            </div>
            <div class="col-12 col-md-6 project-des" style="color:#001e60;">
                <div class="project-des-con">
                    <h2>Unlock New Opportunities – Start Your Success Story!</h2>
                    <p>Elevate your boutique business with a custom-built app. Showcase your collections, offer exclusive deals, and create a personalized shopping experience that sets you apart!</p>

                        <div class="layout-btn">
                            <button type="button"><a href="/contact" target="_blank" style="color:white;">Create Your Account</a> &nbsp;&nbsp;&nbsp;   <i class="ri-arrow-right-line"></i>
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
    videoSrc: 'https://www.youtube.com/watch?v=0n6-5TFgPRA'
  });
</script>
@endsection
