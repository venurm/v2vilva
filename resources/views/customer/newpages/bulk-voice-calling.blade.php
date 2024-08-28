@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="bulk voice calling, voice campaigns, automated calls, customer engagement, voice marketing solutions">
<meta name="description" content="Discover Vilva Business's bulk voice calling services. Enhance customer engagement and deliver your message effectively with our voice marketing solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Bulk Voice Calling - Vilva Business</title>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/templateone.css') }}">
<body>
<!--<div class="banner ">-->
<!--        <div class="heading-about">-->
<!--            <div class="text-center container">-->
<!--                <h1>Bulk Voice Calling </h1>-->
<!--                <p style="color:black; ,font-size: 40px;">Bulk Voice Calling , an impactful communication tool that enables businesses to reach a large audience through automated voice messages. This solution is ideal for delivering important announcements, reminders, and promotional messages directly to customers' phones, ensuring that your message is heard loud and clear.</p>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=SXGtFXRz2Lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Bulk Voice Calling </h1>
          <p>businesses to interact with potential buyers and target customers with voice SMS, voice messaging and voice broadcasting.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Bulk Voice Calling </span> </li>
       </ul>
     </div>
   </div>
  </div>
</section>
<div class="prod-des container ">
        <div class="prod-head">
            <h5 style="color: #4a12f0;">Unlock Business Potential with Bulk Voice Calling</h5>
            <h2 style="color: #001e60;">Revolutionize Your Communication Strategy </h2>
        </div>
        <div class="benifits mx-auto">
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuite.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Improved Customer Experience </h3>
                <p>Keep customers updated with important information, appointments, or promotions, enhancing their overall experience. Immediate Response: Quickly collect feedback and facilitate prompt replies, boosting customer satisfaction and engagement.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimage.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">Real-Time Insights </h3>
                <p>Get detailed reports on call performance, including delivery rates and responses, to assess campaign success. Data-Driven Decisions: Leverage real-time insights to refine strategies and enhance future campaigns.
                </p>
            </div>
            <div class="col-md-3 col-12 ben-ai">
                <img src="{{ asset('internal/templatesimages/growsuiteimages.png') }}" alt="" srcset="">
                <h3 style="color: #001e60;">High Engagement Rates</h3>
                <p>Send tailored voice messages that engage your audience more effectively, boosting response rates. Direct Impact: Voice communications capture more attention than text, making sure your message stands out.
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
                    <h3>Marketing and Promotions </h3>
                    <p>Businesses use bulk voice calling to quickly and cost-effectively inform potential customers about new products, special offers, or promotions.
                    </p>
                </div>
                <div class="row" id="row2">
                    <h3>Debt Collection </h3>
                    <p> Financial institutions may use bulk voice calls to remind customers of overdue payments or outstanding balances.
                    </p>
                </div>
                <div class="row" id="row3">
                    <h3>Event Notifications</h3>
                    <p>Event organizers can use bulk voice calling to notify attendees about event details, changes, or cancellations.
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

     
</body>  
@include('customer.layouts.blogsection')

<script>
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.6,
    videoSrc: 'https://www.youtube.com/watch?v=SXGtFXRz2Lg'
  });
</script>
@endsection