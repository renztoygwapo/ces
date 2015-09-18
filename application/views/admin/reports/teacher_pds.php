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
				<li >
					<a href="<?php echo site_url('admin/rankings/')?>" >
					<i class="icon-trophy"></i>
					<span class="title">Rankings</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class="start active">
					<a href="#" >
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="">
							<a href="<?php echo site_url('admin/reports/reports_students/')?>">
							Student</a>
						</li>
						<li class="active">
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
			Reports<small> Teachers</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('admin/home_admin/')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Reports</a>
						<i class="fa fa-angle-right"></i>
					</li>
					
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
				

	<!-- BEGIN PAGE HEADER-->
	 <small><h6 class="page-title" >
			CS FORM 212(Revised 2005) </small>
			</h6>
			
		<center>

		<h3 class="page-title" >
			Personal Data Sheet<small></small>
			</h3>
		</center>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					Print legibly. Mark appropriate boxes  <label><input type="checkbox" value="" disabled> with 
					"<span class="glyphicon glyphicon-ok"></span> "
					 </label>
				</ul>
				<ul class="pull-right">	
						1.CS ID No. <input type="text" placeholder="(to be filled up by CSC)" disabled>
				</ul>
			</div>


			<?php if($personal == null){ ?>


			<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								I. PERSONAL INFORMATION
							</div>
							<div class="tools">
								<a href="" class="collapse" data-original-title="" title="">
								</a>
								<a href="" class="reload" data-original-title="" title="">
								</a>
								<a href="" class="remove" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<hr>
							
								<div class="row">
									<div class="col-md-3">
										<input type="text" class = "form-control" placeholder="SURENAME" name = "surename" value = ""></input>
										<input type="hidden" class = "form-control" name = "user_id" value=""></input>
									</div>
								
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "firstname"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "middlename"></input>
									</div>

									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="NAME EXTENSION (e.g. Jr., Sr.) " name = "extend"></input>
									</div>
								</div>
						
							<hr>
					
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="DATE OF BIRTH(mm/dd/yyyy)" name = "dateofbirth"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="PLACE OF BIRTH" name = "place_of_birth"></input>
									</div>
									<div class="col-md-3">
									
									<label>SEX</label><br>
											<label>
									<div id="gender">
										<label><span class=""><input type="checkbox" id="gender" name = "gender" value = "Male" checked> </input> Male </span> </label>
										<label><span class=""><input type="checkbox" id="gender" name = "gender" value = "Female"></input> Female</span> </label>
									</div>		
									
									</div>
									<div class="col-md-3">
										
											<center></center><label>CIVIL SATATUS</label> </center><br>
									<div id="status">
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Single" checked></input>Single</span></label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Widowed"></input></span>Widowed</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Married"></input></span>Married</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Separated"></input></span>Separated</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Annulled"></input></span>Annulled</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Others"></input></span>Others</label>	
									</div>
											
									</div>
	
								</div>


			<?php } else { ?>

			<?php foreach ($personal as $s) : ?>
			<!-- END PAGE HEADER-->
			<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								I. PERSONAL INFORMATION
							</div>
							<div class="tools">
								<a href="" class="collapse" data-original-title="" title="">
								</a>
								<a href="" class="reload" data-original-title="" title="">
								</a>
								<a href="" class="remove" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<hr>
							
								<div class="row">
									<div class="col-md-3">
										<input type="text" class = "form-control" placeholder="SURENAME" name = "surename" value = "<?php echo $s->surename; ?>"></input>
										<input type="hidden" class = "form-control" name = "user_id" value=""></input>
									</div>
								
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "firstname" value = "<?php echo $s->firstname; ?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "middlename" value = "<?php echo $s->mname; ?>"></input>
									</div>

									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="NAME EXTENSION (e.g. Jr., Sr.) " name = "extend" value = "<?php echo $s->exname; ?>"></input>
									</div>
								</div>
						
							<hr>
					
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="DATE OF BIRTH(mm/dd/yyyy)" name = "dateofbirth" value = "<?php echo $s->birthdate; ?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="PLACE OF BIRTH" name = "place_of_birth" value = "<?php echo $s->birthplace; ?>"></input>
									</div>
									<div class="col-md-3">
									
									<label>SEX</label><br>
											<label>
									<div id="gender">
									<?php if( $s->sex == 'Male'){ ?> 
										<label><span class=""><input type="checkbox" id="gender" name = "gender" value = "Male" checked> </input> Male </span> </label>
										<label><span class=""><input type="checkbox" id="gender" name = "gender" value = "Female"></input> Female</span> </label>
										<?php } else { ?>
										<label><span class=""><input type="checkbox" id="gender" name = "gender" value = "Male" > </input> Male </span> </label>

										<label><span class=""><input type="checkbox" id="gender" name = "gender" value = "Female" checked></input> Female</span> </label>
									<?php } ?>

									</div>		
									
									</div>
									<div class="col-md-3">
										
											<center></center><label>CIVIL SATATUS</label> </center><br>
									<div id="status">
									<?php if($s->civilstatus == 'Single'){ ?>

											<label><span class=""><input type="checkbox" id="status" name = "status" value = "Single" checked></input>Single</span></label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Widowed"></input></span>Widowed</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Married"></input></span>Married</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Separated"></input></span>Separated</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Annulled"></input></span>Annulled</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Others"></input></span>Others</label>	

									<?php } ?>

									<?php if($s->civilstatus == 'Widowed'){ ?>

											<label><span class=""><input type="checkbox" id="status" name = "status" value = "Single" ></input>Single</span></label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Widowed" checked></input></span>Widowed</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Married"></input></span>Married</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Separated"></input></span>Separated</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Annulled"></input></span>Annulled</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Others"></input></span>Others</label>	

									<?php } ?>

									<?php if($s->civilstatus == 'Married'){ ?>

											<label><span class=""><input type="checkbox" id="status" name = "status" value = "Single" ></input>Single</span></label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Widowed" ></input></span>Widowed</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Married" checked></input></span>Married</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Separated"></input></span>Separated</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Annulled"></input></span>Annulled</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Others"></input></span>Others</label>	

									<?php } ?>

									<?php if($s->civilstatus == 'Separated'){ ?>

											<label><span class=""><input type="checkbox" id="status" name = "status" value = "Single" ></input>Single</span></label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Widowed" ></input></span>Widowed</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Married"></input></span>Married</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Separated" checked></input></span>Separated</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Annulled"></input></span>Annulled</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Others"></input></span>Others</label>	

									<?php } ?>

									<?php if($s->civilstatus == 'Annulled'){ ?>

											<label><span class=""><input type="checkbox" id="status" name = "status" value = "Single" ></input>Single</span></label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Widowed" ></input></span>Widowed</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Married"></input></span>Married</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Separated" ></input></span>Separated</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Annulled" checked></input></span>Annulled</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Others"></input></span>Others</label>	

									<?php } ?>

									<?php if($s->civilstatus == 'Others'){ ?>

											<label><span class=""><input type="checkbox" id="status" name = "status" value = "Single" ></input>Single</span></label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Widowed" ></input></span>Widowed</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Married"></input></span>Married</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Separated" ></input></span>Separated</label>
										<br>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Annulled" ></input></span>Annulled</label>
										<label><span class=""><input type="checkbox" id="status" name = "status" value = "Others" checked></input></span>Others</label>	

									<?php } ?>
										
									</div>
											
									</div>
	
								</div>

						
							
							<hr>
						
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="CITIZENSHIP" name = "citizenship" value = "<?php echo $s->citizenship;?>" >	</input>			
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="HEIGHT(m)" name = "height" value = "<?php echo $s->height;?>" ></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="WEIGHT(KG)" name = "weight" value = "<?php echo $s->weight;?>" ></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="BLOOD TYPE" name = "blood_type" value = "<?php echo $s->bloodtype;?>" ></input>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="GSIS ID NO." name = "gsis" value = "<?php echo $s->gsis;?>"></input>				
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="PAGIBIG ID NO." name = "pagibig" value = "<?php echo $s->pagibig;?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="PHILHEALTH NO." name = "philhealth" value = "<?php echo $s->philhealth;?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="SSS NO." name = "sss" value = "<?php echo $s->sss;?>"></input>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-7">
										<input type="text" class="form-control" placeholder=" RESIDENTIAL ADDRESS" name = "residential_address" value = "<?php echo $s->residential_adress;?>"></input>				
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="ZIP CODE" name = "zip_code" value = "<?php echo $s->zip_code;?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="TELEPHONE NO." name = "tel" value = "<?php echo $s->telephone;?>"> </input>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="E-MAIL ADDRESS (if any)" name = "email" value = "<?php echo $s->email;?>">	</input>			
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="CELLPHONE NO. (if any)" name = "cellphone" value = "<?php echo $s->cellphone;?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="AGENCY EMPLOYEE NO." name = "agency" value = "<?php echo $s->Agency_employee_no;?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="TIN" name = "tin" 
										value = "<?php echo $s->tin;?>"></input>
									</div>
								</div>

							</div>

						</div>
							<?php endforeach; ?>	


			<?php  } ?>

				<?php if($family_bg == null){ ?>

						<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								II. FAMILY BACKGROUND
							</div>
							<div class="tools">
								<a href="" class="collapse" data-original-title="" title="">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
								</a>
								<a href="" class="reload" data-original-title="" title="">
								</a>
								<a href="" class="remove" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							
								
								<div class="row">
									<div class="col-md-6">
										<h4>SPOUSE'S</h4>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="SURENAME" name = "spouse_sn"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "spouse_fn"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "spouse_mn"></input>
									</div>
								</div>
						
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
	
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="OCCUPATION" name = "occupation"></input>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="EMPLOYER/BUS. NAME" name = "employer_name"></input>
									</div>
								</div>
						
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
											
								</div>

								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="BUSINESS ADDRESS" name = "bus_address"></input>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="TELEPHONE NO." name = "telephone"></input>
									</div>
								</div>				
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
								</div>

								<h4>FATHERS'S</h4>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="SURENAME" name = "father_sn"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "father_fn"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "father_mn"></input>
									</div>
								</div>
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
								</div>
								<h4>MOTHER'S</h4>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="SURENAME" name = "mother_sn"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "mother_fn"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "mother_mn"></input>
									</div>
								</div>
								</div>



			<?php } else { ?>

			<?php foreach ($family_bg as $fb) : ?>

				<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								II. FAMILY BACKGROUND
							</div>
							<div class="tools">
								<a href="" class="collapse" data-original-title="" title="">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
								</a>
								<a href="" class="reload" data-original-title="" title="">
								</a>
								<a href="" class="remove" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							
								
								<div class="row">
									<div class="col-md-6">
										<h4>SPOUSE'S</h4>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="SURENAME" name = "spouse_sn" value = "<?php echo $fb->spouse_sn ?>"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "spouse_fn" value = "<?php echo $fb->spouse_fn ?>"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "spouse_mn" value = "<?php echo $fb->spouse_mn ?>"></input>
									</div>
								</div>
						
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
	
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="OCCUPATION" name = "occupation" value = "<?php echo $fb->spouse_occupation ?>"></input>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="EMPLOYER/BUS. NAME" name = "employer_name" value = "<?php echo $fb->spouse_emp_bus_name ?>"></input>
									</div>
								</div>
						
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
											
								</div>

								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="BUSINESS ADDRESS" name = "bus_address" value = "<?php echo $fb->spouse_bus_add ?>"></input>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="TELEPHONE NO." name = "telephone" value = "<?php echo $fb->spouse_tel_number ?>"></input>
									</div>
								</div>				
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
								</div>

								<h4>FATHERS'S</h4>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="SURENAME" name = "father_sn" value = "<?php echo $fb->father_sn ?>"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "father_fn " value = "<?php echo $fb->father_fn ?>"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "father_mn" value = "<?php echo $fb->father_mn ?>"></input>
									</div>
								</div>
								<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
								</div>
								<h4>MOTHER'S</h4>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="SURENAME" name = "mother_sn" value = "<?php echo $fb->mother_sn ?>"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="FIRSTNAME" name = "mother_fn" value = "<?php echo $fb->mother_fn ?>"></input>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="MIDDLE NAME" name = "mother_mn" value = "<?php echo $fb->mother_mn ?>"></input>
									</div>
								</div>
								</div>

			<?php endforeach; ?>	

			<?php  } ?>

								<div class="col-md-6">
									
									<div class="row">

										<div class="col-md-12">
											<h4>NAME OF CHILD(Write full name and list all)</h4>
										
										</div>
								</div>
								<div class="row">
									<div class="col-md-7">
										<h6> FULLNAME </h6>
										<?php if($child == null){ ?>
										<input type="text" class="form-control" placeholder="" name = "bd1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "bd1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										


										<?php } else { ?>
										<?php foreach ($child as $c) : ?>
										<input type="text" class="form-control" placeholder="" name = "bd1" value ="<?php echo $c->full_name;?>"></input>
										<?php endforeach; ?>
										<?php  } ?>
											
									</div>
									<div class="col-md-5">
										<h6> BIRTHDAY(mm/dd/yyyy) </h6> 
										<?php if($child == null){ ?>
										<input type="text" class="form-control" placeholder="" name = "bd1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										<input type="text" class="form-control" placeholder="" name = "bd1"></input>
										<input type="text" class="form-control" placeholder="" name = "fn1"></input>
										


										<?php } else { ?>
										<?php foreach ($child as $c) : ?>
										<input type="text" class="form-control" placeholder="" name = "bd1" value ="<?php echo $c->bday;?>"></input>
										<?php endforeach; ?>
										<?php  } ?>
									</div>

								</div>
								</div>
								</div>
							
							</div>

						
					</div>


					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								III. EDUCATIONAL BACKGROUND
							</div>
							
						</div>
						<div class="portlet-body">
							

								<div class="row">
									<div class="col-md-2">
										LEVEL
									</div>
									<div class="col-md-2">
										NAME OF SCHOOL
									</div>
									<div class="col-md-2">
										DEGREE COURSE
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-6">YEAR GRADUATE</div>

											<div class="col-md-6"><small>HIGHEST GRADE/ LEVEL /UNITS EARNED</small></div>

										</div>
										
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-12">INCLUSIVE DATES OF ATTENDANCE</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-6">FROM</div>
									
											<div class="col-md-6">TO</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										SCHOLARSHIP/ ACADEMIC HONORS RECEIVED
									</div>

									
								</div>
								<?php if($educ_bg == null){ ?>
									<div class="row">
									<div class="col-md-2">
										<input type="hidden" class="form-control" placeholder="" name = "elementary" value = "elementary"></input> ELEMENTARY
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "elem_school_name"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "elem_degree_course"></input>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_yr_grad"></input></div>

											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_high_grade"></input></div>

										</div>
										
									</div>
									<div class="col-md-2">
										
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_inclusive_from"></input></div>
									
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_inclusive_to"></input></div>
										</div>

									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "elem_honor_recieve"></input>
									</div>

									
								</div>
								<hr>
							<div class="row">
									<div class="col-md-2">
										<input type="hidden" class="form-control" placeholder="" name = "secondary" value = "secondary"></input> SECONDARY
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "secondary_school_name"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "secondary_degree_course"></input>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "secondary_yr_grad"></input></div>

											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "secondary_high_grade"></input></div>

										</div>
										
									</div>
									<div class="col-md-2">
										
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "secondary_inclusive_from"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "secondary_inclusive_to"></input>
											</div>
										</div>

									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "secondary_honor_recieve"></input>
									</div>

									
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<input type="hidden" class="form-control" placeholder="" name = "vocational" value = "vocational"></input> VOCATIONAL/TRADE COURSE
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "vocational_school_name"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "vocational_degree_course"></input>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "vocational_yr_grad"></input></div>

											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "vocational_high_grade"></input></div>

										</div>
										
									</div>
									<div class="col-md-2">
										
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "vocational_inclusive_from"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "vocational_inclusive_to"></input>
											</div>
										</div>

									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "vocational_honor_recieve"></input>
									</div>				
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<input type="hidden" class="form-control" placeholder="" name = "college" value = "college"></input> COLLEGE
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "college_school_name"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "college_degree_course"></input>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "college_yr_grad"></input></div>

											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "college_high_grade"></input></div>

										</div>
										
									</div>
									<div class="col-md-2">
										
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "college_inclusive_from"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "college_inclusive_to"></input>
											</div>
										</div>

									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "college_honor_recieve"></input>
									</div>				
								</div>
								

								<hr>
								<div class="row">
									<div class="col-md-2">
										<input type="hidden" class="form-control" placeholder="" name = "graduate_studies" value = "graduate_studies"></input> GRADUATE STUDIES
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "graduate_studies_school_name"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "graduate_studies_degree_course"></input>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "graduate_studies_yr_grad"></input></div>

											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "graduate_studies_high_grade"></input></div>

										</div>
										
									</div>
									<div class="col-md-2">
										
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "graduate_studies_inclusive_from"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "graduate_studies_inclusive_to"></input>
											</div>
										</div>

									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "graduate_studies_honor_recieve"></input>
									</div>				
								</div>

								<?php } else { ?>
							<?php foreach ($educ_bg as $e) : ?>

								<div class="row">
									<div class="col-md-2">
										<input type="hidden" class="form-control" placeholder="" name = "elementary" value = "elementary"></input> <?php echo $e->level ;?>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "elem_school_name" value = "<?php echo $e->school_nm ;?>"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "elem_degree_course"  value = "<?php echo $e->course_degree ;?>"></input>
									</div>
									<div class="col-md-2">
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_yr_grad" value = "<?php echo $e->year_grad ;?>"></input></div>

											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_high_grade" value = "<?php echo $e->high_level ;?>"></input></div>

										</div>
										
									</div>
									<div class="col-md-2">
										
										<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_inclusive_from" value = "<?php echo $e->inclusive_from ;?>"></input></div>
									
											<div class="col-md-6"><input type="text" class="form-control" placeholder="" name = "elem_inclusive_to" value = "<?php echo $e->inclusive_to ;?>"></input></div>
										</div>

									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "elem_honor_recieve" value = "<?php echo $e->inclusive_from ;?>"></input>
									</div>

									
							</div>
								<hr>

								<?php endforeach; ?>
								<?php  } ?>

							
							</div>

						
					</div>

						<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								IV. CIVIL SERVICE ELIGIBILITY
							</div>
							
						</div>
						<div class="portlet-body">
							
								<div class="row">
									<div class="col-md-3">
										CAREER SERVICE/ RA 1080 (BOARD/BAR)
										UNDER SPECIAL LAWS/ CES/ CSEE
									</div>
									<div class="col-md-2">
										RATING
									</div>
									<div class="col-md-2">
										DATE OF EXAMINATION/ CONFERMENT
									</div>
									<div class="col-md-3">
										PLACE OF EXAMINATION/ CONFERMENT
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-12">LICENSE(if applicable)</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-6">NUMBER</div>
									
											<div class="col-md-6">DATE OF RELEASE</div>
										</div>

									</div>
									</small>
									
								</div>
								<hr>
											<?php if($civil_srvc == null){ ?>
			
			<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="career_service1"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="rating1"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="date_of_examination1"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="place_of_examination1"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="license_number1"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="date_release1"></input>
											</div>
										</div>

									</div>
									</small>
											
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="career_service2"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="rating2"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="date_of_examination2"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="place_of_examination2"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="license_number2"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="date_release2"></input>
											</div>
										</div>

									</div>
									</small>
									
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="career_service3"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="rating3"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="date_of_examination3"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="place_of_examination3"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="license_number3"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="date_release3"></input>
											</div>
										</div>

									</div>
									</small>
									
								</div>


								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="career_service4"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="rating4"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="date_of_examination4"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="place_of_examination4"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="license_number4"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="date_release4"></input>
											</div>
										</div>

									</div>
									</small>
									
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="career_service5"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="rating5"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="date_of_examination5"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="place_of_examination5"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="license_number5"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="date_release5"></input>
											</div>
										</div>

									</div>
									</small>
									
								</div>


								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="career_service6"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="rating6"></input>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name="date_of_examination6"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name="place_of_examination6"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="license_number6"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="date_release6"></input>
											</div>
										</div>

									</div>
									</small>
									
								</div>

							<?php } else { ?>
							<?php foreach ($civil_srvc as $cs) : ?>
											<div class="row">
													<div class="col-md-3">
														<input type="text" class="form-control" placeholder="" name="career_service6" value = "<?php echo $cs->career_srvc ;?>"></input>
													</div>
													<div class="col-md-2">
														<input type="text" class="form-control" placeholder="" name="rating6" value = "<?php echo $cs->rating ;?>"></input>
													</div>
													<div class="col-md-2">
														<input type="text" class="form-control" placeholder="" name="date_of_examination6" value = "<?php echo $cs->date_of_exam ;?>"></input>
													</div>
													<div class="col-md-3">
														<input type="text" class="form-control" placeholder="" name="place_of_examination6" value = "<?php echo $cs->conferment ;?>"></input>
													</div>
													<small><div class="col-md-2">
														<div class="row">
															<div class="col-md-6">
																<input type="text" class="form-control" placeholder="" name="license_number6" value = "<?php echo $cs->license_number ;?>"></input>
															</div>
													
															<div class="col-md-6">
																<input type="text" class="form-control" placeholder="" name="date_release6" value = "<?php echo $cs->license_release ;?>"></input>
															</div>
														</div>

													</div>
													</small>
													
												</div>


							<?php endforeach; ?>
							<?php  } ?>




								
								
								
								
								
								

							</div>

						
					</div>

					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								V. WORK EXPERIENCE (Include private employment. Start from your current work)
							</div>
							
						</div>
						<div class="portlet-body">
							
								<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-12">INCLUSIVE DATES (mm/dd/yy)</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-6">From</div>
									
											<div class="col-md-6">To</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										POSITION TITLE(Write in full)
									</div>
									<div class="col-md-3">
										DEPARTMENT/ AGENCY/ OFFICE / COMPANY (Write in full)
									</div>
									<small><div class="col-md-4">
										<div class="col-md-3">MONTHLY SALARY</div>
										<div class="col-md-3">SALARY GRADE & STEP INCREMENT (Format "00-0")</div>
										<div class="col-md-3">STATUS OF APPOINT MENT</div>
										<div class="col-md-3">GOV'T SERVICE (Yes/No)</div>

									</div>
									</small>
									
								</div>
								<hr>

								

								
											<?php if($work_exp == null){ ?>
			
							<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from1"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to1"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title1"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department1"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary1"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade1"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment1"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service1"></input>
											</div>
										</div>
									</small>
									
								</div>

								<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from2"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to2"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title2"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department2"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary2"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade2"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment2"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service2"></input>
											</div>
										</div>
									</small>
									
								</div>
								<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from3"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to3"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title3"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department3"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary3"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade3"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment3"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service3"></input>
											</div>
										</div>
									</small>
									
								</div>
			

							<?php } else { ?>
							<?php foreach ($work_exp as $we) : ?>
											
							<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from3" value = "<?php echo $we->inclusive_dates_from ;?>"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to3" value = "<?php echo $we->inclusive_dates_to ;?>"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title3" value = "<?php echo $we->position_title ;?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department3" value = "<?php echo $we->department ;?>"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary3" value = "<?php echo $we->mothly_salary ;?>"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade3" value = "<?php echo $we->salary_grade ;?>"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment3" value = "<?php echo $we->status_of_appointment ;?>"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service3" value = "<?php echo $we->gov_service ;?>"></input>
											</div>
										</div>
									</small>
									
								</div>

							<?php endforeach; ?>
							<?php  } ?>




								
								



					<?php if($work_exp == null){ ?>
			
							<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from1"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to1"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title1"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department1"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary1"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade1"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment1"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service1"></input>
											</div>
										</div>
									</small>
									
								</div>

								<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from2"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to2"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title2"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department2"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary2"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade2"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment2"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service2"></input>
											</div>
										</div>
									</small>
									
								</div>
								<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from3"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to3"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title3"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department3"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary3"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade3"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment3"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service3"></input>
											</div>
										</div>
									</small>
									
								</div>
			

							<?php } else { ?>
							<?php foreach ($work_exp as $we) : ?>
											
							<div class="row">
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_from3" value = "<?php echo $we->inclusive_dates_from ;?>"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_to3" value = "<?php echo $we->inclusive_dates_to ;?>"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "position_title3" value = "<?php echo $we->position_title ;?>"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name = "department3" value = "<?php echo $we->department ;?>"></input>
									</div>
									<small>
										<div class="col-md-4">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "monthly_salary3" value = "<?php echo $we->mothly_salary ;?>"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "salary_grade3" value = "<?php echo $we->salary_grade ;?>"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "status_of_appointment3" value = "<?php echo $we->status_of_appointment ;?>"></input>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "gov_service3" value = "<?php echo $we->gov_service ;?>"></input>
											</div>
										</div>
									</small>
									
								</div>

							<?php endforeach; ?>
							<?php  } ?>
								
									
							</div>				
					</div>
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S
							</div>
							
						</div>
						<div class="portlet-body">
							
								<div class="row">
									
									<div class="col-md-5">
												NAME & ADDRESS OF ORGANIZATION(Write in full)
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-12">INCLUSIVE DATES (mm/dd/yy)</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-6">From</div>
									
											<div class="col-md-6">To</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										NUMBER OF HOURS
									</div>
									<div class="col-md-3">
												POSITION/NATURE OF WORK
									</div>
								</div>
								<hr>
									<?php if($voluntary == null){ ?>
							<div class="row">
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name ="name_organization1" > </input>
									</div>
									<small>
										<div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
											<input type="text" class="form-control" placeholder="" name ="inclusive_date_from1"> </input>
										</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_date_to1"> </input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name ="numbers_of_hours1" > </input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name ="nature_of_work1"> </input>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name ="name_organization2"> </input>
									</div>
									<small>
										<div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
											<input type="text" class="form-control" placeholder="" name ="inclusive_date_from2"> </input>
										</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_date_to2"> </input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name ="numbers_of_hours2" > </input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name ="nature_of_work2"> </input>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name ="name_organization3"> </input>
									</div>
									<small>
										<div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
											<input type="text" class="form-control" placeholder="" name ="inclusive_date_from3"> </input>
										</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_date_to3"> </input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name ="numbers_of_hours3" > </input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name ="nature_of_work3"> </input>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name ="name_organization4"> </input>
									</div>
									<small>
										<div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
											<input type="text" class="form-control" placeholder="" name ="inclusive_date_from4"> </input>
										</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_date_to4"> </input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name ="numbers_of_hours4" > </input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name ="nature_of_work4"> </input>
									</div>
								</div>

								
								

							<?php } else { ?>
							<?php foreach ($voluntary as $v) : ?>
								
								<div class="row">
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name ="name_organization4" value = "<?php echo $v->name_of_organization ;?>"> </input>
									</div>
									<small>
										<div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
											<input type="text" class="form-control" placeholder="" name ="inclusive_date_from4" value = "<?php echo $v->inclusive_form ;?>"> </input>
										</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name ="inclusive_date_to4" value = "<?php echo $v->inclusive_to ;?>"> </input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name ="numbers_of_hours4" value = "<?php echo $v->number_of_hours ;?>"> </input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="" name ="nature_of_work4" value = "<?php echo $v->position ;?>"> </input>
									</div>
								</div>






							<?php endforeach; ?>
							<?php  } ?>


		

							</div>				
					</div>

					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								VII. TRAINING PROGRAMS (Start from the most recent training.)
							</div>
							
						</div>
						<div class="portlet-body">
								<div class="row">
									
									<div class="col-md-5">
												TITLE OF SEMINAR/ CONFERENCE/ WORKSHOP/ SHORT COURSE (Write in full)
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-12">INCLUSIVE DATES (mm/dd/yy)</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-6">From</div>
									
											<div class="col-md-6">To</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										NUMBER OF HOURS
									</div>
									<div class="col-md-3">
												CONDUCTED/ SPONSORED BY (Write in full)
									</div>
								
									
								</div>
								<hr>
								<div class="row">
									
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name = "title_of_seminar1"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_from1"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_to1"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "number_of_hours1"></input>
									</div>
									<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "conducted1"></input>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name = "title_of_seminar2"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_from2"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_to2"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "number_of_hours2"></input>
									</div>
									<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "conducted2"></input>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name = "title_of_seminar3"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_from3"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_to3"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "number_of_hours3"></input>
									</div>
									<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "conducted3"></input>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name = "title_of_seminar4"></input>
									</div>
									<small><div class="col-md-2">
										<div class="row">
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_from4"></input>
											</div>
									
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name = "inclusive_date_to4"></input>
											</div>
										</div>

									</div>
									</small>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="" name = "number_of_hours4"></input>
									</div>
									<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name = "conducted4"></input>
									</div>
								</div>

							</div>				
					</div>

						<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								VIII. OTHER INFORMATION
							</div>
							
						</div>
						<div class="portlet-body">
						
							
								<div class="row">
									
									<div class="col-md-4">
												SPECIAL SKILLS/ HOBBIES
									</div>
									<div class="col-md-4">
												NON-ACADEMIC DISTINCTIONS/ RECOGNATION (Write in full)
									</div>
									<div class="col-md-4">
												MEMBERSHIP IN ASSOCIATION/ORGANIZATION (Write in full)
									</div>
								</div>
									<hr>
								<div class="row">
									
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "special_skills1"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "non_academic1"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "membership1"></input>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "special_skills2"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "non_academic2"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "membership2"></input>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "special_skills3"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "non_academic3"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "membership3"></input>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "special_skills4"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "non_academic4"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "membership4"></input>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "special_skills5"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "non_academic5"></input>
									</div>
									<div class="col-md-4">
												<input type="text" class="form-control" placeholder="" name = "membership5"></input>
									</div>
								</div>
						
						
							
							</div>

						
					</div>
					
			</form>

			</div>



				
				</div>
			</div>
			<!-- END PAGE CONTENT-->


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
<script type="text/javascript">
	window.print();
</script>
</body>
<!-- END BODY -->
</html>