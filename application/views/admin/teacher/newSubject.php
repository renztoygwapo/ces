			<?php static $ctr = 0; ?>
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
				<?php echo $section; ?>
			</h3> 

			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html"><?php  ?></a>
						<i class="fa fa-angle-right"></i>
					</li>

				<!-- 	<?php //foreach ($rows as $r) : ?>
				        <li>
							<a href="" ><?php// echo $r->section_name; ?>
							</a>
						</li> 
					<?php // endforeach; ?> -->
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->


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
							<a href="#addsubject" data-toggle="modal" class="btn default btn-xs green">
							<i class="fa fa-edit"></i> Add Subject</a>
							</div>
							</div>
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
										<i class="fa fa-user"></i> Time in
									</th>

									<th>
										<i class="fa fa-shopping-cart"></i> Time Out
									</th>
								</tr>
								</thead>
								<tbody>
								<?php if(count($rows)): foreach($rows as $row): ?>
									<tr>
									
										<td><?php echo $row->subject_name; ?></td>
										<td> <?php echo $row->time_in; ?> </td>
										<td><?php echo $row->time_out; ?></td>
										<?php endforeach; ?>	
										<?php else: ?>
											<td colspan="3">We could not find any subject.</td>
										
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


			<div class="row">

				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue-hoki">
						
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>Students in Section <?php echo $section; ?>
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
							<a href="<?php echo site_url('teacher/addnew'); ?>/<?php echo $section_id; ?>" data-toggle="modal" class="btn default btn-xs green">
							<i class="fa fa-edit"></i> Enroll New Student</a>
							</div>
							</div>
							<div class="row">
							<div class="col-md-12">	
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>		
									<th>
										Student Name
									</th>
									<th class="hidden-xs">
										Username
									</th>

									<th>
										Password
									</th>
								</tr>
								</thead>
								<tbody>
								<?php if(count($rows)): foreach($rows as $row): ?>
									<tr>
									
										<td><?php echo $row->subject_name; ?></td>
										<td> <?php echo $row->time_in; ?> </td>
										<td><?php echo $row->time_out; ?></td>
										<?php endforeach; ?>	
										<?php else: ?>
											<td colspan="3">We could not find any subject.</td>
										
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

<?php $this->load->view('admin/components/page_tail'); ?>