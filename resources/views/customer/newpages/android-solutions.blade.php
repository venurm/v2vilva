@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="android solutions, mobile app development, android development services">
    <meta name="description" content="Explore our Android solutions page for comprehensive mobile app development services. Contact us for custom Android app development tailored to your business needs.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Android Solutions - Vilva Business</title>
@endsection

@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">

<body>
    <div class="prod-main-cont">
      <div class="product-banner">
        <div class="banner-img">
          <div class="prod-des">
            <h2 data-aos="fade-down" data-aos-duration="1000">
              Android App Solutions
            </h2>
            <p>
              Android has the largest market share among mobile operating
              systems, providing access to a vast audience. Developing an
              Android app allows you to tap into this extensive user base,
              maximizing your app's visibility and potential downloads.Android's
              open-source nature offers a high level of customization and
              flexibility, allowing developers to create unique and tailored app
              experiences. This ensures that your app can be designed to meet
              specific business needs and provide a standout user experience.
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
            Android apps can seamlessly integrate with various Google services and APIs, such as Google Maps, Google Pay, and Firebase. This enhances functionality, improves user experience, and leverages Google’s powerful tools to add valuable features to your app.
          </p>
          <p>
            Android app solutions provide robust and flexible options for developing dynamic mobile applications. With access to a broad range of Google services and APIs, such as Google Maps and Google Pay, your app can integrate advanced features seamlessly. These solutions enhance user experience, improve functionality, and ensure your app is equipped with the latest technology. Whether you're aiming for superior performance or innovative features, Android app solutions offer the tools needed to bring your vision to life.
          </p>

          <p><b>01.</b>Highly Customizable and Scalable</p>
          <p><b>02.</b>Wide Market Reach</p>
          <p><b>03.</b>Customizable and Flexible Development</p>
          <p><b>04.</b>Integration with Google Services</p>
          <p><b>05.</b>Robust Performance and Security</p>

          <p>
            Android app solutions offer powerful tools for creating high-performance, feature-rich applications. By leveraging Android's extensive libraries and APIs, including support for real-time data syncing and in-app messaging, your app can deliver an engaging and responsive user experience. These solutions enable seamless integration with various services and devices, ensuring your app remains adaptable and scalable as technology evolves. Embrace the potential of Android to build apps that stand out and meet the needs of today's mobile users.
          </p>
        </div>
      </div>

      <div class="client-testimonial container mx-auto py-5">
        <div class="client-testimonial-des">
          <h2 data-aos="fade-left" data-aos-duration="1200">
            What our client say about Android App Services.
          </h2>
        </div>
        <div class="client-testimonial">
          <div class="test-img">
            <div class="test-img-des">
              <p>
                "Android app solutions have been fantastic for us. The seamless integration with Google services and the platform's flexibility have enhanced our app’s performance and user experience."
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
              <img class="news-img" src="./img/Image (3).png" />
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
<!--    videoSrc: 'https://www.youtube.com/watch?v=W0kkyPfJXb4'-->
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