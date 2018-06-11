<!-- **********************************************************************************************
                            designed by satoseries an optisoft project

                        optisoft official website -> https://optisoft.ng/


                      satoseries github repo -> https://github.com/satowind

                            ****************************************

                     satoseries twitter page -> https://twitter.com/Satowind

                  satoseries facebook page -> https://www.facebook.com/satoseries
      
         satoseries linkedin page -> https://www.linkedin.com/in/ogugua-tochukwu-900495113/
    ************************************************************************************************ -->

<!DOCTYPE html>
<html>
  <head>
    <title>Hybrid Capital & Advisory Company Limited</title>
    <meta charset="utf-8">
    <meta name="keywords" content="agency banking, lagos, hybrid money, SME" />
<meta name="description" content="Hybrid Capital & Advisory Company Limited (“Hybrid Capital”) is a financial services company engaged in the provision of financial & business advisory; consumer & business loans; and transaction & payment services. The Company leverages innovative technology to make financial services more inclusive, innovative, accessible and affordable for everyone." />
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">
    <style>
    p{
      font-family: CALIBRI ;
      font-size: 12px;
    }
    </style>
  </head>
  <body>
    <!-- header page-->
    <header>
    
      <!-- Navigation panel-->
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="{{url('/')}}" class="logo"><img src="img/logo.png"  alt><img src="img/logo.png" alt class="sticky-logo"></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav ">
            <ul class="clearlist">

              <!-- Item With Sub-->
               <li><a href="{{url('/')}}">Home</a></li>
              <!-- End Item With Sub-->

              <!-- Item With Sub-->
              <li><a href="#" class="mn-has-sub">About Us  <i class="fa fa-angle-down button_open"></i></a>
                <ul class="mn-sub">
                  <li><a href="{{url('/about')}}">Who we are </a></li>
                  <li><a href="#" class="mn-has-sub">What We Stand For <i class="fa fa-angle-right pull-right button_open"></i></a>
                    <ul class="mn-sub to-left">
                      <li><a href="{{url('/vision')}}">Our Vision </a></li>
                      <li><a href="{{url('/mission')}}">Our Mission </a></li>
                      <li><a href="{{url('/core')}}">Core Values</a></li>
                       <li><a href="{{url('/thrust')}}">Strategic Thrust </a></li>
                    </ul>
                  </li>
                  
                  <li ><a href="#" class="mn-has-sub">Our Team <i class="fa fa-angle-right pull-right button_open"></i></a>
                    <ul class="mn-sub to-left">
                      <li><a href="{{url('/board')}}">Board</a></li>
                      <li><a href="{{url('/team')}}">Management</a></li>
                     
                    </ul>
                  </li>
                </ul>
              </li>
            
              <!-- End Item With Sub-->

              <!-- Item With Sub-->
               <li><a href="#" class="mn-has-sub">What we do <i class="fa fa-angle-down button_open"></i></a>
               <ul class="mn-sub">
                  <li><a href="{{url('/moni')}}">HybridMoni: Consumer & SME Lending</a></li>
                  <li><a href="{{url('/hybrid')}}">HybridBhank: Transaction & Payment Services</a></li>
                  <li><a href="{{url('/services')}}">Advisory Services</a></li>
                </ul>
               </li>
              <!-- End Item With Sub-->
              <!-- Item With Sub-->
               <li><a href="{{url('/blog')}}">Blog</a></li>
              <!-- End Item With Sub-->


             
              <!-- Item-->
              <li><a href="contact">Contact</a></li>
              <!-- End Item-->
              <!-- Item-->
              <li><a href="faq">FAQ</a></li>
              <!-- End Item-->
            </ul>
           
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>
    <!-- ! header page-->


    @yield('section')


     <!-- footer-->
    <footer style="background-image: url('img/footer-bg.jpg')" class="footer footer-fixed">
      <div class="container">
        <div class="row cws-multi-col">
          <!-- widget footer-->
          <div class="col-md-6 col-sm-6 mb-md-50">
            <div class="widget-footer text">
              <h3>Hybrid Capital</h3>
              <div class="cws_divider with-plus short-2 mb-5 mt-10"></div>
              <p>Financial services company engaged in the provision of financial & business advisory; consumer & business loans; and transaction & payment services. . </p>
              <div class="footer-cws-social mt-25"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
            </div>
          </div>
          <!-- end widget footer-->
         
         
          <!-- widget footer-->
          <div class="col-md-6 col-sm-6">
            <div class="widget-footer">
              <h3>Newsletter</h3>
              <div class="cws_divider with-plus short-2 mb-5 mt-10"></div>
              <address>
                <p>Subscribe to our news letter and get notified about important events and new services. </p>
              </address>
              <div class="footer-form-wrap">
                <form method="get" action="#" class="newsletter contact-form">
                  <div class="newsletter-footer-wrap">
                    <input type="text" placeholder="Enter Your Email" value="" name="email" class="newsletter-field">
                    <button type="submit" class="newsletter-submit cws-button alt">Send</button>
                  </div>
                </form>
                <div id="footer-form" role="alert" class="alert alert-danger alt alert-dismissible fade in">
                  <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button><i class="alert-icon border fa fa-exclamation-triangle"></i><strong>Error Message!</strong><br>
                  <div class="message"></div>
                </div>
                <div class="email_server_responce"></div>
              </div>
            </div>
          </div>
          <!-- end widget footer-->
           
        </div>
      </div>
      <!-- copyright-->
      <div class="copyright"> 
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>© Copyright 2018 <span>Hybrid Capital</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved. <span><a href="http://optisoft.ng">Developed by Optisoft</a></span></p>
            </div>
            <div class="col-sm-6 text-right"><a href="{{url('/index')}}" class="footer-nav">Home</a><a href="{{url('/about')}}" class="footer-nav">About</a><a href="{{url('/services')}}" class="footer-nav">Services</a><a href="{{url('/contact')}}" class="footer-nav">Contact</a></div>
          </div>
        </div>
      </div>
      <!-- end copyright-->
      <!-- scroll top-->
    </footer>
    <div id="scroll-top"><i class="fa fa-angle-up"></i></div>
    <!-- ! footer-->
    <!-- login popup-->
    <div class="login-popup">
      <div class="login-popup-wrap">
        <div class="title-wrap">
          <h2>Login</h2><i class="close-button flaticon-cross"></i>
        </div>
        <div class="login-content">
          <form class="form">
            <input type="text" name="email" value="" size="40" placeholder="Enter Your Email ..." aria-required="true" class="form-row form-row-first">
            <input type="text" name="password" value="" size="40" placeholder="Enter Your Password ..." aria-required="true" class="form-row form-row-last">
          </form>
          <div class="remember">
            <div class="checkbox">
              <input id="checkbox3" type="checkbox" value="None" name="check">
              <label for="checkbox3">Remember Me</label>
            </div><a href="#">Forgot Password ?</a>
          </div><a href="#" class="cws-button gray alt full-width mt-20">Login now</a>
        </div>
        <div class="login-bot">
          <p>No account yet? <a href="#">Register now</a></p>
        </div>
      </div>
    </div>
    <!-- ! login popup-->
    <!-- news popup-->
    <div class="news-popup"> 
      <div class="news-popup-wrap"> <i class="close-button flaticon-cross"></i>
        <div class="row">
          <div class="col-sm-6"><img src="pic/news-popup.jpg" data-at2x="pic/news-popup@2x.jpg" alt></div>
          <div class="col-sm-6">
            <div class="news-content">
              <div class="news-title">
                <h2>Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
              </div>
              <div class="contact-form-wrap">
                <form method="get" action="#" class="newsletter contact-form">
                  <div class="newsletter-wrap mb-0">
                    <input type="text" placeholder="Enter Your Email ..." value="" name="email" class="newsletter-field mb-0">
                    <button type="submit" class="newsletter-submit cws-button alt">Submit</button>
                  </div>
                </form>
                <div id="news-form" role="alert" class="alert alert-danger alt alert-dismissible fade in">
                  <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button><i class="alert-icon border fa fa-exclamation-triangle"></i>
                  <div class="message"></div>
                </div>
                <div class="email_server_responce"></div>
              </div>
              <div class="checkbox-wrap">
                <div class="checkbox">
                  <input id="checkbox4" type="checkbox" value="None" name="check">
                  <label for="checkbox4">Dont Show This Message Again</label>
                </div>
              </div>
              <div class="social-wrap"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! news popup-->
    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/cws_parallax.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_self_vimeo_bg.js"></script>
    <script type="text/javascript" src="js/bg-video/jquery.vimeo.api.min.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_YT_bg.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/retina.min.js"></script>

     <script type="text/javascript">
    $(window).on('load',setTimeout( function(){
        $('#myModal').modal('show');
    },3000));
</script>
  </body>
</html>

<!-- **********************************************************************************************
                            designed by satoseries an optisoft project

                        optisoft official website -> https://optisoft.ng/


                      satoseries github repo -> https://github.com/satowind

                            ****************************************

                     satoseries twitter page -> https://twitter.com/Satowind

                  satoseries facebook page -> https://www.facebook.com/satoseries
      
         satoseries linkedin page -> https://www.linkedin.com/in/ogugua-tochukwu-900495113/
    ************************************************************************************************ -->