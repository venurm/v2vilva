@extends('customer.layouts.newnavbar')


@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Facebook marketing, Instagram marketing, social media marketing, business promotion, Vilva Business">
<meta name="description" content="Discover Vilva Business's Facebook and Instagram marketing solutions to boost your business's online presence. Enhance your social media strategy with our expert services.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Facebook & Instagram Marketing - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Facebook & Instagram Marketing</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">Facebook & Instagram Marketing, dynamic digital strategy designed to boost your brand’s visibility, engagement, and conversions across two of the world’s most popular social media platforms. By leveraging the extensive reach and targeted advertising capabilities of Facebook and Instagram, businesses can effectively connect with their audience, share compelling content, and drive measurable results.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" style="background-image: url(http://staging.vilvabusiness.com/vbtheme/images/marketing/sm.png);  height:100%; width:100% ;background-size: cover;  background-position: right ; background-repeat: no-repeat; ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Facebook & Instagram Marketing</h1>
          <!--<p>brands to connect with their audience to build a brand, increase and so on</p>-->
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Facebook & Instagram Marketing</span> </li>
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
                <h3>Targeted Advertising
                </h3>
                <p>Reach your ideal audience with precision using advanced targeting options on both platforms.
                </p>
                </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                    <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Increased Brand Visibility
                </h3>
                <p>   Boost your brand’s presence and recognition through engaging content and strategic ad placements.
                </p>
                </div>

            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Enhanced Customer Interaction
                </h3>
                <p>  Foster deeper connections with your audience through interactive posts, stories, and direct messaging.
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