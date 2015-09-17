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
				<li class="set active">
					<a href="<?php echo site_url('admin/request/')?>" >
					<i class="icon-docs"></i>
					<span class="title">Request <span class="badge badge-default"><?php echo $count_request; ?></span></span>
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
			
				<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Users Request <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin/')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#"> Users Request</a>
					</li>
				</ul>
		
			</div>
			<!-- END PAGE HEADER-->


			<!-- header unta neh do -->

			<div class="row">

				<div class="portlet box blue-hoki" style="display: block;">
						<div class="portlet-title" style="display: block;">
							<div class="caption">
								<i class="fa fa-globe"></i>List Of User Request
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
														<div class="table-scrollable">
															<table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
							<thead>
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Rendering engine
								: activate to sort column ascending" style="width: 120px;">
									 Name
								</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Browser
								: activate to sort column ascending" style="width: 159px;">
									 Request Title
								</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 143px;">
									 Date Request
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 143px;">
									Year Graduated
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Engine version
								: activate to sort column ascending" style="width: 100px;"><center>
									 Action</center>
								</th>

							</tr>
							</thead>
							<tbody>
							
								<?php if(count($rows)): foreach($rows as $row): ?>
	
							<tr role="row" class="odd">
							
					
								<td class="sorting_1">
									<?php echo $row->firstname.' '.$row->lastname;?>
								</td>
								<td>
									<?php echo $row->title; ?>
								</td>
								<td>
									<?php echo $row->request_date; ?>
								</td>
								<td>
									<?php echo $row->year_grad; ?>
								</td>
								<td>
							<?php 	if($row->files == 'none') { ?>
							<center> <button type="button" class="btn label bg-blue " data-toggle="modal" data-target="#<?php echo $row->request_id; ?>" name = "reqName" value = "<?php echo $row->firstname.' '.$row->lastname;?>" style="height: 25px;width: 109px;">View Request</button> </center>
							
							<?php 		} else { ?>
							<center> <span class="label bg-green">Already Approved</span> </center>
									<?php	} ?>

								</td>
							
							</tr>


				<div id="<?php echo $row->request_id; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
      			  		<div class="modal-dialog modal-lg">

      			  	 <form class="form-horizontal" action="<?php echo site_url('admin/request/updateRequest'); ?>" method="post">

            				<div class="modal-content">
               				 	<div class="modal-header">
                 			   			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 				   	<h1 class="modal-title"><?php echo $row->firstname.' '.$row->lastname;?> Request </h1>
               		 			</div>
                <div class="modal-body">
                    <h2> <?php echo $row->title; ?> </h2>
                    <p><?php echo $row->description; ?></p>
                    <small>Date:<?php echo $row->request_date; ?></small>
                    
                    
                    <input type="hidden" name="req" value = "<?php echo $row->request_id; ?>"></input>
                    <div class="post-comment">
                <h3>Leave a Comment</h3>


                <!-- <form role="form" action="#"> -->
                  <div class="form-group">
                    <label class="control-label">Message <span class="required">
                    * </span>
                    </label>
                    <textarea class="col-md-10 form-control" rows="8" name="message"></textarea>
                   
                  </div>
                  

             
              </div>
                	

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Approved</button>
                </div>
            </div>
        </form>
        </div>

        				</div>
    			</div>

									 <?php endforeach; ?>
                      		<?php endif; ?> 

							<!-- <tr role="row" class="odd">
								<td class="sorting_1">
									 Gecko
								</td>
								<td>
									 Netscape Navigator 9
								</td>
								<td>
									 Win 98+ / OSX.2+
								</td>
								<td>
									<center> <button type="button" class="btn green " >View   Request</button> </center>
								</td>
								
							</tr> -->
							
						</tbody>
							</table>
						</div>
					</div>
						</div>
					</div>
			</div>
			</div>







<?php $this->load->view('admin/components/page_tail'); ?>