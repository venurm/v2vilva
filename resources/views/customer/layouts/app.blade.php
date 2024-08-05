<!DOCTYPE html>
<html lang="en">

<head>
    
    @yield("head")

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/vilvabusiness-favicon.webp') }}" />

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

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-NQ7K04MECW');
    </script>

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


   <!--  <script>
        document.addEventListener('DOMContentLoaded', function() {
            var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?59035';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url;
            var options = {
                "enabled": true,
                "chatButtonSetting": {
                    "backgroundColor": "#4dc247",
                    "ctaText": "Message Us",
                    "borderRadius": "25",
                    "marginLeft": "0",
                    "marginBottom": "50",
                    "marginRight": "50",
                    "position": "right"
                },
                "brandSetting": {
                    "brandName": "Vilva Business",
                    "brandSubTitle": "Typically replies within a day",
                    "brandImg": "https://www.vilvabusiness.com/images/vilvabusiness-favicon.png",
                    "welcomeText": "Hi there!\nHow can I help you?",
                    "messageText": "Hello, I am contacting from VilvaBusiness.com",
                    "backgroundColor": "#0a5f54",
                    "ctaText": "Start Chat",
                    "borderRadius": "25",
                    "autoShow": false,
                    "phoneNumber": "919791136945"
                }
            };
            s.onload = function() {
                try {
                    CreateWhatsappChatWidget(options);
                } catch (e) {
                    console.error("Error creating WhatsApp chat widget:", e);
                }
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        });
    </script> -->


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


    <!-- start webpushr tracking code --> 
    <script>
        (function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";
        fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));
        webpushr('setup',{'key':'BFYUB8JqtZJJrD_FJTqVYeueSgDdZ7-KC56CD01VB4ufSF1zpJt3HvYIba0BqTzkSzcbD8eT1PG-_ypOMHKTH4s' });
    </script>
    <!-- end webpushr tracking code -->


    <style type="text/css">
        .required {
            color: red;
        }
    </style>

</head>



<body>

    <div class="wrapper">

        <!--preloader -->
        <div id="pre-loader">
            <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>
        <!--preloader -->


        <!--header -->
        <header id="header" class="header light">

            <!--mega menu -->
            <div class="menu">
              <!-- menu start -->
               <nav id="menu" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                 <div class="container">
                  <div class="row">
                   <div class="col-lg-12 col-md-12 position-relative">
                    <!-- menu logo -->
                    <ul class="menu-logo">
                        <li>
                            <a href="/"><img id="logo_img" src="{{ asset('assets/images/vilvabusiness-logo.webp') }}" alt="logo"> </a>
                        </li>
                    </ul>
                    <!-- menu links -->
                    <div class="menu-bar">
                        <ul class="menu-links">

                            <li><a href="{{ URL('/') }}"><i class="fa fa-home"></i> Home </a>

                            <li><a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> Products <i class="fa fa-angle-down fa-indicator"></i></a>
                                <ul class="drop-down-multilevel">
                                    <li><a href="{{ URL('/products') }}">Products</a></li>
                                    <li><a href="/growsuite">Growsuite</a></li>
                                    <li><a href="javascript:void(0)">Ecommerce solutions<i class="ti-plus fa-indicator"></i></a>
                                     <ul class="drop-down-multilevel">
                                        <li><a href="/magento-solutions">Magento Website Development</a></li>
                                        <li><a href="/opencart-solutions">Opencart Website Development</a></li>
                                        <li><a href="/wordpress-solutions">Wordpress Website Development</a></li>
                                        <li><a href="/shopify-solutions">Shopify Website Development</a></li>
                                        <li><a href="/android-solutions">Android App Development</a></li>
                                        <li><a href="/ios-solutions">Ios App Development</a></li>
                                      </ul>
                                    </li>

                                    <li><a href="javascript:void(0)"> Industry <i class="ti-plus fa-indicator"></i></a>
                                         <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="javascript:void(0)">Android APPs<i class="ti-plus fa-indicator"></i></a>
                                             <ul class="drop-down-multilevel">
                                                <li><a href="/app-for-boutiques">APP for Boutique </a></li>
                                                <li><a href="/app-for-restaurants">APP for Restaurants </a></li>
                                                <li><a href="/app-for-hotels">APP for Hotels  </a></li>
                                                <li><a href="/app-for-shops">APP for Shops </a></li>
                                                <li><a href="/app-for-ecommerce">APP for Ecommerce </a></li>
                                                <li><a href="/app-for-groceries">APP for Groceries </a></li>
                                                <li><a href="/app-for-fruits-vegetables">APP for Fruits & Vegetables  </a></li>
                                                <li><a href="/app-for-wholesalers">APP for Wholesalers </a></li>
                                              </ul>
                                            </li>
                                            <!--<li><a href="javascript:void(0)">Clothing<i class="ti-plus fa-indicator"></i></a>-->
                                            <!-- <ul class="drop-down-multilevel">-->
                                            <!--    <li><a href="/supply-of-shoes">Supply for Shops </a></li>-->
                                            <!--    <li><a href="/manufacture-supply-for-brands">Manufacture & Supply for Brands </a></li>-->
                                            <!--    <li><a href="/clothing-for-men">Clothing for Men </a></li>-->
                                            <!--    <li><a href="/clothing-for-women">Clothing for women </a></li>-->
                                            <!--    <li><a href="/clothing-for-children">Clothing for Children </a></li>-->
                                            <!--    <li><a href="/tshirts-for-office">T-shirts for Office </a></li>-->
                                            <!--    <li><a href="/tshirts-for-promotions">T-Shirts for Promotions </a></li>-->
                                            <!--    <li><a href="/tshirts-for-schools">T Shirts for Schools </a></li>-->
                                            <!--    <li><a href="/uniforms-for-companies">Uniforms for Companies </a></li>-->
                                            <!--  </ul>-->
                                            <!--</li>-->
                                            <!--<li><a href="javascript:void(0)">Offset & Digital Printing<i class="ti-plus fa-indicator"></i></a>-->
                                            <!-- <ul class="drop-down-multilevel">-->
                                            <!--    <li><a href="/visiting-cards">Visiting Cards </a></li>-->
                                            <!--    <li><a href="/brochures">Brochures </a></li>-->
                                            <!--    <li><a href="/letterhead">Letter Heads </a></li>-->
                                            <!--    <li><a href="/pamphlets">Pamphlets </a></li>-->
                                            <!--    <li><a href="/calendars">Calendars </a></li>-->
                                            <!--    <li><a href="/dairies-planners">Dairies & Planners </a></li>-->
                                            <!--    <li><a href="/photo-albums">Photo Albums </a></li>-->
                                            <!--  </ul>-->
                                            <!--</li>-->
                                            <!--<li><a href="javascript:void(0)">Corporate Gifting<i class="ti-plus fa-indicator"></i></a>-->
                                            <!-- <ul class="drop-down-multilevel">-->
                                            <!--    <li><a href="/customized-keychains">Customized Keychains </a></li>-->
                                            <!--    <li><a href="/customized-tshirts">Customized T Shirts </a></li>-->
                                            <!--    <li><a href="/customized-dairies">Customized Dairies </a></li>-->
                                            <!--    <li><a href="/customized-wallets">Customized Wallets </a></li>-->
                                            <!--    <li><a href="/customized-idcards">Customized ID Cards </a></li>-->
                                            <!--    <li><a href="/customized-lanyards">Customized Lanyards </a></li>-->
                                            <!--    <li><a href="/customized-caps">Customized Caps </a></li>-->
                                            <!--  </ul>-->
                                            <!--</li>-->
                                            <!--<li><a href="javascript:void(0)">Law & Legal Services<i class="ti-plus fa-indicator"></i></a>-->
                                            <!-- <ul class="drop-down-multilevel">-->
                                            <!--    <li><a href="/trademark-registration">Trademark Registration </a></li>-->
                                            <!--    <li><a href="/copyrights-registration">Copyrights Registration </a></li>-->
                                            <!--    <li><a href="/company-filings">Company Filings </a></li>-->
                                            <!--  </ul>-->
                                            <!--</li>-->
                                            <li><a href="javascript:void(0)">Accounting Solutions<i class="ti-plus fa-indicator"></i></a>
                                             <ul class="drop-down-multilevel">
                                                <li><a href="/gst-registration">GST Registration </a></li>
                                                <li><a href="/gst-filings">GST Filings </a></li>
                                                <li><a href="/accounting-softwares">Accounting Softwares </a></li>
                                              </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">Banking Solutions<i class="ti-plus fa-indicator"></i></a>
                                             <ul class="drop-down-multilevel">
                                                <li><a href="/oracle-plsql-webservices">Oracle pl/sql Web Services </a></li>
                                                <li><a href="/payment-gateway-solutions">Payment Gateway Solutions </a></li>
                                                <li><a href="/payment-collection-services">Payment Collection Services </a></li>
                                                <li><a href="/bank-verification-api">Bank Verification API's </a></li>
                                                <li><a href="/aadhar-pan-verification-api">Aadhar & PAN Verification API's </a></li>
                                                <li><a href="/virtual-api-accounts">Virtual Accounts API </a></li>
                                                <li><a href="/virtual-current-accounts">Virtual Current Accounts </a></li>
                                                <li><a href="/corporate-cards-expense-cards">Corporate Cards & Expense Cards </a></li>

                                              </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            
                            <li><a href="javascript:void(0)"><i class="fa fa-cogs"></i> Services <i class="fa fa-angle-down fa-indicator"></i></a>
                                <ul class="drop-down-multilevel">
                                    <li><a href="/technologies">Technologies </a></li>
                                    <li><a href="javascript:void(0)"> Marketing <i class="fa fa-angle-down fa-indicator"></i></a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="javascript:void(0)">Whatsapp Marketing<i class="ti-plus fa-indicator"></i></a>
                                             <ul class="drop-down-multilevel">
                                                <li><a href="/vliva-biz-sender-pro-whatsapp-marketing">Vilva Biz Sender Pro </a></li>
                                                <li><a href="/bulk-whatsapp-marketing">Bulk WhatsApp Marketing </a></li>
                                                <li><a href="/whatsapp-business-api">WhatsApp Business API  </a></li>
                                                <li><a href="/official-whatsapp-business-facebook-business">Official WhatsApp Business & Facebook Business Setup </a></li>
                                              </ul>
                                            </li>

                                            <li><a href="/email-marketing">Email Marketing </a></li>
                                            <li><a href="/sms-marketing">SMS Marketing </a></li>
                                            <li><a href="javascript:void(0)">Voice Marketing<i class="ti-plus fa-indicator"></i></a>
                                             <ul class="drop-down-multilevel">
                                                <li><a href="/bulk-voice-calling">Bulk Voice Calling (Transactional & Promotional) </a></li>
                                                <li><a href="/custom-voice-calling">Custom Voice Calling </a></li>
                                                <li><a href="/api-voice-calling">API based Voice Calling </a></li>
                                              </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">Digital Marketing<i class="ti-plus fa-indicator"></i></a>
                                             <ul class="drop-down-multilevel">
                                                <li><a href="/facebook-instagram-marketing">Facebook & Instagram Marketing </a></li>
                                                <li><a href="/linkedin-marketing">LinkedIn Marketing </a></li>
                                                <li><a href="/google-youtube-marketing">Google & Youtube Marketing </a></li>
                                                <li><a href="/app-installs-marketing">App Installs Marketing </a></li>
                                                <li><a href="/sales-converstion-marketing">Sales Conversion Marketing </a></li>
                                                <li><a href="/lead-generation-marketing">Lead Generation Marketing </a></li>
                                                <li><a href="/event-signup-ticket-sales-marketing">Event Signup / Ticket Sales Marketing </a></li>
                                              </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">SEO & SMM<i class="ti-plus fa-indicator"></i></a>
                                                <ul class="drop-down-multilevel">
                                                <li><a href="/social-media-management-marketing">Social Media Management & Marketing </a></li>
                                              </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li><a href="/partners"><i class="fa fa-users"></i> Partners </a>
                            @auth
                            <li><a href="/account"><i class="fa fa-user"></i> Account </a>
                            @endif
                            <li><a href="/blog"><i class="fa fa-book"></i> Blog </a>
                            <li><a href="/contact"><i class="fa fa-envelope"></i> Contact </a>

                        </ul>


                        <div class="search-cart">
                            <div class="search">
                                @auth
                                <a class="search-btn not_click" href="javascript:void(0);"><i class="fa fa-sign-out"></i></a>
                                <div class="search-box not-click">
                                    <br>
                                    <form id="logout-form" action="{{ url('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" style="background-color: #007e60; border: 2px solid #007e60; color: white; padding: 4px 10px;">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </button>
                                    </form>
                                    <br><br>
                                </div>
                                @else
                                <a class="search-btn not_click" href="javascript:void(0);"><i class="fa fa-sign-in"></i></a>
                                <div class="search-box not-click">
                                    <br>
                                    <button onclick="location.href='login'" style="background-color: #007e60; border: 2px solid #007e60; color: white; padding: 4px 10px;">
                                        <i class="fa fa-sign-in"></i> Login / Register
                                    </button>
                                    <br><br>
                                </div>
                                @endif
                            </div>
                        </div>


                    </div>
                   </div>
                  </div>
                 </div>
                </section>
               </nav>
              <!-- menu end -->
            </div>
            <!--mega menu -->

        </header>
        <!--header -->

        @yield("content")



        <!--footer -->

        <footer class="footer black-bg">
            <div class="page-section-pt">
                <div class="container" style="max-width: 90%;">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                            <div class="footer-logo">
                                <img id="logo-footer" class="mb-20" src="{{ asset('assets/images/vilvabusiness-logo-footer.webp') }}" alt="Vilva Business">
                                <p class="pb-10"> Vilva Business is a B2B all in one service Portal with Solutions ranging from Marketing, Accounting, HR Management, Business Printing Supplies, Technology Services such as Website Development, Hosting and everything else a successful business needs for its existence and growth.</p>
                            </div>
                            <div class="social-icons color-hover">
                                 <ul>
                                  <li class="social-facebook"><a href="https://www.facebook.com/vilvanetworks/"><i class="fa fa-facebook"></i></a></li>
                                  <li class="social-twitter"><a href="https://twitter.com/NetworksVilva"><i class="fa fa-twitter"></i></a></li>
                                  <li class="social-instagram"><a href="https://www.instagram.com/vilvanetworks/"><i class="fa fa-instagram"></i> </a></li>
                                  <li class="social-linkedin"><a href="https://in.linkedin.com/company/vilvanetworks"><i class="fa fa-linkedin"></i> </a></li>
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
                              <li><a href="/news">News</a></li>
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
                            <li><i class="fa fa-map-marker"></i> <p>Chennai, Tamil Nadu, India.</p> </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:919791136945"> <span>+91 91765 69459 </span> </a> </li>
                            <li><i class="fa fa-envelope-o"></i>info@vilvabusiness.com</li>
                          </ul>
                        </div>
                    </div>

                <div class="footer-widget mt-20">

                <div class="row">
                  <div class="col-md-12 text-center">
                    <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="/"> Vilva Business </a> All Rights Reserved </p>
                  </div>
                 </div>
            </div>
           </div>
          </div>
        </footer>

        <!--footer -->

    </div>

    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <script src="https://app.aminos.ai/js/chat_plugin.js" data-bot-id="20138"></script>



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

</body>

</html>

