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
					<div class="num" data-start="0" data-end="1" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Blog Posts</h3>
					
				</div>
		
			</div>
		
		

			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="fa fa-user"></i></div>
					<div class="num" data-start="0" data-end="2" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Registered Users</h3>
					
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		
 
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="fa fa-money"></i></div>
					<div class="num" data-start="0" data-end="3" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Pending Loans</h3>
					
				</div>
		
			</div>
			
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="fa fa-money"></i></div>
					<div class="num" data-start="0" data-end="3" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Approved Loans</h3>
					
				</div>
		
			</div>
			
		
			
		</div>
		<br>
		

@endsection
		
