
	<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Grades <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Grades</a>
						
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
					 <?php if($this->session->flashdata('result') != false){ ?>
          <div id="prefix_419624997860" class="Metronic-alerts alert alert-success fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
          </div>
          <?php } ?>
					<form action="<?php echo site_url('teacher/insertGrade'); ?>" id="form_sample_1" class="form-horizontal" method="POST">
								<div class="form-body">
								
									<div class="form-group">
										<label class="control-label col-md-2">Grading Period <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-8">
											<select class="form-control" name ="period" required>
											<!-- <select class="form-control" name="select"> -->
												<option value="">Select...</option>
												<option value="First Grading">First Grading</option>
												<option value="Second Grading">Second Grading</option>
												<option value="Third Grading">Third Grading</option>
												<option value="Fourth Grading">Fourth Grading</option>
											
											</select>
										</div>
									</div>
									<div class="form-group">
									<input type="hidden" name="student_id" data-required="1" class="form-control" value = "<?php echo $student_id; ?>">
									</div>
									<div class="form-group">

										<label class="control-label col-md-2">Rating<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-8">
											<input type="number" name="rating" data-required="1" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Subject Name <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-8">
											<select class="form-control" name ="subject_name" required>
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
			
								</div>
							


						</div>
						<div class="modal-footer">
							<button type="submit" class="btn blue">Submit</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
					</form>
					
		
				</div>
				


<?php $this->load->view('admin/components/page_tail'); ?>