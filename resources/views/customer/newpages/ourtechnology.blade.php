@extends('customer.layouts.newnavbar')

@section('head')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="technology solutions, innovative technology, digital solutions, tech services">
<meta name="description" content="Explore Vilva Business's technology solutions and innovative digital services. Discover how our tech services can empower your business with cutting-edge solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Our Technology - Vilva Business</title>
@endsection

@section('content')

<link rel="stylesheet" href="{{ asset('internal/technology.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<body>
  
     <div class="tech-heading" style="margin-top:40px;">
        <h1 style="color: #007e60;">Cutting-Edge Technologies for a Smarter Futured</h1>
        <p  style="font-size: 16px;">At the forefront of innovation, our technologies encompass a diverse range of cutting-edge solutions designed
            to drive progress and efficiency. Our portfolio includes advanced artificial intelligence and machine
            learning systems that optimize data analysis and decision-making processes. We specialize in developing
            high-performance software platforms and cloud computing services that ensure seamless connectivity and
            scalability.</p>
    </div>
        <div class="technology-all">

    
    <div class="tech-cont">
        <div class="logos container container-fluid" >
            <div class="logos-slide">
                <img src="internal/logo/coding.png" alt="" srcset="">
                <img src="internal/logo/haskell.png" alt="" srcset="">
                <img src="internal/logo/mysql (1).png" alt="" srcset="">
                <img src="internal/logo/node-js.png" alt="" srcset="">
                <img src="internal/logo/php (1).png" alt="" srcset="">
                <img src="internal/logo/postgre.png" alt="" srcset="">
                <img src="internal/logo/python (1).png" alt="" srcset="">
                <img src="internal/logo/structure.png" alt="" srcset="">
            </div>
            <div class="logos-slide">
                <img src="internal/logo/coding.png" alt="" srcset="">
                <img src="internal/logo/haskell.png" alt="" srcset="">
                <img src="internal/logo/mysql (1).png" alt="" srcset="">
                <img src="internal/logo/node-js.png" alt="" srcset="">
                <img src="internal/logo/php (1).png" alt="" srcset="">
                <img src="internal/logo/postgre.png" alt="" srcset="">
                <img src="internal/logo/python (1).png" alt="" srcset="">
                <img src="internal/logo/structure.png" alt="" srcset="">
            </div>
        </div>
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- <div class="inner-carousil">
                        <img src="./logo/node-js.png" alt="" srcset="" style="height: 50px;width: 50px;">
                        <h3>NODE</h3>
                        <p>Node.js is a powerful JavaScript runtime built on Chrome's V8 engine, enabling server-side
                            execution of JavaScript code. It is designed for building scalable network applications with
                            its event-driven, non-blocking I/O model. Node.js is widely used for developing web servers,
                            real-time applications, and microservices.</p>
                    </div>
                    <div class="inner-carousil">
                        <img src="./logo/structure.png" alt="" srcset="" style="height: 50px;width: 50px;">
                        <h3>REACT</h3>
                        <p>React is a popular JavaScript library for building user interfaces, particularly single-page applications. Developed by Facebook, it enables developers to create reusable UI components and manage the state efficiently. React's virtual DOM and declarative approach enhance performance and simplify the development.
                        </p>
                    </div> -->
                    <div class="inner-carousil">
                        <img src="internal/logo/php (1).png" alt="" srcset="" style="height: 50px;width: 50px;">
                        <h3>PHP</h3>
                        <p  style="font-size: 16px;">PHP is a widely-used open-source scripting language especially suited for web development. It is embedded within HTML and executes on the server, generating dynamic page content. Known for its ease of use and compatibility with various databases, PHP powers many of the world's websites and web applications.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <!-- <div class="inner-carousil">
                        <img src="./logo/node-js.png" alt="" srcset="" style="height: 50px;width: 50px;">
                        <h3>NODE</h3>
                        <p>Node.js is a powerful JavaScript runtime built on Chrome's V8 engine, enabling server-side
                            execution of JavaScript code. It is designed for building scalable network applications with
                            its event-driven, non-blocking I/O model. Node.js is widely used for developing web servers,
                            real-time applications, and microservices.</p>
                    </div> -->
                    <div class="inner-carousil">
                        <img src="internal/logo/structure.png" alt="" srcset="" style="height: 50px;width: 50px;">
                        <h3>REACT</h3>
                        <p  style="font-size: 16px;">React is a popular JavaScript library for building user interfaces, particularly single-page applications. Developed by Facebook, it enables developers to create reusable UI components and manage the state efficiently. React's virtual DOM and declarative approach enhance performance and simplify the development.
                        </p>
                    </div>
                   
                </div>
                <div class="swiper-slide">
                    <div class="inner-carousil">
                        <img src="internal/logo/node-js.png" alt="" srcset="" style="height: 50px;width: 50px;">
                        <h3>NODE</h3>
                        <p  style="font-size: 16px;">Node.js is a powerful JavaScript runtime built on Chrome's V8 engine, enabling server-side
                            execution of JavaScript code. It is designed for building scalable network applications with
                            its event-driven, non-blocking I/O model. Node.js is widely used for developing web servers,
                            real-time applications, and microservices.</p>
                    </div>
                   
                   
                </div>
                <div class="swiper-slide">
                    <div class="inner-carousil">
                        <img src="internal/logo/mysql (1).png" alt="" style="height: 50px; width: 50px;">
                        <h3>MYSQL</h3>
                        <p  style="font-size: 16px;">MySQL is a widely-used open-source relational database management system (RDBMS) known for its reliability, performance, and ease of use. It supports structured query language (SQL) for managing and manipulating databases, making it ideal for a variety of applications, from small projects to large-scale enterprise systems.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="inner-carousil">
                        <img src="internal/logo/python (1).png" alt="" srcset="" style="height: 50px; width: 50px;">
                        <h3>PYTHON</h3>
                        <p  style="font-size: 16px;">Python is a versatile, high-level programming language known for its readability and ease of use. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming, making it suitable for a wide range of applications. Python's extensive standard library and active community contribute to its popularity.</p>
                    </div>
                 
                </div>
                <div class="swiper-slide">
                  
                    <div class="inner-carousil">
                        <img src="internal/logo/coding.png" alt="" style="height: 50px; width: 50px;">
                        <h3>MACHINE LEARNING</h3>
                        <P  style="font-size: 16px;">Machine learning is a subset of artificial intelligence that enables systems to learn and improve from experience without explicit programming. It involves the use of algorithms and statistical models to analyze and interpret data, making predictions or decisions. Applications of machine learning span various fields, including finance, healthcare, and technology.</P>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="inner-carousil">
                        <img src="internal/logo/postgre.png" alt="" style="height: 50px; width: 50px;">
                        <h3>POSTGRES</h3>
                        <p  style="font-size: 16px;">PostgreSQL is an advanced, open-source relational database management system known for its robustness, extensibility, and standards compliance. It supports a wide range of data types, complex queries, and advanced features like transactions, indexing, and concurrency control. Ideal for both small and large-scale applications, PostgreSQL excels in reliability, performance, and scalability.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                  <div class="inner-carousil">
                        <img src="internal/logo/Laravel.png" alt="" style="height: 50px; width: 50px;">
                        <h3>LARAVEL</h3>
                        <p  style="font-size: 16px;">Laravel is a popular PHP web application framework designed for building modern, scalable applications. It offers an elegant syntax, robust tools like Eloquent ORM, and features such as routing, authentication, and templating. Laravel's ecosystem and developer-friendly approach streamline development, making it a top choice for rapid application development.</p>
                    </div>
                
                </div>
                <div class="swiper-slide">
                 <div class="inner-carousil">
                        <img src="internal/logo/haskell.png" alt="" style="height: 50px; width: 50px;">
                        <h3>Haskell</h3>
                        <p  style="font-size: 16px;">Haskell is a purely functional programming language with strong static typing and lazy evaluation. It was named after the logician Haskell Curry and has been designed with a focus on robustness, performance, and high-level abstractions, making it well-suited for academic research, as well as industrial applications.</p>
                    </div>
                 
                </div>
                
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="tech-foot container">
        <h3 class="pb-5" style="color: #007e60;">Elevate the latest tech innovation</h3>
        <p class="pb-5"  style="font-size: 16px;">
            Our commitment to innovation extends to every aspect of our technological stack, enabling us to deliver solutions that not only meet but exceed expectations. As we continue to embrace emerging technologies, we remain dedicated to pushing the boundaries of what's possible in the digital realm.
        </p>
    </div>
    
                </div>




    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: {
                delay: 15500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1000: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                    centeredSlides: false
                }
            }
        });
    });
</script>


    
    

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   

   
</body>



@endsection