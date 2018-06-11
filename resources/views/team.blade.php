@extends( 'app.app' )
@section('section')
      <!-- breadcrumbs start-->
      <section style="background-image:url('img/bg-1.jpg');" class="breadcrumbs">
        <div class="container">
          <div class="text-center breadcrumbs-item">
            <h1>Our Team</h1><a href="#">home</a><i class="fa fa-angle-right"></i><a href="#">pages</a><i class="fa fa-angle-right"></i><a href="#">Our Team</a>
          </div>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
    </header>
    <!-- ! header page-->
    <div class="content-body">
      <!-- page section about-->
      <section class="page-section pb-0">
        <div class="container">  
          <div class="row mb-10">
            <div class="col-md-8 col-md-offset-2 mb-20">
              <h2 class="title-section mb0 mt-0 text-center">Meet the team </h2>
              <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
              <p class="text-center mb-30"></p>
            </div>
            <!-- service item-->
            <div class="col-sm-4 mb-sm-40">
              <div class="service-item icon-center"><i class="flaticon-computer-1 cws-icon type-1 color-2"></i>
                <h3>Professional Team</h3>
                {{--  <p class="mb-0">Donec quam felis, ultricies nec, pellentesque eu, bulsi pretium quis, sem massa quis enim.  <a href="#" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>  --}}
              </div>
            </div>
            <!-- service item-->
            <!-- ! service item-->
            <div class="col-sm-4 mb-sm-40">
              <div class="service-item icon-center"><i class="flaticon-work cws-icon type-1 color-2"></i>
                <h3>High Rating</h3>
                {{--  <p class="mb-0">In enim justo, rhoncus ut, imperdiet a, venenatis vitae justo moest ransu quis lorem. <a href="#" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>  --}}
              </div>
            </div>
            <!-- service item-->
            <!-- ! service item-->
            <div class="col-sm-4">
              <div class="service-item icon-center"><i class="flaticon-people-1 cws-icon type-1 color-2"></i>
                <h3>Experts</h3>
                {{--  <p class="mb-0">Nullam dictum felis eu pede mollis pretium. Integer daser tincidunt. Cras dapibus.  <a href="#" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>  --}}
              </div>
            </div>
            <!-- ! service item-->
          </div><img src="pic/promo-7.jpg" alt>
        </div>
      </section>
      <!-- ! page section about-->
      <!-- page section about-->
      <section class="page-section cws_prlx_section bb-gray bt-gray"><img src="img/parallax-2.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 mb-sm-30">
              <div style="height:270px" class="embed-responsive">
                <iframe src="https://www.youtube.com/embed/fP2RTyJ8FYo" class="embed-responsive-item"></iframe>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 align-center">
              <!-- section title-->
              <h2 class="title-section mt-20 mb-0 mt-md-0">Watch our video</h2>
              <!-- ! section title-->
              <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
              <p class="mb-50 mb-md-30">Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, <br /> a accu msan nisi mauris ac eros. Suspendisse faucibus, nunc et pellen esla.</p><a href="#" class="cws-button with-icon alt ml-20 mb-md-20 mb-sm-0">Subscribe<i class="flaticon-note-1"></i></a><a href="#" class="cws-button with-icon alt color-3">Watch more<i class="flaticon-social-5"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!-- ! page section about-->
      <!-- section team-->
      <section class="page-section bb-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <!-- title section-->
              <h2 class="title-section text-center mt-0 mb-0">Our Board</h2>
              <!-- ! title section-->
              <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
              <p class="text-center mb-30">Meet The Board Members. </p>
            </div>
          </div>
          <div class="row cws-multi-col mb-50">
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/1.jpg" data-at2x="pic/team/1@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">	Dele FASEEMO</h3>
                      <div class="positions"><a href="#">[ Senior Developer ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/2.jpg" data-at2x="pic/team/2@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">	Juliet FASEEMO</h3>
                      <div class="positions"><a href="#">[ Business Manager ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/3.jpg" data-at2x="pic/team/3@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">John Doe</h3>
                      <div class="positions"><a href="#">[ Owner, CEO ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/4.jpg" data-at2x="pic/team/4@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">Janet Doe</h3>
                      <div class="positions"><a href="#">[ Creative Designer ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
          
            
            
           
          </div>
        </div>
      </section>
      <!-- ! section team-->

       <!-- section team-->
      <section class="page-section bb-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <!-- title section-->
              <h2 class="title-section text-center mt-0 mb-0">Our Management</h2>
              <!-- ! title section-->
              <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
              <p class="text-center mb-30">Meet our able management team. </p>
            </div>
          </div>
          <div class="row cws-multi-col mb-50">
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/1.jpg" data-at2x="pic/team/1@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">	Dele FASEEMO</h3>
                      <div class="positions"><a href="#">[ Senior Developer ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/2.jpg" data-at2x="pic/team/2@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">Juliana Doe</h3>
                      <div class="positions"><a href="#">[ Business Manager ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/3.jpg" data-at2x="pic/team/3@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">John Doe</h3>
                      <div class="positions"><a href="#">[ Owner, CEO ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
              <!-- profile item-->
              <div class="profile-item">
                <div class="pic">
                  <div class="img_cont"><img src="pic/team/4.jpg" data-at2x="pic/team/4@2x.jpg" alt></div>
                  <div class="hover-effect"></div>
                  <div class="ourteam_content">
                    <div class="title_wrap">
                      <h3 class="title">Janet Doe</h3>
                      <div class="positions"><a href="#">[ Creative Designer ]</a></div>
                    </div>
                    <div class="desc">
                      <p>Integer ante arcu, accumsan a, conseca elas a atetuer.</p>
                    </div>
                    <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                  </div>
                </div>
              </div>
              <!-- ! profile item-->
            </div>
          
            
            
           
          </div>
        </div>
      </section>
      <!-- ! section team-->
      
     
      <!-- page profile-->
      <section class="page-section pb-0">
        <div class="container">
          <div class="row"> 
            <div class="col-md-6 mb-md-70">
              <h2 class="trans-uppercase mb-20"><span>About</span> The CEO</h2>
              <p class="mb-30 line-h-2">Dele FASEEMO is the founder of Hybrid Capital and the CEO. He retired from Skye Bank Nigeria Plc and is one of those that made Skye Bank what it is today .</p><a href="#" class="cws-button with-icon alt color-3">View Pictures<i class="flaticon-social-5"></i></a>
              <div class="blog-nav-share align-right pt-0 pull-right"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
              
            </div>
            <div class="col-md-6"><img src="pic/promo-8.jpg" alt class="mt-minus-35"></div>
          </div>
        </div>
      </section>
      <!-- ! page profile-->
    </div>
    <!-- footer-->
    @endsection