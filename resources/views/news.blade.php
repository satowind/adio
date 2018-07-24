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
              <h2 class="title text-white">Our News</h2>
              <!-- <ul class="breadcrumb text-left text-black mt-10">
                <li><a href="page-about-style1.html#">Home</a></li>
           
                <li class="active text-gray-silver">who we are</li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>





    <section id="news">
      <div class="container">
        <div class="section-content">
          <div class="row">

          	 @foreach ($posts as $post )
            <div class="col-sm-6 col-md-4">
              <article class="post clearfix mb-30 mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img style="height:200px;" src="admins/images/posts/{{$post->images}}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10 bg-lighter">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">{{date('d', strtotime($post->time))}}</li>
                        <li class="font-12 text-white text-uppercase">{{date('M', strtotime($post->time))}}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="blog-grid-3-column.html#">{{$post->title}}</a></h4>
                       <!--  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>   -->                     
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">{{substr($post->content, 0, 100)}}</p>
                  <a class="btn btn-theme-colored2 btn-sm text-white" href="news_single/{{$post->id}}"> View Details</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>

            @endforeach


           

           
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection