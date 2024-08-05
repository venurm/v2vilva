@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="LinkedIn marketing, professional networking, B2B marketing, business growth, Vilva Business">
<meta name="description" content="Discover Vilva Business's LinkedIn marketing solutions for effective professional networking and B2B marketing. Enhance your business growth with our targeted strategies.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>LinkedIn Marketing - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>LinkedIn Marketing</h1>
                <p style="color:black; ,font-size: 40px;">LinkedIn Marketing,strategic approach to building your brand, generating leads, and establishing thought leadership within the professional community. By utilizing LinkedIn’s unique platform, businesses can connect with a highly targeted audience, engage with industry professionals, and drive business growth.</p>
                
            </div>
        </div>
    </div>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">LinkedIn Marketing </h5>
            <h2 style="color: #001e60;">Elevate Your Professional Network </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Precision Targeting</h3>
                <p>Our targeting capabilities are designed to help you pinpoint and engage with precise professional demographics and industries relevant to your business objectives. By leveraging advanced data analytics and segmentation tools, you can tailor your outreach efforts to specific professional profiles, job roles, and industry .
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Enhanced Credibility</h3>
                <p>Establishing and showcasing your industry authority is crucial for building trust and credibility within your market. Our platform provides tools and features to help you demonstrate your expertise and position yourself as a thought leader.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">High-Quality Leads</h3>
                <p>Our solution is designed to attract and convert high-quality leads from a targeted professional audience. By reaching the right people in specific industries, you increase the likelihood of generating leads that are not only interested but also highly qualified.
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
                    <h3>Lead Generation</h3>
                    <p>Target and connect with potential B2B clients.
                    </p>
                </div>
              
                <div class="row" id="row3">
                    <h3>Brand Building </h3>
                    <p> Increase brand presence through strategic content and ads.
                    </p>
                </div>
                
                <div class="row" id="row">
                    <h3>Recruitment
                    </h3>
                    <p> Find and attract top talent with targeted job postings.
                    </p>
                </div>

                <div class="row" id="row4">
                    <h3>Networking Opportunities
                    </h3>
                    <p> Forge valuable connections within your industry.
                    </p>
                    
                </div>
                <div class="row" id="row4">
                    <h3>Thought Leadership</h3>
                    
                    <p> Share insights to position your brand as an industry leader.

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

     <div class="latest-news pt-5 pb-5">
        <h3 style="color: #4a12f0; text-align: center; padding-bottom: 30px;">Latest News</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="latest-img-all">
                          <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 85%;width: 50%;">
                        <div class="img-des">
                            <h6 style="color: #4a12f0;">Blog</h6>
                            <h3 style="color: #001e60;">Trends and Innovations in  Linked in Marketing  </h3>
                            <p style="color: #28334a ;">LinkedIn marketing is focusing on advanced targeting algorithms and AI-driven insights for better engagement. Interactive content and video are becoming more prevalent. Enhanced analytics tools are optimizing campaign performance.</p>

                            <div class="read-more">
                                <button type="button">Read More &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <!-- <i class="fa-solid fa-newspaper" style="color: #616899;"></i> -->
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Customer Retention
                            </h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Promotional Campaign
                            </h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4> Accuracy and speeds up the process</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>  
@endsection