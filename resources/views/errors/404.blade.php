@extends('customer.layouts.app')

@section('head')
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="app development, web development, hosting services, SEO services, digital marketing">
  <meta name="description" content="Vilva Business is a B2B all-in-one service portal offering solutions in app development, web development, hosting services, SEO services, digital marketing, and more. We cater to all aspects needed for a successful business's online presence and growth.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Vilva Business - B2B All-in-One Service Portal</title>
@endsection

@section('content')

<section class="page-section-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                     <div class="error-block text-center clearfix">
                      <div class="error-text">
                        <h2>404</h2>
                        <span>Error </span>
                      </div>
                      <h1 class="theme-color mb-40">Ooopps :(</h1>
                      <p>The Page you were looking for, couldn't be found.</p>
                   </div>
                   <div class="error-info">
                      <p class="mb-50">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                      <a class="button xs-mb-10" href="/">back to home</a>
                      <a class="button button-border black" href="#" onclick="goBack()">back to Prev page</a>
                    </div>

                    <script>
                      function goBack() {
                        window.history.back();
                      }
                    </script>

                </div>
            </div>
        </div>
    </section>

@endsection