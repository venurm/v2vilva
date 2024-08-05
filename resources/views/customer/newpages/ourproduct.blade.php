@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="our product, business products, customer solutions, product support">
<meta name="description" content="Explore Vilva Business products designed to enhance your business efficiency. Discover solutions tailored to meet your specific needs.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Our Product Page - Vilva Business</title>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('internal/product.css') }}">


<body>
   
    <div class="heading-about " >
        <h1 class="mb-3">Our Area Of Expertise</h1>
        <p>We are a team of experts who are passionate about our work.We have expertise in whatsapp Api,AI chatbot and Ecom saas,<br>we deliever the solution that fulfill the traditional,transformational and future need of the client across the globe.</p>
    </div>
    <div class="maincan ">
    <div class="container">
    <h2 style="text-align: center;color: #007E60;">Our Products  </h2>
    <p  style="text-align: center; font-size: 25px;" >Send automated, secure messages and share rich media to enhance communication and customer engagement.</p>
<div class="our-products container">
    <div class="con-2">
        <div class="heading selected" data-id="1" onclick="showContent(1)">Whatsapp</div>
        <div class="heading" data-id="2" onclick="showContent(2)">Whatsapp API</div>
        <div class="heading" data-id="3" onclick="showContent(3)">AI Chatbot</div>
        <div class="heading" data-id="4" onclick="showContent(4)">Ecom Saas</div>
</div><div class="container">
  
        <div class="content " id="content1" >
          <div class="row content-con" style="background-color: white;">
            <div class=" col-12 col-md-8" style="display: flex;">
                <div>
            <p>The WhatsApp service allows businesses to send automated notifications, customer support messages, and marketing communications directly to their clients. By integrating WhatsApp, companies can leverage its end-to-end encryption, ensuring that all interactions remain private and secure. Additionally, businesses can utilize WhatsApp's rich media capabilities to share images, videos, and documents, enhancing the customer experience. This integration can streamline communication processes, improve customer satisfaction, and drive higher engagement rates.</p>
                
             <!-- <p>
                Moreover, WhatsApp integration can significantly simplify account management for customers. Businesses can guide customers through the account creation process with step-by-step instructions sent via WhatsApp messages. This can include sending verification codes, confirming email addresses, and providing immediate support if any issues arise.</p> -->
            </div>
        </div>

            <div class="col-md-4 col-12 d-flex align-items-center">    
                      <img src="internal/bg/what.webp" class="img-fluid" style="margin-top: 80px;">
            </div>
        </div>
        </div>
        
      
        <div class="content " id="content2" >
          <div class="row content-con" style="background-color: white;">
            <div class="col-md-4 col-12 d-flex align-items-center mb-5 mb-md-0">    
              <img src="internal/bg/API.jpg" class="img-fluid" style="width: 500px;">
            </div>
            <div class="content-con col-md-8" >
              <p>The WhatsApp API service offers a powerful suite of features specifically tailored to enhance the eCommerce customer experience. By integrating the WhatsApp API, eCommerce businesses can streamline communication, improve customer support, and boost engagement through personalized and automated messaging. Here’s a detailed description of how the WhatsApp API can benefit eCommerce customers:
              </p>
              <h2  style="color: #007E60;">Key Features:</h2>
              <ul class="ul-content container">
                  <li> Message Templates</li>
                  <li>Message Automation</li>
                  <li>CRM Integration</li>
                  <li>Detailed Analytics</li>
                  <li> Multimedia Messaging</li>
                  <li>Customer Support</li>
              </ul>
        </div>

          
        </div>
        </div>
        <div class="content" id="content3">
          <div class="row content-con" style="background-color: white;">
            <div class="col-md-8 -bottom-3 col-12 d-flex align-items-center mb-5 mb-md-0"> 
            <div>
            <p>
                Chatbot services offer eCommerce businesses a robust tool for enhancing customer interactions, providing efficient support, and driving sales. By leveraging customer support chatbots, sales and product recommendation chatbots, order management chatbots, marketing and promotions chatbots, and customer onboarding chatbots, businesses can deliver a seamless and personalized experience.  
            </p>
            <h3 style="color: #007E60;">Chatbot Services:</h3>
            <ul class="ul-content">
                <li>Customer Support</li>
                <li>Sales and Product Recommendations</li>
                <li>Order Management </li>
                <li> Marketing and Promotions </li>

            </ul>
        </div>
      </div>
      <div class="col-md-4 col-12 d-flex align-items-center mb-5 mb-md-0">    
            <img src="internal/bg/robot-blank-sign_1048-3553.jpg" class="img-fluid" style="width: 500px";>
        </div>
    </div>
    </div>

        <div class="content" id="content4">
          <div class="row content-con" style="background-color: white;">

              <div class="col-md-4 col-12 d-flex align-items-center mb-5 mb-md-0">    
            <img src="internal/bg/saasss.png"  class="img-fluid" style="width: 500px">
            </div>
            <div class="col-md-8 col-12 d-flex align-items-center mb-5 mb-md-0">    
<div>
    <p>Our eCommerce SaaS service provides a user-friendly, scalable, and secure solution for building and managing an online store. With intuitive design tools, robust product management, seamless payment integrations, and powerful marketing features, businesses can create a professional online presence without needing extensive technical knowledge. Our platform is fully customizable to meet unique business needs and includes detailed analytics to help optimize performance and drive growth.</p>
    <h3 style="color: #007E60;">Key Features of our Ecom SaaS</h3>
    <ul class="ul-content">
        <li>Easy Website Builder</li>
        <li>Product Management</li>
        <li>Order and Payment Processing</li>
        <li>Marketing and SEO Tools</li>
        <li>Customer Engagement</li>
        <li>Security and Compliance</li>
    </ul>
</div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
    </div>
<section>
    <div class="buisness">
        <div class="b-content">
        <h1 style="color: #007E60;">Join Us and Elevate Your eCommerce Business</h1>
        <p>Our Product is designed to simplify the process of launching and managing an online store, making it accessible for businesses of all sizes and industries. With an intuitive drag-and-drop website builder, customizable templates, and powerful features, you can create a professional and responsive online store without needing extensive technical knowledge.</p>
    </div>
</div>
</section>
   <script>
    function showContent(id) {
    var contents = document.querySelectorAll('.content');
    contents.forEach(function(content) {
        content.style.display = 'none';
    });

    var headings = document.querySelectorAll('.heading');
    headings.forEach(function(heading) {
        heading.classList.remove('selected');
    });

    var selectedContent = document.getElementById('content' + id);
    selectedContent.style.display = 'block';

    var selectedHeading = document.querySelector('[data-id="' + id + '"]');
    selectedHeading.classList.add('selected');
}

document.addEventListener('DOMContentLoaded', function() {
    showContents(1); // Show the first content by default
});
function showContents(id) {
    var contents = document.querySelectorAll('.content');
    contents.forEach(function(content) {
        content.style.display = 'none';
    });

    var headings = document.querySelectorAll('.headings');
    headings.forEach(function(heading) {
        heading.classList.remove('selecteds');
    });

    var selectedContent = document.getElementById('content' + id);
    selectedContent.style.display = 'block';

    var selectedHeading = document.querySelector('[data-id="' + id + '"]');
    selectedHeading.classList.add('selecteds');
}

document.addEventListener('DOMContentLoaded', function() {
    showContents(1); // Show the first content by default
});
window.addEventListener('load', function() {
    const partnerLogo = document.querySelector('.partner-logo');
    // Add a slight delay to ensure the animation is visible
    setTimeout(() => {
        partnerLogo.classList.add('animate');
    }, 100);
});

   </script>
  
</body>


@endsection