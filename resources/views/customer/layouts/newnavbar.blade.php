<!DOCTYPE html>
<html lang="en">

<head>
  @yield("head")

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <link rel="shortcut icon" href="{{ asset('internal/images/fav-icon.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="./images/fav.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    
    <!--ecomsaas-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--<link rel="icon" type="image/x-icon" href="./images/main.png">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  
      <!--ecomsaas-->
      
      
      
       <!--templeatefourbootstrap-->

<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    
     <!--templeatefourbootstrap-->
      


  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins-css.css') }}" />

  <!-- revoluation -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}" media="screen" />

  <!-- Typography -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}" />

  <!-- Shortcodes -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}" />

  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NQ7K04MECW"></script>
  <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1929635953961195');
        fbq('track', 'PageView');
    </script>

    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1929635953961195&ev=PageView&noscript=1"/></noscript>
    <!-- End Meta Pixel Code -->


    <!-- <script>-->
    <!--    document.addEventListener('DOMContentLoaded', function() {-->
    <!--        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?59035';-->
    <!--        var s = document.createElement('script');-->
    <!--        s.type = 'text/javascript';-->
    <!--        s.async = true;-->
    <!--        s.src = url;-->
    <!--        var options = {-->
    <!--            "enabled": true,-->
    <!--            "chatButtonSetting": {-->
    <!--                "backgroundColor": "#4dc247",-->
    <!--                "ctaText": "Message Us",-->
    <!--                "borderRadius": "25",-->
    <!--                "marginLeft": "0",-->
    <!--                "marginBottom": "50",-->
    <!--                "marginRight": "50",-->
    <!--                "position": "right"-->
    <!--            },-->
    <!--            "brandSetting": {-->
    <!--                "brandName": "Vilva Business",-->
    <!--                "brandSubTitle": "Typically replies within a day",-->
    <!--                "brandImg": "https://www.vilvabusiness.com/images/vilvabusiness-favicon.png",-->
    <!--                "welcomeText": "Hi there!\nHow can I help you?",-->
    <!--                "messageText": "Hello, I am contacting from VilvaBusiness.com",-->
    <!--                "backgroundColor": "#0a5f54",-->
    <!--                "ctaText": "Start Chat",-->
    <!--                "borderRadius": "25",-->
    <!--                "autoShow": false,-->
    <!--                "phoneNumber": "919791136945"-->
    <!--            }-->
    <!--        };-->
    <!--        s.onload = function() {-->
    <!--            try {-->
    <!--                CreateWhatsappChatWidget(options);-->
    <!--            } catch (e) {-->
    <!--                console.error("Error creating WhatsApp chat widget:", e);-->
    <!--            }-->
    <!--        };-->
    <!--        var x = document.getElementsByTagName('script')[0];-->
    <!--        x.parentNode.insertBefore(s, x);-->
    <!--    });-->
    <!--</script> -->


    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- plugins-jquery -->
    <script src="{{ asset('assets/js/plugins-jquery.js') }}"></script>
    
    <!-- plugin_path -->
    <script>var plugin_path = '/assets/js/';</script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <!-- revolution custom -->
    <script src="{{ asset('assets/revolution/js/revolution-custom.js') }}"></script>

    <!-- custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    


    <style type="text/css">
        .required {
            color: red;
        }
    </style>

</head>

<body>
  <header class="header" id="header">
    <nav class="navbar navbar-expand-lg  fixed-top" style="background:white;">
      <div class="container">
        <a class=" ms-2" href="/"><img src="{{ asset('internal/images/navimg.png') }}" alt=""
            class="vil img img-fluid" /></a>
        <button style="outline: none; border: none;" class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars" style="color: #0a0a0a;"></i>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <a class="navbar-brand ms-1" href="/"><img src="{{ asset('internal/images/navimg.png') }}" alt=""
                width="30px" class="vil" /></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <!-- Mobile view -->
<div class="main-menu ">
    <div class="primary-menu-item" onclick="handleClick('/')">HOME
        <div class="dropdown-menu1" id="homeSubMenu">
            <!-- Home submenu items -->
        </div>
    </div>
    <div class="primary-menu-item" onclick="toggleSubMenu('productsSubMenu')">PRODUCTS <span class="submenu-indicator">+</span>
        <div class="dropdown-menu1 d-flex flex-column" id="productsSubMenu">
            <div class="menu-item" onclick="handleClick('/ecomsaas')">Ecom Saas</div>
            <div class="menu-item" onclick="handleClick('/products')">Products</div>
            <div class="menu-item" onclick="handleClick('/growsuite')">GrowSuite</div>
            <div class="menu-item" onclick="toggleSubMenu('ecommerceSubMenu', event)">Ecommerce Solutions <span class="submenu-indicator">+</span>
                <div class="dropdown-menu1" id="ecommerceSubMenu">
                    <div class="menu-item2" onclick="handleClick('/magento-solutions')">Magento website development</div>
                    <div class="menu-item2" onclick="handleClick('/opencart-solutions')">Opencart Website Development</div>
                    <div class="menu-item2" onclick="handleClick('/wordpress-solutions')">WordPress website development</div>
                    <div class="menu-item2" onclick="handleClick('/shopify-solutions')">Shopify website development</div>
                    <div class="menu-item2" onclick="handleClick('/android-solutions')">Android website development</div>
                    <div class="menu-item2" onclick="handleClick('/ios-solutions')">iOS website development</div>
                </div>
            </div>
            <div class="menu-item" onclick="toggleSubMenu('industrySubMenu', event)">Industry <span class="submenu-indicator">+</span>
                <div class="dropdown-menu1"  id="industrySubMenu">
                <div class="menu-item2" onclick="toggleSubMenu('industrySubMenu11', event)">Android APPs
                    <span class="submenu-indicator">+</span>
                    <div class="dropdown-menu1" id="industrySubMenu11">
                      <div class="menu-item2"  onclick="handleClick('/app-for-boutiques')">APP For Boutique</div>
                      <div class="menu-item2"  onclick="handleClick('/app-for-restaurants')">APP For Restaurants</div>
                      <div class="menu-item2"  onclick="handleClick('/app-for-hotels')">APP For Hotels</div>
                      <div class="menu-item2"  onclick="handleClick('/app-for-shops')">APP For Shops</div>
                      <div class="menu-item2"  onclick="handleClick('/app-for-ecommerce')">APP For Ecommerce</div>
                      <div class="menu-item2"  onclick="handleClick('/app-for-groceries')">APP For Groceries</div>
                      <div class="menu-item2"  onclick="handleClick('/app-for-fruits-vegetables')">APP For Fruits & Vegetables</div>
                      <div class="menu-item2"  onclick="handleClick('/app-for-wholesalers')">APP For Wholesalers</div>
                    </div>
                    </div>
                    <div class="menu-item2" onclick="toggleSubMenu('industrySubMenu22', event)">Accounting solution
                    <span class="submenu-indicator">+</span>
                    <div class="dropdown-menu1" id="industrySubMenu22">
                      <div class="menu-item2" onclick="handleClick('/gst-registration')" >GST Registration</div>
                      <div class="menu-item2" onclick="handleClick('/gst-fillings')" >GST Fillings</div>
                      <div class="menu-item2" onclick="handleClick('/accounting-softwares')" >Accounting Softwares</div>
                    </div>
                    </div>
                    <div class="menu-item2" onclick="toggleSubMenu('industrySubMenu33', event)">Banking solution
                    <span class="submenu-indicator">+</span>
                    <div class="dropdown-menu1" id="industrySubMenu33">
                      <div class="menu-item2"onclick="handleClick('/oracle-plsql-webservices')" >Oracle pI/Sql Web Services</div>
                      <div class="menu-item2" onclick="handleClick('/payment-gateway-solutions')">Payment Gateway Solutions</div>
                      <div class="menu-item2" onclick="handleClick('/payment-collection-services')" >Payment Collection Serivces</div>
                      <div class="menu-item2" onclick="handleClick('/bank-verification-api')" >Bank Verification API's</div>
                      <div class="menu-item2" onclick="handleClick('/aadhar-pan-verification-api')">Aadhar & PAN Verification API's</div>
                      <div class="menu-item2" onclick="handleClick('/virtual-api-accounts')" >Virtual Accounts API's</div>
                      <div class="menu-item2" onclick="handleClick('/virtual-current-accounts')">virtual-current-accounts</div>
                      <div class="menu-item2" onclick="handleClick('/corporate-cards-expense-cards')" >Corporate Cards & Expense Cards </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="primary-menu-item" onclick="toggleSubMenu('servicesSubMenu')">SERVICES <span class="submenu-indicator">+</span>
        <div class="dropdown-menu1 d-flex flex-column" id="servicesSubMenu">
            <div class="menu-item" onclick="handleClick('/technologies')" > Technology </div>
            <div class="menu-item" onclick="handleClick('/ai-ml')" > AI/ML </div>
            <div class="menu-item" onclick="handleClick('/fintechsolution')" > FinTech Solution </div>
            <div class="menu-item" onclick="handleClick('/cybersecurity')" > Cyber Security </div>
            <div class="menu-item" onclick="handleClick('/kycverification')" > KYC Verification </div>

            <div class="menu-item" onclick="toggleSubMenu('marketingSubMenu', event)">Marketing <span class="submenu-indicator">+</span>
                <div class="dropdown-menu1"  id="marketingSubMenu">
                <div class="menu-item2" onclick="toggleSubMenu('marketingSubMenu11', event)">WhatsApp Marketing
                    <span class="submenu-indicator">+</span>
                    <div class="dropdown-menu1" id="marketingSubMenu11">
                      <div class="menu-item2" onclick="handleClick('/vliva-biz-sender-pro')" >Vilva Biz Sender Pro</div>
                      <div class="menu-item2" onclick="handleClick('/bulk-whatsapp')" >Bulk WhatsApp Marketing</div>
                      <div class="menu-item2" onclick="handleClick('/whatsapp-business-api')" >WhatsApp Business API</div>
                      <div class="menu-item2" onclick="handleClick('/official-whatsapp-facebook-business')" >Official WhatsApp Business & Facebook Business Setup</div>
                     
                    </div>
                    </div>
                    <div class="menu-item2" onclick="handleClick('/email-marketing')">Email Marketing
                    </div>

                    <div class="menu-item2" onclick="handleClick('/sms-marketing')">SMS Marketing 
                  
                    </div>
                    <div class="menu-item2" onclick="toggleSubMenu('voiceSubMenu22', event)">Voice Marketing
                    <span class="submenu-indicator">+</span>
                    <div class="dropdown-menu1" id="voiceSubMenu22">
                      <div class="menu-item2" onclick="handleClick('/bulk-voice-calling')" >Bulk Voice Calling (Transactional & Promotional)</div>
                      <div class="menu-item2" onclick="handleClick('/custom-voice-calling')" >Custom Voice Calling</div>
                      <div class="menu-item2" onclick="handleClick('/api-voice-calling')" >API based Voice Calling </div>
                     
                     
                    </div>
                    </div>
                    <div class="menu-item2" onclick="toggleSubMenu('digitalSubMenu11', event)">Digital Marketing
                    <span class="submenu-indicator">+</span>
                    <div class="dropdown-menu1" id="digitalSubMenu11">
                      <div class="menu-item2" onclick="handleClick('/facebook-instagram-marketing')" >Facebook & Instagram Marketing</div>
                      <div class="menu-item2" onclick="handleClick('/linkedin-marketing')" >LinkedIn Marketing g</div>
                      <div class="menu-item2" onclick="handleClick('/google-youtube-marketing')" >Google & Youtube Marketing</div>
                      <div class="menu-item2" onclick="handleClick('/app-installs-marketing')" >App Installs Marketing</div>
                      <div class="menu-item2" onclick="handleClick('/sales-converstion-marketing')" >Sales Conversion Marketing</div>
                      <div class="menu-item2" onclick="handleClick('/lead-generation-marketing')" >Lead Generation Marketing </div>
                      <div class="menu-item2" onclick="handleClick('/event-signup-ticket-sales-marketing')" >Event Signup / Ticket Sales Marketing </div>
                     
                    </div>
                    </div>
                    <div class="menu-item2" onclick="toggleSubMenu('seoSubMenu11', event)">SEO & SMM
                    <span class="submenu-indicator">+</span>
                    <div class="dropdown-menu1" id="seoSubMenu11">
                      <div class="menu-item2" onclick="handleClick('/social-media-management-marketing')">Social Media Management & Marketing</div>
                    
                     
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="primary-menu-item" onclick="handleClick('/partners')">PARTNERS
       
    </div>
    <!--<div class="primary-menu-item"onclick="handleClick('#')">BLOG-->
        
    <!--</div>-->
    
    <div class="primary-menu-item"onclick="handleClick('/register')">Register / Login
        
    </div>
   
</div>


          <div class="offcanvas-body">
            <!-- Mobile view  -->
            <!-- Mobile view  -->



<!--desktopview -->
            <ul class="nav__list navbar-nav ">
              <li class="nav__item nav-item" style="margin-top: 1px">
                <a href="/" class="nav__link">
                  <i class="ri-arrow-right-up-line"></i>
                  <span style="color:black;"  >Home</span>
                </a>
              </li>

              <!-- Navigation Item with Dropdown -->
              <li class="nav__item nav-item ">
                <a href="#" class="nav__link dropdown-toggle menu" data-toggle="dropdown">
                  <i class="ri-arrow-right-up-line"></i>
                  <span style="color: black;" class=" menu-item">
                    Products

                    <div class="submenu ">
                      <div class="submenu-item" onclick="handleClick('/ecomsaas')">Ecom Saas</div>
                      <div class="submenu-item" onclick="handleClick('/products')">Products</div>
                      <div class="submenu-item"  onclick="handleClick('/growsuite')">Growsuite</div>
                      <div class="submenu-item">
                        Ecommerce Solutions &nbsp; &nbsp;&nbsp; <b>+</b>
                        <div class="sub-submenu">

                          <div class="sub-submenu-item" onclick="handleClick('/magento-solutions');">
                            Magento website development
                          </div>
                          <div class="sub-submenu-item" onclick="handleClick('/opencart-solutions');">
                            Opencart Website  development
                          </div>
                          <div class="sub-submenu-item" onclick="handleClick('/wordpress-solutions');">WordPress website
                            development
                          </div>
                          <div class="sub-submenu-item" onclick="handleClick('/shopify-solutions');">Shopify website development</div>
                          <div class="sub-submenu-item"  onclick="handleClick('/android-solutions');">Android website development</div>
                          <div class="sub-submenu-item"   onclick="handleClick('/ios-solutions');">IOS website development</div>
                        </div>
                      </div>
                      <div class="submenu-item">
                      Industry &nbsp; &nbsp;&nbsp; <b>+</b>

                        <div class="sub-submenu">

                          <div class="sub-submenu-item">
                          Android Apps &nbsp; &nbsp;&nbsp; <b>+</b>

                            <div class="insidesub-submenu">
                              <div class="insidesub-submenu-item" onclick="handleClick('/app-for-boutiques');">APP for Boutique</div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/app-for-restaurants');">APP for Restaurants </div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/app-for-hotels');">APP for Hotels </div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/app-for-shops');">APP for Shops</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/app-for-ecommerce');">APP for Ecommerce</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/app-for-groceries');">APP for Groceries</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/app-for-fruits-vegetables');">APP for Fruits & Vegetables </div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/app-for-wholesalers');">APP for Wholesalers </div>
                             
                            </div>
                            
                          </div>
                          <div class="sub-submenu-item">
                          Accounting solution &nbsp; &nbsp;&nbsp; <b>+</b>

                            <div class="insidesub-submenu">

                              <div class="insidesub-submenu-item"   onclick="handleClick('/gst-registration');">GST Registration</div>
                              <div class="insidesub-submenu-item"    onclick="handleClick('/gst-filings');">GST Filings</div>
                              <div class="insidesub-submenu-item"   onclick="handleClick('/accounting-softwares');">Accounting Softwares</div>
                              
                            </div>
                          </div>
                          <div class="sub-submenu-item">
                          Banking solution &nbsp; &nbsp;&nbsp; <b>+</b>

                            <div class="insidesub-submenu">

                              <div class="insidesub-submenu-item" onclick="handleClick('/oracle-plsql-webservices');">Oracle pl/sql Web Services </div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/payment-gateway-solutions');">Payment Gateway Solutions</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/payment-collection-services');">Payment Collection Services</div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/bank-verification-api');">Bank Verification API's</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/aadhar-pan-verification-api');">Aadhar & PAN Verification API's</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/virtual-api-accounts');">Virtual Accounts API</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/virtual-current-accounts');">Virtual Current Accounts </div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/corporate-cards-expense-cards');">Corporate Cards & Expense Cards </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>

                </a>


              </li>



              <li class="nav__item nav-item ">
                <a href="#" class="nav__link dropdown-toggle menu" data-toggle="dropdown">
                  <i class="ri-arrow-right-up-line"></i>
                  <span style="color: black;" class=" menu-item">
                    Services

                    <div class="submenu ">
                        <div class="submenu-item pe-5" onclick="handleClick('/technologies');">Technology</div>
                        <div class="submenu-item pe-5" onclick="handleClick('/ai-ml');">AI/ML</div>
                        <div class="submenu-item pe-5" onclick="handleClick('/fintechsolution');">FinTech Solution</div>
                        <div class="submenu-item pe-5" onclick="handleClick('/cybersecurity');">Cyber Security</div>
                        <div class="submenu-item pe-5" onclick="handleClick('/kycverification');">KYC Verification</div>
                      <div class="submenu-item">
                      Marketing &nbsp; &nbsp;&nbsp; <b>+</b>

                        <div class="sub-submenu">

                          <div class="sub-submenu-item">
                          Whatsapp Marketing &nbsp; &nbsp;&nbsp; <b>+</b>

                            <div class="insidesub-submenu">
                              <div class="insidesub-submenu-item" onclick="handleClick('/vliva-biz-sender-pro');">Vilva Biz Sender Pro</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/bulk-whatsapp');">Bulk WhatsApp Marketing</div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/whatsapp-business-api');">WhatsApp Business API</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/official-whatsapp-facebook-business');">Official WhatsApp Business & Facebook Business </div>
                              
                            </div>
                            
                          </div>
                           <div class="sub-submenu-item"  onclick="handleClick('/email-marketing');">
                           Email Marketing 

                          
                            
                          </div>
                          <div class="sub-submenu-item" onclick="handleClick('/sms-marketing');">
                          SMS Marketing

                           
                            
                          </div>
                          <div class="sub-submenu-item">
                          Voice Marketing &nbsp; &nbsp;&nbsp; <b>+</b>

                            <div class="insidesub-submenu">
                              <div class="insidesub-submenu-item" onclick="handleClick('/bulk-voice-calling')">Bulk Voice Calling (Transactional & Promotional)</div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/custom-voice-calling')">Custom Voice Calling</div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/api-voice-calling')">API based Voice Calling</div>
                             
                          </div>
                            
                          </div>
                          <div class="sub-submenu-item">
                          Digital Marketing &nbsp; &nbsp;&nbsp; <b>+</b>

                            <div class="insidesub-submenu">
                              <div class="insidesub-submenu-item" onclick="handleClick('/facebook-instagram-marketing')">Facebook & Instagram Marketing</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/linkedin-marketing')">LinkedIn Marketing</div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/google-youtube-marketing')">Google & Youtube Marketing</div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/app-installs-marketing')">App Installs Marketing </div>
                              <div class="insidesub-submenu-item"  onclick="handleClick('/sales-converstion-marketing')">Sales Conversion Marketing </div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/lead-generation-marketing')">Lead Generation Marketing</div>
                              <div class="insidesub-submenu-item" onclick="handleClick('/event-signup-ticket-sales-marketing')">Event Signup / Ticket Sales Marketing</div>
                              
                            </div>
                            
                          </div>
                          <div class="sub-submenu-item">
                          SEO & SMM &nbsp; &nbsp;&nbsp; <b>+</b>

                            <div class="insidesub-submenu">
                              <div class="insidesub-submenu-item" onclick="handleClick('/social-media-management-marketing')">Social Media Management & Marketing</div>
                            
                            </div>
                            
                          </div>
                        </div>
                      </div>

                    </div>
                  </span>

                </a>


              </li>

              <li class="nav__item nav-item">
                <a href="/partners" class="nav__link">
                  <i class="ri-arrow-right-up-line"></i>
                  <span>Partners</span>
                </a>
              </li>
              <!--<li class="nav__item">-->
              <!--  <a href="#" class="nav__link">-->
              <!--    <i class="ri-arrow-right-up-line"></i>-->
              <!--    <span>Blog</span>-->
              <!--  </a>-->
              <!--</li>-->

              <!--<li class="nav__item">-->
              <!--  <a href="/contact" class="nav__link">-->
              <!--    <i class="ri-arrow-right-up-line"></i>-->
              <!--    <span>Contact</span>-->
              <!--  </a>-->
              <!--</li>-->
              <li class="nav__item">
                <a href="/register" class="nav__link">
                  <i class="ri-arrow-right-up-line"></i>
                  <span>Register</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  @yield("content")

  <footer class="footer black-bg"  data-aos="fade-up"data-aos-duration="1000">
    <div class="page-section-pt">
      <div class="container mx-auto" style="max-width: 90%;">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">
            <div class="footer-logo">
              <img id="logo-footer" class="mb-20" src="{{ asset('assets/images/vilvabusiness-logo-footer.webp') }}"
                alt="Vilva Business">
              <p class="pb-10"> Vilva Business is a B2B all in one service Portal with Solutions ranging from Marketing,
                Accounting, HR Management, Business Printing Supplies, Technology Services such as Website Development,
                Hosting and everything else a successful business needs for its existence and growth.</p>
            </div>
            <div class="social-icons color-hover">
              <ul>
                <li class="social-facebook"><a href="https://www.facebook.com/vilvanetworks/" target="_blank"><i
                      class="fa fa-facebook"></i></a></li>
                <li class="social-twitter"><a href="https://twitter.com/NetworksVilva" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-instagram"><a href="https://www.instagram.com/vilvanetworks/" target="_blank"><i
                      class="fa fa-instagram"></i> </a></li>
                <li class="social-linkedin"><a href="https://in.linkedin.com/company/vilvanetworks" target="_blank"><i
                      class="fa fa-linkedin"></i> </a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-6 sm-mb-30">
            <div class="footer-useful-link footer-hedding">
              <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <!--  <li><a href="careers">Careers</a></li>-->
                <li><a href="#">Blog</a></li>
                <li><a href="/contact">Contact Us</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-6 xs-mb-30">
            <div class="footer-useful-link footer-hedding">
              <h6 class="text-white mb-30 mt-10 text-uppercase">Partnership</h6>
              <ul>
                <li><a href="#">Loyalty Discounts</a></li>
                <li><a href="#">Affiliate Programme</a></li>
                <li><a href="#">Reseller Partnership</a></li>
                <li><a href="#">White Label Partnership</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-6 xs-mb-30">
            <div class="footer-useful-link footer-hedding">
              <h6 class="text-white mb-30 mt-10 text-uppercase">Policies</h6>
              <ul>
                <li><a href="#">Investors</a></li>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
                <li><a href="#">Return & Refund Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
            <ul class="addresss-info">
              <li><i class="fa fa-map-marker"></i>
                <p>Chennai, Tamil Nadu, India.</p>
              </li>
              <li><i class="fa fa-phone"></i> <a href="tel:919791136945"> <span>+91 91765 69459 </span> </a> </li>
              <li><i class="fa fa-envelope-o"></i>info@vilvabusiness.com</li>
            </ul>
          </div>
        </div>

        <div class="footer-widget mt-20">

          <div class="row">
            <div class="col-md-12 text-center">
              <p class="mt-15"> &copy;Copyright <span id="copyright">
                  <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                </span> <a href="/"> Vilva Business </a> All Rights Reserved </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


 <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <!--<script src="https://app.aminos.ai/js/chat_plugin.js" data-bot-id="20138"></script>-->



     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    @if (Session::has('message'))
    <script>
        toastr.options.timeOut = 10000;
        toastr.success("{{ Session::get('message') }}");
    </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.options.timeOut = 10000;
                toastr.error("{{ $error }}");
            </script>
        @endforeach
    @endif
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->

<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true, // Enable looping
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    autoplay: {
    delay: 3000, // Set autoplay delay in milliseconds (e.g., 3000ms = 3 seconds)
    disableOnInteraction: false, // Keep autoplay running after user interactions
  },
  speed: 3000,
    navigation: {
      nextEl: ".swiper-button-next1",
      prevEl: ".swiper-button-prev1",
    },
    breakpoints: {
      // when window width is <= 320px
      320: {
        slidesPerView: 1.1,
        spaceBetween: 10,
      },
      // when window width is <= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is <= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      // when window width is <= 1024px
      1024: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      // when window width is <= 1440px
      1440: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }
  });

</script>


<script>
  function handleClick(url) {
    // Your custom JavaScript code can go here
    window.location.href = url;
  }
</script>

<script src="{{ asset('js/index.js') }}"></script>

<script src="https://app.aminos.ai/js/chat_plugin.js" data-bot-id="20138"></script>


 <!-- start webpushr tracking code --> 
    <script>
        (function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";
        fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));
        webpushr('setup',{'key':'BFYUB8JqtZJJrD_FJTqVYeueSgDdZ7-KC56CD01VB4ufSF1zpJt3HvYIba0BqTzkSzcbD8eT1PG-_ypOMHKTH4s' });
    </script>
    <!-- end webpushr tracking code -->
    

<!--<script>-->
<!--  var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?12205';-->
<!--  var s = document.createElement('script');-->
<!--  s.type = 'text/javascript';-->
<!--  s.async = true;-->
<!--  s.src = url;-->
<!--  var options = {-->
<!--    "enabled": true,-->
<!--    "chatButtonSetting": {-->
<!--      "backgroundColor": "#00e785",-->
<!--      "ctaText": "Chat with us",-->
<!--      "borderRadius": "25",-->
<!--      "marginLeft": "0",-->
<!--      "marginRight": "20",-->
<!--      "marginBottom": "20",-->
<!--      "ctaIconWATI": false,-->
<!--      "position": "right"-->
<!--    },-->
<!--    "brandSetting": {-->
<!--      "brandName": "Appoi kitchen",-->
<!--      "brandSubTitle": "undefined",-->
<!--      "brandImg": "https://assetsvilva.blr1.cdn.digitaloceanspaces.com/ecomsaas/main.png",-->
<!--      "welcomeText": "Hi there!\nHow can I help you?",-->
<!--      "messageText": "Hello and thank you for contacting ECOM SAAS, All your solution related to the the tech world ends here.",-->
<!--      "backgroundColor": "#00e785",-->
<!--      "ctaText": "Chat with us",-->
<!--      "borderRadius": "25",-->
<!--      "autoShow": false,-->
<!--      "phoneNumber": "919176569459"-->
<!--    }-->
<!--  };-->
<!--  s.onload = function () {-->
<!--    CreateWhatsappChatWidget(options);-->
<!--  };-->
<!--  var x = document.getElementsByTagName('script')[0];-->
<!--  x.parentNode.insertBefore(s, x);-->
<!--</script>-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>

 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>




</body>
</html>