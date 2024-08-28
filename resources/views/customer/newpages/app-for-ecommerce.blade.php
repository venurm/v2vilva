@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="app for ecommerce, ecommerce app, online store app, digital retail app">
<meta name="description" content="Discover our ecommerce management app designed to streamline operations and enhance online sales. Explore how our app can empower your ecommerce business with efficiency and growth.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>App for Ecommerce - Vilva Business</title>
@endsection

@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">

<body>
    <div class="prod-main-cont">
      <div class="product-banner">
        <div class="banner-img">
          <div class="prod-des">
            <h2 data-aos="fade-down" data-aos-duration="1000">
                Apps for ECommerce
            </h2>
            <p>
                An Android eCommerce app provides personalized shopping experiences, push notifications for promotions and new arrivals, and easy access to customer support, which can significantly increase user engagement and retention.Additionally, the app's convenience encourages repeat purchases and enhances brand loyalty.




            </p>
          </div>
        </div>
      </div>
      <div class="prod-head container mx-auto py-5">
        <div
          class="prod-head-img"
          data-aos="zoom-in"
          data-aos-duration="1500"
        ></div>
        <div class="prod-head-content">
          <h2>
            <span data-aos="fade-up-right" data-aos-duration="1200">
              Transform Your Business</span
            >
            with
            <span data-aos="fade-up-right" data-aos-duration="1200"
              >Innovative Android App Solutions</span
            >
          </h2>
          <p>
           The app offers a streamlined, user-friendly interface for browsing, searching, and purchasing products. Features like one-touch checkout, saved payment methods, and real-time inventory updates improve the shopping experience and reduce cart abandonment.Additionally, the app's convenience encourages repeat purchases and enhances brand loyalty.


          </p>
          <p>
            We offer comprehensive e-commerce website development services to help you build a robust online store. From custom design to seamless functionality and secure payment integration, our solutions are tailored to meet your business needs and drive online success. These solutions enhance user experience, improve functionality, and ensure your app is equipped with the latest technology. Whether you're aiming for superior performance or innovative features, Android app solutions offer the tools needed to bring your vision to life.
          </p>

          <p><b>01.</b>Boosted Customer Engagement</p>
          <p><b>02.</b>Enhanced Shopping Experience</p>
          <p><b>03.</b>Customizable and Flexible Development</p>
          <p><b>04.</b>Integration with Google Services</p>
          <p><b>05.</b>Increased Sales and Loyalty </p>

          <p>
            Our e-commerce website development services are designed to create a powerful online presence for your business. We provide end-to-end solutions, including custom design, user-friendly interfaces, and secure payment integrations. Our team ensures that your online store is not only visually appealing but also optimized for performance and scalability. With our expertise, we help you attract and convert customers, driving growth and success. Trust us to build a robust e-commerce platform that meets your unique business needs.
          </p>
        </div>
      </div>

      <div class="client-testimonial container mx-auto py-5">
        <div class="client-testimonial-des">
          <h2 data-aos="fade-left" data-aos-duration="1200">
            What our client say about our Android Ecommerce Services.
          </h2>
        </div>
        <div class="client-testimonial">
          <div class="test-img">
            <div class="test-img-des">
              <p>
                "The Android e-commerce solution transformed our mobile shopping experience. Its seamless integration and user-friendly features have significantly boosted customer engagement and sales."
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="news-letter container mx-auto my-5 pt-4">
        <div class="news-letter-img pt-5">
          <div class="row">
            <div class="col-md-6 col-12">
              <h3>Start your 7-day free trial</h3>
              <p>
                Experience seamless functionality with our platform.
                Effortlessly customize your workflow.
              </p>
              <div
                class="news-input"
                data-aos="fade-right"
                data-aos-duration="1200"
              >
                <input
                  type="text"
                  name="email"
                  placeholder="Enter your email "
                  required
                />
                <button type="button">Start</button>
              </div>
              <div class="radio-btn pt-5">
                <p>
                  <i class="fa-solid fa-circle-dot"></i> &nbsp;Free 7-day trial
                </p>
                <p>
                  <i class="fa-solid fa-circle-dot"></i>&nbsp;No credit card
                  required
                </p>
                <p>
                  <i class="fa-solid fa-circle-dot"></i>&nbsp;Cancel anytime
                </p>
              </div>
            </div>
            <div
              class="col-6 d-none d-md-block"
              data-aos="fade-left"
              data-aos-duration="1500"
            >
              <img class="news-img" src="{{ asset('internal/templatesfourimages/Image (3).webp') }}" alt="" srcset="" />
            </div>
          </div>
        </div>
      </div>

      <div
        class="get-in-touch container mx-auto pt-5"
        data-aos="zoom-in"
        data-aos-duration="1500"
      >
        <h2>Get in touch</h2>
        <form action="#" method="POST">
          <div class="row">
            <div class="col-md-6 col-12">
              <label for="name">Full Name *</label> <br />
              <input
                type="text"
                id="name"
                name="name"
                placeholder="  &nbsp; &nbsp;Your full name"
                required
              />
            </div>
            <div class="col-md-6 col-12">
              <label for="name">Your email *</label> <br />
              <input
                type="text"
                id="name"
                name="name"
                placeholder=" &nbsp; &nbsp;example@yourmail.com"
                required
              />
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-6 col-12">
              <label for="name"> Company *</label> <br />
              <input
                type="text"
                id="name"
                name="name"
                placeholder="  &nbsp; &nbsp;your company name here"
                required
              />
            </div>
            <div class="col-md-6 col-12">
              <label for="name">Subject * </label> <br />
              <input
                type="text"
                id="name"
                name="name"
                placeholder="  &nbsp; &nbsp;How can we Help"
                required
              />
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12 col-12">
              <label for="message">Message *</label> <br />
              <textarea
                id="message"
                name="message"
                placeholder="  &nbsp; &nbsp;Hello there,I would like to talk about how to..."
                required
              ></textarea>
            </div>
          </div>
          <button type="submit">Send Message</button>
        </form>
      </div>
    </div>


  </body>
@include('customer.layouts.blogsection')

<!--<script>-->
<!--  jarallax(document.querySelectorAll('.jarallax'), {-->
<!--    speed: 0.6,-->
<!--    videoSrc: 'https://www.youtube.com/watch?v=0n6-5TFgPRA'-->
<!--  });-->
<!--</script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
@endsection