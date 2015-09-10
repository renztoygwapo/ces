
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Add New Section <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Add new Section</a>
						
					</li>
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->
			<?php if($this->session->flashdata('result') != false){ ?>
          <div id="prefix_419624997860" class="Metronic-alerts alert alert-success fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
          </div>
          <?php } ?>

				<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Add new Section
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
							 <form id="form_sample_1" class="form-horizontal" action="<?php echo site_url('teacher/insertsection'); ?>" method="post">
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
										<label class="control-label col-md-3">Section Name
											<span class="required" aria-required="true"> * </span>
										</label>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="" name = "mysection" autofocus>
										<input type="hidden" class="form-control" placeholder="" name = "teacher_id" value="<?php echo $this->session->userdata('id'); ?>">
									</div>
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
											<label class="control-label col-md-3">
										</label>
										<div class="col-md-4">
											<input type="submit" value="Save" class="btn btn-primary btl-lg">		
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