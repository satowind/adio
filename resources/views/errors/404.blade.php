@extends( 'app.app' )
@section('section')
      <!-- End Navigation panel-->
      <!-- breadcrumbs start-->
      <section style="background-image:url('img/bg-1.jpg');" class="breadcrumbs">
        <div class="container">
          <div class="text-center breadcrumbs-item">
            <h1>404 Page</h1><a href="/">home</a><i class="fa fa-angle-right"></i><a href="#">404 Page</a>
          </div>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
    </header>
    <!-- ! header page-->
    <!-- section 404-->
    <div class="content-body">
      <section class="page-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="img-404"><img src="img/404.png" data-at2x="pic/404@2x.png" alt></div>
              <h2 class="mt-40 mb-40 align-center">Ooops ... We are sorry, the page you want isn’t here anymore.</h2>
              <div class="row">
                <div class="col-md-8 col-md-offset-2"> 
                 
                  <p class="mt-15 align-center">Go back to <a href="{{url('/')}}" class="back-home">Homepage</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- ! section 404-->
   @endsection