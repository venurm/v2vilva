@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="CyberSecurity, information security, data protection, threat management, security solutions, cybersecurity services">
<meta name="description" content="Enhance your digital security with Vilva Business's CyberSecurity solutions, providing comprehensive protection against threats and ensuring robust data security.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CyberSecurity Solutions - Vilva Business</title>

@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<div class="banner ">
        <div class="heading-about">
            <div class="text-center container">
                <h1>CyberSecurity</h1>
                <p style="color:black; ,font-size: 40px;">At CyberSecurity, practice of protecting systems, networks, and data from digital attacks, theft, and damage. As cyber threats continue to evolve in complexity and scale, cybersecurity has become a critical concern for individuals, businesses, and governments alike. Effective cybersecurity measures are essential to safeguarding sensitive information and maintaining trust in the digital world.</p>
                
            </div>
        </div>
    </div>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Fortifying Your Digital Future</h5>
            <h2 style="color: #001e60;">Comprehensive Protection for a Secure Tomorrow. </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Protection from Cyber Threats</h3>
                <p>Safeguards against malware, ransomware, phishing, and other cyber attacks that can compromise sensitive data and operations. With robust cybersecurity measures in place, organizations can detect and neutralize threats before they cause significant harm.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;"> Data Integrity </h3>
                <p>Ensures the accuracy and reliability of data, preventing unauthorized access or alterations. Cybersecurity protocols maintain the integrity of data by using encryption, authentication, and authorization methods, ensuring that only authorized users can access and modify critical information.</p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Regulatory Compliance</h3>
                <p>Helps businesses meet industry standards and legal requirements, avoiding fines and legal issues. Strong cybersecurity practices ensure that organizations adhere to data protection regulations such as GDPR, HIPAA, and other relevant frameworks, reducing the risk of non-compliance penalties.</p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;">Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Streamline and secure identity verification</h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                    <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 100%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="row" id="row1">
                    <h3>Financial Sector</h3>
                    <p>Protecting customers' financial data and ensuring the security of online transactions.
                    </p>
                </div>
                <div class="row" id="row2">
                    <h3>Healthcare Industry </h3>
                    <p>Protecting patient records and complying with HIPAA regulations.
                        </p>
                </div>
                <div class="row" id="row3">
                    <h3>E-commerce Business </h3>
                    <p> Securing customer payment information and personal data during transactions.
                    </p>
                </div>
                <div class="row" id="row4">
                    <h3>Government Agencies </h3>
                    <p>Protecting classified information and ensuring the security of communication channels.
                    </p>
                </div>
                <div class="row" id="row4">
                    <h3>Threat detection</h3>
                    <p>developing future-proof encryption.</p>
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
                            <h3 style="color: #001e60;">Trends and Innovations in Cyber Security</h3>
                            <p style="color: #28334a ;"> Cybersecurity are reshaping digital defense with advancements like Artificial Intelligence and Machine Learning for enhanced threat detection, Zero Trust Architecture ensuring rigorous verification, and Quantum Cryptography developing future-proof encryption methods. Extended Detection and Response (XDR) offers integrated security solutions, while Blockchain Technology and Behavioral Analytics improve data integrity and anomaly detection.</p>

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
                            <h4>AI Detection</h4>
                            <div class="b-btn">
                                <button type="button">Read More  &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i> </button>
                                <i class="fa-solid fa-newspaper" style="color: #616899; font-size: 20px;" ></i>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <h5>Features</h5>
                            <h4>Quantum
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
                            <h4>Privacy-enchancing Technologies</h4>
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
