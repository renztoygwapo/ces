
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
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Admin Dashboard <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin/')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Dashboard</a>
						
					</li>
				</ul>
			
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
								<?php echo $teachers; ?>
							</div>
							<div class="desc">
								 Teachers
							</div>
						</div>
						<a class="more" href="<?php echo site_url('admin/home_admin/teacher_list/'); ?>">
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
								 <?php echo $students; ?>
							</div>
							<div class="desc">
								 Students
							</div>
						</div>
						<a class="more" href="<?php echo site_url('admin/home_admin/student_list/'); ?>">
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
								<?php echo $alumni; ?>
							</div>
							<div class="desc">
								 Alumni
							</div>
						</div>
						<a class="more" href="<?php echo site_url('admin/home_admin/alumni_list/'); ?>">
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
								<?php echo $section; ?>
							</div>
							<div class="desc">
								 Sections
							</div>
						</div>
						<a class="more" href="<?php echo site_url('admin/home_admin/event_list/'); ?>">
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
							
						</div>
									<div class="portlet-body">
													<!-- 	<div class="row">

															<div class="col-md-6">
																dfsds
															</div>
															<div class="col-md-6">
																dfsds
															</div>
														</div> -->
										<?php foreach ($event_tb as $r) : ?>
										<div class="row">
												<div class="col-md-2 ">
													<!-- BEGIN Portlet PORTLET-->
													<div class="portlet light bg-inverse">
														
														<div class="portlet-body">
															<!-- <h4><a href = ""><?php //echo $r->event_title; ?> </a></h4> -->
															<img class="img-responsive" src="<?php echo "../uploads/".$r->event_picture; ?>">		
														</div>
													</div>
													<!-- END GRID PORTLET-->
												</div>
												<div class="col-md-8 ">
													<!-- BEGIN Portlet PORTLET-->
													<div class="portlet light bg-inverse">
														
														<div class="portlet-body">
															<h4><a href = ""><?php echo $r->event_title; ?> </a></h4>
															<p>
																 <?php echo $r->event_description; ?>
															</p>
															<p>
															> Posted on <?php echo $r->event_start; ?></h4>
															</p>		
														</div>
													</div>
													<!-- END GRID PORTLET-->
												</div>
												<div class="col-md-2 ">
													<!-- BEGIN Portlet PORTLET-->
													<div class="portlet light bg-inverse">
														
														<div class="portlet-body">
															<!-- <h4><a href = ""><?php //echo $r->event_title; ?> </a></h4> -->
															<img class="img-responsive" src="<?php echo $admin->photo; ?>">
															by: <?php echo $admin->firstname; ?>		
														</div>
													</div>
													<!-- END GRID PORTLET-->
												</div>
												
										</div>						
										<?php endforeach; ?>





									</div>
				
					</div>
			</div>
		
					</div>


			</div>


			<div class="clearfix">
			</div>
		
		
	</div>
	<!-- END CONTENT -->
	

</div>
<!-- END CONTAINER -->
