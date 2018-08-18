@extends('app.admin')
@section('content')
				<style>
				.fa {
					display: contents;
				}
				</style>
		
		<div class="row">
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="fa fa-newspaper-o"></i></div>
					<div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Customers</h3>
					
				</div>
		
			</div>
		
		

			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="fa fa-user"></i></div>
					<div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Pending Loan</h3>
					
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		
 
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="fa fa-money"></i></div>
					<div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Approved Loans</h3>
					
				</div>
		
			</div>
			
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="fa fa-money"></i></div>
					<div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Rejected Loans</h3>
					
				</div>
		
			</div>
			
		
			
		</div>
		<br>

		<div class="row">
				<div class="col-sm-6">
					
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="panel-title">Latest Members</div>
					
									<div class="panel-options">
										<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
										<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-bordered table-responsive">
									<thead>
										<tr>
											<th>Username</th>
											<th>Name</th>
											<th>Phone</th>
											<th>Email</th>
										</tr>
									</thead>
					
									<tbody class="users_body">
									
									</tbody>
								</table>
								</div>
							</div>
					
						</div>
						
				<div class="col-sm-6">
					
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="panel-title">Last Funding</div>
					
									<div class="panel-options">
										<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
										<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
									</div>
								</div>
								
								<div class="panel-body">
									<table class="table table-bordered table-responsive" >
										<thead>
											<tr>
												<th>Nmae</th>
												<th>Amount</th>
												<th>Tenure</th>
												<th>BVN</th>
												<th>Time</th>
											</tr>
										</thead>
			
										<tbody class="users_body">
										
										</tbody>
									</table>
								</div>
							</div>
					
						</div>
					
			</div>
		

@endsection
		
