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
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo $this->uri->segment(4).' '; ?><small>topics</small>
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
			 <?php foreach ($topic as $t):?>
			<div class="row">
				<div class="col-md-12 blog-page">
					<div class="row">
						<div class="col-md-10 article-block">
						
							<div class="blog-tag-data">
								<img src="<?php echo '../../../../topics/'.$t->topic_picture; ?>" class="img-responsive" alt="" style="height: 350px;">
								<div class="row">
									<div class="col-md-6 blog-tag-data-inner">
										<ul class="list-inline">
											<li>
												<i class="fa fa-calendar"></i>
										
												<?php echo 'Date Post:'.$t->date_post; ?>
											</li>
											<li>
												<i class="fa fa-comments"></i>
											
												<?php echo 'Post by:'.$admin->firstname; ?>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--end news-tag-data-->
							<div>
								
								<blockquote class="hero">
									<p>
										<?php echo $t->title; ?></a>
									</p>
									<small> <?php echo $t->description; ?></a></cite></small>
								</blockquote>
								
							</div>
							<hr>
							<?php endforeach;?>
							<h3>Comments</h3>
							<?php foreach ($post_tp as $tp):?>
							<div class="media">
								
								<a href="#" class="pull-left">
								<img alt="" src="<?php echo '../../'.$tp->propic; ?>" class="media-object" style="height: 72px;">
								</a>
								<div class="media-body">
									<h2 class="media-heading"><?php echo $tp->name; ?> </h2> <small>Date post: <?php echo $tp->date_post; ?> </small>
									
									
									<p>
										<?php echo $tp->message; ?> 
									</p>
								</div>
							</div>
							<!--end media-->
							<hr>
							<?php endforeach;?>
							



							<div class="post-comment">
								<h3>Leave a Comment</h3>



								<form role="form" action="#">
									<div class="form-group">
										<label class="control-label">Message <span class="required">
										* </span>
										</label>
										<textarea class="col-md-10 form-control" rows="8" name = "message"></textarea>
										<input type = "hidden" name = "" value = ""></input>
										<input type = "hidden" name = "" value = ""></input>
										<input type = "hidden" name = "" value = ""></input>
									</div>
									<button class="margin-top-20 btn blue" type="submit">Post a Comment</button>

								</form>









							</div>
						</div>
						<!--end col-md-9-->
						
				</div>
			</div>
			<!-- header unta neh do -->
			<hr>
</div>

</div>

</div>

</div>


<?php $this->load->view('admin/components/page_tail'); ?>