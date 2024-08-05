@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="email marketing, email campaigns, marketing solutions, customer engagement, email newsletters">
<meta name="description" content="Discover Vilva Business's email marketing services. Enhance customer engagement and grow your business with our effective email marketing strategies.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Email Marketing - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Email Marketing </h1>
                <p style="color:black; ,font-size: 40px;">At Email Marketing , is a highly effective tool designed to strengthen business communication and boost customer engagement. By leveraging targeted campaigns and personalized content, Email Marketing enables businesses to connect with their audience directly in their inbox, delivering the right message at the right time.</p>
                
            </div>
        </div>
    </div>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">To unlock the full potential of your email marketing for Vilva</h5>
            <h2 style="color: #001e60;">consider these advanced strategies and tips </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Cost-Effective and High ROI </h3>
                <p>Email marketing is an affordable and efficient way to reach a wide audience. It consistently delivers a high return on investment, making it a powerful tool for driving sales and business growth.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Targeted and Personalized Communication </h3>
                <p>Segmentation allows you to tailor messages based on customer behavior and preferences, ensuring relevance and engagement. Personalization further enhances this by creating content that resonates with individual recipients, boosting connection and conversion rates.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Measurable Results and Insights </h3>
                <p>Track key metrics such as open rates and conversions to measure campaign success. Use these insights to make data-driven decisions, refining strategies and enhancing future email marketing efforts.
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
                    <h3>Welcome Emails</h3>
                    <p>Greet new subscribers or customers with a warm welcome, introducing them to your brand and what they can expect from your emails.
                    </p>
                </div>
                <div class="row" id="row2">
                    <h3>Newsletters</h3>
                    <p>Announce special offers, discounts, and sales to drive purchases and increase revenue.
                    </p>
                </div>
                <div class="row" id="row3">
                    <h3>Promotional Campaigns</h3>
                    <p>Regular filing helps reconcile your input tax credit with the GST paid on purchases and sales, ensuring accuracy and avoiding discrepancies.
                    </p>
                </div>
                
                <div class="row" id="row4">
                    <h3>Product Launches
                    </h3>
                    <p> Inform subscribers about new products or services, including details and benefits to generate excitement and early sales.
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
                            <h3 style="color: #001e60;">Trends and Innovations in  Email marketing </h3>
                            <p style="color: #28334a ;">Email marketing is evolving rapidly, with a focus on personalization and automation. Advanced AI tools now enable more targeted content and optimized send times, while interactive elements like polls and quizzes enhance user engagement. Mobile-responsive designs and video integration further boost email effectiveness, and behavioral triggers ensure timely, relevant communication. </p>

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