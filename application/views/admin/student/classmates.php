


<?php $this->load->view('admin/components/page_head_student'); ?>

			<h3 class="page-title">
			My Classmates <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin');?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">User Profile</a>
					</li>
				</ul>

			</div>


							<?php	foreach ($student_list as $sl) : 
								if($sl->firstname == $student->firstname){

							}else {
							?>
								<div class="row">
									<div class="col-md-2">
										<ul class="list-unstyled profile-nav">
											<li>
												<!-- <img src="../../assets/admin/pages/media/profile/profile-img.png" class="img-responsive" alt=""> -->
												<img src="<?php echo $sl->photo ?> " class="img-responsive" alt="" style="width: 150px;">
											</li>
											
										</ul>
									</div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-8 profile-info">
												<h1><?php echo $sl->firstname." ".$sl->lastname ?></h1>
												<p>
													<?php echo $sl->aboutme ?>	 
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
	
							<?php }

							endforeach; ?> 


					</div>
					</div>
	
<?php $this->load->view('admin/components/page_tail'); ?>