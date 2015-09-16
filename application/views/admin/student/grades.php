<?php $this->load->view('admin/components/page_head_student'); ?>
	<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Grading List <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin/')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Grading</a>
						
					</li>
				</ul>
				<div class="page-toolbar">
					
				</div>
			</div>
			<!-- END PAGE HEADER-->

			<div class="row">

				<div class="portlet box blue-hoki" style="display: block;">
						<div class="portlet-title" style="display: block;">
							<div class="caption">
								<i class="fa fa-globe"></i>Datatable with TableTools
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
									 Grading Period
								</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Browser
								: activate to sort column ascending" style="width: 159px;">
									 Subject
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Engine version
								: activate to sort column ascending" style="width: 100px;">
									 Grade
								</th>
							</tr>
							</thead>
							<tbody>
						<?php foreach ($grades as $gr) : ?>
							<tr role="row" class="odd">

								<td class="sorting_1">
									<?php echo $gr->grading_period; ?>
								</td>
								<td>
									 <?php echo $gr->subject_name; ?>
								</td>
								<td>
									 <?php echo $gr->grade_rating; ?>
								</td>
								
								
							</tr>
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