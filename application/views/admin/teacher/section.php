<?php $this->load->view('admin/components/page_head_teacher'); ?>
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			My Section <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Apple</a>
						
					</li>
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->


	<div class="row">
				<div class="col-md-12">


				<!-- confirmation -->
				<!-- Notifications-->
          <?php if($this->session->flashdata('result') != false){ ?>
          <div id="prefix_419624997860" class="Metronic-alerts alert alert-info fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
          </div>
          <?php } ?>
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Managed Class Section
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
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">



											<a href="#addsection" data-toggle="modal" class="config">
											<button id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button>
											
								</a>
								</div>
									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="#">
												Print </a>
											</li>
											<li>
												<a href="#">
												Save as PDF </a>
											</li>
											<li>
												<a href="#">
												Export to Excel </a>
											</li>
										</ul>
										</div>
									</div>
								</div>
							</div>
							<div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="dataTables_length" id="sample_1_length">
											<label>  
												<select name="sample_1_length" aria-controls="sample_1" class="form-control input-xsmall input-inline">
													<option value="5">5</option>
													<option value="15">15</option>
													<option value="20">20</option>
													<option value="-1">All</option>
												</select>
											</label>
										</div>
										</div>
								<div class="col-md-6 col-sm-12">
									<div id="sample_1_filter" class="dataTables_filter">
										<label>Search:<input type="search" class="form-control input-small input-inline" aria-controls="sample_1"></label>
									</div>
								</div>
								</div>
						<div class="table-scrollable">

						<table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
							<thead>
							<tr role="row">
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Username
								: activate to sort column ascending" style="width: 158px;">
									 Section Name
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
									 Email
								" style="width: 272px;">
									 Subject Name
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Joined
								: activate to sort column ascending" style="width: 142px;">
									 School Year
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
									 Status
								" style="width: 155px;">
									Action
								</th>
							</tr>
							</thead>
							<tbody>
									<!-- calling all Sections -->
															<?php if(count($sections)): foreach($sections as $section): ?>

										<tr class="gradeX odd" role="row">
											<td><?php echo  $section->section_name; ?></td>
											<td><?php echo  $section->subject_name; ?></td>
											<td><?php echo  $section->school_yr; ?></td>
											<td><?php echo anchor('teacher/studentList/' . $section->id, 'View Student'); ?></td>
										</tr>
														<?php endforeach; ?>
														<?php else: ?>
										<tr>
											<td colspan="3">We could not find any Sections.</td>
										</tr>
								<?php endif; ?>	

						</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 1 to 5 of 25 entries</div>
							</div>
							<div class="col-md-7 col-sm-12">
								<div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
									<ul class="pagination" style="visibility: visible;">
										<li class="prev disabled"><a href="#" title="First"><i class="fa fa-angle-double-left"></i></a></li>
										<li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#">1</a></li><li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li>
										<li class="next"><a href="#" title="Last"><i class="fa fa-angle-double-right"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>




<?php $this->load->view('admin/components/page_tail'); ?>