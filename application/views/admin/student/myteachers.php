


<?php $this->load->view('admin/components/page_head_student'); ?>

			<h3 class="page-title">
			My Subjects <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin');?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">My Subjects</a>
					</li>
				</ul>

			</div>

		<div class="row">

				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue-hoki">
						
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>Subject List
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
						<div class="portlet-body">
							
							<div class="row">
							<div class="col-md-12">	
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>		
									<th>
										<i class="fa fa-briefcase"></i> Subject Name
									</th>
									<th class="hidden-xs">
										<i class="fa fa-user"></i> Teacher Name
									</th>

									<th>
										<i class="fa fa-shopping-cart"></i> Time In
									</th>
									<th>
										<i class="fa fa-shopping-cart"></i> Time Out
									</th>
								</tr>
								</thead>
								<tbody>
									<?php if(count($subjects)): foreach($subjects as $row): ?>
									<tr>
									
										<td><?php echo $row->subject_name; ?></td>
										<td> <?php echo $row->firstname; ?> <?php echo $row->lastname; ?></td>
										<td><?php echo $row->time_in; ?></td>
										<td><?php echo $row->time_out; ?></td>
									
											
										<?php endforeach; ?>	
										<?php else: ?>
											<td colspan="3">You have no subject yet.</td>
										
									</tr>		
								<?php endif; ?>		
						


								</tbody>
								</table>
							</div>
							</div>
						</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
				</div>


					</div>
					</div>
	
<?php $this->load->view('admin/components/page_tail'); ?>