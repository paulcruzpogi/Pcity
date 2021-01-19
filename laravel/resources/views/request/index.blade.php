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
	<script src="{{ asset('imports/sweetalert/sweetalert.min.js') }}"></script>
	<script>$.noConflict();</script>


</head>
<body class="page-body page-left-in" data-url="#">

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

	@if(count($errors) > 0) 
	 <div class = "alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)
	 <li>{{ $error }}</li>
	@endforeach
	</ul>
	 </div>
	 @endif

	 @if(\Session::has('success'))
	 	<div class = "alert alert-success">
		 	<p>{{ \Session::get('success') }}
		</div>
	@endif

		<h2>MY REQUEST</h2>
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th style = "text-align:center;">#</th>
					<th>PF No</th>
					<th>Branch</th>
					<th>Customer Name</th>
					<th>Size</th>
					<th>Memo No</th>
					<th>Date Sent</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($request as $requestData)
				<tr>
					<td>{{ $requestData->id }}</td>
					<td>{{ $requestData->pf_number }}</td>
					<td>{{ $requestData->branch_name }}</td>
					<td>{{ $requestData->customer_name }}</td>
					<td>{{ $requestData->size }}</td>
					<td>{{ $requestData->memo }}</td>
					<td>{{ $requestData->created_at }}</td>
					<td><div class="label label-warning">Pending request</div></td>
					<td>
					<button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Request" onclick="jQuery('#sample-modal-dialog-2').modal('show');"><i class="entypo-login"></i></button>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Cancel Request" onclick="cancelreq();"><i class="entypo-cancel"></i></button>
					</td>
				</tr>
			@endforeach
				
			</tbody>
		</table>

		<div class = "row">
		<button type="button" style = "margin-right:15px;" class="btn btn-info btn-icon icon-left pull-right" onclick="jQuery('#sample-modal-dialog-3').modal('show');">ADD REQUEST<i class="entypo-plus"></i></button>
		</div>
		
		<script type="text/javascript">
		var responsiveHelper;
		var breakpointDefinition = {
		    tablet: 1024,
		    phone : 480
		};
		var tableContainer;
		
			jQuery(document).ready(function($)
			{
				tableContainer = $("#table-1");
				
				tableContainer.dataTable({
					"sPaginationType": "bootstrap",
					"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
					"bStateSave": true,
					"ordering" : false,
		
				    // Responsive Settings
				    bAutoWidth     : false,
				    fnPreDrawCallback: function () {
				        // Initialize the responsive datatables helper once.
				        if (!responsiveHelper) {
				            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
				        }
				    },
				    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				        responsiveHelper.createExpandIcon(nRow);
				    },
				    fnDrawCallback : function (oSettings) {
				        responsiveHelper.respond();
				    }
				});
				
				$(".dataTables_wrapper select").select2({
					minimumResultsForSearch: -1
				});
			});

		function submit()
		{
			swal({
               title: "Confirmation",
               text: "Are you sure you want to SUBMIT changes?",
               icon: "warning",
  			   closeOnClickOutside: false,
               buttons: true,
       		}).then((isConfirm) =>  {
               if (isConfirm) {
                   swal("Success!", "Changes has been saved.", "success");
                   jQuery("#sample-modal-dialog-2").modal("hide");
               } 
               else 
               {
                   swal("Cancelled", "Operation cancelled.", "error");
               }
           });
		} 

		function cancelreq()
		{
			swal({
               title: "Confirmation",
               text: "Are you sure you want to CANCEL the request?",
               icon: "warning",
  			   closeOnClickOutside: false,
               buttons: true,
       		}).then((isConfirm) =>  {
               if (isConfirm) {
                   swal("Success!", "Request has been cancelled.", "success");
               } 
               else 
               {
                   swal("Cancelled", "Operation cancelled.", "error");
               }
           });
		}


		</script>
		
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

{{-- Add Modal --}}
	<div class="modal fade" id="sample-modal-dialog-3">
		<div class="modal-dialog">
			<div class="modal-content">
			<form action = "" method = "POST">
			{{ csrf_field() }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">ADD NEW REQUEST</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>PF Number</b>
						<input type="text" name="pf_number" class="form-control">
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Branch</b>						
						<input type="text" name="branch_name" class="form-control">
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Customer Name</b>
						<input type="text" name="customer_name" class="form-control">
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Size</b>
						<input type="text" name="size" class="form-control">								
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Memo Number</b>
						<input type="text" name="memo" id ="memo" class="form-control">								
					</div>
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info" onclick="submit()">Submit</button>
				</div>
			</form>
			</div>
		</div>
	</div>
{{-- Edit Modal --}}
	<div class="modal fade" id="sample-modal-dialog-2">
		<div class="modal-dialog">
			<div class="modal-content">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<form action = "/request/index" method = "POST" id = "editmodal">
			@csrf
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">EDIT Request</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>PF Number</b>
						<input type="text" name="pf_number" id = "pf_number" class="form-control">
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Branch</b>						
						<input type="text" name="branch_name" id = "branch_name" class="form-control">
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Customer Name</b>
						<input type="text" name="customer_name" id ="customer_name" class="form-control">
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Size</b>
						<input type="text" name="size" id="size" class="form-control">								
					</div>
					<div class="col-md-12" style="padding-bottom:15px;">
						<b>Memo Number</b>
						<input type="text" name="memo" id ="memo" class="form-control">								
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info" onclick="">Edit</button>
				</div>
			</form>
			</div>
		</div>
	</div>

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{ asset('js/datatables/responsive/css/datatables.responsive.css') }}">
	<link rel="stylesheet" href="{{ asset('js/select2/select2-bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}">

	<!-- Bottom scripts (common) -->
	<script src="{{ asset('js/gsap/main-gsap.js') }}"></script>
	<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
	<script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/neon-api.js') }}"></script>
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/datatables/TableTools.min.js') }}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('js/datatables/jquery.dataTables.columnFilter.js') }}"></script>
	<script src="{{ asset('js/datatables/lodash.min.js') }}"></script>
	<script src="{{ asset('js/datatables/responsive/js/datatables.responsive.js') }}"></script>
	<script src="{{ asset('js/select2/select2.min.js') }}"></script>
	<script src="{{ asset('js/neon-chat.js') }}"></script>
	<script src="{{ asset('js/toastr.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('js/neon-custom.js') }}"></script>


	<!-- Demo Settings -->
	<script src="{{ asset('js/neon-demo.js') }}"></script>

</body>
</html>
