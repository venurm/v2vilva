@extends('customer.layouts.app')

@php
    $seo = request()->route()->parameter('param');

    $article = \App\Models\Article::where('status', 1)
        ->where('seo_url', $seo)
        ->first();

    if (!$article) {
        header("Location: https://www.vilvabusiness.com/blog");
        exit();
    }
@endphp

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="{{ $article->meta_keywords ?? '' }}" />
<meta name="description" content="{{ $article->meta_description ?? '' }}" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>{{ $article->meta_title ?? 'Blog - Vilva Business' }}</title>
@endsection

@section('content')

<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-video-src="https://www.youtube.com/watch?v=WuRf2bDf25U">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title-name">
          <h1>Blog </h1>
          <p>Stay Updated with Our Articles</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="blog white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        @if($article)
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
            <a href="{{ url('news/'.$article->seo_url) }}" target="_blank">
              <img class="img-fluid" src="{{ $article->image_url }}" alt="">
            </a>
          </div>
          <div class="blog-detail">
            <div class="entry-title mb-10">
              <a href="{{ url('news/'.$article->seo_url) }}" target="_blank">{!! $article->title !!}</a>
            </div>
            <div class="entry-meta mb-10">
              <ul>
                <li><a><i class="fa fa-user-o"></i>{{ $article->published_by }}</a></li>
                <li><a><i class="fa fa-calendar-o"></i> {{ date('d M Y', strtotime($article->published_at)) }}</a></li>
              </ul>
            </div>
            <div class="entry-content">
              <p class="gray-600">{!! $article->short_content !!}</p>
              {!! $article->content !!}
            </div>
            <div class="entry-share clearfix">
              <div class="entry-button">
                <a class="button arrow"><i class="fa fa-user-o" aria-hidden="true"></i> Author: {{ $article->published_by }}</a>
              </div>
              <div class="social list-style-none float-end">
                <strong>Share : </strong>
                <ul>
                  <li>
                    <!-- Load Facebook SDK for JavaScript -->
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <!-- Your share button code -->
                    <div class="fb-share-button"  data-href="{{ url('blog/'.$article->seo_url) }}" data-layout="button_count"></div>
                  </li>
                  <li>
                    <a style="border: none; font-size: 17px" class="fa fa-whatsapp" href="https://wa.me/?text={{ url('blog/'.$article->seo_url) }}"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>
      <div class="col-lg-3 sm-mt-50">
        <div class="sidebar-widget sm-mt-30">
          <h6 class="mb-20">Search</h6>
          <div class="widget-search">
            <i class="fa fa-search"></i>
            <input type="search" class="form-control" placeholder="Search...." />
          </div>
        </div>
        <div class="sidebar-widget">
          <h6 class="mt-40 mb-20">About the blog</h6>
          <p>Business is the <strong>practice</strong> of making one's living or making money by producing or buying and selling products. It is also "any activity or enterprise entered into for profit.<br/><br/>Technology is the application of knowledge to reach practical goals in a specifiable and reproducible way. The word technology may also mean the product of such an endeavor.</p>
        </div>
        <div class="sidebar-widget">
          <h6 class="mt-40 mb-20">Recent Posts</h6>
          @foreach($latestnews as $news)
          <div class="recent-post clearfix">
            <div class="recent-post-image">
              <img class="img-fluid" src="{{ $news->urlToImage }}" alt="">
            </div>
            <div class="recent-post-info">
              <a href="{{ url('news/'.$news->seo_url) }}">{{ $news->title }}</a>
              <span><i class="fa fa-calendar-o"></i>{{ date('F d, Y', strtotime($news->publishedAt)) }}</span>
            </div>
          </div>
          @endforeach
        </div>
        <div class="sidebar-widget">
          <h6 class="mt-40 mb-20">Category</h6>
          <ul class="widget-categories">
            <li><a href="{{ url('news-business') }}"><i class="fa fa-angle-double-right"></i> Business</a></li>
            <li><a href="{{ url('news-technology') }}"><i class="fa fa-angle-double-right"></i> Technology</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Marketing</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Applications</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Software</a></li>
          </ul>
        </div>
        <div class="sidebar-widget">
          <h6 class="mt-40 mb-20">Tags</h6>
          <div class="widget-tags">
            <ul>
              @foreach($tags as $tag)
                <li><a href="{{ url('news-tags/'.$tag) }}">{{ $tag }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
