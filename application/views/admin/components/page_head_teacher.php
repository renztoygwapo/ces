

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.1.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Teacher - Carmen Elementary School</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/uniform/css/uniform.default.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo site_url('/assets/global/plugins/dropzone/css/dropzone.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/admin/pages/css/profile.css'); ?>" rel="stylesheet" type="text/css"/>

<link href="<?php echo site_url('/assets/global/plugins/select2/select2.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>

<!-- END PAGE LEVEL STYLES -->

<link href="<?php echo site_url('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/jqvmap/jqvmap/jqvmap.css'); ?>" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css'); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css  '); ?>"/>

<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php echo site_url('/assets/admin/pages/css/tasks.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?php echo site_url('/assets/global/css/components.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/css/plugins.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/admin/layout/css/layout.css'); ?>" rel="stylesheet" type="text/css"/>
<link id="style_color" href= "<?php echo site_url('/assets/admin/layout/css/themes/darkblue.css '); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/admin/layout/css/themes/default.css'); ?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo site_url('/assets/admin/layout/css/custom.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/admin/pages/css/profile-old.css'); ?>" rel="stylesheet" type="text/css"/>


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo site_url('/assets/global/plugins/select2/select2.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/admin/pages/css/login.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('/assets/global/plugins/fullcalendar/fullcalendar.min.css'); ?>" rel="stylesheet"/>
<!-- END PAGE LEVEL SCRIPTS -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?php echo site_url('teacher/')?>">
			<img src="<?php echo site_url('/assets/admin/layout/img/logo.png'); ?> " alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				
				<!-- BEGIN USER LOGIN DROPDOWN  dasdsa-->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

					<img alt="" class="img-circle hide1" src="<?php echo '../../'.$teacher->photo; ?>"/>
					<span class="username username-hide-on-mobile">
					<?php $user_id = $this->session->userdata('id'); ?>
					<?php echo $this->session->userdata('username'); ?></span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo site_url('teacher/profile'); ?>">
							<i class="icon-user"></i> My Profile </a>
						</li>
						
						
						<li>
							<a href="<?php echo site_url('teacher/')?>" >
							<i class="icon-book-open"></i> Dashboard </a>
						</li>
						<li>
							<a href="<?php echo site_url('teacher/logout')?>" >
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
		
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				


				<li>
					<a href="<?php echo site_url('teacher/')?>" >
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('teacher/profile')?>" >
					<i class="icon-user"></i>
					<span class="title">My Profile</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class="start  open">
					<li>
					<a href="javascript:;">
					<i class="icon-book-open"></i>
					<span class="title">My Section</span>
					<span class="arrow  open"></span>
					<span class="selected"></span>
					</a>

					<ul class="sub-menu" style="display: block;">


						<?php foreach ($rows as $r) : ?>
						<li>
							<?php $subject_id = $r->id; ?>
							<a href="<?php echo site_url('teacher/mysubject/').'/'.$r->section_name.'/'.$subject_id.'/' ?>" >
							<?php echo $r->section_name; ?></a>
						</li>
						<?php endforeach; ?>

						<li>

							<a href="<?php echo site_url('teacher/section')?>" >
							<i class="icon-plus"></i>
							Add New Section
						</a>
						</li>
					</ul>

				</li>
			</li>
				
				<li >
					<a href="<?php echo site_url('teacher/pds')?>" >
					<i class="icon-note"></i>
					<span class="title">Personal Data Sheet</span>
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
			<!-- add section  -->
			<div class="modal fade" id="addsubject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add Subject Form</h4>
						</div>
						<div class="modal-body">

					<form action="<?php echo site_url('teacher/insertSubject'); ?>" id="form_sample_1" class="form-horizontal" method="POST">
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>

								<div class="for-group">
									<input type = "hidden" name= "subject_teacher" value = "<?php echo  $this->uri->segment(3); ?>"></input>
									<input type = "hidden" name= "subject_id" value = "<?php echo  $this->uri->segment(4); ?>"></input>
								</div>	
								<div class="form-group">
										<label class="control-label col-md-3">Subject<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name ="mySubject" required>
											<!-- <select class="form-control" name="select"> -->
												<option value="">Select...</option>
												<option value="Filipino">Filipino</option>
												<option value="English">English</option>
												<option value="Mathematics">Mathematics</option>
												<option value="Makabayan">Makabayan</option>
												<option value="Science & Health">Science & Health</option>
												<option value="HKS">HKS</option>
												<option value="EPP">EPP</option>
												<option value="MSEP">MSEP</option>
												<option value="CE">Character Education</option>
												
											
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Time in:<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon">
												<i class="fa fa-clock-o"></i>
												<input type="time" class="form-control timepicker timepicker-default" name="timein">
											</div>
										</div>
									</div>



									<div class="form-group">
										<label class="control-label col-md-3">Time out:<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon">
												<i class="fa fa-clock-o"></i>
												<input type="time" class="form-control timepicker timepicker-default" name="timeout">
											</div>
										</div>
									</div>		
		
								
								</div>
						
						<div class="modal-footer">
							<input type="submit" class="btn blue" value="Submit">
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</form>

						</div>
						</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- end add section  -->

			<!-- enroll new student-->
				<!-- add section  -->
			<div class="modal fade" id="enrollstudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add Student Form</h4>
						</div>
						<div class="modal-body">

					<form action="<?php echo site_url('student/addnew'); ?>" id="form_sample_1" class="form-horizontal" method="POST">
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">First Name:<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="firstname" class="form-control">
											<?php if(count($sections)): foreach($sections as $s): ?>
											<input type="text" name="section_name" class="form-control" value="<?php var_dump($s->id); ?>">
											<?php endforeach; ?>
											<?php endif; ?>	
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Lastname:<span class="required" aria-required="true">
										*</span>
										</label>
										<div class="col-md-4">
											<input type="text" name="lastnane" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Username:<span class="required" aria-required="true">
										*</span>
										</label>
										<div class="col-md-4">
											<input type="text" name="username" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Password:<span class="required" aria-required="true">
										*</span>
										</label>
										<div class="col-md-4">
											<input type="password" name="password" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Confirm Password:<span class="required" aria-required="true">
										*</span>
										</label>
										<div class="col-md-4">
											<input type="password" name="confirm" class="form-control">
										</div>
									</div>



								
								</div>
						
						<div class="modal-footer">
							<input type="submit" class="btn blue" value="Submit">
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</form>

						</div>
						</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- end add section  -->





		