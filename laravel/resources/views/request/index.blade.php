<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Picture City | Dashboard</title>
    
	<link rel="stylesheet" href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-icons/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

	<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body page-left-in" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
    @includeWhen(Auth::user(), 'partials.header')
        <!-- @yield('content')
    @includeWhen(Auth::user(), 'partials.footer')   -->

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
				<ul class="user-info pull-left pull-right-xs pull-none-xsm">
		
					<!-- Raw Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-attention"></i>
							<span class="badge badge-danger">86</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p class="small">
									You have <strong>86</strong> pending request that needs action.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li class="unread notification-info">
										<a href="#">
											<i class="entypo-leaf pull-right"></i>
											
											<span class="line">
												<strong>Trinoma</strong>
											</span>
											
											<span class="line small">
												January 11, 2020 - 12:54 PM
											</span>
										</a>
									</li>
									<li class="unread notification-info">
										<a href="#">
											<i class="entypo-leaf pull-right"></i>
											
											<span class="line">
												<strong>Trinoma</strong>
											</span>
											
											<span class="line small">
												January 11, 2020 - 12:50 PM
											</span>
										</a>
									</li>
									<li class="unread notification-info">
										<a href="#">
											<i class="entypo-leaf pull-right"></i>
											
											<span class="line">
												<strong>Trinoma</strong>
											</span>
											
											<span class="line small">
												January 11, 2020 - 12:20 PM
											</span>
										</a>
									</li>
									<li class="unread notification-info">
										<a href="#">
											<i class="entypo-leaf pull-right"></i>
											
											<span class="line">
												<strong>Trinoma</strong>
											</span>
											
											<span class="line small">
												January 11, 2020 - 12:01 PM
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">View all notifications</a>
							</li>
						</ul>
		
					</li>
				</ul>
		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
					<li class="dropdown language-selector">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<i class="entypo-user"></i>
							Account

						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#" class="active">
									<i class="entypo-cog right"></i> Change Password 
								</a>
								<a href="index.html">
									<i class="entypo-logout right"></i> Log Out
								</a>
							</li>
						</ul>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />
        
        <ol class="breadcrumb bc-3" >
			<li>
				<a href="#"><i class="fa-home"></i>Transaction</a>
			</li>
			<li class="active">
				<strong>Request</strong>
			</li>
        </ol>
        
        <br />
		
		<h2>REQUEST</h2>
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th>PF No</th>
					<th>Branch</th>
					<th>Customer Name</th>
					<th>Size</th>
					<th>Date Sent</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					<td>054-111222333</td>
					<td>Trinoma</td>
					<td>Paul John A. Cruz</td>
					<td>ACWF 8x10</td>
					<td>January 10, 2020 12:51 PM</td>
					<td><div class="label label-warning">Pending request</div></td>
					<td>
					<button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Request" onclick="jQuery('#sample-modal-dialog-2').modal('show');"><i class="entypo-login"></i></button>
					<button type="button" class="btn btn-blue btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Forward Request" onclick="forward();"><i class="entypo-forward"></i></button>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Reject Request" onclick="reject();"><i class="entypo-cancel"></i></button>
					<button type="button" class="btn btn-info btn-sm"  data-toggle="tooltip" data-placement="top" data-original-title="View Request Details" onclick="jQuery('#sample-modal-dialog-1').modal('show');"><i class="entypo-info"></i></button>
					</td>
				</tr>
				<tr class="even gradeC">
					<td>054-111222332</td>
					<td>Ayala Town Center</td>
					<td>John A. Doe</td>
					<td>ACWF 8x10</td>
					<td>January 10, 2020 11:27 AM</td>
					<td><div class="label label-warning">Pending request</div></td>
					<td>
					<button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Request" onclick="jQuery('#sample-modal-dialog-2').modal('show');"><i class="entypo-login"></i></button>
					<button type="button" class="btn btn-blue btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Forward Request" onclick="forward();"><i class="entypo-forward"></i></button>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Reject Request" onclick="reject();"><i class="entypo-cancel"></i></button>
					<button type="button" class="btn btn-info btn-sm"  data-toggle="tooltip" data-placement="top" data-original-title="View Request Details" onclick="jQuery('#sample-modal-dialog-1').modal('show');"><i class="entypo-info"></i></button>
					</td>
				</tr>
				<tr class="even gradeC">
					<td>054-111222331</td>
					<td>Ayala Town Center</td>
					<td>Juan Dela Cruz</td>
					<td>ACWF 8x10</td>
					<td>January 10, 2020 10:05 AM</td>
					<td><div class="label label-info">For Printing</div></td>
					<td>
					<button type="button" class="btn btn-info btn-sm" disabled><i class="entypo-login"></i></button>
					<button type="button" class="btn btn-blue btn-sm" disabled><i class="entypo-forward"></i></button>
					<button type="button" class="btn btn-danger btn-sm" disabled><i class="entypo-cancel"></i></button>
					<button type="button" class="btn btn-info btn-sm"  data-toggle="tooltip" data-placement="top" data-original-title="View Request Details" onclick="jQuery('#sample-modal-dialog-1').modal('show');"><i class="entypo-info"></i></button>
					</td>
				</tr>
			</tbody>
		</table>

		
		<!-- Footer -->
		<footer class="main">
				<a target="_blank" href="https://www.facebook.com/picturecityofficial/">COPYRIGHT © 2020 PICTURE CITY ALL RIGHTS RESERVED</a>
		</footer>
	</div>
</div>

	<!-- Sample Modal (Default skin) -->
	<div class="modal fade" id="sample-modal-dialog-1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Filter reports</h4>
				</div>
				
				<div class="modal-body">
					<p>Sample.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Filter</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.css') }}">

	<!-- Bottom scripts (common) -->
	<script src="{{ asset('js/gsap/main-gsap.js') }}"></script>
	<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
	<script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/neon-api.js') }}"></script>
	<script src="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{ asset('js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
	<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('js/raphael-min.js') }}"></script>
	<script src="{{ asset('js/morris.min.js') }}"></script>
	<script src="{{ asset('js/toastr.js') }}"></script>
	<script src="{{ asset('js/neon-chat.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('js/neon-custom.js') }}"></script>


	<!-- Demo Settings -->
	<script src="{{ asset('js/neon-demo.js') }}"></script>

</body>
</html>
