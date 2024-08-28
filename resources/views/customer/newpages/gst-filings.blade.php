@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="GST filings, GST returns, GST registration, indirect taxes">
<meta name="description" content="File your GST returns and manage GST compliance with Vilva Business. Our experts help you navigate GST regulations and ensure timely filings for your business. Contact us today for professional GST services.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>GST Filings - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about ">-->
<!--            <div class="text-center container">-->
<!--                 <h1>GST Filings</h1>-->
<!--                <p style="color:black; ,font-size: 40px;"> GST Filings, we offer a specialized mobile solution designed to simplify and streamline the Goods and Services Tax (GST) filing process. Our expert team integrates advanced features like automated data entry, real-time compliance checks, and secure document storage to ensure accurate and timely GST submissions. With a user-friendly interface and robust functionalities, our app helps businesses manage their GST obligations efficiently, track filing deadlines, and stay updated with regulatory changes. By focusing on accuracy and ease of use, we empower businesses to navigate the complexities of GST filing with confidence and compliance.</p>-->
                
<!--            </div> -->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=OiHJKG14GdU">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>GST Fillings</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>GST Fillings</span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
 <div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Unlock  Your Business Potential with GST Fillings</h5>
            <h2 style="color: #001e60;">How often do businesses need to file GST returns </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                               <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">

                <h3 style="color: #001e60;">Ensure Compliance </h3>
                <p>Regular GST filing helps your business adhere to legal requirements, avoiding potential penalties and legal issues.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                               <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">

                <h3 style="color: #001e60;">Accurate Tax Returns </h3>
                <p>Timely and precise filings reflect your business’s true tax obligations, maintaining financial transparency.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">

                <h3 style="color: #001e60;">Claim Input Tax Credit </h3>
                <p>Efficient filing allows you to claim input tax credits, reducing tax liability and enhancing cash flow.
                </p>
            </div>

        </div>
    </div>

    <div class="usecase-all">
        <div class="usecase-head">
            <h5 style="color: #4a12f0;"> Key Use Cases</>
                <h2 style="color: #001e60;">Manage Every Endpoint in One Place </h2>
                <h5 style="color: #28334a;">Manage all your Billing Here</h5>
        </div>
        <div class="row container pt-5 mx-auto">
            <div class="col-md-6 col-12">
                <div class="useimg">
                      <img src="{{ asset('internal/templatesimages/post.jpg') }}" alt="" srcset="" style="height: 80%;width: 90%;">
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="row" id="row1">
                    <h3>Monthly/Quarterly Tax Returns</h3>
                    <p>Businesses must file GSTR-1 (sales) and GSTR-3B (summary of inward and outward supplies) on a monthly or quarterly basis to report their tax liability and claim input tax credits.
                    </p>
                </div>
                <div class="row" id="row2">
                    <h3>Annual Return Filing</h3>
                    <p>GSTR-9 is an annual return that consolidates all monthly/quarterly returns, providing a comprehensive overview of your business’s tax activities for the financial year.
                    </p>
                </div>
                <div class="row" id="row3">
                    <h3>Tax Reconciliation</h3>
                    <p>Regular filing helps reconcile your input tax credit with the GST paid on purchases and sales, ensuring accuracy and avoiding discrepancies.
                    </p>
                </div>
                
                <div class="row" id="row4">
                    <h3>Refund Claims
                    </h3>
                    <p> GST filings facilitate the process of claiming refunds for excess tax payments or unutilized input tax credits.
                    </p>
                </div>

            </div>

        </div>
    </div>




    <div class="ready mt-5 pb-5 container">
        <div class="ready-des">
            <h3 style="color: #001e60;">Your Next Success Story Begins Here – Let’s Get Started!</h3>
            <h5 style="color: #28334a;">Experience device management, made easy!
            </h5>
            <div class="contact-us">
                <button type="button"><a href="/contact" target="_blank" style="color:white;">Subscribe to Our Service</a> <i class="fa-solid fa-arrow-right"></i></button>
            </div>

        </div>
    </div>
</body> 
@include('customer.layouts.blogsection')

<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=OiHJKG14GdU'
  });
</script>
@endsection