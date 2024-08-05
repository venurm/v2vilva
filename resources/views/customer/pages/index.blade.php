@extends('customer.layouts.app')

@section('head')
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="app development, web development, hosting services, SEO services, digital marketing">
  <meta name="description" content="Vilva Business is a B2B all-in-one service portal offering solutions in app development, web development, hosting services, SEO services, digital marketing, and more. We cater to all aspects needed for a successful business's online presence and growth.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Vilva Business - B2B All-in-One Service Portal</title>
@endsection

@section('content')


<!--banner-->

<section class="portfolio-creative white-bg page-section-ptb">
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-lg-6 text-start text-lg-end align-self-center">
        <p>Vilva Business is a B2B all in one service Portal with Solutions ranging from Marketing, Accounting, HR Management, Business Printing Supplies, Technology Services such as Website Development, Hosting and everything else a successful business needs for its existence and growth. </p>
     </div>
     <div class="col-lg-6 align-self-center slider-content">
       <h1> Looking for the <del> best Service provider is history! </del> Get Everything a business needs here. <del> We’ve got </del> you covered!  Begin growing your <span class="typer" data-delay="150" data-words="Business,Website,Brand etc." data-colors="#84ba3f,#84ba3f,#84ba3f"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
       </div>
    </div>
   </div>
</section>

<!--banner-->


<!--portfolio-->
<section class="portfolio page-section-pb">
  <div class="container">
    <div class="isotope-filters">
      <button data-filter=".mostrated"  class="active">Most Rated</button>
      <button data-filter=".software">Software Development</button>
      <button data-filter=".marketing">Marketing</button>
      <button data-filter=".accounting">Accounting</button>
   </div>



  <div class="isotope popup-gallery columns-4">

    <div class="grid-item software">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/custom-software.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Custom Software Application </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/custom-software.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
   
     <div class="grid-item software">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/website-development.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Custom iOS App Development</a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/website-development.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item software">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/customized-diaries.webp') }}" alt="">
          <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Ecommerce Application Development </a> </h4>
         </div>
         <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/customized-diaries.webp') }}"><i class="fa fa-arrows-alt"></i></a>
        
       </div>
    </div>

     <div class="grid-item software">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/custom-software.webp') }}" alt="">
          <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Custom Android Application Development </a> </h4>
         </div>
          <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/custom-software.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>

    <div class="grid-item marketing">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/whatsapp.webp') }}" alt="">
          <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> WhatsApp Marketing Solutions </a> </h4>
              <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
         </div>
           <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/whatsapp.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item marketing">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/custom-software.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> SMS Marketing </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/custom-software.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item marketing">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/zoho-books.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Voice Bot Services </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/zoho-books.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item marketing">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/whatsapp.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> WhatsApp Chat Bot </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/whatsapp.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item marketing">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/email-marketing.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Email Marketing </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/email-marketing.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item marketing">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/fb-intsa.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Facebook & Instagram Marketing Suite </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/fb-intsa.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item marketing" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/fb-intsa.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Google & Youtube Marketing Suite </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/fb-intsa.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
   
     <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/website-development.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Laravel Application Development</a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/website-development.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>






      <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/custom-software.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Custom Software Application </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/custom-software.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
   
     <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/website-development.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Custom iOS App Development</a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/website-development.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/customized-diaries.webp') }}" alt="">
          <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Ecommerce Application Development </a> </h4>
         </div>
         <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/customized-diaries.webp') }}"><i class="fa fa-arrows-alt"></i></a>
        
       </div>
    </div>

     <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/custom-software.webp') }}" alt="">
          <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Custom Android Application Development </a> </h4>
         </div>
          <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/custom-software.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>

    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/whatsapp.webp') }}" alt="">
          <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> WhatsApp Marketing Solutions </a> </h4>
              <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
         </div>
           <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/whatsapp.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/custom-software.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> SMS Marketing </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/custom-software.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/zoho-books.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Voice Bot Services </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/zoho-books.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/whatsapp.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> WhatsApp Chat Bot </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/whatsapp.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/email-marketing.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Email Marketing </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/email-marketing.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/fb-intsa.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Facebook & Instagram Marketing Suite </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/fb-intsa.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
  
    <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/zoho-books.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Zoho Books Automation Suite </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/zoho-books.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    
     <div class="grid-item mostrated" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/gst-compliance.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> GST & Compliance Filings </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/gst-compliance.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>




    <div class="grid-item accounting">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/zoho-books.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Zoho Books Automation Suite </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/zoho-books.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    <div class="grid-item accounting" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/gst-compliance.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Quick Books Automation Suite </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/gst-compliance.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
     </div>
     <div class="grid-item accounting" style="display: none;">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/inventor.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> Inventory Automation Suite </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/inventor.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
     <div class="grid-item accounting">
      <div class="portfolio-item">
         <img src="{{ asset('assets/images/home-page/gst-compliance.webp') }}" alt="">
           <div class="portfolio-overlay">
              <h4 class="text-white"> <a href="/"> GST & Compliance Filings </a> </h4>
            </div>
              <a class="popup portfolio-img" href="{{ asset('assets/images/home-page/gst-compliance.webp') }}"><i class="fa fa-arrows-alt"></i></a>
       </div>
    </div>
    
   </div>
  </div>
 </section>

<!--portfolio -->

 <section class="custom-content-02 white-bg-bg page-section-pb">
  <div class="container">
     <div class="row">
       <div class="col-lg-4 col-sm-6 mb-60">
        <div class="feature-text left-icon">
            <div class="feature-icon">
            <span class="ti-layers-alt"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">All in One Business Solutions</h5>
            <p>We know how hard it is to organize a Startup or even any business, we make it simple with our Unified solutions.</p>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-sm-6 mb-60">
        <div class="feature-text left-icon">
           <div class="feature-icon">
            <span class="ti-mouse"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back"> Unified Billing</h5>
            <p>Billing & Invoicing to each and every services from multiple vendors make life painful not just to businesses but every other stakeholder.</p>
          </div>
        </div>
       </div>
        <div class="col-lg-4 col-sm-6 mb-60">
         <div class="feature-text left-icon">
             <div class="feature-icon">
              <span class="ti-hand-open"></span>
            </div>
            <div class="feature-info">
              <h5 class="text-back">GST & Loyalty Benefits</h5>
              <p>Get assured GST Invoices for all your purchases and get specialty discounts on repeat purchases and reselling needs.</p>
            </div>
          </div>
      </div>

         <div class="col-lg-4 col-sm-6 sm-mb-40">
        <div class="feature-text left-icon">
            <div class="feature-icon">
            <span class="ti-desktop"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Assured Quality</h5>
            <p>Our Products & services are rightfully verified for use and we give 100% assurance on all your purchases.</p>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-sm-6 sm-mb-40 xs-mt-20">
        <div class="feature-text left-icon">
           <div class="feature-icon">
            <span class="ti-headphone "></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Fast Customer support</h5>
            <p>We in Vilvabusiness by virtue of practice, keep the customers interest as first priority and try to give the best possible services at the realistic timeframe.</p>
          </div>
        </div>
       </div>
        <div class="col-lg-4 col-sm-6 xs-mt-20">
         <div class="feature-text left-icon">
             <div class="feature-icon">
              <span class="ti-shield"></span>
            </div>
            <div class="feature-info">
              <h5 class="text-back">Strong Workforce</h5>
              <p>We balance the work life of our employees to bring the best from our employees, hence we have been able to build a reliable team to get things done everytime.</p>
            </div>
          </div>
         </div>
       </div>
  </div>
</section>

<!-- custom -->

<section class="custom-content-03 page-section-ptb pattern full-width" style="background: url({{ asset('assets/images/pattern/pattern-bg.webp') }} ) repeat;">
  <div class="container">
     <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Vilva Business has several tools, Services, Unlimited Products, responsive team and amazing support. </h2>
        </div>
     </div>
  </div>
</section>

<!-- custom -->


<!-- masnary blog-->

<section class="gray-bg blog masnary-blog-3-columns masonry-main page-section-ptb">
 <div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
            <h2 class="title-effect"> Blog </h2>
          </div>
      </div>
    </div>
  <div class="row">
   <div class="col-lg-12 col-md-12">
     <div class="masonry columns-3">
      <div class="grid-sizer"></div>
        <div class="masonry-item">
          <div class="blog-entry mb-10">
          <div class="entry-image clearfix">
              <img class="img-fluid" src="{{ asset('assets/images/home-page/blog/5.webp') }}" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Facebook is rolling out a new update</a>
              </div>
              <div class="entry-content">
                  <p>Facebook is rolling out an update that enables its 2 billion daily users to more easily view their Friend's post in chronological order.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
     </div>
      <!-- ======================================= -->
        <div class="masonry-item">
         <div class="blog-entry blockquote mb-0">
          <div class="entry-blockquote clearfix">
              <blockquote class="mt-60 blockquote">
                  Customer experience is the experience we deliver to our customer. It's the promise we keep to the customer. It's how we follow through for the customer. It's how we make them feel when they do business with us.
                  <cite class="text-white"> – Vilva Business</cite>
              </blockquote>
          </div>
          <div class="blog-detail mt-30">
              <div class="entry-title mb-10">
                  <a href="#">Our Customer Service </a>
              </div>
              <div class="entry-share mt-20 clearfix">
                  <div class="entry-button">
                      <a class="button arrow white" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong class="text-white">Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>

      </div>
      <div class="masonry-item">
          <div class="blog-entry mb-10">
          <div class="entry-image clearfix">
              <img class="img-fluid" src="{{ asset('assets/images/home-page/blog/1.webp') }}" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Interesting Features about Voice Bot services</a>
              </div>
          </div>
      </div>
     </div>
      <!-- ======================================= -->
    <!-- ======================================= -->
       <div class="masonry-item">
        <div class="blog-entry mb-10">
           <div class="clearfix">
            <ul class="grid-post">
                 <li>
                  <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('assets/images/home-page/blog/2.webp') }}" alt="">
                     </div>
                  </li>
                 <li>
                  <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('assets/images/home-page/blog/3.webp') }}" alt="">
                     </div>
                  </li>
                  <li>
                  <div class="portfolio-item">
                     <img class="img-fluid" src="{{ asset('assets/images/home-page/blog/4.webp') }}" alt="">
                     </div>
                  </li>
                  <li>
                  <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('assets/images/home-page/blog/5.webp') }}" alt="">
                     </div>
                  </li>
              </ul>
            </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">What is standing in Email marketing 2022 </a>
              </div>
                <div class="entry-content">
                  <p>51% of all email is opened on a mobile device. So, design for the smallest screen first, and use responsive design templates to ensure your emails look great on any screen size.  </p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>

      </div>

     <!-- ======================================= -->
        <div class="masonry-item">
           <div class="blog-entry mb-10">
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Google using Text-to-speech-technology in YouTube ads </a>
              </div>
              <div class="entry-content">
                  <p>Google launched a new feature in Google Ads that lets you add a voice-over to your YouTube video ads using Google’s text-to-speech technology. When it comes to advertising on YouTube, audio is your superpower for getting people to pay attention and take action. </p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>

      </div>
     <!-- ======================================= -->
     <div class="masonry-item">
           <div class="blog-entry mb-10">
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Business with billions of whatsapp users </a>
              </div>
              <div class="entry-content">
                  <p>With billions of consumers using WhatsApp multiple times each day, businesses should begin looking at WhatsApp as a new channel to communicate with their customers. WhatsApp gives businesses the platform to send marketing messages to customers directly, win their trust, and make them loyal to their brands. </p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-end">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
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
 </section>

<!--masnary blog-->

<!--Clients -->

 <section class="page-section-pt">
   <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
            <h6>Have a look at our</h6>
            <h2 class="title-effect">Check out Reviews </h2>
          </div>
      </div>
    </div>
     <div class="row">
      <div class="col-md-12">
          <div class="owl-carousel" data-nav-dots="true" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1">
              <div class="item">
                <div class="testimonial clean">
                  <div class="testimonial-info"> When we first thought about business automation, Vilva Business had everything ready to go live, within the first few days of meeting, they delivered the right solution for us at really low price and the after sales support is what impressed me in opting them for our other projects as well.</div>
                  <div class="author-info"> <strong>Dr.Pandiyan - <span>Founder,Royce Infrastructures</span></strong> </div>
               </div>
              </div>
              <div class="item">
               <div class="testimonial clean">
                  <div class="testimonial-info"> When we wanted to go Digital, I met with the founder of Vilva Business and was impressed with the confidence he gave on our project. Literally, I saved over a lakh on business via their services.</div>
                  <div class="author-info"> <strong>Mr.Muthu T - <span>Founder, Printfaast & Co</span></strong> </div>
              </div>
              </div>
              <div class="item">
               <div class="testimonial clean">
                   <div class="testimonial-info"> My first website was developed and maintained by Vilva Business. Site performance and sales is good. They help us to improve the sales by seo and other promotions.Now the company is working on my second website and I refer my friends to this company for their website. Thanks for the team for continuous support.</div>
                  <div class="author-info"> <strong>Ganapathy.V - <span>Managing Director, Magizh copper</span></strong> </div>
                </div>
               </div>
              <div class="item">
               <div class="testimonial clean">
                   <div class="testimonial-info"> Vilva is a place of talented young people. Whatever we expect to have in our website, they just bring it the exact way we wanted to have. Their support & service is fantastic. I highly recommend their services to everyone.</div>
                  <div class="author-info"> <strong>Selvaraj.M - <span>Managing Director, vangaannachi.com</span></strong> </div>
                </div>
               </div>
          </div>
       </div>
      </div>

     <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="clients-list clients-border column-5">
                <ul class="list-unstyled">
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/aathiraicrafts.webp') }}" alt="Aathiraicrafts">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/ayyawin.webp') }}" alt="Ayyawin">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/brass-idols.webp') }}" alt="Brass Idols">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/kumaridial.webp') }}" alt="Kumaridial">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/magizh.webp') }}" alt="Magizh">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/meesakar.webp') }}" alt="Meesakar">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/printfast.webp') }}" alt="Printfast">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/printroute.webp') }}" alt="Printroute">
                    </li>
                    <li>
                        <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/tirupurexpress.webp') }}" alt="Tirupur Express">
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <style type="text/css">
        .clients-list img{
          width: 70%;
          aspect-ratio: 3/2;
          object-fit: contain;
        }

    </style>


   </div>
 </section>

<!--Clients -->



@endsection
