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
              <h2 class="title text-white">Contact Us</h2>
              <!-- <ul class="breadcrumb text-left text-black mt-10">
                <li><a href="page-about-style1.html#">Home</a></li>
           
                <li class="active text-gray-silver">who we are</li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>

 
 <div class="content-body">
     
     

     
     <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h2 class="text-uppercase  text-center line-bottom-double-line-centered mt-0">GET IN  <span class="text-theme-colored2">TOUCH</span></h2>
                <p>For Issues, Enquires, Suggestions etc, you can write, call, or visit our branch 8am to 6pm daily and we will be happy to hear from you</p>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: (+234) 080 2957 4636</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
                <h4>Address</h4>
                <h6 class="text-gray"> M2 Arena Complex,<br>Along Ogudu-Oworonshoki Expressway,<br>Ogudu, Lagos.</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
                <h4>Email</h4>
                <h6 class="text-gray">info@hybridcapital.ng</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="http://thememascot.net/demo/personal/s/konsultplus/v5.0/demo/includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored2 btn-flat" data-loading-text="Please wait...">Send your message</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>

          </div>
          <div class="col-md-5">

            <!-- Google Map HTML Codes -->
            <div class="map-wrapper">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.562567072347!2d3.3939760147710243!3d6.576756495243589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9299ca706edb%3A0xabc5b0d484768e56!2sM2+Arena!5e0!3m2!1sen!2sng!4v1528369286202" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

          </div>
        </div>
      </div>
    </section>  
      
       
     
      
</div>





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

  @endsection