@extends('app.admin')
@section('content')
        
                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="index"><i class="fa-home"></i>Home</a>
                    </li>
                            <li class="active">
        
                                    <strong>Customers</strong>
                            </li>
                        
                            </ol>
                    
        <h2>Customers</h2>
        
        <br />
        
        <script type="text/javascript">
        jQuery( document ).ready( function( $ ) {
            var $table1 = jQuery( '#table-1' );
            
            // Initialize DataTable
            $table1.DataTable( {
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "bStateSave": true,
                "responsive": true,

            });
            
            // Initialize Select Dropdown after DataTables is created
            $table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
                minimumResultsForSearch: -1
            });
        } );
        </script>

                    {{--  @if($id=='approved')
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
                    @endif  --}}


                    <table class="table table-striped table-bordered" id="table-1">
            <thead>
                                
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Home Address</th>
                        <th>Username</th> 
                                                                
                       
                    </tr>
    
            </thead>
            <tbody>
            @foreach ($customers as $customer)
               <tr>
                    <td>{{$customer->surname.' '.$customer->first_name}}</td>
                    <td>{{$customer->primary_email}}</td>
                    <td>{{$customer->mobile_number}}</td>
                    <td>{{$customer->home_address}}</td>
                    <td>{{$customer->username}}</td>
                   
                    
                </tr>

                
		
                    
                
            @endforeach
            
            
   
            </tbody>
            
        </table>

        
        <br />


       


    
    
       
        
      @endsection