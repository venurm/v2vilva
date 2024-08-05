@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for groceries, grocery shopping app, grocery delivery app, food shopping app">
<meta name="description" content="Explore our grocery management app designed to simplify shopping and enhance customer convenience. Discover how our app can optimize your grocery shopping experience.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Groceries - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about ">
            <div class="text-center container">
                 <h1>App for Groceries</h1>
                <p style="color:black; ,font-size: 40px;">Experience the future of grocery shopping with Vilva, the app designed to make your life easier. Whether you're at home or on the go, Vilva offers a seamless shopping experience, delivering fresh groceries right to your doorstep.</p>
                
            </div> 
        </div>
    </div>
  <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Enjoy seamless e-commerce </h5>
            <h2 style="color: #001e60;">Effortless management, scalable growth and secure protection </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Smart shopping List </h3>
                <p>The Smart Shopping Lists feature is your personal shopping assistant, helping you plan, organize, and optimize your grocery shopping like never before. With intelligent suggestions, collaborative capabilities, and automatic organization, grocery shopping has never been this easy and efficient!

</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Real-time Order Tracking </h3>
                <p>With Real-time Order Tracking, you're always connected and informed, making grocery delivery more transparent and reliable than ever. Enjoy the convenience of knowing where your groceries are at any moment and plan your day without any guesswork.

</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Secure Payment Options </h3>
                <p>With our Secure Payment Options, enjoy the convenience of flexible payment methods and the assurance that your financial information is handled with the utmost security. Shop with confidence, knowing that every transaction is protected by cutting-edge security technologies.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Experience the future of grocery shopping </h2>
                <h5 style="color: #28334a;">Unify the management of every endpoint, Revolutionize Your Grocery Shopping Experience
                     </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                      <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>E-commerce Stores</h3>
                    <p>Ideal for creating and managing online retail shops selling physical or digital products.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Subscription Services</h3>
                    <p>Perfect for businesses offering subscription boxes, memberships, or recurring billing services.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Shop Smarter, Live Better</h3>
                    <p>Unlock the potential of hassle-free grocery shopping with our app's intuitive features designed to save you time and effort.</p>
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
                            <h3 style="color: #001e60;">Trends and Innovations in Shopify website development</h3>
                            <p style="color: #28334a ;">Recent trends and innovations in Groceries emphasize enhanced user experiences, AI integration, and omnichannel capabilities. AI-driven product recommendations and customer segmentation enable personalized shopping experiences. Mobile-first design remains crucial for seamless device compatibility. Shopify's customizable themes offer greater design flexibility and creativity.</p>

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
                            <h4>Enhanced User Experiences and Personalization
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
                            <h4>AI Integration and Mobile-First Design
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
                            <h4>Expanded Payment Solutions and Sustainability Focus
                            </h4>
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