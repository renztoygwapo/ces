<?php $this->load->view('admin/components/page_head_student'); ?>
	<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			My Profile <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
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
												<h1>John Doe</h1>
												<p>
													 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
												</p>
										
											</div>
											<!--end col-md-8-->
											<div class="col-md-4">
											
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
										<div class="tabbable tabbable-custom tabbable-custom-profile">
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#tab_1_11" data-toggle="tab">
													School Records </a>
												</li>
												<li>
													<a href="#tab_1_22" data-toggle="tab">
													Achievement </a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_1_11">
													<div class="portlet-body">
														<table class="table table-striped table-bordered table-advance table-hover">
														<thead>
														<tr>
															<th>
																<i class="fa fa-briefcase"></i> Grade
															</th>
															<th class="hidden-xs">
																<i class="fa fa-institution"></i> Section
															</th>
															<th>
																<i class="fa fa-bookmark"></i> Year
															</th>
															<th>
																<i class="fa fa-star-o"></i> Average
															</th>
														</tr>
														</thead>
														<tbody>
														<tr>
															<td>
																<a href="#">
																Pixel Ltd </a>
															</td>
															<td class="hidden-xs">
																 Server hardware purchase
															</td>
															<td>
																 52560.10$ <span class="label label-success label-sm">
																Paid </span>
															</td>
															<td>
																<a class="btn default btn-xs green-stripe" href="#">
																View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Smart House </a>
															</td>
															<td class="hidden-xs">
																 Office furniture purchase
															</td>
															<td>
																 5760.00$ <span class="label label-warning label-sm">
																Pending </span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																FoodMaster Ltd </a>
															</td>
															<td class="hidden-xs">
																 Company Anual Dinner Catering
															</td>
															<td>
																 12400.00$ <span class="label label-success label-sm">
																Paid </span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																WaterPure Ltd </a>
															</td>
															<td class="hidden-xs">
																 Payment for Jan 2013
															</td>
															<td>
																 610.50$ <span class="label label-danger label-sm">
																Overdue </span>
															</td>
															<td>
																<a class="btn default btn-xs red-stripe" href="#">
																View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Pixel Ltd </a>
															</td>
															<td class="hidden-xs">
																 Server hardware purchase
															</td>
															<td>
																 52560.10$ <span class="label label-success label-sm">
																Paid </span>
															</td>
															<td>
																<a class="btn default btn-xs green-stripe" href="#">
																View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Smart House </a>
															</td>
															<td class="hidden-xs">
																 Office furniture purchase
															</td>
															<td>
																 5760.00$ <span class="label label-warning label-sm">
																Pending </span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View </a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																FoodMaster Ltd </a>
															</td>
															<td class="hidden-xs">
																 Company Anual Dinner Catering
															</td>
															<td>
																 12400.00$ <span class="label label-success label-sm">
																Paid </span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View </a>
															</td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
												<!--tab-pane-->
												<div class="tab-pane" id="tab_1_22">
													<div class="tab-pane active" id="tab_1_1_1">
														<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
															<ul class="feeds">
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">
																					<i class="fa fa-bell-o"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 You have 4 pending tasks. <span class="label label-danger label-sm">
																					Take action <i class="fa fa-share"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 Just now
																		</div>
																	</div>
																</li>
																<li>
																	<a href="#">
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-success">
																					<i class="fa fa-bell-o"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New version v1.4 just lunched!
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 20 mins
																		</div>
																	</div>
																	</a>
																</li>
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-danger">
																					<i class="fa fa-bolt"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 Database server #12 overloaded. Please fix the issue.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 24 mins
																		</div>
																	</div>
																</li>
															
																<li>
																	<div class="col1">
																		<div class="cont">
																			<div class="cont-col1">
																				<div class="label label-warning">
																					<i class="fa fa-plus"></i>
																				</div>
																			</div>
																			<div class="cont-col2">
																				<div class="desc">
																					 New user registered.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col2">
																		<div class="date">
																			 1.5 hours
																		</div>
																	</div>
																</li>
														
															</ul>
														</div>
													</div>
												</div>
												<!--tab-pane-->
											</div>
										</div>
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
											
												<?php
									                  $attributes = array('class' => 'form-horizontal form-without-legend', 'role' => 'form');
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
											<div id="tab_2-2" class="tab-pane">
												<p>
													 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
												</p>
												<!-- <form action="#" role="form">
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change </span>
																<input type="file" name="...">
																</span>
																<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																Remove </a>
															</div>
														</div>
													
													</div>
													<div class="margin-top-10">
														<a href="#" class="btn green">
														Submit </a>
														<a href="#" class="btn default">
														Cancel </a>
													</div>
												</form> -->
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