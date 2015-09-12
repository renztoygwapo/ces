<?php $this->load->view('admin/components/page_head'); ?>


<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				
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
					<span class="title">Request</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/rankings/')?>" >
					<i class="icon-trophy"></i>
					<span class="title">Rankings</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/reports/')?>" >
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class = "start active">
					<a href="<?php echo site_url('admin/forum_db/')?>" >
					<i class="icon-users"></i>
					<span class="title">Forums</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/Eventadmin/')?>" >
					<i class="icon-users"></i>
					<span class="title">event</span>
					<span class="selected"></span>
				
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<div class="modal fade" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" style="
												    margin-left: 135px;
												    margin-right: 221px;
												    height: 1000px;
												    width: 1000px;
												">
					<div class="modal-content">

						<!-- modal header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							
						</div>
						<!-- end modal header -->



						<div class="modal-body">


			<div class="row">
				<div class="col-lg-12">
				<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Create a new Topic
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
                                    <?= form_open_multipart('admin/forum_db/event_add', $att) ?>
											<div class="form-body">		
													
												<div class="form-group">
													<label class="col-md-3 control-label">Topic Title</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" name ="title" placeholder="Title of Topic">
															<input type="hidden" class="form-control" name ="subject" value = "<?php echo $section_name; ?>" placeholder="Title of Topic">
														</div>
													</div>

												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Topic Description</label>
													<div class="col-md-4">
														<textarea name="description" data-provide="markdown" rows="10" 
														data-width="600" class="form-control md-input" style="width: 600px; resize: none;"></textarea>
													</div>
													

												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Upload picture</label>
													<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"></div>
												<div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="hidden" name="photo" id="photo" >
													<input type="file" name = "userfile" required>
													</span>
													<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
										</div>
												</div>

											</div>
										
										<!-- END FORM-->
									</div>
								</div>
								</div>

							</div>
							</div>

						<!-- footer modal -->
						<div class="modal-footer">
								<!-- <div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Save</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div> -->
							<button type="submit" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
						<!--end footer modal -->

										</form>
					</div>
					<!-- /.modal-content -->
				</div>
			</div>




<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
		
			<h3 class="page-title">
			<?php echo $this->uri->segment(4).' '; ?><small>category</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Topics</a>
					</li>
				</ul>
		
			</div>
			<?php if($this->session->flashdata('result') != false){ ?>
			 <div id="prefix_419624997860" class="Metronic-alerts alert alert-success fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
			</div>
			 <?php } ?>
			<!-- END PAGE HEADER-->
			<div class="row">
				<div class="col-md-8">
			 	<a class="btn green" href="#large" data-toggle="modal" >
									Create New Topic <i class="m-icon-swapright m-icon-white"></i>
									</a>
				</div>
				<div class="col-md-2">
				Date Posted
				</div>
				<div class="col-md-2">
				Posted By:
				</div>
			</div>

			<!-- header unta neh do -->
			<hr>
<!-- 
				<?php 
		//foreach ($rows as $r) : ?>
	<h1><?php// echo $r->title; ?></h1>
		<div><?php// echo $r->contents; ?></div>
	<?php // endforeach; ?> -->
	<?php if(($topics ) == null) { ?>
						 	<blockquote class="hero">
									<p>
										No Topic to discuss.
									</p>
									
								</blockquote>
						 	
						 <?php } else {?>


					<?php 
		foreach ($topics as $r) : ?>
			<div class="row">
				<div class="col-md-2">
					<!-- <img src="<?php// echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" alt="" class="img-responsive" width="160" height="208">
		 -->	<img src="<?php echo site_url('/topics/'.$r->topic_picture); ?>" alt="" class="img-responsive" width="160" height="208">
		
		 		<ul class="list-inline">
										
										<li>
											
										</li>
									</ul>
				<!-- <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">  -->
				</div>
				<div class="col-md-6">
									<h3>
									<a href="<?php echo site_url('admin/forum_db/forum_page').'/'.$this->uri->segment(4).'/'.$r->id;  ?>">
						<?php echo $r->title; ?>
							</a>
									</h3>
									<p>
									<!-- MITHIIN: PagkataposngIkaanimnaBaitang, inaasahangmalilinangsamga mag-aaralangpagigingMaka-Diyos, Makatao, Makabansa at Makakalikasantungosapagpapahalagasadangalngtao -->								<?php echo $r->description; ?>
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_page').'/'.$this->uri->segment(4).'/'.$r->id; ?>">
									View <i class="m-icon-swapright m-icon-white"></i>
									</a>
				</div>
				<div class="col-md-2">
					<br>
				<i class="fa fa-calendar"></i>
				<?php echo $r->date_post; ?>
				</div>

				<div class="col-md-2">
					<img src="<?php echo '../'.$admin->photo; ?>"
				alt="" class="img-responsive" width="110" height="208">
				<h4><?php echo $admin->firstname.' '.$admin->lastname ?></h4>
				</div>
			</div>

			<hr>

		<?php endforeach; ?> 
			
			<?php } ?>	


</div>


<?php $this->load->view('admin/components/page_tail'); ?>
