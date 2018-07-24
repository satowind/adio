@extends('app.admin')
@section('content')
        
                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="index"><i class="fa-home"></i>Home</a>
                    </li>
                            <li class="active">
        
                                    <strong>Loans</strong>
                            </li>
                        
                            </ol>
                    
        <h2>Loans</h2>
        
        <br />
        
        <script type="text/javascript">
        jQuery( document ).ready( function( $ ) {
            var $table1 = jQuery( '#table-1' );
            
            // Initialize DataTable
            $table1.DataTable( {
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "bStateSave": true,
                "scrollX": true,
                "scrollY": true,

            });
            
            // Initialize Select Dropdown after DataTables is created
            $table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
                minimumResultsForSearch: -1
            });
        } );
        </script>

                    @if($id=='approved')
                        <div class="alert alert-success"> Loan Approved Successfully  <a class='close' data-dismiss='alert'>&times;</a></div>
                    @endif

                    @if($id=='declined')
                        <div class="alert alert-success"> Loan Declined  Successfully  <a class='close' data-dismiss='alert'>&times;</a></div>
                    @endif


                    @if($id=='errora')
                        <div class="alert alert-danger"> Unable to approve try again <a class='close' data-dismiss='alert'>&times;</a></div>
                    @endif
                    
                    @if($id=='errord')
                        <div class="alert alert-danger"> Unable to decline try again <a class='close' data-dismiss='alert'>&times;</a></div>
                    @endif


                    <table class="table table-striped table-bordered" id="table-1">
            <thead>
                                
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Home Address</th>
                        <th>Amount</th> 
                        <th>Tenure</th>
                        <th>Valid Id</th>
                        <th>Status</th>                                             
                        <th>Edit</th>
                    </tr>
    
            </thead>
            <tbody>
            @foreach ($loans as $loan)
               <tr>
                    <td>{{$loan->first_name .'  '. $loan->surname}}</td>
                    <td>{{$loan->primary_email}}</td>
                    <td>{{$loan->mobile_number}}</td>
                    <td>{{$loan->home_address}}</td>
                    <td>{{$loan->loan_amount}}</td>
                    <td>{{$loan->tenure}}</td>
                    <td><img width="100px" src="{{asset('images/loan')}}/{{$loan->valid_id}}" alt="{{$loan->surname}}"></td>
                    <td>
                        @if ($loan->status == 2)
                        <h5 style="color:black">Pending</h5>
                        @elseif($loan->status == 1)
                        <h5 style="color:blue">Approved</h5>
                        @else
                        <h5 style="color:Red">Rejected</h5>
                        @endif

                    </td>
                    <td>
                        <button data-toggle="modal" data-target='#modal_{{$loan->id}}' type="button" class="btn btn-primary btn-sm done">
                            Edit
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="modal_{{$loan->id}}" role="dialog">
                    <div class="modal-dialog">
                    
                        <div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close close2" id="" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">{{$loan->first_name .'  '. $loan->surname}} loan Request</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row">
                        <h3 class='container'>Personal Information</h3>
                         <div class="col-md-2">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Title</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->title }}' disabled>
							</div>	
							
						</div>
						<div class="col-md-5">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Name</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->first_name }}' disabled>
							</div>	
							
						</div>
						
						<div class="col-md-5">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Surname</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->surname}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-4">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Marital Status</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->marital_status}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-4">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Date of Birth</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->dob}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-4">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Number of Dependents</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->no_of_dependency}}' disabled>
							</div>	
						
						</div>
				
						
					    <div class="col-md-12">
							
							<div class="form-group">
								<label for="field-3" class="control-label">Address</label>
								
								<input type="text" class="form-control" id="field-3" placeholder="" value='{{$loan->home_address}}' disabled>
							</div>	
							
						</div>

						<div class="col-md-4">
							
							<div class="form-group">
								<label for="field-4" class="control-label">Phone</label>
								
								<input type="text" class="form-control" id="field-4" placeholder="" value='{{$loan->mobile_number}}' disabled>
							</div>	
							
						</div>
						
						<div class="col-md-8">
							
							<div class="form-group">
								<label for="field-5" class="control-label">Email</label>
								
								<input type="text" class="form-control" id="field-5" placeholder="" value='{{$loan->primary_email}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-12">
							
							<div class="form-group">
								<label for="field-3" class="control-label">Address</label>
								
								<input type="text" class="form-control" id="field-3" placeholder="" value='{{$loan->home_address}}' disabled>
							</div>	
							
						</div>


                        <div class="col-md-8">
							
							<div class="form-group">
								<label for="field-3" class="control-label">Next of Kin</label>
								
								<input type="text" class="form-control" id="field-3" placeholder="" value='{{$loan->next_of_kin}}' disabled>
							</div>	
							
						</div>


                        <div class="col-md-4">
							
							<div class="form-group">
								<label for="field-3" class="control-label">Next of Kin Phone No.</label>
								
								<input type="text" class="form-control" id="field-3" placeholder="" value='{{$loan->next_of_kin_phone_number}}' disabled>
							</div>	
							
						</div>
						
						
					</div>

                     <div class="row">
                        <h3 class='container'>LOAN INFORMATION</h3>
                        <div class="col-md-6">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Loan Amount</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->loan_amount }}' disabled>
							</div>	
							
						</div>
						<div class="col-md-6">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Tenure</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->tenure }}' disabled>
							</div>	
							
						</div>
						
						<div class="col-md-12">
							
							<div class="form-group no-margin">
								<label for="field-7" class="control-label">Purpose of Loan?</label>
								
								<textarea class="form-control autogrow" id="field-7" placeholder="" disabled>{{ $loan->purpose_of_loan}}</textarea>
							</div>	
						
						</div>

                        <div class="col-md-6">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Salary Bank</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->salary_bank}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-6">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Account Number </label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->account_number}}' disabled>
							</div>	
						
						</div>

                       
                       												
					</div>

                    <div class="row">
                        <h3 class='container'>EMPLOYMENT INFORMATION</h3>
                         <div class="col-md-6">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Employment Status</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->employment_status }}' disabled>
							</div>	
							
						</div>
						<div class="col-md-6">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Current Employer</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->current_employer }}' disabled>
							</div>	
							
						</div>
						
						<div class="col-md-12">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Employer Address</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->employers_address}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-8">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Work Mail</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->work_mail}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-4">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Pension Number</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->pension_number}}' disabled>
							</div>	
						
						</div>

                        <div class="col-md-4">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Tax Number</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="" value='{{ $loan->tax_number}}' disabled>
							</div>	
						
						</div>
				
						
					    

						<div class="col-md-4">
							
							<div class="form-group">
								<label for="field-4" class="control-label">Next month salary</label>
								
								<input type="text" class="form-control" id="field-4" placeholder="" value='{{$loan->next_month_salary}}' disabled>
							</div>	
							
						</div>
						
						<div class="col-md-4">
							
							<div class="form-group">
								<label for="field-5" class="control-label">Pay day</label>
								
								<input type="text" class="form-control" id="field-5" placeholder="" value='{{$loan->pay_day}}' disabled>
							</div>	
						
						</div>
                       												
					</div>

                    <div class="row">
                        <h3 class='container'>OTHER INFORMATION</h3>
                        <div class="col-md-12">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Do you have an existing loan</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->existing_loan }}' disabled>
							</div>	
							
						</div>
						<div class="col-md-6">
							
							<div class="form-group">
								<label for="field-1" class="control-label">If yes, total outstanding balance?</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->outstanding_balance }}' disabled>
							</div>	
							
						</div>
						
						<div class="col-md-6">
							
							<div class="form-group no-margin">
								<label for="field-7" class="control-label">Total Monthly Debt Obligation</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->dept_obligation }}' disabled>
							</div>	
						
						</div>
                       												
					</div>

                    <div class="row">
                        <h3 class='container'>BANK VERIFICATION NUMBER</h3>
                        <div class="col-md-12">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Bank Verification Number (BVN)</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="" value='{{$loan->bvn }}' disabled>
							</div>	
							
						</div>                       												
					</div>
				
					 <div class="row">
                        <h3 class='container'>REQUIRED INFORMATION</h3>
                        <div class="col-md-12">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Applicant Valid ID </label>
								<br>
                                <a href="#" class="pop">
                                    <img class='img-responsive' src="{{asset('images/loan')}}/{{$loan->valid_id}}" alt="{{$loan->surname}}">
                                </a>
							</div>	
							
						</div> 

                        <div class="col-md-4">
                            <div class="form-group">
								<label for="field-1" class="control-label">Employment ID Card </label>
								<br>
                                <a href="#" class="pop">
                                    <img class='img-responsive' src="{{asset('images/loan')}}/{{$loan->employment_id}}" alt="{{$loan->surname}}">
                                </a>
							</div>	                       
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label for="field-1" class="control-label">Utility Bills </label>
								<br>
                                <a href="#" class="pop">
                                    <img class='img-responsive' src="{{asset('images/loan')}}/{{$loan->utility_bill}}" alt="{{$loan->surname}}">
                                </a>
							</div>	
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label for="field-1" class="control-label">Six Months Bank Statement  </label>
								<br>
                                <a href="#" class="pop">
                                    <img class='img-responsive' src="{{asset('images/loan')}}/{{$loan->bank_statement}}" alt="{{$loan->surname}}">
                                </a>
							</div>	
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label for="field-1" class="control-label">Guarantor's Valid ID  </label>
								<br>
                                <a href="#" class="pop">
                                    <img class='img-responsive' src="{{asset('images/loan')}}/{{$loan->g_valid_id}}" alt="{{$loan->surname}}">
                                </a>
							</div>	
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label for="field-1" class="control-label">Guarantor's Utility Bill </label>
								<br>
                                <a href="#" class="pop">
                                    <img class='img-responsive' src="{{asset('images/loan')}}/{{$loan->g_utility_bill}}" alt="{{$loan->surname}}">
                                </a>
							</div>	
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label for="field-1" class="control-label">Guarantor's Work ID </label>
								<br>
                                <a href="#" class="pop">
                                    <img class='img-responsive' src="{{asset('images/loan')}}/{{$loan->g_work_id}}" alt="{{$loan->surname}}">
                                </a>                                  
							</div>	
                        </div>                      												
					</div>
				
					
				</div>
				
				<div class="modal-footer">
                    <button   data-ids='{{$loan->id}}'  class="btn btn-danger pull-left decline" >Decline</button>
					<button type="button" class="btn btn-default close2" data-dismiss="modal">Close</button>
					<button  data-id='{{$loan->id}}' class="btn btn-info approve">Approve</button>
				</div>
			</div>
                    
                    </div>
                </div>
   
            @endforeach
            
            
   
            </tbody>
            
        </table>

        
        <br />


        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content"> 
                     <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        <h3 class="modal-title title2 text-center"></h4>
                    </div>             
                    <div class="modal-body">
                      <img src="" class="imagepreview" class='img-responsive' >
                    </div>
                    <div class="modal-footer">
                            <button id="close" type="button" class="btn btn-success" >Close</button>
                    </div>
                  </div>

                </div>
               
        </div>


       <script>

        $('.approve').on('click', function() {

             var id = $(this).data('id');
                $.confirm({
                    title: 'Confirm!',
                    content: 'Are You Sure You Want To approve loan',
                    buttons: {
                        confirm: function () {
                            $.ajax({
                                type: 'POST',
                                url: "{{url('/admin/approve_loan')}}",
                                data: {
                                    id:id,
                                    "_token": "{{ csrf_token() }}"
                                },
                                error: function() {
                                    window.location = "{{url('/admin/loan/errora')}}";
                                },
                                dataType: 'text',
                                success: function() {
                                    window.location = "{{url('/admin/loan/approved')}}";
    
                                },
    
                            });
    
    
                        },
                        cancel: function () {
                            $.alert('Canceled!');
                        }
    
                    }
                });
            })

          $('.decline').on('click', function() {
            var id = $(this).data('ids');
                $.confirm({
                    title: 'Confirm!',
                    content: 'Are You Sure You Want To decline loan',
                    buttons: {
                        confirm: function () {
                            $.ajax({
                                type: 'POST',
                                url: "{{url('/admin/decline_loan')}}",
                                data: {
                                    id:id,
                                    "_token": "{{ csrf_token() }}"
                                },
                                error: function() {
                                    window.location = "{{url('/admin/loan/errord')}}";
                                },
                                dataType: 'text',
                                success: function() {
                                    window.location = "{{url('/admin/loan/declined')}}";
                                },
    
                            });
    
    
                        },
                        cancel: function () {
                            $.alert('Canceled!');
                        }
    
                    }
                });
            })

    </script>
    
    
       
        
      @endsection