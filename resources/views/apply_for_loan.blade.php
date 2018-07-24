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
              <h2 class="title text-white">Borrow Up to 4 Million Within 24 Hours</h2>
              <!-- <ul class="breadcrumb text-left text-black mt-10">
                <li><a href="page-about-style1.html#">Home</a></li>
           
                <li class="active text-gray-silver">who we are</li>
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

                 <form id="contact_form"  name="apply_form" class="form-horizontal form" action="{{url('/apply_form')}}" method="post" enctype="multipart/form-data" id="myForm" role="form">

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
                        <label for="inputEmail3" class="col-sm-3 control-label">Date of Birth<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="date" name='dob' class="form-control" id="dob" placeholder="Date of Birth" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Marital Status<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                            <input type="radio" name="marital_status" id="single" value="Single" checked> Single
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="marital_status" id="married" value="Married"> Married
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="marital_status" id="divorced" value="Divorced"> Divorced
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="marital_status" id="widowed" value="Widowed"> Widowed
                            </label>
                        </div>
                    </div>


                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Number of Dependents<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" name='number_of_dependent' class="form-control" id="number_of_dependent" placeholder="Number of Dependents" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Mobile Number<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Primary Email Address<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Primary Email Address" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Home Address<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="home_address" name="home_address" placeholder="Home Address" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Next of kin<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="next_of_kin" name="next_of_kin" placeholder="Next of kin" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"> Next of kin's mobile Number<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="next_of_kin_mobile" id="next_of_kin_mobile" placeholder="Next of kin's mobile Number" required>
                        </div>
                    </div>


                     <h3 class="line-bottom mt-0 mb-30"><span class="text-theme-colored2">EMPLOYMENT INFORMATION</span></h3>




                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Employment Status<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                            <input type="radio" name="employment" id="Employed" value="Employed" checked> Employed
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="employment" id="Unemployed" value="Unemployed"> Unemployed
                            </label>
                           
                        </div>
                    </div>


                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Current Employer<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="current_employer" name="current_employer" placeholder="Current Employer" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Employer Address<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="employer_address" name="employer_address" placeholder="Employer Address" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Work Mail</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="work_email" name="work_email" placeholder="Work Email" >
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Pension Number<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="pension_number" name="pension_number" placeholder="Pension Number" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tax Number<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="tax_number" name="tax_number" placeholder="Tax Number" required> 
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Next month salary<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="next_month_salary" id="next_month_salary_" placeholder="Next month salary" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Pay day<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="pay_day" id="pay_day" placeholder="Pay day" required>
                        </div>
                    </div>


                     <h3 class="line-bottom mt-0 mb-30"><span class="text-theme-colored2">LOAN INFORMATION</span></h3>




                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Loan Amount<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" id="loan_amount" name="loan_amount" placeholder="Loan Amount" required>
                        </div>
                    </div>




                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tenure<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name='tenure' id="tenure" placeholder="Tenor" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Purpose of Loan?<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <textarea  class="form-control" name="loan_purpose" id="loan_purpose" rows="3" required></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Salary Bank<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="salary_bank" id="salary_bank" placeholder="Salary Bank" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Account Number<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="number" maxlength="10" class="form-control" name='account_number' id="account_number" placeholder="Account Number" required>
                        </div>
                    </div>



                    <h3 class="line-bottom mt-0 mb-30"><span class="text-theme-colored2">OTHER INFORMATION</span></h3>




                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Do you have an existing loan<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" name="existing_loan" id="yes" value="yes" checked> Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="existing_loan" id="no" value="no" required> No
                            </label>
                        </div>
                    </div>




                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">If yes, total outstanding balance?</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name='outstanding_balance' id="outstanding_balance" placeholder="outstanding balance?" >
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Total Monthly Debt Obligation</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name='dept_obligation' id="dept_obligation" placeholder="Total monthly debt obligation" >
                        </div>
                    </div>


                    <h3 class="line-bottom mt-0 mb-30"><span class="text-theme-colored2">BANK VERIFICATION NUMBER</span></h3>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Bank Verification Number (BVN)<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name='bvn' id="bvn" placeholder="BVN" required>
                        </div>
                    </div>


                    <h3 class="line-bottom mt-0 mb-30"><span class="text-theme-colored2">REQUIRED INFORMATION</span></h3>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Applicant Valid ID<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='valid_id' id="valid_id" placeholder=""  required>
                        </div>
                    </div>


                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Employment ID Card<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='employment_id' id="employment_id" placeholder="" required>
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Utility Bills</label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='utility_bill' id="utility_bill" placeholder="" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Six Months Bank Statement<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='bank_statement' id="bank_statement" placeholder="" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Guarantor's Valid ID<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='g_valid_id' id="g_valid_id" placeholder="" required>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Guarantor's Utility Bill</label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='g_utility_bill' id="g_utility_bill" placeholder="" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Guarantor's Work ID<small class="text-danger"> * </small></label>
                        <div class="col-sm-9">
                        <input type="file" class="form-control" name='g_work_id' id="g_work_id" placeholder="" required >
                        </div>
                    </div>

<br><br>
                    <div class="form-group" align='center'>
                        <label class="radio-inline">
                            <input type="checkbox" name="agree" id="agree" value="agree"> I have read the terms and conditions of this service
                            </label>                      
                    </div>

                    
                    <div class="form-group" align='right'>
                        <input name="submit" id='submit' class=" btn btn-dark btn-theme-colored2 btn-flat" type="submit" value="Submit Form" disabled/>                       
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>

  

  

<script>
    let agree =   document.getElementById('agree');
    let submit =  document.getElementById('submit');
    agree.onchange = function() {
        submit.disabled = !this.checked;
    }
</script>
    

   

  <!-- end main-content -->
  </div>

  <!-- Footer -->
  @endsection
  