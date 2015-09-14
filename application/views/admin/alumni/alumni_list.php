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
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				
				<li  class="set active">
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
				<li>
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
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Alumni <small>List</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#"> Alumni List</a>
					</li>
				</ul>
		
			</div>
			<!-- END PAGE HEADER-->


			<!-- header unta neh do -->

			<div class="row">

				<div class="portlet box blue-hoki" style="display: block;">
						<div class="portlet-title" style="display: block;">
							<div class="caption">
								<i class="fa fa-globe"></i> List
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
								<div class="row" style="display: block;">
									<div class="col-md-12">
										<div class="btn-group tabletools-dropdown-on-portlet" style="display: block;">
														<a class="btn btn-sm default DTTT_button_print" id="ToolTables_sample_1_3" title="View print view">
															<span>Print</span>
														</a>
													</div>
												</div>
								</div>
											
						<div class="table-scrollable">
					<table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
							<thead>
							<tr role="row">
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Rendering engine
								: activate to sort column ascending" style="width: 120px;">
									 Photo
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Browser
								: activate to sort column ascending" style="width: 159px;">
									 First Name
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 143px;">
									 Last Name
								</th>
							</tr>
							</thead>
							<tbody>
					
                  		 <?php if(count($rows)): foreach($rows as $row): ?>
	
							<tr role="row" class="odd">
							
					
								<td class="sorting_1">
									<img src="<?php echo $row->photo;?>" style="width:20px;"> 
								</td>
								<td>
									<?php echo $row->firstname;?>
								</td>
								<td>
									<?php echo $row->lastname;?>
								</td>
							
							</tr>
									 <?php endforeach; ?>
                      		<?php endif; ?> 
					
						</tbody>
							</table>
						</div>

						</div>
					</div>
			</div>
				</div>
					</div>







<?php $this->load->view('admin/components/page_tail'); ?>