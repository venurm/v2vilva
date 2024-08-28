@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="About Us, Vilva Business, Company Overview, Our Team, Business Philosophy">
<meta name="description" content="Learn more about Vilva Business, our mission, vision, and the team dedicated to delivering exceptional solutions. Discover how we drive innovation and growth for our clients.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>About Us - Vilva Business</title>

@endsection

@section('content')

<link href="{{ asset('css/templatefour.css') }}" rel="stylesheet">

<body>
    <div class="about-us">
        <h1 data-aos="fade-right" data-aos-duration="1500">About Us</h1>
        <p>

            At Vilva Business, we are committed to delivering top-tier services and innovative products that empower <br> businesses to reach new heights. Our team of experts is dedicated to providing tailored solutions that meet the <br> unique needs of our clients, whether it's through our comprehensive service offerings or our cutting-edge products. <br> With a strong focus on quality and customer satisfaction, we strive to be your trusted partner in achieving success. <br> At Vilva Business, your growth is our priority.
        </p>
    </div>

    <div class="best-tech container mx-auto">
        <div class="best-row row">
            <div class="col-md-6 col-12">
                <div class="best-tech-img"data-aos="zoom-in" data-aos-duration="1500"></div>
            </div>
            <div class="col-md-6 col-12">
                <div class="best-tech-des">
                    <h5>Welcome to Vilva Business</h5>
                    <h2 data-aos="fade-right" data-aos-duration="1500">The best tech company</h2>
                    <p>
                        We specialize in delivering innovative solutions that drive business success. Our expertise spans across services and products designed to meet the evolving needs of our clients. With a commitment to excellence, we ensure that every project is handled with precision and care, helping you stay ahead in today’s competitive market. 
                    </p>
                    <button type="button" class="best-tech-btn"data-aos="fade-right" data-aos-duration="1500">Read More</button>
                </div>
            </div>
        </div>
        <div class="projects row container mx-auto">
            <div class="col-md-4 col-12">
                <div class="project-completed">
                    <h3 data-aos="fade-right" data-aos-duration="1500">90+ Project Completed</h3>
                    <p>

With over 500 successful projects, we excel in delivering exceptional results across diverse industries. Our expertise ensures top-quality solutions and client satisfaction every time.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="project-completed">
                    <h3 >100+ World wide clients</h3>
                    <p>
                        Serving over 100 clients globally, we deliver tailored solutions that meet diverse needs across various markets. Our international experience ensures high-quality service .
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="project-completed">
                    <h3 data-aos="fade-right" data-aos-duration="1500">500+ Company Project</h3>
                    <p>

                        We have successfully completed over 500 projects, demonstrating our expertise and commitment to excellence. Our extensive portfolio reflects our ability to tackle complex challenges .
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="history-all">
        <div class="history row container mx-auto">
            <div class="col-md-6 col-12">
                <div class="history-des">
                    <h5>Why We do this?</h5>
                    <h3 data-aos="fade-right" data-aos-duration="1500">Our History</h3>
                    <p>
                        At Vilva Business, we are driven by a passion for innovation and excellence. Our journey began with a vision to transform industries through cutting-edge technology and unparalleled service. We continuously strive to push boundaries, embracing challenges and delivering solutions that exceed expectations. Our commitment to quality and client satisfaction has shaped our legacy and fuels our drive to excel. Every project we undertake is a testament to our dedication to making a lasting impact.
                    </p>
                    <button type="button" class="history-btn" data-aos="fade-right" data-aos-duration="1500">See More</button>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="history-img">
                    <img class="img-fluid"  src="{{ asset('internal/templatesfourimages/vr.webp') }}" alt="" srcset="" data-aos="zoom-in" data-aos-duration="1500" />
                </div>
            </div>
        </div>
    </div>

    <div class="our-client container mx-auto pb-5">
        <h3 data-aos="fade-right" data-aos-duration="1500">Our Trustable Clients</h3>
        <div class="client-img">
            <img  src="{{ asset('internal/templatesfourimages/client-logo.webp') }}" alt="" srcset="" />
        </div>
        <p data-aos="fade-right" data-aos-duration="1500">Trusted by the world’s most ambitious teams.</p>
    </div>

    <div class="our-values pt-5">
        <div class="our-values-des container mx-auto">
            <h3>Our Values</h3>
            <div class="row py-5">
                <div class="col-md-4 col-12">
                    <div class="innovation-des">
                        <div class="innovation-img">
                            <img    src="{{ asset('internal/templatesfourimages/Icon.webp') }}" alt="" srcset="" data-aos="zoom-in" data-aos-duration="1200"/>
                        </div>
                        <h2>Innovation</h2>
                        <p>
                            Building an enterprisedoesn't need nightmare or cost your
                            thousands Felix is purpose built.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="innovation-des">
                        <div class="innovation-img">
                            <img src="{{ asset('internal/templatesfourimages/Icon2.webp') }}" srcset="" data-aos="zoom-in" data-aos-duration="1200"/>
                        </div>
                        <h2>Growth</h2>
                        <p>
                            Building an enterprisedoesn't need nightmare or cost your
                            thousands Felix is purpose built.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="innovation-des">
                        <div class="innovation-img">
                            <img src="{{ asset('internal/templatesfourimages/Icon3.webp') }}" alt="" srcset="" data-aos="zoom-in" data-aos-duration="1200"/>
                        </div>
                        <h2>Owner ship</h2>
                        <p>
                            Building an enterprisedoesn't need nightmare or cost your
                            thousands Felix is purpose built.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-md-4 col-12">
                    <div class="innovation-des">
                        <div class="innovation-img">
                            <img src="{{ asset('internal/templatesfourimages/Icon4.webp') }}" alt="" srcset="" data-aos="zoom-in" data-aos-duration="1200"/>
                        </div>
                        <h2>Team Work</h2>
                        <p>
                            Building an enterprisedoesn't need nightmare or cost your
                            thousands Felix is purpose built.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="innovation-des">
                        <div class="innovation-img">
                            <img src="{{ asset('internal/templatesfourimages/Icon5.webp') }}" alt="" srcset="" data-aos="zoom-in" data-aos-duration="1200" />
                        </div>
                        <h2>Commitment</h2>
                        <p>
                            Building an enterprisedoesn't need nightmare or cost your
                            thousands Felix is purpose built.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="innovation-des">
                        <div class="innovation-img">
                            <img src="{{ asset('internal/templatesfourimages/Icon6.webp') }}" alt="" srcset=""  data-aos="zoom-in" data-aos-duration="1200"/>
                        </div>
                        <h2>Positivity</h2>
                        <p>
                            Building an enterprisedoesn't need nightmare or cost your
                            thousands Felix is purpose built.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="get-in-touch container mx-auto pt-5" data-aos="zoom-in" data-aos-duration="1500">
        <h2>Get in touch</h2>
        <form action="#" method="POST">

        <div class="row">
            <div class="col-md-6 col-12">
                <label for="name">Full Name *</label> <br />
                <input type="text" id="name" name="name" placeholder="  &nbsp; &nbsp;Your full name" required>
            </div>
            <div class="col-md-6 col-12">
                <label for="name">Your email *</label> <br />
                <input type="text" id="name" name="name" placeholder=" &nbsp; &nbsp;example@yourmail.com" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6 col-12">
                <label for="name"> Company *</label> <br />
                <input type="text" id="name" name="name" placeholder="  &nbsp; &nbsp;your company name here" required>
            </div>
            <div class="col-md-6 col-12">
                <label for="name">Subject * </label> <br />
                <input type="text" id="name" name="name" placeholder="  &nbsp; &nbsp;How can we Help" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12 col-12">
                <label for="message">Message *</label> <br/>
                <textarea id="message" name="message" placeholder="  &nbsp; &nbsp;Hello there,I would like to talk about how to..." required></textarea>
    
            </div>
        </div>
        <button type="submit">Send Message</button>

    </form>



    </div>

  
</body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
@endsection          
          
