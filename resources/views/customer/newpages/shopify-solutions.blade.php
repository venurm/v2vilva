@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Shopify solutions, e-commerce, business solutions, online store, Shopify support">
<meta name="description" content="Explore Shopify Solutions by Vilva Business, offering comprehensive support and services to optimize your e-commerce platform for success.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Shopify Solutions - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about ">-->
<!--            <div class="text-center container">-->
<!--                 <h1>Shopify Solutions</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">Shopify Solutions, we are a team of dedicated professionals who combine technical expertise with a deep understanding of e-commerce trends. We specialize in integrating advanced tools like WhatsApp API, AI chatbots, and tailored SaaS solutions to enhance your Shopify store. Our services are designed to meet your business's unique requirements, helping you adapt to current market demands while preparing for future growth. With a focus on innovation and strategic execution, we ensure that your Shopify store remains agile, competitive, and ready to scale in an evolving digital marketplace.</p>-->
                
<!--            </div> -->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=OiHJKG14GdU">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Shopify Ecommerce Solutions</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Shopify Ecommerce Solutions</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
    <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Enjoy seamless e-commerce </h5>
            <h2 style="color: #001e60;">Effortless management, scalable growth and secure protection </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Ease of Use </h3>
                <p>Shopify offers a user-friendly interface with drag-and-drop functionality, making it easy for even those without technical skills to set up and manage their online store. This streamlined process reduces the learning curve and allows business owners to focus on growing their business rather than dealing with complex technology.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Scalability and Flexibility </h3>
                <p>Shopify supports a wide range of business sizes and types. It can easily scale with the growth of your business, from small startups to large enterprises. With a vast selection of apps and integrations, Shopify allows for customization to meet specific business needs, making it a versatile platform for various e-commerce requirements.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Secure and Reliable </h3>
                <p>Shopify provides robust security features, including SSL certification and PCI compliance, ensuring that customer data and transactions are protected. Its reliable hosting and 24/7 customer support minimize downtime and technical issues, giving you peace of mind that your store is secure and always accessible.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Perfect for e-commerce subscriptions, drop shipping and multi-channel sales </h2>
                <h5 style="color: #28334a;">Unify the management of every endpoint regardless of platform or ownership
                    model. </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                      <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 76%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="row" id="row1">
                    <h3>E-commerce Stores</h3>
                    <p>Ideal for creating and managing online retail shops selling physical or digital products.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Subscription Services</h3>
                    <p>Perfect for businesses offering subscription boxes, memberships, or recurring billing services.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Dropshipping</h3>
                    <p>Enables easy integration with dropshipping apps, allowing businesses to sell products without holding inventory.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Custom Product Sales</h3>
                    <p>Supports businesses that offer customizable or made-to-order products, with tools for managing customizations and orders.</p>
                </div>

                <div class="row" id="row4">
                    <h3>Multi-channel Sales</h3>
                    <p>Allows businesses to sell across multiple channels, including social media platforms, online marketplaces, and in-person through point-of-sale systems.</p>
                </div>

            </div>

        </div>
    </div>

<div class="ready mt-5 pb-5 container">
        <div class="ready-des">
            <h3 style="color: #001e60;">Dream Big  Achieve Bigger – Partner with Vilva Business! </h3>
            <h5 style="color: #28334a;">Experience device management, made easy!
            </h5>
            <div class="contact-us">
                <button type="button"><a href="/contact" target="_blank" style="color:white;"> Explore the Benefits</a><i class="fa-solid fa-arrow-right"></i></button>
            </div>

        </div>
    </div>
</body>
@include('customer.layouts.blogsection')

<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=OiHJKG14GdU'
  });
</script>
@endsection