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
		
		
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Sparkline Charts
			$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
			$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
			$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
			$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
			$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
			$('.linechart').sparkline();
			$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
			$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );
		
		
			$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
				type: 'bar',
				barColor: '#485671',
				height: '80px',
				barWidth: 10,
				barSpacing: 2
			});
		
		
			// JVector Maps
			var map = $("#map");
		
			map.vectorMap({
				map: 'europe_merc_en',
				zoomMin: '3',
				backgroundColor: '#383f47',
				focusOn: { x: 0.5, y: 0.8, scale: 3 }
			});
		
			// Line Charts
			var line_chart_demo = $("#line-chart-demo");
		
			var line_chart = Morris.Line({
				element: 'line-chart-demo',
				data: [
					{ y: '2006', a: 100, b: 150 },
					{ y: '2007', a: 75,  b: 65 },
					{ y: '2008', a: 50,  b: 40 },
					{ y: '2009', a: 75,  b: 65 },
					{ y: '2010', a: 50,  b: 40 },
					{ y: '2011', a: 75,  b: 65 },
					{ y: '2012', a: 100, b: 500 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['January 2019', 'January 2020'],
				redraw: true
			});
		
			line_chart_demo.parent().attr('style', '');
		
		
			// Donut Chart
			var donut_chart_demo = $("#donut-chart-demo");
		
			donut_chart_demo.parent().show();
		
			var donut_chart = Morris.Donut({
				element: 'donut-chart-demo',
				data: [
					{label: "Download Sales", value: getRandomInt(10,50)},
					{label: "In-Store Sales", value: getRandomInt(10,50)},
					{label: "Mail-Order Sales", value: getRandomInt(10,50)}
				],
				colors: ['#707f9b', '#455064', '#242d3c']
			});
		
			donut_chart_demo.parent().attr('style', '');
		
		
			// Area Chart
			var area_chart_demo = $("#area-chart-demo");
		
			area_chart_demo.parent().show();
		
			var area_chart = Morris.Area({
				element: 'area-chart-demo',
				data: [
					{ y: '2006', a: 100, b: 90 },
					{ y: '2007', a: 75,  b: 65 },
					{ y: '2008', a: 50,  b: 40 },
					{ y: '2009', a: 75,  b: 65 },
					{ y: '2010', a: 50,  b: 40 },
					{ y: '2011', a: 75,  b: 65 },
					{ y: '2012', a: 100, b: 90 }
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Series A', 'Series B'],
				lineColors: ['#303641', '#576277']
			});
		
			area_chart_demo.parent().attr('style', '');
		
		});
		
		
		function getRandomInt(min, max)
		{
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		</script>
		
		
		<div class="row">
			<div class="col-sm-4 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Pending Request</h3>
					<p>total no of pending request.</p>
				</div>
		
			</div>
		
			<div class="col-sm-4 col-xs-6">
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Delivered to HO</h3>
					<p>total no of request in HO.</p>
				</div>
			</div>
		
			<div class="col-sm-4 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
					<div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h3>Delivered to Store</h3>
					<p>total no of finished request.</p>
				</div>
		
			</div>
		</div>
		
		<br />
		
		<div class="row">
			<div class="col-sm-12">
		
				<div class="panel panel-primary" id="charts_env">
		
					<div class="panel-heading">
						<div class="panel-title">Site Stats</div>
		
						<div class="panel-options">
							<ul class="nav nav-tabs">
								<li class=""><a href="#area-chart" data-toggle="tab">Area Chart</a></li>
								<li class="active"><a href="#line-chart" data-toggle="tab">Line Charts</a></li>
								<li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li>
							</ul>
						</div>
					</div>
		
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane" id="area-chart">
								<div id="area-chart-demo" class="morrischart" style="height: 300px"></div>
							</div>
		
							<div class="tab-pane active" id="line-chart">
								<div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
							</div>
		
							<div class="tab-pane" id="pie-chart">
								<div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
							</div>
						</div>
					</div>
		
					<table class="table table-bordered table-responsive">
		
						<thead>
							<tr>
								<th width="50%" class="col-padding-1">
									<div class="pull-left">
										<div class="h4 no-margin">Month with the largest amount of request</div>
										<small>for the year 2020</small>
									</div>
									<h4 class="pull-right" style='font:20px;'>January</h4>
		
								</th>
								<th width="50%" class="col-padding-1">
									<div class="pull-left">
										<div class="h4 no-margin">Top performing branch</div>
										<small>for the year 2020</small>
									</div>
									<h4 class="pull-right" style='font:20px;'>Trinoma</h4>
								</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		
		
		<br />
		
		<div class="row">
		
			<div class="col-sm-4">
		
				<div class="panel panel-primary">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th class="padding-bottom-none text-center">
									<br />
									<br />
									<span class="monthly-sales"></span>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="panel-heading">
									<h4>Monthly Sales</h4>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
		
			</div>
		
			<div class="col-sm-8">
		
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Top Performing Branch Year 2020</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Branch</th>
								<th>No of Request</th>
							</tr>
						</thead>
		
						<tbody>
							<tr>
								<td>1</td>
								<td>Trinoma</td>
								<td>209,151</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Robinsons Magnolia</td>
								<td>101,152</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Ayala Town Center</td>
								<td>59,147</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Alabang Town Center</td>
								<td>47,151</td>
							</tr>
							<tr>
								<td>5</td>
								<td>SM Center Tuguegarao</td>
								<td>25,552</td>
							</tr>
						</tbody>
					</table>
				</div>
		
			</div>
		
		</div>
		
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
