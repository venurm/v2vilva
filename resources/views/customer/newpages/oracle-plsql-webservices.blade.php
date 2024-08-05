@extends('customer.layouts.newnavbar')

@section('head')

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Oracle PL/SQL, web services, database solutions, Oracle development, PL/SQL support">
<meta name="description" content="Discover Oracle PL/SQL Web Services by Vilva Business, providing robust database solutions and expert support to enhance your Oracle applications.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Oracle PL/SQL Web Services - Vilva Business</title>

@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about ">
            <div class="text-center container">
                 <h1>Oracle PL/SQL Web Services</h1>
                <p style="color:black; ,font-size: 40px;">we specialize in delivering tailored solutions that harness the power of Oracle's PL/SQL for creating efficient and scalable web services. Our expert team designs and develops web services that enable seamless integration of your Oracle databases with various applications and platforms. By leveraging the robustness of PL/SQL, we ensure that your data processing is optimized for performance, security, and reliability.</p>
                
            </div> 
        </div>
    </div>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Enhance complex query performance. </h5>
            <h2 style="color: #001e60;">Optimize data processing efficiency.</h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Enhanced Performance</h3>
                <p>Oracle PL/SQL services are optimized for executing complex queries and processing large volumes of data efficiently, ensuring faster response times.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="./images/Untitled (1).png" alt="" srcset="">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <p>They offer comprehensive security features, including data encryption, access controls, and auditing capabilities, to safeguard sensitive information.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Seamless Integration </h3>
                <p> Oracle PL/SQL services integrate smoothly with other Oracle products and third-party applications, facilitating a cohesive and flexible IT infrastructure.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Efficiently manage large datasets. </h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                                      <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">

                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Bring Your Own Device (BYOD) Programs</h3>
                    <p>Improve employee productivity while promoting full privacy and data security. Enable frictionless
                        access to work resources no matter what enrollment type or device employees use.</p>
                </div>
                <div class="row" id="row2">
                    <h3>Data Warehousing</h3>
                    <p>Efficiently managing and querying large datasets for business intelligence and reporting.</p>
                </div>
                <div class="row" id="row3">
                    <h3>Transaction Processing</h3>
                    <p>Handling high volumes of transactions with speed and accuracy in financial systems.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Batch Processing</h3>
                    <p>Automating routine data processing tasks such as ETL (Extract, Transform, Load) operations.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Data Integration</h3>
                    <p>Seamlessly integrating data from various sources into a unified database for consistent access.</p>
                </div>
                <div class="row" id="row4">
                    <h3>Application Development</h3>
                    <p>Building robust and scalable database-driven applications with complex business logic.</p>
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
                            <h3 style="color: #001e60;">Trends and Innovations in Oracle PL/SQL Services</h3>
                            <p style="color: #28334a ;">Recent trends in Oracle PL/SQL services include the adoption of cloud-based databases, which offer greater scalability and flexibility for handling large volumes of data. Automated performance tuning tools are becoming more prevalent, allowing for real-time adjustments to optimize query performance and reduce bottlenecks. Integration with AI and machine learning technologies enhances data analytics capabilities, enabling more advanced predictive insights.</p>

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
                            <h5>Oracle</h5>
                            <h4>AI and Machine Learning Integration</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Oracle</h5>
                            <h4>Secure Transaction</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Oracle</h5>
                            <h4>Data warehouse</h4>
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