@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="lead generation marketing, customer acquisition, sales leads, business growth, Vilva Business">
<meta name="description" content="Discover Vilva Business's lead generation marketing strategies for effective customer acquisition and sales lead generation. Enhance your business growth with our targeted marketing solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Lead Generation Marketing - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Lead Generation Marketing</h1>-->
<!--                <p style="color:black; ,font-size: 40px;">Lead Generation Marketing, strategic approach focused on identifying and attracting potential customers for your business. By using targeted marketing tactics, businesses can capture valuable leads that are more likely to convert into paying customers, fueling growth and success.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" style="background-image: url(http://staging.vilvabusiness.com/vbtheme/images/marketing/ls.png);   height: 80% ;  width: 100%;  background-size: cover;  background-position: top ; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Lead Generation Marketing</h1>
          <p>Attracting prospects to your business and increasing their interest through nurturing, all with the end goal of converting them into a customer.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Lead Generation Marketing</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>


 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;"> Lead Generation Marketing</h5>
            <h2 style="color: #001e60;">Convert Interest into Opportunity</h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Convert Interest into Opportunity</h3>
                <p>Our platform enables you to define and refine your target audience based on a range of parameters such as industry, job role, company size, geographical location, and behavioral traits. This granular approach allows you to identify and engage with prospects who are most likely to be interested in your products or services.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Automated Processes</h3>
                <p>Automation tools are essential for streamlining and optimizing the lead generation process. By leveraging automation, you can reduce manual effort, increase efficiency, and scale your lead generation efforts more effectively.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;"> Increased Conversion Rates</h3>
                <p>Our platform incorporates advanced tools and techniques to boost lead quality. For example, through sophisticated lead scoring and qualification processes, you can assess and prioritize leads based on their likelihood to convert. This ensures that your sales team focuses on the most promising prospects.
                </p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;"> Key Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Target your audience to reach them</h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                    <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                    
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Email Campaigns </h3>
                    <p>Engage prospects with tailored email marketing.
                    </p>
                </div>
              
                <div class="row" id="row3">
                    <h3>Content Marketing </h3>
                    <p> Attract leads through valuable content and resources.
                    </p>
                </div>
                
                <div class="row" id="row">
                    <h3>Webinars and Events
                    </h3>
                    <p> Generate leads by hosting educational and interactive events.
                    </p>
                </div>

                <div class="row" id="row4">
                    <h3>Social Media Ads
                    </h3>
                    <p> Drive leads through targeted social media advertising.
                    </p>
                    
                </div>
                <div class="row" id="row4">
                    <h3>Landing Pages  </h3>
                    
                    <p> Optimize landing pages to capture high-quality leads.

                    </p>
                    
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

@endsection