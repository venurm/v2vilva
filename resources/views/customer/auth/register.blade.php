@extends('customer.layouts.newnavbar')

@section('head')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="register, sign up, create account, user registration">
    <meta name="description" content="Register with Vilva Business - B2B All-in-One Service Portal. Create your account to access app development, web development, hosting services, SEO services, and digital marketing solutions.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Register with Vilva Business</title>

@endsection

@section('content')



<!--=================================
 signup-->

<section class="height-100vh d-flex align-items-center page-section-ptb login login-gradient-02 jarallax" data-speed="0.6" data-video-src="mp4:video/video.mp4,webm:video/video.webm,ogv:video/video.ogv">
  <div class="container">
     <div class="row g-0 justify-content-center">
       <div class="col-lg-4  col-md-6 login-fancy-bg bg-overlay-black-30 parallax" style="background: url(images/signup/04.jpg);">
         <div class="login-fancy pos-r">
          <h2 class="text-white mb-20">Vilva Business!</h2>
          <p class="mb-20 text-white">Join the Vilva Business community to unlock exclusive features, access personalized services, and stay updated with the latest offerings. Register now and start your journey towards seamless business solutions..</p>
          <!--<ul class="list-unstyled list-inline-item pos-bot pb-30">-->
          <!--  <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>-->
          <!--  <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>-->
          <!--</ul>-->
         </div>
       </div>
       <div class="col-lg-4 col-md-6 white-bg position-relative">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">Signup</h3>

                <form action="{{ url('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="section-field mb-20 col-sm-6">
                            <label class="mb-10" for="first_name">First name<span class="required">*</span> </label>
                            <input id="first_name" class="web form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" type="text" placeholder="First name" name="first_name" required>
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="section-field mb-20 col-sm-6">
                            <label class="mb-10" for="last_name">Last name<span class="required">*</span> </label>
                            <input id="last_name" class="web form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" type="text" placeholder="Last name" name="last_name" required>
                            @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="section-field mb-20">
                        <label class="mb-10" for="mobile">Mobile<span class="required">*</span> </label>
                        <input type="text" placeholder="Mobile*" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" name="mobile" required>
                        @error('mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="section-field mb-20">
                        <label class="mb-10" for="email">Email<span class="required">*</span> </label>
                        <input type="email" placeholder="Email*" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="section-field mb-20">
                        <label class="mb-10" for="password">Password<span class="required">*</span> </label>
                        <input id="password" class="password form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="button black">
                        <span>Signup</span>
                        <i class="fa fa-check"></i>
                    </button>
                    <p class="mt-20 mb-0">Already have an account? <a href="{{ url('login') }}">Login here</a></p>
                </form>

        </div>
      </div>
  </div>
</section>

<!--=================================
 signup-->
 


@endsection



