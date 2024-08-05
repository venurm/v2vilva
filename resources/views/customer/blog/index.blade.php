@extends('customer.layouts.app')

@section('head')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="business blog, industry insights, latest trends, expert opinions">
    <meta name="description" content="Explore insightful articles and industry updates on the Vilva Business blog. Stay informed about the latest trends in app development, web development, hosting services, SEO, and digital marketing.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Vilva Business Blog - Industry Insights and Updates</title>
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
          <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="blog white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <?php
        $articles = \App\Models\Article::where('status', 1)->inRandomOrder()->paginate(6);
      ?>
      @foreach($articles as $blog)
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
            <img class="img-fluid" src="{{ $blog->image_url }}" alt="">
          </div>
          <div class="blog-detail">
            <div class="entry-title mb-10">
              <a href="{{ URL('blog/'.$blog->seo_url.'') }}" target="_blank">{!! $blog->title !!}</a>
            </div>
            <div class="entry-meta mb-10">
              <ul>
                <li><i class="fa fa-user-o"></i>{{ $blog->published_by }}</li>
                <li><i class="fa fa-calendar-o"></i>{{ date('d M Y', strtotime($blog->published_at)) }}</li>
              </ul>
            </div>
            <div class="entry-content">
                <p>
                    @php
                        $shortContent = substr($blog->short_content, 0, 200);
                        $shortContent .= strlen($blog->short_content) > 200 ? '...' : '';
                        echo $shortContent;
                    @endphp
                </p>
            </div>
            <div class="entry-share clearfix">
              <div class="entry-button">
                <a class="button arrow" href="{{ URL('blog/'.$blog->seo_url.'') }}" target="_blank">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
              <div class="social list-style-none float-end">
                <strong>Share : </strong>
                <ul>
                  <li>
                    <!-- Load Facebook SDK for JavaScript -->
                    <div id="fb-root"></div>
                    <script>
                      (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                      }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <!-- Your share button code -->
                    <div class="fb-share-button" data-href="{{ URL('blog/'.$blog->seo_url.'') }}" data-layout="button_count"></div>
                  </li>
                  <li>
                    <a style="border: none; font-size: 17px" class="fa fa-whatsapp" href="https://wa.me/?text={{ URL('blog/'.$blog->seo_url.'') }}"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      @endforeach
      
        <div class="row">
           <div class="col-lg-12 col-lg-12">
              <div class="entry-pagination">
                <nav aria-label="Page navigation example text-center">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        {{ $articles->links() }}
                      </li>
                    </ul>
                  </nav>
              </div>
            </div>
        </div>
   
    </div>
  </div>
</section>

@endsection
