<?php $this->load->view('admin/components/page_head_alumni'); ?>
<div class="row">

				<div class="col-md-12">
				<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Create a Request
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
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<?php $att = array('class' => 'form-horizontal'); ?>
                                    <?= form_open_multipart('alumni/insertRequest', $att) ?>
											<div class="form-body">		
											<?php if($this->session->flashdata('result') != false){ ?>
								          <div id="prefix_419624997860" class="Metronic-alerts alert alert-success fade in">
								          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
								          </div>
								          <?php } ?>

												<div class="form-group">
													<label class="col-md-3 control-label">Year Graduated</label>
													<div class="col-md-4">
														<input type="text"  class="form-control" name="year_graduated" placeholder="for example: 2000,20001,2002,2003 ... etc">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Request Title</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" name ="title" placeholder="Form 137 , Good Moral or Others" autofocus>
															<input type="hidden" class="form-control" name ="request_file" value="none">
															<input type="hidden" class="form-control" name ="msg" value="On process request...">
															<input type="hidden" class="form-control" name ="date_now" value = "<?php echo date("Y/m/d");  ?>">
															<input type="hidden" class="form-control" name ="user_id" value = "<?php echo $alumni->id; ?>">
														</div>
													</div>

												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Request Description</label>
													<div class="col-md-4">
														<textarea name="request_description"  rows="10" data-width="600" class="form-control md-input" style="width: 600px; resize: none;"></textarea>
													</div>
													

												</div>
												

											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Save</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>

								</div>
</div>
<?php $this->load->view('admin/components/page_tail'); ?>