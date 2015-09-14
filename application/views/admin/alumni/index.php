<?php $this->load->view('admin/components/page_head_alumni'); ?>
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Home <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('/alumni'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
			
			</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Create New Request
							</div>
						</div>
						<a class="more" href="<?php echo site_url('alumni/alumni_request/'); ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $approved; ?>
							</div>
							<div class="desc">
								 Request Approved
							</div>
						</div>
						<a class="more" href="<?php echo site_url('alumni/requested_approved/'); ?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>


			</div>
		
			
			
	

</div>
<!-- END CONTAINER -->
<?php $this->load->view('admin/components/page_tail'); ?>