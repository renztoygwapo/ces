
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Home <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('teacher/')?>" >Home</a>
						<i class="fa fa-angle-right"></i>
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
								 Teacher
							</div>
						</div>
						<a class="more" href="<?php echo site_url('teacher/teacher_list/'); ?>">
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
								 Student
							</div>
						</div>
						<a class="more" href="<?php echo site_url('teacher/student_list/'); ?>">
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
						<a class="more" href="<?php echo site_url('teacher/alumni_list/'); ?>">
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
								<?php echo $sections; ?>
							</div>
							<div class="desc">
								 Sections
							</div>
						</div>
						<a class="more" href="<?php echo site_url('teacher/section_list/'); ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
	

</div>
<!-- END CONTAINER -->
<?php $this->load->view('admin/components/page_tail'); ?>