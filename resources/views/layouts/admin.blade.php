<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Quản trị Admin - Amore</title>

<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/css/londinium-theme.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">


</head>

<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="{{asset('admin/images/logo.png')}}" alt="Londinium"></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-people"></i>
					<span class="label label-default">2</span>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Activity</span>
						<a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a>
					</div>
	                <ul class="activity">
		                <li>
		                	<i class="icon-cart-checkout text-success"></i>
		                	<div>
			                	<a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a>
			                	<span>14 minutes ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-heart text-danger"></i>
		                	<div>
			                	Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a>
			                	<span>35 minutes ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-checkmark3 text-success"></i>
		                	<div>
			                	Mail server was updated. See <a href="#">changelog</a>
			                	<span>About 2 hours ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-paragraph-justify2 text-warning"></i>
		                	<div>
			                	There are <a href="#">6 new tasks</a> waiting for you. Don't forget!
			                	<span>About 3 hours ago</span>
		                	</div>
		                </li>
	                </ul>
                </div>
			</li>

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-paragraph-justify2"></i>
					<span class="label label-default">6</span>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Messages</span>
						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
					</div>
					<ul class="popup-messages">
						<li class="unread">
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Eugene Kopyov <i class="icon-attachment2"></i></strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Jason Goldsmith <i class="icon-attachment2"></i></strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Angel Novator</strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Monica Bloomberg</strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Patrick Winsleur</strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle">
					<i class="icon-grid"></i>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Tasks list</span>
						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
					</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Description</th>
								<th>Category</th>
								<th class="text-center">Priority</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="status status-success item-before"></span> <a href="#">Frontpage fixes</a></td>
								<td><span class="text-smaller text-semibold">Bugs</span></td>
								<td class="text-center"><span class="label label-success">87%</span></td>
							</tr>
							<tr>
								<td><span class="status status-danger item-before"></span> <a href="#">CSS compilation</a></td>
								<td><span class="text-smaller text-semibold">Bugs</span></td>
								<td class="text-center"><span class="label label-danger">18%</span></td>
							</tr>
							<tr>
								<td><span class="status status-info item-before"></span> <a href="#">Responsive layout changes</a></td>
								<td><span class="text-smaller text-semibold">Layout</span></td>
								<td class="text-center"><span class="label label-info">52%</span></td>
							</tr>
							<tr>
								<td><span class="status status-success item-before"></span> <a href="#">Add categories filter</a></td>
								<td><span class="text-smaller text-semibold">Content</span></td>
								<td class="text-center"><span class="label label-success">100%</span></td>
							</tr>
							<tr>
								<td><span class="status status-success item-before"></span> <a href="#">Media grid padding issue</a></td>
								<td><span class="text-smaller text-semibold">Bugs</span></td>
								<td class="text-center"><span class="label label-success">100%</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>

			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="http://placehold.it/300">
					<span>Eugene Kopyov</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="#"><i class="icon-user"></i> Profile</a></li>
					<li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
					<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
					<li><a href="#"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /navbar -->


	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="http://placehold.it/300" alt="">
						<div class="user-info">
							Madison Gartner <span>Web Developer</span>
						</div>
					</a>
					<div class="popup dropdown-menu dropdown-menu-right">
					    <div class="thumbnail">
					    	<div class="thumb">
								<img alt="" src="http://placehold.it/300">
								<div class="thumb-options">
									<span>
										<a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a>
										<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>
									</span>
								</div>
						    </div>

					    	<div class="caption text-center">
					    		<h6>Madison Gartner <small>Front end developer</small></h6>
					    	</div>
				    	</div>

				    	<ul class="list-group">
							<li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>
							<li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>
							<li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>
							<li class="list-group-item"><i class="icon-stack text-muted"></i> Balance <h5 class="pull-right text-danger">$45.389</h5></li>
						</ul>
					</div>
				</div>
				<!-- /user dropdown -->


				<!-- Main navigation -->
				<ul class="navigation">
					<li><a href="index.html"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li>
						<a href="#"><span>Form components</span> <i class="icon-paragraph-justify2"></i></a>
						<ul>
							<li><a href="form_components.html">Form components</a></li>
							<li><a href="form_layouts.html">Form layouts</a></li>
							<li><a href="form_grid.html">Inputs grid</a></li>
							<li><a href="wysiwyg.html">WYSIWYG editor</a></li>
							<li><a href="validation.html">Validation</a></li>
							<li class="active"><a href="file_uploader.html">Multiple file uploader</a></li>
							<li><a href="form_snippets.html">Form snippets</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Interface components</span> <i class="icon-grid"></i></a>
						<ul>
							<li><a href="visuals.html">Visuals &amp; notifications</a></li>
							<li><a href="navs.html">Navs</a></li>
							<li><a href="panel_options.html">Panel options</a></li>
							<li><a href="navbars.html">Navbars</a></li>
							<li><a href="info_blocks.html">Info blocks</a></li>
							<li><a href="icons.html">Icons <span class="label label-danger">850+</span></a></li>
							<li><a href="buttons.html">Buttons</a></li>
							<li><a href="calendar.html">Calendar</a></li>
							<li><a href="typography.html">Typography</a></li>
							<li><a href="gallery.html">Media gallery</a></li>
							<li><a href="header_elements.html">Page header elements</a></li>
							<li><a href="content_grid.html">Content grid</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Layouts</span> <i class="icon-copy"></i></a>
						<ul>
							<li><a href="sidebar_wide_left.html">Left wide sidebar</a></li>
							<li><a href="sidebar_wide_right.html">Right wide sidebar</a></li>
							<li><a href="sidebar_narrow_left.html">Left narrow sidebar</a></li>
							<li><a href="sidebar_narrow_right.html">Right narrow sidebar</a></li>
							<li><a href="sidebar_icons_left.html">Left aligned icons</a></li>
							<li><a href="layout_boxed.html">Boxed layout <span class="label label-danger">New</span></a></li>
							<li><a href="layout_fixed_navbar.html">Fixed navbar</a></li>
							<li><a href="horizontal_navigation.html">Horizontal navigation</a></li>
							<li><a href="horizontal_sidebar.html">Sidebar &amp; Horizontal navigation</a></li>
							<li><a href="navigation_disabled_items.html">Disabled navigation items</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Task manager</span> <i class="icon-numbered-list"></i></a>
						<ul>
							<li><a href="task_grid.html">Task grid</a></li>
							<li><a href="task_list.html">Task list</a></li>
							<li><a href="task_detailed.html">Task detailed</a></li>
						</ul>
					</li>
					<li><a href="charts.html"><span>Charts</span> <i class="icon-bars"></i></a></li>
					<li>
						<a href="#"><span>User</span> <i class="icon-user"></i></a>
						<ul>
							<li><a href="team.html">Team</a></li>
							<li><a href="contacts.html">Contact list</a></li>
							<li><a href="profile.html">User profile</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Support</span> <i class="icon-bubble6"></i></a>
						<ul>
							<li><a href="faq.html">FAQ's</a></li>
							<li><a href="chat_tabs.html">Chat with tabs</a></li>
							<li><a href="chat_contacts.html">Chat with contacts</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Tables</span> <i class="icon-table2"></i></a>
						<ul>
							<li><a href="tables_static.html">Static tables</a></li>
							<li><a href="tables_dynamic.html">Data tables</a></li>
						</ul>
					</li>
					<li><a href="search.html"><span>Search page</span> <i class="icon-search3"></i></a></li>
					<li>
						<a href="#"><span>Invoice</span> <i class="icon-coin"></i></a>
						<ul>
							<li><a href="invoice.html">Invoice template</a></li>
							<li><a href="invoice_list.html">Invoice list</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Login page</span> <i class="icon-user-plus"></i></a>
						<ul>
							<li><a href="login_simple.html">Simple login form</a></li>
							<li><a href="login_advanced.html">Login form with user image</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Error pages</span> <i class="icon-warning"></i></a>
						<ul>
							<li><a href="403.html">403 page</a></li>
							<li><a href="404.html">404 page</a></li>
							<li><a href="405.html">405 page</a></li>
							<li><a href="500.html">500 page</a></li>
							<li><a href="503.html">503 page</a></li>
							<li><a href="offline.html">Offline page</a></li>
							<li><a href="error_sidebar.html">Error page with sidebar</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Blank pages</span> <i class="icon-insert-template"></i></a>
						<ul>
							<li><a href="blank_left_sidebar.html">Left sidebar</a></li>
							<li><a href="blank_right_sidebar.html">Right sidebar</a></li>
							<li><a href="blank_collapsed_sidebar.html">Collapsed sidebar</a></li>
							<li><a href="blank_full_width.html">Full width page</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Navigation levels</span> <i class="icon-stack"></i></a>
						<ul>
							<li><a href="#">Second level first item</a></li>
							<li><a href="#">Second level second item</a>
								<ul>
									<li><a href="#">Third level first item</a></li>
									<li><a href="#">Third level third item</a>
										<ul>
											<li><a href="#">Fourth level first item</a></li>
											<li><a href="#">Fourth level second item</a></li>
											<li><a href="#">Fourth level third item</a></li>
										</ul>
									</li>
									<li><a href="#">Third level second item</a></li>
									<li><a href="#">Third level third item</a>
										<ul>
											<li><a href="#">Fourth level first item</a></li>
											<li><a href="#">Fourth level second item</a></li>
											<li><a href="#">Fourth level third item</a></li>
										</ul>
									</li>
									<li><a href="#">Third level second item</a></li>
								</ul>
							</li>
							<li><a href="#">Second level third item</a></li>
						</ul>
					</li>
				</ul>
				<!-- /main navigation -->

			</div>
		</div>
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>
					@section('panel-heading')
			            This is the master sidebar.
			        @show
        			</h3>
				</div>
			</div>
			<!-- /page header -->


			<!-- Callout -->
			<div class="callout callout-danger fade in">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<h3>Thêm thành công</h5>
			</div>
            <!-- /callout -->


			<!-- Multiple file uploader -->
			@yield('content')
            <!-- /multiple file uploader with header inside panel -->


	        <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">&copy; 2016. Amore Admin Template by <a href="http://sotayit.com">Hưởng - Thành</a></div>
	        	<div class="pull-right icons-group">
	        		<a href="#"><i class="icon-screen2"></i></a>
	        		<a href="#"><i class="icon-balance"></i></a>
	        		<a href="#"><i class="icon-cog3"></i></a>
	        	</div>
	        </div>
	        <!-- /footer -->


		</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->

</body>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/charts/sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/inputmask.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/autosize.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/inputlimit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/listbox.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/tags.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/uploader/plupload.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/uploader/plupload.queue.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/wysihtml5/wysihtml5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/forms/wysihtml5/toolbar.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/jgrowl.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/plugins/interface/timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/application.js')}}"></script>
