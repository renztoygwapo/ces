
	<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Student List - Apple <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Request</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Student List</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Apple</a>
						
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->





				<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>My handled Student
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
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>
									<th>
										<i class="fa fa-briefcase"></i>Student Name
									</th>
									<th class="hidden-xs">
										<i class="fa fa-user"></i> First Grading
									</th>

									<th>
										<i class="fa fa-shopping-cart"></i> Second Grading
									</th>

									<th>
										<i class="fa fa-shopping-cart"></i> Third Grading
									</th>

									<th>
										<i class="fa fa-shopping-cart"></i> Fourth Grading
									</th>
									<th>
										<i class="fa fa-user"></i> Action
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="highlight">
										<div class="success">
										</div>
										<a href="javascript:;">
										RedBull </a>
									</td>
									<td class="hidden-xs">
										 10:00 am
									</td>
									<td>
										10:00 pm
									</td>
									<td class="hidden-xs">
										 10:00 am
									</td>
									<td>
										10:00 pm
									</td>
									<td>
										<a href="<?php  echo site_url('teacher/studentlist')?>" class="btn default btn-xs purple">
										<i class="fa fa-edit"></i> Edit Grades </a>
										<a href="javascript:;" class="btn default btn-xs green">
										<i class="fa fa-edit"></i> Drop Student</a>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>



		



<?php $this->load->view('admin/components/page_tail'); ?>