
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
							 <form id="form_sample_1" class="form-horizontal" action="<?php echo site_url('teacher/insertsubject'); ?>" method="post">
							<!-- <form action="#"  class="form-horizontal"> -->
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
											<select class="form-control" name ="myrole" required>
											<!-- <select class="form-control" name="select"> -->
												<option value="">Select...</option>
												<option value="Advisory">Advisory</option>
												<option value="Floating Teacher">Floating Teacher</option>
											
											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3">Grade Level
											<span class="required" aria-required="true"> * </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name ="myLevel" required>
											<!-- <select class="form-control" name="select"> -->
												<option value="">Select...</option>
												<option value="Grade 1">Grade 1</option>
												<option value="Grade 2">Grade 2</option>
												<option value="Grade 3">Grade 3</option>
												<option value="Grade 4">Grade 4</option>
												<option value="Grade 5">Grade 5</option>
												<option value="Grade 6">Grade 6</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Section Name
											<span class="required" aria-required="true"> * </span>
										</label>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="" name = "mysection">
									</div>
								</div>

									<div class="form-group">
										<label class="control-label col-md-3">Select Subject<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name ="mySubject" required>
											<!-- <select class="form-control" name="select"> -->
												<option value="">Select...</option>
												<option value="Filipino">Filipino</option>
												<option value="English">English</option>
												<option value="Mathematics">Mathematics</option>
												<option value="Science & Health">Science & Health</option>
												<option value="HKS">HKS</option>
												<option value="EPP">EPP</option>
												<option value="MSEP">MSEP</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Time In<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name ="mytimein" required>
											<!-- <select class="form-control" name="select"> -->
												<option value="">Select...</option>
												<option value="7:00 am">7:00 am</option>
												<option value="8:00 am">8:00 am</option>
												<option value="9:00 am">9:00 am</option>
												<option value="10:00 am">10:00 am</option>
												<option value="11:00 am">11:00 am</option>
												<option value="12:00 pm">12:00 pm</option>
												<option value="1:00 pm">1:00 pm</option>
												<option value="2:00 pm">2:00 pm</option>
												<option value="3:00 pm">3:00 pm</option>
												<option value="4:00 pm">4:00 pm</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Time Out<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name ="mytimeout" required>
											<!-- <select class="form-control" name="select"> -->
												<option value="">Select...</option>
												<option value="7:00 am">7:00 am</option>
												<option value="8:00 am">8:00 am</option>
												<option value="9:00 am">9:00 am</option>
												<option value="10:00 am">10:00 am</option>
												<option value="11:00 am">11:00 am</option>
												<option value="12:00 pm">12:00 pm</option>
												<option value="1:00 pm">1:00 pm</option>
												<option value="2:00 pm">2:00 pm</option>
												<option value="3:00 pm">3:00 pm</option>
												<option value="4:00 pm">4:00 pm</option>
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
			</div>












<?php $this->load->view('admin/components/page_tail'); ?>