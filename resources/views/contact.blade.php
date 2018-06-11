@extends( 'app.app' )
@section('section')
      <!-- End Navigation panel-->
      <!-- breadcrumbs start-->
      <section style="background-image:url('img/bg-1.jpg');" class="breadcrumbs">
        <div class="container">
          <div class="text-center breadcrumbs-item">
            <h1>Contact Us</h1><a href="{{url('/')}}">home</a><i class="fa fa-angle-right"></i><a href="#">Contact Us</a>
          </div>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
    </header>
    <!-- ! header page-->
    <div class="content-body page">
      <!-- content-->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="title-section mb-0 mt-0 text-center">Get in touch</h2>
            <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
            <p class="text-center mb-0">For Issues, Enquires, Suggestions etc, you can write, call, or visit  our branch 8am to 6pm daily and we will be happy to hear from you</p>
          </div>
        </div>
        <div class="row mb-30">
          <div class="col-md-4 col-sm-6 mb-md-30">
            <div class="service-item icon-right border color-icon"><i class="flaticon-placeholder cws-icon"></i>
              <p class="mb-0">M2 Arena Complex Association Close </p>
              <p class="mb-0">Extension Ogudu Road Ogudu Lagos </p>
            </div>
           
          </div>
          <div class="col-md-4 col-sm-6 mb-md-30">
            <div class="service-item icon-right border color-icon"><i class="flaticon-note cws-icon"></i>
              <p class="mb-0"> Hybridcapitaladvisory@gmail.com</p>
              <p class="mb-0">www.hybridcapital.ng</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-item icon-right border color-icon"><i class="flaticon-technology-2 cws-icon"></i>
              <p class="mb-0">Phone: (+234) 080 2957 4636</p>
              <p class="mb-0">whatsapp: (+234) 080 3357 3662</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-md-30">
            <div class="widget-contact-form pb-0">
              <!-- contact-form-->
              <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
                <input type="text" name="name" value="" size="40" placeholder="Your Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                <input type="text" name="email" value="" size="40" placeholder="Your Email" aria-required="true" class="form-row form-row-last">
                <input type="text" name="subject" value="" size="40" placeholder="Subject" aria-required="true" class="form-row form-row-last">
                <textarea name="message" cols="40" rows="4" placeholder="Your Message" aria-invalid="false" aria-required="true"></textarea>
                <input type="submit" value="Submit now" class="cws-button alt full-width">
              </form>
              <!-- ! contact-form-->
              <div id="feedback-form-errors" role="alert" class="alert alert-danger alt alert-dismissible fade in">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button><i class="alert-icon border fa fa-exclamation-triangle"></i><strong>Error Message!</strong><br>
                <div class="message"></div>
              </div>
              <div class="email_server_responce"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.562567072347!2d3.3939760147710243!3d6.576756495243589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9299ca706edb%3A0xabc5b0d484768e56!2sM2+Arena!5e0!3m2!1sen!2sng!4v1528369286202" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- ! content-->
    </div>
    <!-- footer-->
   @endsection