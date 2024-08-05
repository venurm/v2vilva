@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for shops, retail app, shop management app, store app">
<meta name="description" content="Discover our shop management app designed to streamline operations and enhance customer satisfaction. Explore how our app can empower your retail business.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Shops - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about ">
            <div class="text-center container">
                 <h1>App for Shops</h1>
                <p style="color:black; ,font-size: 40px;">App for Shops, we develop customized mobile solutions designed to elevate the retail experience for both shop owners and customers. Our team of experts integrates advanced features like WhatsApp API for seamless communication, AI chatbots for personalized assistance, and e-commerce SaaS solutions for efficient inventory and sales management. We create intuitive apps that enhance the shopping experience, from easy product browsing and secure transactions to loyalty programs and customer engagement. By focusing on user-centric design and innovative functionality, we help shops boost sales, improve customer satisfaction, and thrive in the competitive retail environment.</p>
                
            </div> 
        </div>
    </div>
<div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Streamlined shopping experience </h5>
            <h2 style="color: #001e60;">Enhance engagement, streamline management, and simplify shopping </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                  <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Enhanced Customer Engagement </h3>
                <p>An app can boost customer interaction through personalized promotions, loyalty rewards, and push notifications, fostering stronger relationships and repeat business.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                  <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Streamlined Sales and Inventory Management </h3>
                <p>Features like real-time inventory tracking, order management, and integrated payment systems simplify shop operations and reduce manual errors.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                 <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Convenient Shopping Experience </h3>
                <p>Customers can enjoy a seamless shopping experience with easy browsing, online ordering, and quick checkout options, making it easier to shop anytime, anywhere.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Enhance shopping convenience digitally</h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                      <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Product Catalog</h3>
                    <p> Displaying an organized and searchable list of products with detailed descriptions and images.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Online Purchasing</h3>
                    <p>Enabling customers to buy products directly through the app, with various payment options.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Inventory Management</h3>
                    <p>Tracking stock levels, managing orders, and updating product availability in real-time.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Customer Loyalty Programs</h3>
                    <p> Offering rewards, discounts, and special promotions to encourage repeat purchases.p>
                </div>
                <div class="row" id="row4">
                    <h3>Personalized Recommendations</h3>
                    <p> Providing tailored product suggestions based on user behavior and preferences.</p>
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
                            <h3 style="color: #001e60;">Trends and Innovations in app for shop</h3>
                            <p style="color: #28334a ;">Recent trends and innovations in shop apps focus on creating more engaging and efficient shopping experiences. Integration of AI and machine learning enables personalized recommendations and targeted promotions, enhancing customer satisfaction. Mobile payment options and digital wallets streamline checkout processes, making transactions faster and more secure.</p>

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
                            <h4>Customizable Templates</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>User Friendly UI/UX</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Personalized Recommendations</h4>
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
    