
	<!-- BEGIN PAGE HEADER-->
	 <small><h6 class="page-title" >
			CS FORM 212(Revised 2005) </small>
			</h6>
			<?php if($this->session->flashdata('result') != false){ ?>
          <div id="prefix_419624997860" class="Metronic-alerts alert alert-info fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
          </div>
          <?php } ?>
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

			<form class="form-horizontal" action="<?php echo site_url('teacher/insert_pds'); ?>" method="post">
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
										<input type="text" class = "form-control" placeholder="SURENAME" name = "surename"></input>
										<input type="hidden" class = "form-control" name = "user_id" value="<?php echo $this->session->userdata('id'); ?>"></input>
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
							<hr>
						
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="CITIZENSHIP" name = "citizenship">	</input>			
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="HEIGHT(m)" name = "height"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="WEIGHT(KG)" name = "weight"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="BLOOD TYPE" name = "blood_type"></input>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="GSIS ID NO." name = "gsis"></input>				
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="PAGIBIG ID NO." name = "pagibig"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="PHILHEALTH NO." name = "philhealth"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="SSS NO." name = "sss"></input>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-7">
										<input type="text" class="form-control" placeholder=" RESIDENTIAL ADDRESS" name = "residential_address"></input>				
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control" placeholder="ZIP CODE" name = "zip_code"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="TELEPHONE NO." name = "tel"> </input>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="E-MAIL ADDRESS (if any)" name = "email">	</input>			
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="CELLPHONE NO. (if any)" name = "cellphone"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="AGENCY EMPLOYEE NO." name = "agency"></input>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control" placeholder="TIN" name = "tin"></input>
									</div>
								</div>

							</div>

						</div>

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

								<div class="col-md-6">
									
									<div class="row">

										<div class="col-md-12">
											<h4>NAME OF CHILD(Write full name and list all)</h4>
										
										</div>
								</div>
								<div class="row">
									<div class="col-md-7">
										<h6> FULLNAME </h6> 
											<input type="text" class="form-control" placeholder="" name = "fn1"></input>
											<input type="text" class="form-control" placeholder="" name = "fn2"></input>
											<input type="text" class="form-control" placeholder="" name = "fn3"></input>
											<input type="text" class="form-control" placeholder="" name = "fn4"></input>
											<input type="text" class="form-control" placeholder="" name = "fn5"></input>
											<input type="text" class="form-control" placeholder="" name = "fn6"></input>
											<input type="text" class="form-control" placeholder="" name = "fn7"></input>
											<input type="text" class="form-control" placeholder="" name = "fn8"></input>
											<input type="text" class="form-control" placeholder="" name = "fn9"></input>
											<input type="text" class="form-control" placeholder="" name = "fn10"></input>
									</div>
									<div class="col-md-5">
										<h6> BIRTHDAY(mm/dd/yyyy) </h6> 
											<input type="text" class="form-control" placeholder="" name = "bd1"></input>
											<input type="text" class="form-control" placeholder="" name = "bd2"></input>
											<input type="text" class="form-control" placeholder="" name = "bd3"></input>
											<input type="text" class="form-control" placeholder="" name = "bd4"></input>
											<input type="text" class="form-control" placeholder="" name = "bd5"></input>
											<input type="text" class="form-control" placeholder="" name = "bd6"></input>
											<input type="text" class="form-control" placeholder="" name = "bd7"></input>
											<input type="text" class="form-control" placeholder="" name = "bd8"></input>
											<input type="text" class="form-control" placeholder="" name = "bd9"></input>
											<input type="text" class="form-control" placeholder="" name = "bd10"></input>
											<input type="hidden" class="form-control" placeholder="" name = "user_id" value="<?php echo $this->session->userdata('id'); ?>"></input>
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
								<div class="row">
									<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name ="name_organization1"> </input>
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
					<div class="margiv-top-10">
					<input type="submit" value="Save Changes" class="btn green">
							<a href="#" class="btn default">Cancel </a>
													</div>
			</form>

			</div>

<?php $this->load->view('admin/components/page_tail'); ?>

