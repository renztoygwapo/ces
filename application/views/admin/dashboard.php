
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler push-left">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li  class="start active">
					<a href="<?php echo site_url('admin/home_admin/')?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/myprofile/')?>" >
					<i class="icon-user"></i>
					<span class="title">My Profile</span>
					<span class="selected"></span>
				
					</a>
				</li>
		
				<li>
					<a href="<?php echo site_url('admin/myfiles/')?>" >
					<i class="icon-briefcase"></i>
					<span class="title">My Files</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/request/')?>" >
					<i class="icon-docs"></i>
					<span class="title">Request</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li >
					<a href="<?php echo site_url('admin/rankings/')?>" >
					<i class="icon-trophy"></i>
					<span class="title">Rankings</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/reports/')?>" >
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/forum_db/')?>" >
					<i class="icon-users"></i>
					<span class="title">Forums</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Eventadmin/')?>" >
					<i class="icon-users"></i>
					<span class="title">event</span>
					<span class="selected"></span>
				
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->

	
	<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
						THEME COLOR </span>
						<ul>
							<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
							</li>
							<li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
							</li>
							<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
							</li>
							<li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
						Layout </span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Header </span>
						<select class="page-header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Mode</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Menu </span>
						<select class="sidebar-menu-option form-control input-small">
							<option value="accordion" selected="selected">Accordion</option>
							<option value="hover">Hover</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Style </span>
						<select class="sidebar-style-option form-control input-small">
							<option value="default" selected="selected">Default</option>
							<option value="light">Light</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Position </span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Footer </span>
						<select class="page-footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Admin Dashboard <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Dashboard</a>
						
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 1349
							</div>
							<div class="desc">
								 Teacher
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								 12,5M$
							</div>
							<div class="desc">
								 Student
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 549
							</div>
							<div class="desc">
								 Alumni
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								 +89%
							</div>
							<div class="desc">
								 Events
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->

		<!--- Portlet Start For Events -->


			<div class="row">
				
					<div class="portlet box blue-steel">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>Events Activities
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-sm btn-default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									Filter By <i class="fa fa-angle-down"></i>
									</a>
									<div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<label><div class="checker"><span><input type="checkbox"></span></div> Finance</label>
										<label><div class="checker"><span class="checked"><input type="checkbox" checked=""></span></div> Membership</label>
										<label><div class="checker"><span><input type="checkbox"></span></div> Customer Support</label>
										<label><div class="checker"><span class="checked"><input type="checkbox" checked=""></span></div> HR</label>
										<label><div class="checker"><span><input type="checkbox"></span></div> System</label>
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="scroller" style="overflow: hidden; width: auto; height: 300px;" data-always-visible="1" data-rail-visible="0" data-initialized="1">
								<ul class="feeds">
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-check"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 4 pending tasks. <span class="label label-sm label-warning ">
														Take action <i class="fa fa-share"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 Just now
											</div>
										</div>
									</li>
									<li>
										<a href="#">
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-success">
														<i class="fa fa-bar-chart-o"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 Finance Report for year 2013 has been released.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 20 mins
											</div>
										</div>
										</a>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-danger">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 5 pending membership that requires a quick review.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 24 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 New order received with <span class="label label-sm label-success">
														Reference Number: DR23923 </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 30 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-success">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 5 pending membership that requires a quick review.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 24 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-default">
														<i class="fa fa-bell-o"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
														Overdue </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 2 hours
											</div>
										</div>
									</li>
									<li>
										<a href="#">
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-default">
														<i class="fa fa-briefcase"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 IPO Report for year 2013 has been released.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 20 mins
											</div>
										</div>
										</a>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-check"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 4 pending tasks. <span class="label label-sm label-warning ">
														Take action <i class="fa fa-share"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 Just now
											</div>
										</div>
									</li>
									<li>
										<a href="#">
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-danger">
														<i class="fa fa-bar-chart-o"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 Finance Report for year 2013 has been released.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 20 mins
											</div>
										</div>
										</a>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-default">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 5 pending membership that requires a quick review.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 24 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 New order received with <span class="label label-sm label-success">
														Reference Number: DR23923 </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 30 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-success">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 You have 5 pending membership that requires a quick review.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 24 mins
											</div>
										</div>
									</li>
									<li>
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-warning">
														<i class="fa fa-bell-o"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
														Overdue </span>
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 2 hours
											</div>
										</div>
									</li>
									<li>
										<a href="#">
										<div class="col1">
											<div class="cont">
												<div class="cont-col1">
													<div class="label label-sm label-info">
														<i class="fa fa-briefcase"></i>
													</div>
												</div>
												<div class="cont-col2">
													<div class="desc">
														 IPO Report for year 2013 has been released.
													</div>
												</div>
											</div>
										</div>
										<div class="col2">
											<div class="date">
												 20 mins
											</div>
										</div>
										</a>
									</li>
								</ul>
							</div><div class="slimScrollBar" style="width: 7px; position: absolute; opacity: 0.4; border-radius: 7px; z-index: 99; left: 1px; top: 134px; height: 124.827px; display: block; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; left: 1px; background: rgb(234, 234, 234);"></div></div>
							<div class="scroller-footer">
								<div class="btn-arrow-link pull-right">
									<a href="#">See All Records</a>
									<i class="icon-arrow-right"></i>
								</div>
							</div>
						</div>
					</div>
				
			</div>

			<div class="row">

				<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="glyphicon glyphicon-headphones"></i>List of Teacher
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
									 #
								</th>
								<th>
									 First Name
								</th>
								<th>
									 Last Name
								</th>
								<th class="hidden-480">
									 Username
								</th>
								<th>
									 Section
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 1
								</td>
								<td>
									 Mark
								</td>
								<td>
									 Otto
								</td>
								<td class="hidden-480">
									 makr124
								</td>
								<td>
									<span class="label label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
									 2
								</td>
								<td>
									 Jacob
								</td>
								<td>
									 Nilson
								</td>
								<td class="hidden-480">
									 jac123
								</td>
								<td>
									<span class="label label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
									 3
								</td>
								<td>
									 Larry
								</td>
								<td>
									 Cooper
								</td>
								<td class="hidden-480">
									 lar
								</td>
								<td>
									<span class="label label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
									 3
								</td>
								<td>
									 Sandy
								</td>
								<td>
									 Lim
								</td>
								<td class="hidden-480">
									 sanlim
								</td>
								<td>
									<span class="label label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>


			</div>


			<div class="clearfix">
			</div>
		
		
	</div>
	<!-- END CONTENT -->
	

</div>
<!-- END CONTAINER -->
