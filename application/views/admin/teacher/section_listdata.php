

			<div class="row">

				<div class="portlet box blue-hoki" style="display: block;">
						<div class="portlet-title" style="display: block;">
							<div class="caption">
								<i class="fa fa-globe"></i>Teacher List
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div id="sample_1_wrapper" class="dataTables_wrapper no-footer">

							<div class="table-scrollable">
							<table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
							<thead>
							<tr role="row">
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Rendering engine
								: activate to sort column ascending" style="width: 120px;">
									 My Role
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Browser
								: activate to sort column ascending" style="width: 159px;">
									 Section Name
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 143px;">
									 Grade Level
								</th>
							</tr>
							</thead>
							<tbody>
					
                  		 <?php if(count($sections)): foreach($sections as $section): ?>
	
							<tr role="row" class="odd">
							
					
								<td>
								
									<?php echo $section->role;?>
								</td>
								<td>
									<?php echo $section->section_name;?>
								</td>
								<td>
									<?php echo $section->grade_level;?>
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