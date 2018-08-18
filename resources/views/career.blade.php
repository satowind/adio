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
              <h2 class="title text-white">We are Hiring</h2>
              <!-- <ul class="breadcrumb text-left text-black mt-10">
                <li><a href="page-about-style1.html#">Home</a></li>
           
                <li class="active text-gray-silver">We are hiring</li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class='form'>
    <div class="container">
        <div class="row  panel panel-default " style='padding:5% 0'>
        
            <div class="col-sm-10 col-sm-offset-1">

                @if($status > 4)
                <h2 class='text-danger'>Application Closed</h2>
                @else

                 <form id="contact_form"  name="apply_form" class="form-horizontal form" action="{{url('/apply_job')}}" method="post" enctype="multipart/form-data" id="myForm" role="form">

                    {{ csrf_field() }}
                    
                    <div align='center' >
                        <h5>
                            @if(Session::has('error'))
                            <div class="alert alert-danger"> {{Session::get('error')}} <a class='close' data-dismiss='alert'>&times;</a></div>
                        @endif

                        @if(Session::has('success'))
                            <div class="alert alert-success"> {{Session::get('success')}} <a class='close' data-dismiss='alert'>&times;</a></div>
                        @endif
                        </h5>
                    </div>

                    <h3 class="line-bottom mt-0 mb-30"><span class="text-theme-colored2">PERSONAL INFORMATION</span></h3>

                   <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Title<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                            <input type="radio" name="title" id="mr" value="Mr" checked> Mr
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="title" id="mrs" value="Mrs"> Mrs
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="title" id="miss" value="Miss"> Miss
                            </label>
                        </div>
                    </div>
            

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">First Name<small class="text-danger"> * </small></label>
                        
                        <div class="col-sm-9">
                        <input type="text" name='fname' class="form-control" id="fname" placeholder="First Name" required>
                        </div>
                    </div>
            

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Surname<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" name='sname' class="form-control" id="sname" placeholder="Surname" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Mobile Number<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"> Email Address<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Cover Letter?<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <textarea  class="form-control" name="cover" id="cover" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Passport Photograph<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='passport' id="passport" placeholder=""  required>
                        </div>
                    </div>


                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Resume<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='resume' id="resume" placeholder="" required>
                        </div>
                    </div>
                    
                    <div class="form-group" align='right'>
                        <input name="submit" id='submit' class=" btn btn-dark btn-theme-colored2 btn-flat" type="submit" value="Apply Now"/>                       
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
    </section>

  

  


    

   

  <!-- end main-content -->
  </div>

  <!-- Footer -->
  @endsection
  