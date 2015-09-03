		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Enroll Student <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">New Student</a>
						
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

					<form action="<?php echo site_url('teacher/do_insert'); ?>" id="form_sample_1" class="form-horizontal" method="POST">
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
											<input type="text" name="fname" class="form-control">
											<input type="hidden" name="user_id" class="form-control" value="<?php echo $this->session->userdata('id'); ?>">
												<input type="hidden" name="section_id" class="form-control" value="<?php echo $s_id; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Lastname:<span class="required" aria-required="true">
										*</span>
										</label>
										<div class="col-md-4">
											<input type="text" name="lname" class="form-control">
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








<?php $this->load->view('admin/components/page_tail'); ?>