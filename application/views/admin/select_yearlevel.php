<?php $this->load->view('admin/components/page_head'); ?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
			
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
				<li>
					<a href="<?php echo site_url('admin/request/')?>" >
					<i class="icon-docs"></i>
					<span class="title">Request <span class="badge badge-default"><?php echo $count_request; ?></span></span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class="active" >
					<a href="<?php echo site_url('admin/reports/reports_students/')?>" >
					<i class="icon-trophy"></i>
					<span class="title">Rankings</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class="start">
					<a href="#" >
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="<?php echo site_url('admin/reports/reports_students/')?>">
							Student</a>
						</li>
						<li class="">
							<a href="<?php echo site_url('admin/reports/reports_teachers/')?>">
							Teacher</a>
						</li>
						<li class="">

							<a href="<?php echo site_url('admin/reports/reports_alumni/')?>">
							Alumni</a>
						</li>
					</ul>
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
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Rankings<small> student</small>
			</h3>

			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<form class="form" action="<?php echo site_url('admin/rankings'); ?>" method="post">
					<div class="form-group">
						<label class="control-label">Year Level</label>
														
							<select class="form-control" name="year_level" required="">
								<option value="">Select Year Level</option>
								<option value="Grade 1">Grade 1</option>
								<option value="Grade 2">Grade 2</option>
								<option value="Grade 3">Grade 3</option>
								<option value="Grade 4">Grade 4</option>
								<option value="Grade 5">Grade 5</option>
								<option value="Grade 6">Grade 6</option>
							</select>
					</div>
					<div class="form-group">
						<label class="control-label"></label>
							<input type="submit" value="Submit" class="btn btn-default green">
					</div>
				</form>
				</div>
			</div>





		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/table-advanced.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   TableAdvanced.init();
});
</script>
</body>
<!-- END BODY -->
</html>