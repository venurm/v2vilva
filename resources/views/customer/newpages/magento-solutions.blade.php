@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Magento solutions, e-commerce, business solutions, online store, Magento support">
<meta name="description" content="Explore Magento Solutions by Vilva Business, offering comprehensive support and services to optimize your e-commerce platform for success.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Magento Solutions - Vilva Business</title>
@endsection

@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">


<body>
    <div class="prod-main-cont">
      <div class="product-banner">
        <div class="banner-img">
          <div class="prod-des">
            <h2 data-aos="fade-down" data-aos-duration="1000">
                Magento Ecommerce Solutions
            </h2>
            <p>
                Magento's multi-store capability allows businesses to manage multiple online stores from a single administrative dashboard. This feature simplifies the management process, enabling businesses to run different stores with unique catalogs, pricing, and languages, all while maintaining centralized control and consistency. This is particularly beneficial for businesses with multiple brands or those operating in various regions.


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
            <span data-aos="fade-up-right" data-aos-duration="1200"
              > Elevate Your Business</span
            >   
            with
            <span data-aos="fade-up-right" data-aos-duration="1200"
              >Advanced Magento E-Commerce Solutions</span
            >
          </h2>
          <p>
            Magento offers unparalleled customization options and scalability, allowing businesses to tailor their online store to their specific needs and grow seamlessly as their business expands. With a vast array of themes, extensions, and integrations, Magento ensures that your website can evolve with your business, providing a unique and optimized shopping experience for your customers.
          </p>
          <p>
            Magento is renowned for its robust performance capabilities, handling large volumes of traffic and extensive product catalogs without compromising on speed or reliability. Additionally, Magento's advanced security features protect your website from cyber threats, ensuring safe transactions and safeguarding customer data.

          </p>

          <p><b>01.</b>Highly Customizable and Scalable</p>
          <p><b>02.</b>Customized Online Shops</p>
          <p><b>03.</b>Multi-Store Management</p>
          <p><b>04.</b>Inventory Management</p>
          <p><b>05.</b>Robust Performance and Security</p>

          <p>
            Magento provides exceptional flexibility and growth potential, enabling businesses to design a highly customized online store that adapts to their unique requirements. With an extensive selection of themes, extensions, and integrations, Magento supports seamless scaling as your business expands. This platform ensures that your e-commerce site evolves in tandem with your business, delivering a tailored and optimized shopping experience for your customers.
          </p>
        </div>
      </div>

      <div class="client-testimonial container mx-auto py-5">
        <div class="client-testimonial-des">
          <h2 data-aos="fade-left" data-aos-duration="1200">
            What our client say about Magento Ecommerce Services.
          </h2>
        </div>
        <div class="client-testimonial">
          <div class="test-img">
            <div class="test-img-des">
              <p>
                "Magento has revolutionized my online store with its extensive customization and scalability. The platform’s flexibility and range of extensions have streamlined management and supported my business growth seamlessly."

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
                Experience seamless functionality with our platform. Effortlessly customize your workflow.
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
              <img class="news-img"  src="{{ asset('internal/templatesfourimages/Image (3).webp') }}" alt="" srcset="" />
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
<!--    videoSrc: 'https://www.youtube.com/watch?v=Ojiv9Smi4XE'-->
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

