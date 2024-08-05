@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="event signup, ticket sales, event marketing, event promotion, Vilva Business">
<meta name="description" content="Discover Vilva Business's event signup and ticket sales marketing strategies for effective event promotion and attendee engagement. Enhance your event success with our targeted marketing solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Event Signup & Ticket Sales Marketing - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Event Signup & Ticket Sales Marketing</h1>
                <p style="color:black; ,font-size: 40px;">Event Signup & Ticket Sales Marketing,  targeted strategy designed to maximize attendance and revenue for your events by effectively promoting signups and ticket sales. By leveraging a combination of digital marketing tactics and data-driven insights, businesses can attract a larger audience, streamline the registration process, and drive ticket sales.</p>
                
            </div>
        </div>
    </div>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Transform Events with Seamless Ticketing</h5>
            <h2 style="color: #001e60;">Maximize attendance with smart ticketing solutions</h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Increased Reach </h3>
                <p>Targeted marketing strategies help you reach a wider audience through digital channels, boosting ticket sales and event awareness.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Real-Time Analytics </h3>
                <p>Track ticket sales and attendee behavior in real-time, allowing for quick adjustments to marketing strategies and maximizing event success.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Automated Processes</h3>
                <p> Streamline the ticketing process with automated sign-ups, reminders, and confirmations, reducing administrative workload and enhancing the customer experience.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Boost event registrations effortlessly </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                    <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Concert Promotions</h3>
                    <p>Engage music fans effectively.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Conference Registrations</h3>
                    <p>Simplify attendee sign-ups.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Festival Sales</h3>
                    <p>Boost ticket sales efficiently.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Workshop Bookings</h3>
                    <p>Manage participant registrations easily.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Webinar Invitations</h3>
                    <p>Enhance virtual event engagement.</p>
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
                            <h3 style="color: #001e60;">Event sign-up and ticket sales marketing</h3>
                            <p style="color: #28334a ;">It  is evolving with innovations like dynamic pricing, which adjusts ticket costs based on demand, and integration with social media platforms for targeted ads. The rise of mobile-first strategies ensures that ticket purchasing is optimized for smartphones, while AI-powered analytics provides deeper insights into customer behavior. Additionally, virtual and hybrid events are becoming more prevalent, necessitating seamless online registration systems and real-time updates.</p>

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
                            <h4>Dynamic Pricing  </h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>AI Integration</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>AI-driven analytics</h4>
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