@extends( 'app.app' )
@section('section')
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/sato/12.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">{{ $posts->title or 'Opps something went wrong'}}</h2>
              <!-- <ul class="breadcrumb text-left text-black mt-10">
                <li><a href="page-about-style1.html#">Home</a></li>
           
                <li class="active text-gray-silver">who we are</li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>

 @if($posts)

<section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="../admins/images/posts/{{$posts->images}}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>  
                <div class="entry-title pt-10 pl-15">
                  <h4><a class="text-uppercase" href="#">{{$posts->title}} </a></h4>
                </div>
                <div class="entry-meta pl-15">
                  <ul class="list-inline">
                    <li>Posted: <span class="text-theme-colored2">{{date('d  M  Y', strtotime($posts->time))}}</span></li>
                    <!-- <li>By: <span class="text-theme-colored2">Admin</span></li> -->
                    <!-- <li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li> -->
                  </ul>
                </div>
                <div class="entry-content mt-10">
                  <p class="mb-15">{{$posts->content}}</p>
                 
                  <div class="mt-30 mb-0">
                    <h5 class="pull-left mt-10 mr-20 text-theme-colored2">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="blog-single-no-sidebar.html#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="blog-single-no-sidebar.html#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="blog-single-no-sidebar.html#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </article>
              <div class="tagline p-0 pt-20 mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <div class="tags">
                      <p class="mb-0"><i class="fa fa-tags text-theme-colored2"></i> <span>Tags:</span> {{$posts->tag}}</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="share text-right">
                      <p><i class="fa fa-share-alt text-theme-colored2"></i> Share</p>
                    </div>
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
        </div>
      </div>
    </section>

    @else
                                <div class="container" align='center'>Opps something went wrong <a class="btn btn-danger" href="{{url('blog')}}">Back to news</a></div>
                            @endif


@endsection