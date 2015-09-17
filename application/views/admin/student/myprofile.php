<?php $this->load->view('admin/components/page_head_student'); ?>
	<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			My Profile <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('student/')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Profile</a>
						
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->





			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
								Overview </a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
								Account </a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
										<ul class="list-unstyled profile-nav">
											<li>
												<img src="<?php echo $student->photo ?> " class="img-responsive" alt="">
												
											</li>
											
										</ul>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-8 profile-info">
												<h1><?php echo $student->firstname.' '.$student->lastname ?></h1>
											<p>
												<?php echo $student->aboutme; ?>	 
											</p>
										
											</div>
											<!--end col-md-8-->
											<div class="col-md-4">
											
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
									
									</div>
								</div>
							</div>
							<!--tab_1_2-->
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
												<i class="fa fa-cog"></i> Personal info </a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2-2">
												<i class="fa fa-picture-o"></i> Change Avatar </a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3-3">
												<i class="fa fa-lock"></i> Change Password </a>
											</li>
						
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1-1" class="tab-pane active">
											<div class = "row">
												<div class="col-md-12">
												<?php
									                  $attributes = array('class' => '', 'role' => 'form');
													  echo form_open('student/update_profile/', $attributes);
									                  ?>
													<div class="form-group">
														<label class="control-label">First Name</label>
														<input type="text" placeholder="My First name" name="firstname" class="form-control" value="<?php echo $student->firstname ?>" />
													</div>
													<div class="form-group">
														<label class="control-label">Last Name</label>
														<input type="text" placeholder="My Last name" name="lastname" class="form-control" value="<?php echo $student->lastname ?>" />
													</div>
													<div class="form-group">
														<label class="control-label">Gender</label>
														
														<select class="form-control" name="gender"  required>
														  <option value="">Select Gender</option>
														  <option value="male">Male</option>
														  <option value="female">Female</option>
	
														</select>
													</div>
													<div class="form-group">
														<label class="control-label">Address</label>
														<input type="text" placeholder="Purok 3 Carmen Davao del Norte" class="form-control" value="<?php echo $student->address ?>" name="address" />
													</div>
													<div class="form-group">
														<label class="control-label">Birthday</label>
														<input type="date"  class="form-control" value="<?php echo $student->birthday ?>" name="birthday" />
													</div>
													<div class="form-group">
														<label class="control-label">About Me</label>
														<textarea class="form-control" rows="3" name="aboutme"><?php echo $student->aboutme; ?></textarea>
													</div>
													<div class="margiv-top-10">
														<input type="submit" value="Save Changes" class="btn green">
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												<?php echo form_close(); ?>
											</div>
											</div>
										</div>
									

											<div id="tab_2-2" class="tab-pane">
												
										
												   <form name="upload" id="upload" method="post" action="<?php echo site_url('upload_pic/uploadpic_student') ?>" enctype="multipart/form-data">

													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="<?php echo $student->photo ?>" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change 
																</span>
																<!-- <input type="file" name="profilepic"> -->
																<input type="file" name="txtImage" size="20" />
																</span>
																<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																Remove </a>
															</div>
														</div>
													
													</div>
													<div class="margin-top-10">
													
														<input class="btn green" type="submit" value="submit" />
										
														<a href="#" class="btn default">
														Cancel </a>
													</div>
													<?php echo form_close(); ?>

											</div>
											<div id="tab_3-3" class="tab-pane">
												<?php
									                  $attributes = array('class' => 'form-horizontal form-without-legend', 'role' => 'form');
													  echo form_open('student/change_pass/', $attributes);
									                  ?>
													<div class="form-group">
														<label class="control-label">Current Password</label>
														<input type="password" class="form-control" name="current_password" />
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
														<input type="password" class="form-control" name="new_pass" />
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
														<input type="password" class="form-control" name="retype_pass" />
													</div>
													<div class="margin-top-10">
														<input type="submit" value="Change Password" class="btn btn-primary">
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												<?php echo form_close(); ?>
											</div>
											
										</div>
									</div>
									<!--end col-md-9-->
								</div>
							</div>
							<!--end tab-pane-->
							
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->

<?php $this->load->view('admin/components/page_tail'); ?>