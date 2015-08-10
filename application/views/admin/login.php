<?php $this->load->view('admin/components/frontpage_head'); ?>


    <div class="main">
      <div class="container">
      
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">

          <!-- Notifications-->
          <?php if($this->session->flashdata('error') != false){ ?>
          <div id="prefix_419624997860" class="Metronic-alerts alert alert-danger fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('error'); ?>
          </div>
          <?php } ?>

            <h1>Login As Student</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                <?php
                  $attributes = array('class' => 'form-horizontal form-without-legend', 'role' => 'form');
				  echo form_open('', $attributes);
                  ?>

                    <div class="form-group">
                      <label for="username" class="col-lg-4 control-label">Username <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                     
                        <div class="login-socio">
      
                            <ul class="social-icons">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2>Login as <em>Teacher</em></h2>

                    <button type="button" class="btn btn-default">Click Here!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
    <?php $this->load->view('admin/components/frontpage_tail'); ?>