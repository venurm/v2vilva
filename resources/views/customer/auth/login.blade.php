@extends('customer.layouts.newnavbar')

@section('head')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="login, sign in, user authentication, secure login">
    <meta name="description" content="Login to Vilva Business - B2B All-in-One Service Portal. Access your account securely to manage app development, web development, hosting services, SEO services, and digital marketing solutions.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Login to Vilva Business</title>
@endsection

@section('content')


<!--=================================
 login-->

<section class="height-100vh d-flex align-items-center page-section-ptb login login-gradient-02 jarallax" data-speed="0.6" data-video-src="mp4:video/video.mp4,webm:video/video.webm,ogv:video/video.ogv">
  <div class="container">
     <div class="row g-0 justify-content-center position-relative">
       <div class="col-lg-4 col-md-6 login-fancy-bg bg-overlay-black-30" style="background: url(images/login/04.jpg);">
         <div class="login-fancy pos-r">
          <h2 class="text-white mb-20">LOGIN HERE!</h2>
          <p class="mb-20 text-white">we offer a suite of solutions tailored to meet the diverse needs of your business, from digital marketing and AI-powered tools to travel management and secure payment gateways. Logging in to your account gives you access to our powerful tools and services, designed to help you thrive in today’s competitive market..</p>
          <!--<ul class="list-unstyled pos-bot pb-30">-->
          <!--  <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>-->
          <!--  <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>-->
          <!--</ul>-->
         </div>
       </div>
       <div class="col-lg-4 col-md-6 white-bg">
        <div class="login-fancy pb-40 clearfix">
            
            <h3 class="mb-30">Login</h3>
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <div class="section-field mb-20">
                    <label class="mb-10" for="email">Email* </label>
                    <input id="email" class="web form-control @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="section-field mb-20">
                    <label class="mb-10" for="password">Password* </label>
                    <input id="password" class="password form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="section-field">
                    <div class="remember-checkbox mb-30">
                        <input type="checkbox" class="form-control" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="mb-2" for="remember"> Remember me</label>
                        <a href="#" class="float-end">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" class="button black">
                    <span>Log in</span>
                    <i class="fa fa-check"></i>
                </button>
            </form>
            <p class="mt-20 mb-0">Don't have an account? <a href="{{ url('register') }}">Create one here</a></p>

        </div>
      </div>
  </div>
</section>

<!--=================================
 login-->

@endsection
