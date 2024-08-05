@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="contact us, business contact, customer support, reach us, Vilva Business contact">
<meta name="description" content="Contact Vilva Business for inquiries, customer support, or partnership opportunities. We are here to assist you with our comprehensive business services. Reach out to us for any queries or collaboration proposals.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Contact Us - Vilva Business</title>
@endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('internal/contact.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!--=================================
page-title -->

<!-- <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="/vbtheme/images/marketing/contact1.png">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1>Contact</h1>
          <p></p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>Contact</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>  -->

<!--=================================
page-title -->

<body>

  <main>
    <section class="contact container mb-5 py-5 mt-5">
      <div class="container-contact d-block d-md-flex container">
        <div class="left me-0 me-md-5 mb-5 mb-md-0">
          <div class="form-wrapper">
            <div class="contact-heading">
              <h1 style="color: #040E56;">Let's work together</h1>
              <p class="text">Or reach us via: <a href="mailto:info@vilvabusiness.com">info@vilvabusiness.com</a></p>
            </div>
            <form action="{{ url('contact') }}" method="post" class="contact-form">
             
            @csrf
            <div class="input-wrap">
                <input class="contact-input mb-3" autocomplete="off" type="text" name="name" id="name" required>
               <label for="name">Name</label>
                <i class="icon fa-solid fa-address-card" style="color:#040E56;"></i>
              </div>

              <!-- <div class="input-wrap">
              <input class="contact-input" autocomplete="off" type="text" name="lastname" id="name"  required>
              <label for="lastname">Last name</label>
              <i class="icon fa-solid fa-address-card"  style="color:#007E60;"></i>
            </div> -->

              <div class="input-wrap" w-100>
                <input class="contact-input mb-3" autocomplete="off" type="text" name="email" id="name" required>
                <label for="email">Email</label>
                <i class="icon fa-solid fa-envelope" style="color:#040E56;"></i>
              </div>

              <div class="input-wrap">
                <input type="tel" id="phone" name="phone" class="contact-input mb-3"  required pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
                <label for="phone">phone</label>
                <i class="icon fa-solid fa-mobile" style="color:#040E56;"></i>
              </div>

              <div class="input-wrap" w-100>
                <textarea name="message" autocomplete="off" class="contact-input mb-3 "> </textarea>
                <label for="message">Message</label>
                <i class="icon fa-solid fa-message" style="color:#040E56;"></i>

              </div>
            
              <div>
                <button class="contact-buttons w-50">Submit</button>
              </div>

            </form>
          </div>
        </div>
        <div class="right ms-0 ms-md-5">
          <div class="info-wrapper ">
            <h1 style="color: #040E56;">Contact us</h1>
            <div class="conatct-details">
              <i class="fa-solid fa-phone me-3"></i><br><br>
              <p>Speak directly with our experts by calling us at 9176569459 . Our lines are open from 9.30 to 7.30, Monday through Friday.</p>
            </div>
            <div class="conatct-details">

              <i class="fa-solid fa-location-dot me-3"></i> <br><br>
              <p>
                Visit us at our office located at:
                9/11 Narayanaswany
                Garden,
                3rd Main Road Kodungaiyur,
                600118 Chennai
                India.
                Our doors are open from 9.30 to 7.30, and we’d be happy to meet with you in person.
              </p>
            </div>
            <div class="icons-form">
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-x-twitter"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    const inputs=document.querySelectorAll(".contact-input");
    inputs.forEach(ipt=>{
      ipt.addEventListener("focus",()=>{
        ipt.parentNode.classList.add("focus");
        ipt.parentNode.classList.add("not-empty");

      });
      ipt.addEventListener("blur",()=>{
        if(ipt.value==""){
          ipt.parentNode.classList.remove("not-empty");

        }
        ipt.parentNode.classList.remove("focus");
      });
    });
  </script>




</body>



<!--=================================
 contact -->

<section class="contact-4 page-section-ptb clearfix o-hidden">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 sm-mb-30">
        <blockquote class="blockquote quote ps-0">
          To Get in Communication with Your Dealer.
        </blockquote>
        <p>It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing please do not hesitate to send us a message. It would be great to hear from you! If you got any questions, please do not hesitate to send us a message.</p>
        <p> We are looking forward to hearing please do not hesitate to send us a message. We are looking forward to hearing from you!</p>
      </div>
      <!--       <div class="col-lg-6">
        <div class="section-title">
          <h6>let's work together</h6>
          <h2 class="title-effect">Contact Us</h2>
          <p class="mb-50">It would be great to hear from you! If you got any questions</p>
        </div>
        <div id="formmessage">Success/Error Message Goes Here</div>
          <form id="contactform" role="form" method="post" action="php/contact-form.php">
            <div class="contact-form clearfix">
              <div class="section-field">
                <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
              </div>
              <div class="section-field">
                <input type="email" placeholder="Email*" class="form-control" name="email">
              </div>
              <div class="section-field">
                <input type="text" placeholder="Phone*" class="form-control" name="phone">
              </div>
              <div class="section-field textarea">
                <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
              </div>
              Google reCaptch
            <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div>
              <div class="submit-button">
                <input type="hidden" name="action" value="sendEmail">
                <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </form>
        <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="/vbtheme/images/pre-loader/loader-02.svg" alt=""></div>
      </div> -->
    </div>
    <div class="row mt-50">
      <div class="col-12">
        <img class="img-fluid mx-auto" src="/vbtheme/images/marketing/world.png" alt="">
      </div>
    </div>
  </div>
</section>

<!--=================================
 ADDRESS -->


<!--=================================
 ADDRESS -->

<section class="page-section-ptb contact-2 gray-bg">
  <div class="container">
    <div class="row mb-30">
      <div class="col-12">
        <div class="office-1 p-5 white-bg">
          <h2 class="mb-30">India</h2>
          <div class="touch-in">
            <div class="row">
              <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                <div class="media d-flex">
                  <div class="feature-icon media-icon me-4">
                    <span class="ti-map-alt theme-color"></span>
                  </div>
                  <div class="media-body">
                    <h5 class="text-back">ADDRESS</h5>
                    <p class="mb-0">Chennai, Tamil Nadu, India</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                <div class="media d-flex">
                  <div class="feature-icon media-icon me-4">
                    <span class="ti-mobile theme-color"></span>
                  </div>
                  <div class="media-body">
                    <h5 class="text-back">PHONE</h5>
                    <!-- <p class="mb-0">+91 91765 69459</p> -->
                    <a href="tel:919791136945"> <span style="color:black;">+91 91765 69459 </span> </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="media d-flex">
                  <div class="feature-icon media-icon me-4">
                    <span class="ti-email theme-color"></span>
                  </div>
                  <div class="media-body">
                    <h5 class="text-back">EMAIL</h5>
                    <p class="mb-0">info@vilvabusiness.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--     <div class="row">
      <div class="col-12">
        <div class="office-1 p-5 white-bg">
          <h2 class="mb-30">London</h2>
          <div class="touch-in">
            <div class="row">
              <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                <div class="media d-flex">
                  <div class="feature-icon media-icon me-4">
                    <span class="ti-map-alt theme-color"></span>
                  </div>
                  <div class="media-body">
                   <h5 class="text-back">ADDRESS</h5>
                   <p class="mb-0">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                <div class="media d-flex">
                  <div class="feature-icon media-icon me-4">
                    <span class="ti-mobile theme-color"></span>
                  </div>
                  <div class="media-body">
                    <h5 class="text-back">PHONE</h5>
                    <p class="mb-0">+(704) 279-1249</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="media d-flex">
                  <div class="feature-icon media-icon me-4">
                    <span class="ti-email theme-color"></span>
                  </div>
                  <div class="media-body">
                    <h5 class="text-back">EMAIL</h5>
                    <p class="mb-0">letstalk@webster.com</p>
                  </div>
                </div>
              </div>
           </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>

<!--=================================
 contact -->

<!--=================================
action box- -->

<!-- <section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 position-relative">
        <div class="action-box-text">
          <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
          <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
        </div>
        <div class="action-box-button">
         <a class="button button-border white" href="#">
          <span>Purchase Now</span>
          <i class="fa fa-download"></i>
         </a>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--=================================
action box- -->
@endsection