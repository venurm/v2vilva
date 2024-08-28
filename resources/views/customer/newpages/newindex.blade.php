@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="our product, business products, customer solutions, product support">
<meta name="description" content="Explore Vilva Business products designed to enhance your business efficiency. Discover solutions tailored to meet your specific needs.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Vilva Business</title>
@endsection

@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<div style="overflow:hidden">
    <div class="banner " >
      
        <div class="banner-img">
            <div class="ban-des pt-5">
                <h3  data-aos="fade-left"data-aos-duration="1000" >Innovative <br>
                    future of digital <br>
                    world</h3>
                <p >The innovative future of the digital world promises transformative AI-driven experiences and seamless automation, revolutionizing connectivity and engagement.</p>
                <div class="input"  data-aos="fade-left"data-aos-duration="1500">
                    <!--<input type="text" class="banner-input" >-->
                    <!--<button type="button" class="ban-btn" >Contact Now</button>-->
                    <a href="/contact">
    <button type="button" class="ban-btn">Contact Now</button>
</a>

               
                      
                </div>
            </div>
        </div>
    </div>
    <div class="welcome row container mx-auto mt-5">
        <div class="tech-img col-12 col-md-6" data-aos="zoom-in" data-aos-duration="1500"
>
             <div class="tech-img-des">
                <p>The best tech company
                    in the year</p>
            </div> 
           
        </div>
        <div class="tech-des pt-5 mt-4 col-12 col-md-6">
            <p style="color: #497DFF;font-weight:600" class="v">Welcome to Vilva Business</p>
            <h1 data-aos="fade-left"data-aos-duration="1500"
>The best tech company</h1>
            <p>Vilva Business stands at the forefront of technology innovation, delivering cutting-edge solutions that drive business success. Renowned for its excellence, Vilva Business offers unparalleled expertise and a comprehensive suite of IT services, solidifying its reputation as the best tech company.</p>
            <button type="button" class="Read"  data-aos="fade-left"data-aos-duration="1500">Read more</button>
        </div>
    </div>
    <div class="whatwedo pt-1 pt-md-5">
    <div class="  container mx-auto pt-1 pt-md-5  row">
        <div class="choose  col-12 col-md-5">
            <p style="color: #56FFBD;font-family: Montserrat;font-size: 24px;  ">Why Choose us</p>
            <h1 style="color: white;font-family: Urbanist;"  data-aos="fade-right"data-aos-duration="1000">What we do ?</h1>
            <p >
                At Vilva Business, we’re dedicated to shaping the future of technology for small and mid-sized businesses. Our commitment to providing secure, cost-effective platforms ensures that your business is not only protected but also empowered with cutting-edge solutions. We specialize in transforming your operations through innovative tech, enabling seamless automation and growth.</p>

            <div class="tick" style="color: white;">
                <ul class="whatwedo-tick">
                    <li><i class="fa-solid fa-check"></i> Secure, Cost-Effective Solutions
                    </li>
                    <li><i class="fa-solid fa-check"></i> Tech-Enabled Growth
                    </li>
                    <li><i class="fa-solid fa-check"></i>Tailored Solutions </li>
                </ul>
                <ul class="whatwedo-tick ps-0 ps-md-3">
                    <li><i class="fa-solid fa-check"></i> Future-Ready Innovation
                    </li>
                    <li><i class="fa-solid fa-check"></i>  Cost-Effective Services 
                    </li>
                    <li><i class="fa-solid fa-check"></i> AI Enhanced  </li>
                </ul>
            </div>
            <button type="button" class="see"  data-aos="fade-right"data-aos-duration="1000">See More</button>
        </div>
        <div class="  col-12 col-md-7">
            <div class="service-all">
                <div class="service1"data-aos="fade-left"data-aos-duration="1500">
                    <div class="service p-4"
                        style=" border: 1px solid #497DFF !important; background: #497DFF !important; color: white !important;">
                        <h2 style="color: white !important;font-size:28px"  >Website Development</h2>
                        <p style="color: white !important;">At Vilva Networks, we specialize in creating custom, responsive websites tailored to your business needs. Our expert team uses the latest technologies to ensure fast, secure, and solutions.
                        </p>
                    </div>

                    <div class="service p-4">
                        <h2>Android/IOS</h2>
                        <p>we offer comprehensive Android and iOS app development services to bring your mobile vision to life. Our skilled developers create seamless, high-performance apps tailored to your unique requirements, ensuring a user-friendly experience.
                        </p>
                    </div>
                </div>

                <div class="service2 ">
                    <div class="service p-4">
                        <h2>Digital Marketing</h2>
                        <p>Vilva Networks provides expert digital marketing services designed to boost your online presence and drive business growth. Our team uses data-driven strategies to create targeted campaigns across various platforms.</p>
                    </div>

                    <div class="service p-4">
                        <h2>Ecommerce Solutions</h2>
                        <p>Vilva Networks delivers secure, customizable e-commerce platforms that streamline operations, integrate payment gateways, and enhance customer engagement for business growth.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
    <div class="visionn row container mx-auto" >
        <div class="laptop col-12 col-md-6" data-aos="zoom-in" data-aos-duration="1500">
                <p class="cooldes" style="color:white" >Cool <br>
                    Design</p>
                <p class="uiux" style="color:white">UI/UX <br>
                    Design</p>
        </div>
        <div class="future-con col-12 col-md-6">
            <p style="color: #497DFF;font-family: Urbanist;font-size: 25px ;font-weight:600 !important">Our Vision</p>
            <h2 data-aos="fade-left"data-aos-duration="1000">We craft bright future</h2>
            <p>To become a reliable IT Consulting Partner for Fortune 500 Companies by 2030.</p>

            <div class="vision-all">
                <div class="vision1 row">
                    <div class="vision col-12 col-md-6">
                        <h5 style="color:#497DFF" data-aos="fade-left"data-aos-duration="1000">Our Vision </h5>
                        <p >Vilva Networks envisions leading the IT consulting industry by delivering innovative, scalable solutions and forging strategic partnerships with Fortune 500 giants by 2030.</p>
                    </div>
                    <div class="vision col-12 col-md-6">
                        <h5 style="color:#497DFF"data-aos="fade-left"data-aos-duration="1000">Our Mission</h5>
                        <p>Our mission is to craft a brighter future, becoming the go-to consultants for Fortune 500 companies by 2030.</p>
                    </div>
                </div>
                <div class="vision2 row">
                    <div class="vision col-12 col-md-6">
                        <h5 style="color:#497DFF"data-aos="fade-left"data-aos-duration="1000">Our Goal</h5>
                        <p>Our goal is to innovate and excel, establishing strong alliances with Fortune 500 companies by 2030.
                        </p>
                    </div>
                    <div class="vision col-12 col-md-6">
                        <h5 style="color:#497DFF"data-aos="fade-left"data-aos-duration="1000">Our Aim</h5>
                        <p>We aim to revolutionize IT consulting, becoming trusted partners for Fortune 500 companies by 2030.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" client-bg">
        <div class=" row container clientboxmove mx-auto">
            <div class="client-box col-12 p-md-5 p-2 pt-5  col-md-4">
                <p style="color: #56FFBD; font-family: Urbanist;font-size: 25px;">Our Client</p>
                <h6>We Work with Diverse Client Partnerships!</h6>
                <p style="color: white;">

                    We proudly collaborate with  diverse clients across various industries.  
                    Our commitment is to provide exceptional service and innovative solutions.  </p>

            </div>
            <div class="col-12 col-md-8">
            <div class="client-logo "data-aos="fade-left"data-aos-duration="1000">

               <ul class="horizontal-list d-flex align-center justify-content-evenly">
                <li style=" color: white;" class=" d-flex align-items-center"> <i class="fa-brands fa-google pe-1"></i> Google</li>
                <li style=" color: white;" class=" d-flex align-items-center"> <i class="fa-brands fa-amazon pe-1" class=" d-flex align-items-center"></i> Amazon</li>
                <li style=" color: white;" class=" d-flex align-items-center"> <i class="fa-brands fa-windows pe-1" class=" d-flex align-items-center"></i> Microsoft</li>
                <li style=" color: white;" class=" d-flex align-items-center"> <i class="fa-brands fa-airbnb pe-1"></i>Nvidia</li>
               </ul>                
 <div class="client-bg-des d-none d-md-block">
                <p style="color: white;font-family: Montserrat;">We have successfully partnered with a diverse range of clients, showcasing our experience and commitment to delivering exceptional results.</p>

                <button type="button" class="client-btn"data-aos="fade-left"data-aos-duration="1000">Read More</button>
            </div>
            </div>
            </div>

        </div>
    </div>

    <div class="industries py-5 row container mx-auto">
        <div class="mobile-img col-12 col-md-5" data-aos="zoom-in" data-aos-duration="1500"></div>
        <div class="industries-des col-12 col-md-7">
            <p style="color: #497DFF; font-family: Urbanist;font-size: 25px; font-style: normal;font-weight: 600;">
                Industries we serve</p>
            <p
                style="color: #040E56;font-family: Urbanist; font-size: 56px; font-style: normal;font-weight: 700;line-height: 56px; "data-aos="fade-left"data-aos-duration="1000">
                Why Us?</p>
            <p>At Vilva Business, we’re dedicated to shaping the future of technology for small and mid-sized businesses. Our commitment to providing secure, cost-effective platforms ensures that your business is not only protected but also empowered with cutting-edge solutions.</p>
            <ul class="tick-con">
                <li><i class="fa-solid fa-check"></i> Secure, Cost-Effective Solutions
                    </li>
                <li><i class="fa-solid fa-check"></i> Tech-Enabled Growth
                </li>
                <li><i class="fa-solid fa-check"></i> Future-Ready Innovation
                </li>
                <li><i class="fa-solid fa-check"></i> Commitment to Success
                </li>
            </ul>
        </div>
    </div>
    <div class="testimonials mt-3 pb-5">
        <div class="test-head">
            <p data-aos="fade-left"data-aos-duration="1000">Testimonial</p>
            <h3 style="color: white;"data-aos="fade-right"data-aos-duration="1000">What Our Client Say</h3>
        </div> 

          <!-- Swiper -->
          <div class="testi-arrows">
            <div class="swiper-button-next1"><i class="fa-solid fa-arrow-left" style="color: #040E56;"></i></div>
            <div class="swiper-button-prev1"><i class="fa-solid fa-arrow-right" style="color: #040E56;"></i> </div>
        </div>
  <div class="swiper mySwiper pb-5">
    <div class="swiper-wrapper carousel ">

        <div class="swiper-slide">
            <div class="testi-container">
                               <div class="">
                                   <img class="py-3" width="35px" src="{{ asset('internal/images/Iconcar.png') }}" alt="">
                                   <p>            The services provided by Vilva networks are exceptional. They offer 24/7 service and ensure accountability and thorough monitoring. The technical team is highly interactive, addressing queries promptly and efficiently. Project outlines are well-discussed, leading to excellent development outcomes. The final product is meticulously finished and developed to high standards.
                                </p>
                                   <div class="testi-profile d-flex items-center ">
                                       <div class=" pe-4">
                                           <img class="test-img" src="{{ asset('internal/images/siva.jpg') }}"  alt="">
                                       </div>
                                       <div class="">
                                           <p>Sivasamy</p>
                                           <p>Nalsshoppy</p>
                                       </div>
                                   </div>
                               </div>

                           </div>
     </div>
      <div class="swiper-slide">
        <div class="testi-container">
                           <div class="">
                               <img class="py-3"  width="35px"   src="{{ asset('internal/images/Iconcar.png') }}" alt="">
                               <p>            I give  Vilva team a 5/5 rating and have already recommended them to family and friends. I will continue to recommend them to everyone. Their technical team is supportive, interactive, and always goes above and beyond to fulfill our requirements.
                            </p>
                               <div class="testi-profile d-flex items-center ">
                                   <div class=" pe-4">
                                       <img class="test-img"  src="{{ asset('internal/images/aadhyar.jpg') }}" alt="">
                                   </div>
                                   <div class="">
                                       <p>Manikandan</p>
                                       <p>Adayar Handicrafts</p>
                                   </div>
                               </div>
                           </div>

                       </div>
 </div>
      <div class="swiper-slide">
        <div class="testi-container">
                           <div class="">
                               <img class="py-3"  width="35px"   src="{{ asset('internal/images/Iconcar.png') }}" alt="">
                               <p>  Vilva Team is building my E Commerce website and getting a great support from them understanding my exact requirements and I see a good progress in timely manner with regular update. Satisfied with their amazing service. Thanks and Wish you to continue to provide the excellent support with same spirit Team!
                            </p>
                               <div class="testi-profile d-flex items-center ">
                                   <div class=" pe-4">
                                       <img src="{{ asset('internal/images/ag.jpg') }}" class="test-img"  alt="">
                                   </div>
                                   <div class="">
                                       <p>Ananda</p>
                                       <p>A&G</p>
                                   </div>
                               </div>
                           </div>

                       </div>
 </div>
      <div class="swiper-slide">
             <div class="testi-container">
                                <div class="">
                                    <img class="py-3"  width="35px"   src="{{ asset('internal/images/Iconcar.png') }}" alt="">
                                    <p> Vilva Business excels in hands-on activities, ensuring they are conducted properly. Despite encountering significant technical difficulties, they were promptly addressed and resolved. Their spiral programming approach in hands-on activities, though challenging, is developed well. I have already recommended Vilva to my friends, and I give them a 100% 5-star rating, indicating complete satisfaction.
                                    </p>
                                    <div class="testi-profile d-flex items-center ">
                                        <div class=" pe-4">
                                            <img src="{{ asset('internal/images/ram.jpg') }}" class="test-img"  alt="">
                                        </div>
                                        <div class="">
                                            <p> RamDhanapal</p>
                                            <p>Ayyawins</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
      </div>
      <div class="swiper-slide">
        <div class="testi-container">
                           <div class="">
                               <img class="py-3"  width="35px"   src="{{ asset('internal/images/Iconcar.png') }}" alt="">
                               <p>The development of the Thaithingal website has experienced significant growth over the last decade, and it is imperative to acknowledge the instrumental role of “Vilva Networks” in contributing to this achievement through our unwavering commitment. The influence of Vilva Networks on our journey to success has been truly impactful.

</p>
                               <div class="testi-profile d-flex items-center ">
                                   <div class=" pe-4">
                                       <img src="{{ asset('internal/images/thaithingal.jpg') }}" class="test-img"  alt="">
                                   </div>
                                   <div class="">
                                       <p>Manikandan</p>
                                       <p>Thaithingal</p>
                                   </div>
                               </div>
                           </div>

                       </div>
 </div>
    </div>
    
  </div>


        </div>

    </div>
    <div class="intresting">
        <div class="keyboard-img">
            <div class="intresting-des pb-3">
                <p >Want Building Your Future Today! Your journey to success starts with the right partnership!</p>
                <h5>Begin Your Success Story!</h5>
                <button type="button" class="touch-btn" data-aos="fade-left"data-aos-duration="1000">Join Today!</button>
            </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

   @endsection