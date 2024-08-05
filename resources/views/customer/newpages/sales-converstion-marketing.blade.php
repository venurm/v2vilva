@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="sales conversion marketing, lead generation, customer acquisition, sales optimization, Vilva Business">
<meta name="description" content="Discover Vilva Business's sales conversion marketing strategies for effective lead generation, customer acquisition, and sales optimization. Improve your business's conversion rates with our targeted marketing solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Sales Conversion Marketing - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">

<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Sales Conversion Marketing</h1>
                <p style="color:black; ,font-size: 40px;">Sales Conversion Marketing, strategic approach designed to turn potential leads into paying customers. By optimizing every step of the customer journey, from initial engagement to final purchase, businesses can increase conversion rates and maximize revenue..
                </p>
                
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
                <h3>Increased Revenue
                </h3>
                <p> Implement strategies designed to convert leads into paying customers, boosting your overall sales performance.
                </p>
                </div>
            </div>
            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                   <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>Optimized Sales Funnel
                </h3>
                <p> Streamline your sales process to address pain points and enhance lead nurturing, improving conversion rates.
                </p>
                </div>

            </div>

            <div class="col-md-4 col-12 ">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Actionable Insights
                </h3>
                <p>  Gain valuable insights into customer behavior and preferences, allowing for more targeted and effective marketing efforts.
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