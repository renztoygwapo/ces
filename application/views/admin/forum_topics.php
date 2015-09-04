<?php $this->load->view('admin/components/page_head'); ?>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/uploadifive/uploadifive.css" />
<script type="text/javascript" src="<?=base_url();?>assets/uploadifive/jquery.uploadifive.js" ></script>
<script type="text/javascript">
	
	$(document).ready(function(){
		
		$('#upload_photo').uploadifive({
			'buttonText' : 'Photo auswählen',
		    'uploadScript' : base + 'admin/eventadmin/upload_pic',
		    'fileType' : 'image/*',
		    'fileSizeLimit' : '256MB',
		    'removeCompleted' : false,
		    'uploadLimit' : 50,
		    'width':'100%',
		    'onCancel'     : function() {
	          //  alert('The file ' + file.name + ' was cancelled!');
	            
	           $("img[data-img='"+file.name+"']").remove();
	  
	        },
		    'onUploadComplete' : function(file, data, response) {
				var html = '<img data-img="'+file.name+'" class="img-responsive" style="float:left; margin:10px; max-width:300px;" src="'+base+'uploads/thumbs/'+data+'" />';	
					//alert(file.name);
				$('#image_here').prepend(html);
				
				//get current value of the input form with id photo
				var current_val = $('#photo').val();
				
				//assign the current_val to the input with id photo
				$('#photo').val(current_val+','+data);	

               // console.log(data);

		    },
		  	 'formData'         : {'test' : '1'}
		});
		
	});
	
</script>

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
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler push-left">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
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
				<li >
					<a href="<?php echo site_url('admin/myfiles/')?>" >
					<i class="icon-briefcase"></i>
					<span class="title">My Files</span>
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





<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
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
                                    <?= form_open_multipart('admin/eventadmin/event_add', $att) ?>
											<div class="form-body">		
											<?php if($this->session->flashdata('result') != false){ ?>
								          <div id="prefix_419624997860" class="Metronic-alerts alert alert-success fade in">
								          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
								          </div>
								          <?php } ?>		
												<div class="form-group">
													<label class="col-md-3 control-label">Topic Title</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" name ="event_title" placeholder="Title of Topic">
														</div>
													</div>

												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Topic Description</label>
													<div class="col-md-4">
														<textarea name="event_description" data-provide="markdown" rows="10" 
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
										
										</form>
										<!-- END FORM-->
									</div>
								</div>
								</div>


			</div>






						</div>










						<!-- footer modal -->
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
						<!--end footer modal -->
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
						THEME COLOR </span>
						<ul>
							<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
							</li>
							<li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
							</li>
							<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
							</li>
							<li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
						Layout </span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Header </span>
						<select class="page-header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Mode</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Menu </span>
						<select class="sidebar-menu-option form-control input-small">
							<option value="accordion" selected="selected">Accordion</option>
							<option value="hover">Hover</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Style </span>
						<select class="sidebar-style-option form-control input-small">
							<option value="default" selected="selected">Default</option>
							<option value="light">Light</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Position </span>
						<select class="sidebar-pos-option form-control input-small">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Footer </span>
						<select class="page-footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Category Title <small>topics</small>
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
			<div class="row">
				<div class="col-md-2">
					<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" alt="" class="img-responsive" width="160" height="208">
						<ul class="list-inline">
										
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">
											38 Comments </a>
										</li>
									</ul>
				<!-- <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">  -->
				</div>
				<div class="col-md-6">
									<h3>
									<a href="admin/forum_db/forum_page">
									Character Education</a>
									</h3>
									<p>
									MITHIIN: PagkataposngIkaanimnaBaitang, inaasahangmalilinangsamga mag-aaralangpagigingMaka-Diyos, Makatao, Makabansa at Makakalikasantungosapagpapahalagasadangalngtao

									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_page')?>">
									View <i class="m-icon-swapright m-icon-white"></i>
									</a>
				</div>
				<div class="col-md-2">
					<br>
				<i class="fa fa-calendar"></i>
				April 16, 2013
				</div>

				<div class="col-md-2">
					<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>"
				alt="" class="img-responsive" width="110" height="208">
				<h4>Raven Fuentes</h4>
				</div>
			</div>

			<hr>
			<div class="row">
				<div class="col-md-2">
					<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" alt="" class="img-responsive" width="160" height="208">
					<ul class="list-inline">
										
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">
											38 Comments </a>
										</li>
									</ul>
				<!-- <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">  -->
				</div>
				<div class="col-md-6">
									<h3>
									<a href="admin/forum_db/forum_page">
									Character Education</a>
									</h3>
									<p>
									MITHIIN: PagkataposngIkaanimnaBaitang, inaasahangmalilinangsamga mag-aaralangpagigingMaka-Diyos, Makatao, Makabansa at Makakalikasantungosapagpapahalagasadangalngtao

									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_page')?>">
									View <i class="m-icon-swapright m-icon-white"></i>
									</a>
				</div>
				<div class="col-md-2">
					<br>
				<i class="fa fa-calendar"></i>
				April 16, 2013
				</div>

				<div class="col-md-2">
					<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>"
				alt="" class="img-responsive" width="110" height="208">
				<h4>Raven Fuentes</h4>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-2">
					<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" alt="" class="img-responsive" width="160" height="208">
					<ul class="list-inline">
										
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">
											38 Comments </a>
										</li>
									</ul>
				<!-- <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">  -->
				</div>
				<div class="col-md-6">
									<h3>
									<a href="admin/forum_db/forum_page">
									Character Education</a>
									</h3>
									<p>
									MITHIIN: PagkataposngIkaanimnaBaitang, inaasahangmalilinangsamga mag-aaralangpagigingMaka-Diyos, Makatao, Makabansa at Makakalikasantungosapagpapahalagasadangalngtao

									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_page')?>">
									View<i class="m-icon-swapright m-icon-white"></i>
									</a>
				</div>
				<div class="col-md-2">
					<br>
				<i class="fa fa-calendar"></i>
				April 16, 2013
				</div>

				<div class="col-md-2">
				<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" 
				alt="" class="img-responsive" width="110" height="208">
				<h4>Raven Fuentes</h4>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-2">
					<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" alt="" class="img-responsive" width="160" height="208">
					<ul class="list-inline">
										
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">
											38 Comments </a>
										</li>
									</ul>
				<!-- <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">  -->
				</div>
				<div class="col-md-6">
									<h3>
									<a href="admin/forum_db/forum_page">
									Character Education</a>
									</h3>
									<p>
									MITHIIN: PagkataposngIkaanimnaBaitang, inaasahangmalilinangsamga mag-aaralangpagigingMaka-Diyos, Makatao, Makabansa at Makakalikasantungosapagpapahalagasadangalngtao

									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_page')?>">
									View <i class="m-icon-swapright m-icon-white"></i>
									</a>
				</div>
				<div class="col-md-2">
					<br>
				<i class="fa fa-calendar"></i>
				April 16, 2013
				</div>

				<div class="col-md-2">
				<img src="<?php echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" 
				alt="" class="img-responsive" width="110" height="208">
				<h4>Raven Fuentes</h4>
				</div>
			</div>
			<hr>







</div>


<?php $this->load->view('admin/components/page_tail'); ?>
