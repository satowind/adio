@extends( 'app.app' )
@section('section')
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/sato/12.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Who we are</h2>
              <!-- <ul class="breadcrumb text-left text-black mt-10">
                <li><a href="page-about-style1.html#">Home</a></li>
           
                <li class="active text-gray-silver">who we are</li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="box-hover-effect play-button">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/sato/11.jpg" alt="project">
                  </div>
                  <div class="overlay-shade"></div>
                  <div class="text-holder text-holder-middle">
                    <a href="https://www.youtube.com/watch?v=F3QpgXBtDeo" data-lightbox-gallery="youtube-video" title="Youtube Video"><img alt="" src="images/play-button/s8.png"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="text-uppercase mt-0 mt-sm-30">WE HELP YOU GROW YOUR BUSINESS</h2>
              <h4 class="text-theme-colored">Through our very flexible loan services and Good business advise</h4>
              <p>At hybrid we have experts in different fields to help you grow your business and also help you make good use of the loan we offer to be able to take your business to another level </p>
                <div class="singnature mt-20">
                  <!--<img src="images/signature.png" alt="img1">-->
                </div>
                <a href="#" class="btn btn-flat btn-colored btn-theme-colored mt-15 mr-15">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  

    <!-- Section: Project -->
    <section id="Project" class="bg-lighter">
     <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">OUR  <span class="text-theme-colored2">COMPANY</span></h2>
              <p>Hybrid Capital & Advisory Company Limited (“Hybrid Capital”) is a financial services company engaged in the provision of consumer & business loans; financial & business advisory; and transaction & payment services. We are Licensed Money Lender and we leverage innovative technology to make financial services more inclusive, innovative, accessible and affordable for everyone.</p>
            </div>
          </div>
        </div>
       
      </div >
    </section>

    <section id="Project" class="bg-lighter">
     <div class="container">
        <div class="section-title ">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase text-center line-bottom-double-line-centered mt-0">BUSINESS   <span class="text-theme-colored2">DIVISIONS</span></h2>
              <ul class='ul '>
              <li>HybridMoni: Credit Services</li>
              <li>Hybridbhank: Agency Banking (transaction & payment services)</li>
              <li>HybridAdvisors: Advisory Services</li>
             </ul>
            </div>
          </div>
        </div>
       
      </div >
    </section>

     <section class="bg-silver-light" style="border-top: 1px solid #d9d9d9;">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase line-bottom-double-line-centered text-theme-colored mt-0">WE ARE HYBRID <span class="text-theme-colored2">CAPITAL</span></h2>
              
              <p>Hybrid Capital & Advisory Company Limited (“Hybrid Capital”) is a financial services company engaged in the provision of financial & business advisory; consumer & business loans; and transaction & payment services. The Company leverages innovative technology to make financial services more inclusive, innovative, accessible and affordable for everyone.</p>
            </div>
          </div>
          <div class="row mt-40">
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40">
              <div class="project">
                <div class="thumb">
                <img class="img-fullwidth" src="images/sato/3.jpg" alt="">
                  <div class="hover-link">
                    <a href="{{url('/hybridmoni')}}"><i class="fa fa-bar-chart"></i></a>
                  </div>
                </div>
                <h3 class="text-theme-colored">Lending via HybridMoni</h3>
                <p>HybridMoni is the Registered Business name and Trade Mark of Hybrid Capital engaged in providing quick, affordable and flexible loans ...</p>
                <a href="{{url('/hybridmoni')}}" class="btn btn-sm btn-theme-colored2 text-white">Read more</a>
                <a href="#" class="btn btn-sm btn-theme-colored text-white">Apply Now</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40">
              <div class="project">
                <div class="thumb">
                <img class="img-fullwidth" src="images/sato/2.jpg" alt="">
                  <div class="hover-link">
                    <a href="{{url('/hybridbhank')}}"><i class="fa fa-bar-chart"></i></a>
                  </div>
                </div>
                <h3 class="text-theme-colored">Agency Banking via HybridBhank</h3>
                <p>HybridBhank is a partnership with banks & other financial institutions that helps to bring banking services directly to the doorsteps of everyone. With HybridBhank; individuals, households and businesses do not need to leave their premises or immediate environs to access basic banking services. .</p>
                <a href="{{url('/hybridbhank')}}" class="btn btn-sm btn-theme-colored2 text-white">Read more</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0">
              <div class="project">
                <div class="thumb">
                <img class="img-fullwidth" src="images/sato/1.jpg" alt="">
                  <div class="hover-link">
                    <a href="{{url('/advisory')}}"><i class="fa fa-bar-chart"></i></a>
                  </div>
                </div>
                <h3 class="text-theme-colored">Advisory Services</h3>
                <p>Business & Financial Advisory which include Market Studies,  Business Plan,  Financial Model, Strategy Formulation & Audit.Capital-raise Advisory & Syndication Agent which include Debt, Equity, Hybrid.</p>
                <a href="{{url('/advisory')}}" class="btn btn-sm btn-theme-colored2 text-white">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored2" style="border-top: 1px solid #d9d9d9; background-color:#fafafa !important">
      <div class="container pt-10 pb-0" style="background-color:#fafafa">
        <div class="row" style="background-color:#fafafa">
          <div class="col-md-12" style="background-color:#fafafa">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center" style="background-color:#fafafa; padding: 3%">
             <div class="item"> <a href="#"><img src="images/sato/20.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/21.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/22.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/20.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/21.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/22.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/20.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/21.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/sato/22.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- end main-content -->
  </div>

  <!-- Footer -->
  @endsection
  