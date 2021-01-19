<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.html">
						<h2 style='color:white;'>[ PICTURECITY ]</h2>
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
			
			<div class="sidebar-user-info">

				<div class="sui-normal">
					<a href="#" class="user-link">
						<img src="logo.jpg" alt="" class="img-circle" style="max-width: 50px; max-height: 50px;"/>

						<span>Admin </span>
						<strong>Juan Dela Cruz</strong>
					</a>
				</div>

				<div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->
					

					<a href="mailbox.html">
						<i class="entypo-cog"></i>
						Change Password
					</a>

					<a href="extra-lockscreen.html">
						<i class="entypo-logout"></i>
						Log Out
					</a>

					<span class="close-sui-popup">&times;</span><!-- this is mandatory -->				</div>
			</div>
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="active">
					<a href="{{ route('home') }}" >
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="ui-panels.html">
						<i class="entypo-newspaper"></i>
						<span class="title">System Setup</span>
					</a>
					<ul>
						<li>
							<a href="ssusers.html">
								<i class="entypo-user-add"></i>
								<span class="title">Users</span>
							</a>
						</li>
						<li>
							<a href="sssizes.html">
								<i class="entypo-gauge"></i>
								<span class="title">Sizes</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="-main.html">
						<i class="entypo-window"></i>
						<span class="title">Transaction</span>
					</a>
					<ul>
						<li>
							<a href="/request/index">
								<i class="entypo-leaf"></i>
								<span class="title">Request</span>
							</a>
						</li>
						<li>
							<a href="printing.html">
								<i class="entypo-print"></i>
								<span class="title">Print</span>
							</a>
						</li>
						<li>
							<a href="framing.html">
								<i class="entypo-doc-landscape"></i>
								<span class="title">Frame</span>
							</a>
						</li>
						<li>
							<a href="packagingmem.html">
								<i class="entypo-box"></i>
								<span class="title">Packaging Memo</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="charts.html">
						<i class="entypo-chart-bar"></i>
						<span class="title">Reports</span>
					</a>
					<ul>
						<li>
							<a href="reportslist.html">
								<i class="entypo-flow-line"></i>
								<span class="title">Request List</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
			
		</div>

	</div>