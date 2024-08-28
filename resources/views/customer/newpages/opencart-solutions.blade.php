@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="OpenCart solutions, e-commerce, business solutions, online store, OpenCart support">
<meta name="description" content="Explore OpenCart Solutions by Vilva Business, offering comprehensive support and services to optimize your e-commerce platform for success.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>OpenCart Solutions - Vilva Business</title>
@endsection
@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">

<body>
    <div class="prod-main-cont">
      <div class="product-banner">
        <div class="banner-img">
          <div class="prod-des">
            <h2 data-aos="fade-down" data-aos-duration="1000">
              Opencart Ecommerce Solutions
            </h2>
            <p>
              OpenCart is an open-source platform, which means it’s free to use
              and can be a cost-effective solution compared to other e-commerce
              platforms with higher licensing fees. Additionally, its robust
              community support and extensive documentation can help reduce
              development and maintenance costs.
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
              >Boost Your Online Store</span
            >   
            with
            <span data-aos="fade-up-right" data-aos-duration="1200"
              > Cutting-Edge E-Commerce Solutions</span
            >
          </h2>
          <p>
            OpenCart offers a straightforward and intuitive admin interface, making it easy for users to manage their store, add products, and handle orders without requiring extensive technical knowledge. This ease of use can save time and reduce the learning curve.Ideal for businesses looking for an affordable, user-friendly platform to set up and manage online stores with ease.
          </p>
          <p>
            With a wide range of themes and extensions available, OpenCart allows for significant customization to meet specific business needs. This flexibility means businesses can tailor their online store’s appearance and functionality to align with their brand and operational requirements.Supports international businesses by offering multiple language and currency options, facilitating global sales.
          </p>

          <p><b>01.</b> Small to Medium-Sized E-commerce Stores</p>
          <p><b>02.</b>Customized Online Shops</p>
          <p><b>03.</b>Multilingual and Multi-Currency Stores</p>
          <p><b>04.</b>Inventory Management</p>
          <p><b>05.</b>Marketing Automation</p>

          <p>
            OpenCart's modular structure provides flexibility, enabling you to add or modify features as your business grows. With a vast selection of extensions and themes, you can create a unique shopping experience that aligns with your brand. The platform also benefits from an active community and comprehensive support resources, helping you reduce both development and long-term maintenance costs.It's  platform that offers a powerful and budget-friendly solution for online businesses. Its open-source nature allows you to use and customize the platform without worrying about licensing fees, making it a cost-effective option for startups and established businesses alike.
          </p>
        </div>
      </div>

      <div class="client-testimonial container mx-auto py-5">
        <div class="client-testimonial-des">
          <h2 data-aos="fade-left" data-aos-duration="1200">
            What our client say about Opencart Ecommerce Services.
          </h2>
        </div>
        <div class="client-testimonial">
          <div class="test-img">
            <div class="test-img-des">
              <p>
                "OpenCart has been a game-changer for my online store. It’s free and easy to use, letting me manage products and orders effortlessly. The flexibility and strong community support have saved me both time and money."


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
              <img class="news-img" src="{{ asset('internal/templatesfourimages/Image (3).webp') }}" alt="" srcset=""  />
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
@include('customer.layouts.blogsection')

<!--    <script>-->
<!--  jarallax(document.querySelectorAll('.jarallax'), {-->
<!--    speed: 0.6,-->
<!--    videoSrc: 'https://www.youtube.com/watch?v=Ojiv9Smi4XE'-->
<!--  });-->
<!--</script>-->
@endsection