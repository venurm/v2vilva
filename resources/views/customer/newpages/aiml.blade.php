@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Artificial Intelligence, Machine Learning, AI solutions, business software, data-driven growth">
<meta name="description" content="Explore cutting-edge AI and Machine Learning solutions by Vilva Business. Empower your organization with innovative tools for smarter decision-making and enhanced growth.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Artificial Intelligence & Machine Learning - Vilva Business</title>

@endsection
@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">

<body>
    <div class="product-banner">
      <div class="banner-img">
        <div class="prod-des">
          <h2 data-aos="fade-right" data-aos-duration="1500">AI/ML</h2>
          <p>
            we are dedicated to helping innovative businesses harness the power
            of artificial intelligence. Our comprehensive AI services include
            developing bespoke AI models, optimizing existing systems,and
            integrating cutting-edge technologies to streamline operations and
            drive strategic growth.
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
          Features of Our AI/ML
        </h2>
        <p>
          we specialize in delivering customized machine learning solutions that
          cater to the unique needs of various industries. we offer advanced AI
          and machine learning services designed to propel your business into
          the future. Our team of experts leverages the latest in AI technology
          to provide tailored solutions that drive efficiency, enhance
          decision-making, and unlock new opportunities. From predictive
          analytics and automated processes to advanced data insights and
          personalized recommendations.
        </p>
        <p>
          We excel in providing bespoke AI and machine learning solutions
          tailored to meet the distinct demands of diverse industries. Our
          cutting-edge services harness the power of advanced AI technology to
          elevate your business capabilities. Our expert team specializes in
          crafting solutions that boost operational efficiency, improve
          strategic decisions, and reveal new growth avenues. Whether it's
          through predictive analytics, automated workflows, or insightful data
          analysis, we deliver transformative results that drive your business
          forward.
        </p>

        <p><b>01.</b>Cutting-Edge AI Solutions for Your Business</p>
        <p><b>02.</b>Tailored Machine Learning Solutions for Every Industry</p>
        <p><b>03.</b>Transformative AI Services</p>
        <p><b>04.</b>Retail and E-commerce</p>
        <p><b>05.</b>Fraud Detection</p>

        <p>
          Our expertise lies in crafting personalized AI and machine learning solutions that address the specific needs of your industry. We deliver sophisticated AI services that enhance business processes, optimize decision-making, and unlock new growth potential. Our team leverages the latest advancements in machine learning to provide solutions ranging from predictive modeling and process automation to actionable data insights and customized recommendations. Transform your operations and stay ahead of the competition with our innovative AI-driven solutions.
        </p>
      </div>
    </div>

    <div class="technology-we-use container">
      <div class="technology-des">
        <h3>What technology use for this service</h3>
        <p>
          For our AI and machine learning services, we utilize cutting-edge technologies such as TensorFlow, PyTorch, and Scikit-learn. These advanced tools enable us to build and deploy powerful models that drive actionable insights and automation. Our approach ensures scalable, efficient, and innovative solutions tailored to your business needs.
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
              The AI/ML services have been a game-changer for our business. The tailored solutions and advanced technology have significantly improved our data analysis and decision-making processes.
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
<!--<script>-->
<!--  jarallax(document.querySelectorAll('.jarallax'), {-->
<!--    speed: 0.6,-->
<!--    videoSrc: 'https://www.youtube.com/watch?v=WuRf2bDf25U'-->
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