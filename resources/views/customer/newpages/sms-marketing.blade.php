@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="SMS marketing, text message campaigns, mobile marketing, customer engagement, SMS solutions">
<meta name="description" content="Explore Vilva Business's SMS marketing services. Boost customer engagement and drive results with our targeted SMS marketing strategies.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>SMS Marketing - Vilva Business</title>
@endsection

@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">


<body>
    <div class="product-banner">
      <div class="banner-img">
        <div class="prod-des">
          <h2 data-aos="fade-right" data-aos-duration="1500">SMS Marketing
        </h2>
          <p>
            Our SMS marketing service helps you connect directly with your audience through targeted, timely messages. We offer personalized campaigns that drive engagement, increase conversions, and build customer loyalty. With advanced analytics and segmentation, you can track performance and optimize your outreach. Reach your customers instantly and effectively with our powerful SMS marketing solutions.
          </p>
        </div>
      </div>
    </div>

    <div class="service-head container mx-auto py-5">
      <div
        class="service-head-img"
        data-aos="zoom-in"
        data-aos-duration="1500"
      ></div>
      <div class="service-head-content">
        <h2 data-aos="fade-right" data-aos-duration="1500">
          Features of Our SMS Marketing
        </h2>
        <p>
            Our SMS marketing service offers a range of powerful features to enhance your customer outreach. With targeted campaigns, you can deliver personalized messages to specific audience segments, ensuring higher engagement. Real-time delivery and automated messaging make it easy to maintain consistent communication with your customers. Plus, advanced analytics provide detailed insights into campaign performance, allowing you to optimize your strategy for maximum impact.

        </p>
        <p>
            Our  service is designed to help you connect with your audience more effectively. We offer targeted campaigns that deliver personalized messages to the right people at the right time, driving higher engagement rates. With real-time delivery and automated messaging, you can ensure your communications are always timely and relevant. Our advanced analytics provide deep insights into your campaign performance, enabling you to refine your approach for better results. Experience the power of direct, impactful communication with our comprehensive SMS marketing solutions.
        </p>

        <p><b>01.</b>Targeted Campaigns</p>
        <p><b>02.</b>Real-Time Delivery</p>
        <p><b>03.</b>Advanced Analytics</p>
        <p><b>04.</b>Automated Messaging</p>
        <p><b>05.</b>High Engagement</p>

        <p>
            Tailor your messages to specific segments of your audience based on their preferences, behaviors, and demographics. This personalized approach increases relevance and engagement.Use email to build relationships with your audience by providing valuable content, updates, and personalized interactions. This helps establish trust and loyalty.Use email campaigns to drive traffic to your website and boost sales with targeted promotions, product recommendations, and exclusive offers.
        </p>
      </div>
    </div>

    <div class="technology-we-use container">
      <div class="technology-des">
        <h3>What technology use for this service</h3>
        <p>
            Our SMS marketing service utilizes advanced technologies like cloud-based messaging platforms, APIs for seamless integration, and automated scheduling tools. These technologies enable real-time message delivery, precise targeting, and the ability to scale campaigns effortlessly. Additionally, our use of data analytics and segmentation tools ensures that each campaign is optimized for maximum effectiveness and engagement.
        </p>
      </div>
      <div class="technology-img">
        <img
         src="{{ asset('internal/templatesfourimages/technology.webp') }}" 
          alt=""
          srcset=""
          class="img-fluid"
          data-aos="fade-right"
          data-aos-duration="1500"
        />
      </div>
    </div>

    <div class="recent-project ccontainer mx-auto">
      <h2>Our recent  Projects</h2>

      <div class="row container mx-auto">
        <div class="col-md-6 col-12">
          <div class="recent-img">
            <img
            src="{{ asset('internal/templatesfourimages/1.webp') }}" 
              alt=""
              srcset=""
              class="img-fluid"
              data-aos="zoom-in"
              data-aos-duration="1500"
            />
            <div class="recent-img-des">
              <h4>Project Name</h4>
              <p>Description about the project</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="recent-img">
            <img
            src="{{ asset('internal/templatesfourimages/2.webp') }}" 
              alt=""
              srcset=""
              class="img-fluid"
              data-aos="zoom-in"
              data-aos-duration="1500"
            />
            <div class="recent-img-des">
              <h4>Project Name</h4>
              <p>Description about the project</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row container mx-auto">
        <div class="col-md-6 col-12">
          <div class="recent-img">
            <img
            src="{{ asset('internal/templatesfourimages/3.webp') }}" 
              alt=""
              srcset=""
              class="img-fluid"
              data-aos="zoom-in"
              data-aos-duration="1500"
            />
            <div class="recent-img-des">
              <h4>Project Name</h4>
              <p>Description about the project</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="recent-img">
            <img
            src="{{ asset('internal/templatesfourimages/4.webp') }}" 
              alt=""
              srcset=""
              class="img-fluid"
              data-aos="zoom-in"
              data-aos-duration="1500"
            />
            <div class="recent-img-des">
              <h4>Project Name</h4>
              <p>Description about the project</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="client-testimonial container mx-auto py-5">
      <div class="client-testimonial-des">
        <h2>What our client say about our services</h2>
      </div>
      <div class="client-testimonial">
        <div class="test-img">
          <div class="test-img-des">
            <p>
                Their SMS marketing service has significantly boosted our customer engagement and sales. The process is seamless, and the support team is always responsive and helpful.
            </p>
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

    
  </body>
@include('customer.layouts.blogsection')

<!--<script>-->
<!--  jarallax(document.querySelectorAll('.jarallax'), {-->
<!--    speed: 0.6,-->
<!--    videoSrc: 'https://www.youtube.com/watch?v=iQe6E422ALg'-->
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
    