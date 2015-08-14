<?php $this->load->view('admin/components/page_head_teacher'); ?>
	<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Student List - Apple <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Request</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Student List</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Apple</a>
						
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->


			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Managed Student List
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
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



											<a href="#addstudent" data-toggle="modal" class="config">
											<button id="sample_editable_1_new" class="btn green">
											Enrolled New Student <i class="fa fa-plus"></i>
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
									 Student Name
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Joined
								: activate to sort column ascending" style="width: 142px;">
									 School Year
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
									 Status
								" style="width: 155px;">
									Rating
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
									 Status
								" style="width: 155px;">
									Action
								</th>

							</tr>
							</thead>
							<tbody>
							
							<tr class="gradeX odd" role="row">
							
								<td class="sorting_1">
									 coop
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">
									good@gmail.com </a>
								</td>
								
								
								<td class="center">
									 98%
								</td>
								<td>
									<span class="label label-sm label-danger">
									Delete 
									</span>
								<a href="<?php echo site_url('teacher/studentList')?>">
									<span class="label label-sm label-success">
									 View Student 
									</span>
								</a>
								</td>
							</tr>


							


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