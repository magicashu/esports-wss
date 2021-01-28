<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="css\styles.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css\bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="css\layout.min.css" rel="stylesheet" type="text/css">
	<link href="css\components.min.css" rel="stylesheet" type="text/css">
	<link href="css\colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="js\jquery.min.js"></script>
	<script src="js\bootstrap.bundle.min.js"></script>
	<script src="js\blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="plugins\visualization\d3\d3.min.js"></script>
	<script src="plugins\visualization\d3\d3_tooltip.js"></script>
	<script src="plugins\forms\styling\switchery.min.js"></script>
	<script src="plugins\forms\selects\bootstrap_multiselect.js"></script>
	<script src="plugins\ui\moment\moment.min.js"></script>
	<script src="plugins\pickers\daterangepicker.js"></script>

	<script src="js\app.js"></script>
	<script src="js\dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="img\logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="img\8.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="assets\images\8.jpg" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Admin</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<!-- <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="..\..\material\full\index.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li> -->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="..\seed\layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
								<li class="nav-item"><a href="..\seed\sidebar_none.html" class="nav-link">No sidebar</a></li>
								<li class="nav-item"><a href="..\seed\sidebar_main.html" class="nav-link">1 sidebar</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">2 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="..\seed\sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
										<li class="nav-item"><a href="..\seed\sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">3 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="..\seed\sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
										<li class="nav-item"><a href="..\seed\sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="..\seed\sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="..\seed\sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="..\seed\layout_boxed.html" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="..\seed\navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="..\seed\navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="..\seed\navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="..\seed\layout_fixed.html" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						
						<!-- /main -->


						<!-- Data visualization -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.html" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.html" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						
						<!-- /data visualization -->

						<!-- Tables -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.html" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.html" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>
						<!-- /tables -->

						<!-- Page kits -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
					
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
				
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row">
					<div class="col-xl-7">

						<!-- Traffic sources -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Traffic sources</h6>
								<div class="header-elements">
									<div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
										<label class="form-check-label">
											Live update:
											<input type="checkbox" class="form-input-switchery" checked="" data-fouc="">
										</label>
									</div>
								</div>
							</div>

							<div class="card-body py-0">
								<div class="row">
									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
												<i class="icon-plus3"></i>
											</a>
											<div>
												<div class="font-weight-semibold">New visitors</div>
												<span class="text-muted">2,349 avg</span>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="new-visitors"></div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-watch2"></i>
											</a>
											<div>
												<div class="font-weight-semibold">New sessions</div>
												<span class="text-muted">08:20 avg</span>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="new-sessions"></div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-people"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Total online</div>
												<span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="total-online"></div>
									</div>
								</div>
							</div>

							<div class="chart position-relative" id="traffic-sources"></div>
						</div>
						<!-- /traffic sources -->

					</div>

					<div class="col-xl-5">

						<!-- Sales stats -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Sales statistics</h6>
								<div class="header-elements">
									<select class="form-control" id="select_date" data-fouc="">
										<option value="val1">June, 29 - July, 5</option>
										<option value="val2">June, 22 - June 28</option>
										<option value="val3" selected="">June, 15 - June, 21</option>
										<option value="val4">June, 8 - June, 14</option>
									</select>
			                	</div>
							</div>

							<div class="card-body py-0">
								<div class="row text-center">
									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">5,689</h5>
											<span class="text-muted font-size-sm">new orders</span>
										</div>
									</div>

									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">32,568</h5>
											<span class="text-muted font-size-sm">this month</span>
										</div>
									</div>

									<div class="col-4">
										<div class="mb-3">
											<h5 class="font-weight-semibold mb-0">$23,464</h5>
											<span class="text-muted font-size-sm">expected profit</span>
										</div>
									</div>
								</div>
							</div>

							<div class="chart mb-2" id="app_sales"></div>
							<div class="chart" id="monthly-sales-stats"></div>
						</div>
						<!-- /sales stats -->

					</div>
				</div>
				<!-- /main charts -->


				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-8">

						<!-- Marketing campaigns -->
						<div class="card">
							<div class="card-header header-elements-sm-inline">
								<h6 class="card-title">Marketing campaigns</h6>
								<div class="header-elements">
									<span class="badge bg-success badge-pill">28 active</span>
									<div class="list-icons ml-3">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>

							<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaigns-donut"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
										<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaign-status-pie"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
										<span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Jun 4, 4:00 am</span>
									</div>
								</div>

								<div>
									<a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> View report</a>
								</div>
							</div>
						</div>
						<!-- /marketing campaigns -->


						<!-- Quick stats boxes -->
						<div class="row">
							<div class="col-lg-4">

								<!-- Members online -->
								<div class="card bg-teal-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">3,450</h3>
											<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
					                	</div>
					                	
					                	<div>
											Members online
											<div class="font-size-sm opacity-75">489 avg</div>
										</div>
									</div>

									<div class="container-fluid">
										<div id="members-online"></div>
									</div>
								</div>
								<!-- /members online -->

							</div>

							<div class="col-lg-4">

								<!-- Current server load -->
								<div class="card bg-pink-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">49.4%</h3>
											<div class="list-icons ml-auto">
						                		<div class="list-icons-item dropdown">
						                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
														<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
														<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
														<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
													</div>
						                		</div>
					                		</div>
					                	</div>
					                	
					                	<div>
											Current server load
											<div class="font-size-sm opacity-75">34.6% avg</div>
										</div>
									</div>

									<div id="server-load"></div>
								</div>
								<!-- /current server load -->

							</div>
						</div>
						<!-- /quick stats boxes -->


						<!-- Support tickets -->
						<div class="card">
							<div class="card-header header-elements-sm-inline">
								<h6 class="card-title">Support tickets</h6>
								<div class="header-elements">
									<a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
										<i class="icon-calendar3 mr-2"></i>
										<span></span>
									</a>
			                	</div>
							</div>

							<div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
								<div class="d-flex align-items-center mb-3 mb-md-0">
									<div id="tickets-status"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
										<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-md-0">
									<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
										<i class="icon-alarm-add"></i>
									</a>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">1,132</h5>
										<span class="text-muted">total tickets</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-md-0">
									<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
										<i class="icon-spinner11"></i>
									</a>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">06:25:00</h5>
										<span class="text-muted">response time</span>
									</div>
								</div>

								<div>
									<a href="#" class="btn bg-teal-400"><i class="icon-statistics mr-2"></i> Report</a>
								</div>
							</div>
						</div>
						<!-- /support tickets -->


					</div>

					<div class="col-xl-4">

						<!-- Progress counters -->
						<div class="row">
							<div class="col-sm-6">

								<!-- Available hours -->
								<div class="card text-center">
									<div class="card-body">

					                	<!-- Progress counter -->
										<div class="svg-center position-relative" id="hours-available-progress"></div>
										<!-- /progress counter -->


										<!-- Bars -->
										<div id="hours-available-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /available hours -->

							</div>

							<div class="col-sm-6">

								<!-- Productivity goal -->
								<div class="card text-center">
									<div class="card-body">

										<!-- Progress counter -->
										<div class="svg-center position-relative" id="goal-progress"></div>
										<!-- /progress counter -->

										<!-- Bars -->
										<div id="goal-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /productivity goal -->

							</div>
						</div>
						<!-- /progress counters -->


					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
