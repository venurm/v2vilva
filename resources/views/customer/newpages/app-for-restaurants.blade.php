@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for restaurants, restaurant management app, food service app, dining app">
<meta name="description" content="Discover our restaurant management app tailored to streamline operations and enhance customer satisfaction. Explore how our app can elevate your dining experience.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Restaurants - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about ">
            <div class="text-center container">
                 <h1>App for Restaurants</h1>
                <p style="color:black; ,font-size: 40px;">App for Restaurants, we create custom mobile solutions designed to transform the dining experience for both restaurant owners and patrons. Our expert team integrates advanced technologies, including WhatsApp API for seamless communication, AI chatbots for enhanced customer service, and e-commerce SaaS features for efficient management. Our apps are designed to streamline operations, from online reservations and menu browsing to order placement and delivery tracking. With a focus on user-friendly design and innovative functionality, we help restaurants boost customer satisfaction, increase efficiency, and stay ahead in a competitive market..</p>
                
            </div> 
        </div>
    </div>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">"Streamlined ordering and efficiency" </h5>
            <h2 style="color: #001e60;">Enjoy effortless ordering , increased engagement and operational efficiency </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
               <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Streamlined Ordering Process</h3>
                <p>An app allows customers to place orders quickly and easily, reducing wait times and increasing order accuracy.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Improved Customer Engagement </h3>
                <p> Features such as loyalty programs, push notifications, and personalized offers help retain customers and encourage repeat business.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
               <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Operational Efficiency </h3>
                <p>Automating reservations, orders, and payments reduces manual work, enhances staff productivity, and improves overall restaurant management.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Simplify table reservations seamlessly. </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                     <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Online Ordering</h3>
                    <p>Allowing customers to place and customize orders from their phones, including delivery and pickup options.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Table Reservations</h3>
                    <p>Enabling users to book tables in advance and manage reservations, reducing wait times and improving customer experience..</p>
                </div>
                <div class="row" id="row3">
                    <h3>Menu Management</h3>
                    <p>Providing an up-to-date digital menu with item descriptions, prices, and special offers, easily updated by restaurant staff.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Loyalty Programs</h3>
                    <p>Implementing rewards and loyalty programs to incentivize repeat customers with points, discounts, and special promotions.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Feedback and Reviews</h3>
                    <p>Collecting customer feedback and reviews directly through the app to improve service and address any issues promptly.</p>
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
                            <h3 style="color: #001e60;">Trends and Innovations in app for restaurant</h3>
                            <p style="color: #28334a ;">
                                Recent trends and innovations in restaurant apps focus on enhancing customer experiences and operational efficiency. Mobile ordering and payment options have become standard, reducing wait times and increasing convenience. Integration with delivery services has expanded, allowing for seamless online orders and deliveries.</p>

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
                            <h4>Mobile Ordering</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Best UI/UX</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Contactless Features</h4>
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
    