
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			My Files <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">My Files</a>
						
					</li>
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->

				<div class="row">
				<div class="col-md-12">
						
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bell-o"></i>My File List
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
						<div class="pull-right">	
							<a href="javascript:;" class="btn default btn-xs green">
							<i class="fa fa-upload"></i> Upload File </a>

						</div>
						<br>
							<div class="table-scrollable">

								<table class="table table-striped table-bordered table-advance table-hover">
								<thead>
								<tr>
									<th>
										<i class="fa fa-briefcase"></i> File Name
									</th>
									<th>
										<i class="fa fa-briefcase"> Description
									</th> 
									<th>
										<i class="fa fa-user"></i> Action
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td >
										 Advisory
									</td>
									<td >
									
										RedBull 
									</td>
									
									
									<td>
										<a href="javascript:;" class="btn default btn-xs blue">
										<i class="fa fa-download"></i> Download</a>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>





<?php $this->load->view('admin/components/page_tail'); ?>