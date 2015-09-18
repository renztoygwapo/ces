<?php $this->load->view('admin/components/page_head'); ?>







<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/uploadifive/uploadifive.css" />
<script type="text/javascript" src="<?=base_url();?>assets/uploadifive/jquery.uploadifive.js" ></script>


<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
			
				<li>
					<a href="<?php echo site_url('admin/home_admin/')?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/myprofile/')?>" >
					<i class="icon-user"></i>
					<span class="title">My Profile</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/request/')?>" >
					<i class="icon-docs"></i>
					<span class="title">Request <span class="badge badge-default"><?php echo $count_request; ?></span> </span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li >
					<a href="<?php echo site_url('admin/rankings/')?>" >
					<i class="icon-trophy"></i>
					<span class="title">Rankings</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li >
					<a href="<?php echo site_url('admin/reports/reports_students/')?>">
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/forum_db/')?>" >
					<i class="icon-users"></i>
					<span class="title">Forums</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class="start">
					<a href="<?php echo site_url('admin/Eventadmin/')?>" >
					<i class="icon-users"></i>
					<span class="title">Event</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class="active">
					<a href="<?php echo site_url('admin/gallery/')?>" >
					<i class="icon-list"></i>
					<span class="title">Gallery</span>
					<span class="selected"></span>
				
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->

	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
		
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Gallery Page <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin/')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Gallery </a>
					</li>
				</ul>
		
			</div>
			<!-- END PAGE HEADER-->


			<!-- header unta neh do -->

			<div class="row">
				<div class="col-md-12">
				<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Create an GAllery
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
										<?php $att = array('class' => 'form-horizontal'); ?>
                                    <?= form_open_multipart('admin/gallery/gallery_add', $att) ?>
											<div class="form-body">		
											<?php if($this->session->flashdata('result') != false){ ?>
								          <div id="prefix_419624997860" class="Metronic-alerts alert alert-success fade in">
								          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
								          </div>
								          <?php } ?>	

								          <?php foreach ($galleries as $gal) : ?>	
												<div class="form-group">
													<label class="col-md-3 control-label">Gallery Title</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" name ="title" value="<?php echo $gal->title; ?>">
															<input type="hidden" class="form-control" name ="id" value="<?php echo $gal->id; ?>">
															</div>
													</div>

												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Gallery Description</label>
													<div class="col-md-4">
														<textarea name="description"  rows="10" data-width="600" class="form-control md-input" style="width: 600px; resize: none;" ><?php echo $gal->description; ?></textarea>
													</div>
													

												</div>
														<div class="form-group">
													<label class="col-md-3 control-label">Date</label>
													<div class="col-md-4">
														<input type="date" class="form-control" name ="date" placeholder="Date Happened" value="<?php echo $gal->date; ?>">
													</div>
													

												</div>
										

												<div class="form-group">
													<label class="col-md-3 control-label">Picture</label>
											<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" 
												style="width: 200px; height: 150px; line-height: 150px;">
											</div>
												<div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="hidden" name="photo" id="photo" >
													<input type="file" name = "userfile" required value="/uploads/<?php echo $gal->photo; ?>">
													</span>
													<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
										</div>
												</div>

											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Save</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
											<?php endforeach; ?>
										</form>
										<!-- END FORM-->
									</div>
								</div>



								</div>

								
			</div>
			</div>
<?php $this->load->view('admin/components/page_tail'); ?>