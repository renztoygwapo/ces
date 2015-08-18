<?php $this->load->view('admin/components/page_head_teacher'); ?>
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Add New Subject <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Add new subject</a>
						
					</li>
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->

				<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Add my new subject
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
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" id="form_sample_1" class="form-horizontal">
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
										<label class="control-label col-md-3">My Role<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="select">
												<option value="">Select...</option>
												<option value="Category 1">Advisory</option>
												<option value="Category 2">Floating Teacher</option>
											
											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3">Section Name<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="select">
												<option value="">Select...</option>
												<option value="Category 1">Section 1</option>
												<option value="Category 2">Section 2</option>
												<option value="Category 3">Section 3</option>
												<option value="Category 4">Section 5</option>
												<option value="Category 5">Section 6</option>
											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3">Select Subject<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="select">
												<option value="">Select...</option>
												<option value="Category 1">Mathematics</option>
												<option value="Category 2">English</option>
												<option value="Category 3">Science</option>
												<option value="Category 4">Filipino</option>
												<option value="Category 5">Mother Tounge</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Time In<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="select">
												<option value="">Select...</option>
												<option value="Category 1">1:00 am</option>
												<option value="Category 2">2:00 am</option>
												<option value="Category 3">3:00 am</option>
												<option value="Category 4">4:00 am</option>
												<option value="Category 5">5:00 am</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Time Out<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="select">
												<option value="">Select...</option>
												<option value="Category 1">1:00 am</option>
												<option value="Category 2">2:00 am</option>
												<option value="Category 3">3:00 am</option>
												<option value="Category 4">4:00 am</option>
												<option value="Category 5">5:00 am</option>
											</select>
										</div>
									</div>




							
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>











<?php $this->load->view('admin/components/page_tail'); ?>