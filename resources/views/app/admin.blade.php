<!-- **********************************************************************************************
							designed by	satoseries an optisoft project

		 			    optisoft official website -> https://optisoft.ng/


					  satoseries github repo -> https://github.com/satowind

							****************************************

	 				 satoseries twitter page -> https://twitter.com/Satowind

				  satoseries facebook page -> https://www.facebook.com/satoseries
	  
	 	 satoseries linkedin page -> https://www.linkedin.com/in/ogugua-tochukwu-900495113/
	************************************************************************************************ -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="City cyber solutions" />
	<meta name="author" content="" />

<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="http://Adiocapital.ng/img/favicon.png" />


	<title>Adio Capital</title>

	<link rel="stylesheet" href="{{asset('admins/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/css/font-icons/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{asset('admins/assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/css/neon-core.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/css/neon-theme.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/css/neon-forms.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/css/font-icons/font-awesome/css/font-awesome.min.css')}}">

	<script src="{{asset('admins/assets/js/jquery-1.11.3.min.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
	

	<!--[if lt IE 9]><script src="{{asset('admins/assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
<style>
	input[type=text]:focus {
    background-color: lightblue;
    
    
   }

   input[type=text]{
   	border-radius: 20px;
   	padding-left: 30px
   }
</style>

</head>
<body class="page-body" >

<div class="page-container "><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="{{url('../index')}}">
						<h2 style="color:#FF600C">Adio</h2>
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
				

			<ul id="main-menu" class="main-menu">
				{{--  <li>
					<a href="{{url('admin/index')}}">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>
					  --}}
				
				


			




	
				
				



			



				
				
				<li >
					<a href="{{url('admin')}}">
						<i class="fa fa-home"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>

			
			

				
				<li >
					<a href="{{url('admin/career')}}">
						<i class="fa fa-money"></i>
						<span class="title">Applications</span>
					</a>
				</li>
			
			
			



				

			
				
			
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('admin/assets/images/thumb-1@2x.png')}}" alt="" class="img-circle" width="44" />
							Hi Admin
						</a>
		
						
					</li>
		
				</ul>
				
				
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<li>
						<a onclick="logout()">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />




		  @yield('content')


 <footer class="main">
          
        
        </footer>





</div>

</div>

			<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{asset('admins/assets/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/js/rickshaw/rickshaw.min.css')}}">

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{asset('admins/assets/js/wysihtml5/bootstrap-wysihtml5.css')}}">
	<link rel="stylesheet" href="{{asset('admins/assets/js/selectboxit/jquery.selectBoxIt.css')}}">


	 <!-- Imported styles on this page -->
    <link rel="stylesheet" href="{{asset('admins/assets/js/datatables/datatables.css')}}">
    <link rel="stylesheet" href="{{asset('admins/assets/js/select2/select2-bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admins/assets/js/select2/select2.css')}}">


	<!-- Bottom scripts (common) -->
	<script src="{{asset('admins/assets/js/gsap/TweenMax.min.js')}}"></script>
	<script src="{{asset('admins/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
	<script src="{{asset('admins/assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('admins/assets/js/joinable.js')}}"></script>
	<script src="{{asset('admins/assets/js/resizeable.js')}}"></script>
	<script src="{{asset('admins/assets/js/neon-api.js')}}"></script>
	<script src="{{asset('admins/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{asset('admins/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
	<script src="{{asset('admins/assets/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('admins/assets/js/rickshaw/vendor/d3.v3.js')}}"></script>
	<script src="{{asset('admins/assets/js/rickshaw/rickshaw.min.js')}}"></script>
	<script src="{{asset('admins/assets/js/raphael-min.js')}}"></script>
	<script src="{{asset('admins/assets/js/morris.min.js')}}"></script>
	<script src="{{asset('admins/assets/js/toastr.js')}}"></script>
	<script src="{{asset('admins/assets/js/neon-chat.js')}}"></script>


	 <!-- Imported scripts on this page -->
    <script src="{{asset('admins/assets/js/datatables/datatables.js')}}"></script>
    <script src="{{asset('admins/assets/js/select2/select2.min.js')}}"></script>
    <script src="{{asset('admins/assets/js/neon-chat.js')}}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{asset('admins/assets/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
	<script src="{{asset('admins/assets/js/jquery.multi-select.js')}}"></script>
	<script src="{{asset('admins/assets/js/fileinput.js')}}"></script>
	<script src="{{asset('admins/assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('admins/assets/js/selectboxit/jquery.selectBoxIt.min.js')}}"></script>
	<script src="{{asset('admins/assets/js/bootstrap-tagsinput.min.js')}}"></script>
	<script src="{{asset('admins/assets/js/neon-chat.js')}}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{asset('admins/assets/js/neon-custom.js')}}"></script>


	<!-- Demo Settings -->
	<script src="{{asset('admins/assets/js/neon-demo.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script src="{{asset('admins/assets/js/lga.js')}}"></script>

<script>
    function logout(){


        $.confirm({
            animation: 'zoom',
            closeAnimation: 'scale',
            theme: 'supervan',
            title: 'Confirm!',
            icon: 'fa fa-question',
            content: 'Are You Sure You Want To Logout',
            buttons: {
                confirm: function () {

                    $.ajax({
                        type: 'GET',
                        url: "{{url('/admin/logout')}}",
                        //data: {
                        //    "_token": "{{ csrf_token() }}"
                        //},
                        error: function() {

                        },
                        dataType: 'text',
                        success: function() {
                            window.location = "{{url('/admin/login')}}";

                        },

                    });


                },
                cancel: function () {

                }

            }
        });


    }
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
        $(function() {

            $('.pop').on('click', function() {
                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
				$('.title2').text($(this).parent().find('label').text());
				$('#imagemodal').show().modal({backdrop: 'static', keyboard: false});   
            });

			$('#close').on('click', function() {
				$('#imagemodal').hide();   
            });

			$('.close2').on('click', function() {
				
				$('.modal-backdrop').hide();   
			});	
					
        });
</script>

</body>
</html>

<!-- **********************************************************************************************
							designed by	satoseries an optisoft project

		 			    optisoft official website -> https://optisoft.ng/


					  satoseries github repo -> https://github.com/satowind

							****************************************

	 				 satoseries twitter page -> https://twitter.com/Satowind

				  satoseries facebook page -> https://www.facebook.com/satoseries
	  
	 	 satoseries linkedin page -> https://www.linkedin.com/in/ogugua-tochukwu-900495113/
	************************************************************************************************ -->