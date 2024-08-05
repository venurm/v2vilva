@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="WordPress solutions, business solutions, website development, WordPress support">
<meta name="description" content="Explore WordPress Solutions by Vilva Business, offering comprehensive support and services to enhance your website development and business success.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>WordPress Solutions - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templatetwo.css') }}">
<body>
    <div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>WordPress Solutions</h1>
                <p style="color:black; ,font-size: 40px;">AtWordPress Solutions, we are a team of dedicated experts who are passionate about delivering exceptional results. Leveraging our proficiency in WhatsApp API, AI chatbots, and e-commerce SaaS solutions, we create tailored solutions that meet the traditional, transformational, and future needs of our clients. Our focus on innovation and seamless integration ensures that WordPress-based businesses can enhance their online presence and achieve sustainable growth in a competitive digital environment.!</p>
                
            </div>
        </div>
    </div>
    <div class="features-layout2">
        <div class="row  mx-auto container">
            <div class="col-12 col-md-4 mt-3">
                <div class="layout-col-2">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                     <img src="{{ asset('internal/templatestwoimages/layout-1.png') }}" alt="" srcset="">
                </div>
                <h3>User-Friendly and Highly Customizable
                </h3>
                <p>WordPress is renowned for its user-friendly interface, making it accessible even for those with minimal technical expertise. With thousands of themes and plugins available, businesses can easily customize their websites to match their brand identity and specific needs, ensuring a unique and engaging online presence.</p>
            </div>
        </div>
            <div class="col-md-4 col-12">
                <div class="layout-col-2 mt-3">
                <div class="top-bg-c"></div>
                <div class="imgforcol">
                     <img src="{{ asset('internal/templatestwoimages/layout-2.png') }}" alt="" srcset="">
                </div>
                <h3>SEO-Friendly and Performance Optimized
                </h3>
                <p>WordPress is designed with SEO best practices in mind, helping websites rank higher in search engine results. Its clean code, responsive design, and a variety of SEO plugins ensure that your site is optimized for speed and visibility, driving more organic traffic and improving user experience.</p>

            </div>
        </div>

            <div class="col-md-4 col-12">
                <div class="layout-col-2 mt-3">
                <div class="top-bg"></div>
                <div class="imgforcol-test">
                    <img src="{{ asset('internal/templatestwoimages/layout-3.png') }}" alt="" srcset="">
                </div>
                <h3>Cost-Effective and Scalable
                </h3>
                <p>WordPress offers a cost-effective solution for businesses of all sizes, with numerous free and premium themes and plugins available to enhance functionality. Its scalability means that as your business grows, your website can easily grow with it, accommodating increased traffic and more complex requirements without needing a complete overhaul.</p>
            </div>
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