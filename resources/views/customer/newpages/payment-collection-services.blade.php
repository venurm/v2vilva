@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Payment collection services, online payment solutions, secure payment processing, business payment services, transaction management">
<meta name="description" content="Explore Payment Collection Services by Vilva Business, offering secure and efficient solutions to streamline your payment processing and enhance your business transactions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Payment Collection Services - Vilva Business</title>

@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>Payment Collection Services</h1>
                <p style="color:black; ,font-size: 40px;">At Payment Collection Services, we provide tailored solutions designed to streamline the payment collection process for businesses of all sizes. Our services integrate advanced technologies to automate invoicing, enable multiple payment methods, and ensure timely collections. With features like secure transaction processing, automated reminders, and real-time tracking, we help businesses manage their receivables more efficiently.!</p>
                
            </div>
        </div>
    </div>
<div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Accelerate cash flow management</h5>
            <h2 style="color: #001e60;">Simplify payment processing efficiently </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">

                <h3 style="color: #001e60;">Streamlined Transactions </h3>
                <p>Simplify and automate payment processes, reducing manual effort and errors.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                               <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">

                <h3 style="color: #001e60;">Enhanced Security</h3>
                <p>Implement advanced security measures to protect sensitive payment information and prevent fraud.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                               <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">

                <h3 style="color: #001e60;">Improved Cash Flow</h3>
                <p>Accelerate the collection process, leading to faster access to funds and better cash flow management.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Streamline and secure transactions </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                    <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>E-Commerce Transactions</h3>
                    <p>Processing online payments securely and efficiently for online stores.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Subscription Billing</h3>
                    <p>Managing recurring payments for subscription-based services or memberships.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Invoice Payments</h3>
                    <p> Facilitating electronic payment for invoices to streamline accounts receivable.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Mobile Payments</h3>
                    <p> Accepting payments through mobile devices and apps for on-the-go transactions.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Donations and Crowdfunding</h3>
                    <p> Handling contributions and fundraising payments for non-profits and campaigns.</p>
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
                            <h3 style="color: #001e60;">Trends and Innovations in Payment Collection Solutions</h3>
                            <p style="color: #28334a ;">Payment collection solutions are evolving with several key trends and innovations. The rise of contactless payments and digital wallets is making transactions faster and more convenient for users. Blockchain technology is being adopted for its secure and transparent transaction capabilities. AI and machine learning are enhancing fraud detection and improving transaction security by identifying suspicious patterns. </p>

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
                            <h4>Contactless Payments </h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Digital Wallets</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Secure Transaction</h4>
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
    