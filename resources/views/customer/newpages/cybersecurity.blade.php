@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="CyberSecurity, information security, data protection, threat management, security solutions, cybersecurity services">
<meta name="description" content="Enhance your digital security with Vilva Business's CyberSecurity solutions, providing comprehensive protection against threats and ensuring robust data security.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CyberSecurity Solutions - Vilva Business</title>

@endsection
@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">

<body>
    <div class="product-banner">
      <div class="banner-img">
        <div class="prod-des">
          <h2 data-aos="fade-right" data-aos-duration="1500">Cyber Security</h2>
          <p>
            Safeguards against malware, ransomware, phishing, and other cyber
            attacks that can compromise sensitive data and operations. With
            robust cybersecurity measures in place, organizations can detect and
            neutralize threats before they cause significant harm.
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
          Features of Our Cyber Security
        <p>
          "Our cybersecurity services are designed to protect your business from
          ever-evolving threats. We offer comprehensive solutions, including
          threat detection, risk assessment, and data protection, ensuring your
          systems remain secure and resilient. Our expert team stays ahead of
          the latest security trends to safeguard your digital assets, giving
          you peace of mind in a constantly changing landscape. Cybersecurity
          protocols maintain the integrity of data by using encryption,
          authentication, and authorization methods, ensuring that only
          authorized users can access and modify critical information.
        </p>
        <p>
          Helps businesses meet industry standards and legal requirements,
          avoiding fines and legal issues. Strong cybersecurity practices ensure
          that organizations adhere to data protection regulations such as GDPR,
          HIPAA, and other relevant frameworks, reducing the risk of
          non-compliance penalties.Ensures the accuracy and reliability of data,
          preventing unauthorized access or alterations.
        </p>

        <p><b>01.</b>Protection from Cyber Threats</p>
        <p><b>02.</b>Data Integrity</p>
        <p><b>03.</b>Regulatory Compliance</p>
        <p><b>04.</b>Threat detection</p>
        <p><b>05.</b>Fraud Detection</p>

        <p>
          Our cybersecurity services provide robust protection against digital
          threats, safeguarding your business with advanced security measures.
          We specialize in vulnerability assessments, threat monitoring, and
          incident response, ensuring your data and systems are secure. With our
          proactive approach, we help you stay ahead of cyber risks, allowing
          you to operate with confidence in today’s digital world.
        </p>
      </div>
    </div>

    <div class="technology-we-use container">
      <div class="technology-des">
        <h3>What technology use for this service</h3>
        <p>
            We leverage cutting-edge technologies such as firewalls, intrusion detection systems (IDS), and encryption protocols for our cybersecurity services. Our use of advanced tools like SIEM (Security Information and Event Management) and AI-driven threat intelligence ensures comprehensive protection against cyber threats. These technologies allow us to detect, prevent, and respond to security breaches in real time, keeping your business secure.
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
      <h2>Our recent Projects</h2>

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
                Their cybersecurity services have been top-notch, identifying vulnerabilities and implementing strong protections. We now feel confident that our business is secure against potential threats.
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
<!--    videoSrc: 'https://youtu.be/VEQd-jmVs44?si=zDTcKgxTsi3-QTCy'-->
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
