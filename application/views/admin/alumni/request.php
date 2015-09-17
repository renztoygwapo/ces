<?php $this->load->view('admin/components/page_head_alumni'); ?>
	<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Request<small> list</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('/alumni'); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Request</a>
						
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->

			<div class="row">

				<div class="portlet box blue-hoki" style="display: block;">
						<div class="portlet-title" style="display: block;">
							<div class="caption">
								<i class="fa fa-globe"></i> Request Datatable
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
							
											<div class="table-scrollable"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
							<thead>
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Rendering engine
								: activate to sort column ascending" style="width: 120px;">
									 Request Title
								</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Browser
								: activate to sort column ascending" style="width: 159px;">
									 Request Description
								</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 143px;">
									 Date Requested
								</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 143px;">
									 Status
								</th>
								

								

							</tr>
							</thead>
						<tbody>
					<?php foreach($request as $row): ?>
							<tr role="row" class="odd">
								<td class="sorting_1">
									<?php echo $row->req_title; ?>
								</td>
								<td>
									 <?php echo $row->req_description; ?>
								</td>
								<td>
									 <?php echo $row->req_date; ?>
								</td>
								<td>
										<?php 
										if($row->req_file == 'approved'){ ?>
											 <span class="label bg-green" style=" margin-right: 0px; padding-right: 10px; padding-left: 10px; "><?php echo $row->req_file; ?></span>
											 <!-- <span class="label bg-green"><a href ="#" style="color: #FFFFFF;">View Message</a></span> -->
											 <button type="button" class="btn label bg-blue " data-toggle="modal" data-target="#VIEWMESSAGE<?php echo $row->id; ?>" name = "reqName" value = "" style="padding-top: 6px; padding-bottom: 5px;">View Message</button> 
									<?php } else { ?>		
											 <span class="label bg-blue">on process</span>
											<!--  <span class="label bg-blue"><a href ="#" style="color: #FFFFFF;">View Message</a></span> -->
											  <button type="button" class="btn label bg-blue " data-toggle="modal" data-target="#VIEWMESSAGE<?php echo $row->id; ?>" name = "reqName" value = "" style="padding-top: 6px; padding-bottom: 5px;">View Message</button> 
									<?php } ?>

									
								</td>
							</tr>

							<div id="VIEWMESSAGE<?php echo $row->id; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
      			  		<div class="modal-dialog modal-lg">

      			  	 <form class="form-horizontal" action="<?php echo site_url('admin/request/updateRequest'); ?>" method="post">

            				<div class="modal-content">
               				 	<div class="modal-header">
               				 		<h1>Message</h1>
                 			   			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 				   
               		 			</div>
                <div class="modal-body">
                   <p><?php echo $row->msg_status; ?> </p>
                	

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                </div>
            </div>
       
        </div>

        				</div>








						<?php endforeach; ?>
						</tbody>
							</table>
						</div>
						</div>
						</div>
					</div>
			</div>
	</div>






<?php $this->load->view('admin/components/page_tail'); ?>