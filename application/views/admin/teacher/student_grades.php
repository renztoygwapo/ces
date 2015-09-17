
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo urldecode($id); ?> <?php echo urldecode($this->uri->segment(5)); ?> <small><?php //echo  ?></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('student/')?>">Home</a> 
						<i class="fa fa-angle-right"></i>
						<a href="#"> Grades </a>
					</li>
				</ul>
			
			</div>
			<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Periodic Rating
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
							
							<div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer">
					        <div class="table-scrollable">
					        <table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
							<thead>
							<tr role="row">
								<th class="" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									Learning Areas
								: activate to sort column ascending" style="width: 400px;">
									 <center>Learning Areas</center>
								</th>
								<th class=" " tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
									 1
								: activate to sort column ascending" style="width: 100px;"><center>1</center>
									 
								</th>
								<th class=" " tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
									 2
								: activate to sort column ascending" style="width: 100px;">
									<center>2</center>
								</th>
								<th class=" " tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
									 3
								: activate to sort column ascending" style="width: 100px;">
									<center>3</center>
								</th>
								<th class=" " tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
									 4
								: activate to sort column ascending" style="width: 100px;">
									<center>4</center>
								</th>
								<th class=" " tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
									 Final Rating
								: activate to sort column ascending" style="width: 147px;">
									<center>Final Rating</center>
								</th>
								
								</tr>
							</thead>
							<tbody>
						<tr>
							<td class=" _1">
									 Filipino
								</td>
								 <td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Filipino' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Filipino' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Filipino' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Filipino' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>


									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Filipino' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>





				
							</tr>


							<tr role="row" class="odd">
								<td class=" _1">
									 English
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'English' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'English' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'English' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'English' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'English' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									 Mathematics
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Mathematics' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Mathematics' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Mathematics' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Mathematics' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Mathematics' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									 Science & Health 
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Science & Health' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Science & Health' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Science & Health' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Science & Health' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Science & Health' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									 Makabayan
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Makabayan' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Makabayan' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Makabayan' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Makabayan' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Makabayan' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									 *Heograpiya Kasaysayan/Sibika(HKS)
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'HKS' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'HKS' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'HKS' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'HKS' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'HKS' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									 *Edukasyong Pantahanan at Pangkabuhayan (EPP)
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'EPP' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'EPP' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'EPP' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'EPP' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'EPP' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
							
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									 *Musika, Sining at Edukasyon sa Pagpapalakas ng Katawan (MSEP)
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'MSEP' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'MSEP' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'MSEP' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'MSEP' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'MSEP' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									 Character Education
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'CE' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'CE' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'CE' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'CE' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'CE' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							<tr role="row" class="odd">
								<td class=" _1">
									<strong>Average</strong> 
								</td>
								<td>
						<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Average' && $period == 'First Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>

								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Average' && $period == 'Second Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?>
									 
								</td>


								<td>
									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Average' && $period == 'Third Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
								</td>




								<td>

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Average' && $period == 'Fourth Grading'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									



								</td>
								<td>
									

									<?php 
						foreach ($grades as $grds) : 

							$Subject = $grds->subject_name;
							$period = $grds->grading_period;
							$rate = $grds->grade_rating;

							if($Subject == 'Average' && $period == 'Final Rating'){
								echo  "<center>".$rate."</center>";
							}
										 ?>

					
									<?php endforeach; ?> 
									 

								</td>
								
								
							</tr>
							
							



							</tbody>
							</table>
							</div>
							</div>
					</div>
					</div>

		

				


</div>
<!-- END CONTAINER -->
<?php $this->load->view('admin/components/page_tail'); ?>