<?php $this->load->view('admin/components/frontpage_head'); ?>


    <div class="main">
      <div class="container">
       
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- Notifications-->
          <?php if($this->session->flashdata('result') != false){ ?>
          <div id="prefix_419624997860" class="Metronic-alerts alert alert-info fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><?php  echo $this->session->flashdata('result'); ?>
          </div>
          <?php } ?>

          <div class="col-md-10 col-sm-10">
            <h1>Create an account</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" action="<?php echo site_url('register/insert'); ?>" method="post">
                    <fieldset>
                      <legend>Your Basic Personal Details</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">First Name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name="firstname" class="form-control" id="firstname " required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Last Name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name="lastname" class="form-control" id="lastname" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label ">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                      </div>

                      <!-- additional fields -->

                      <div class="form-group">
                        <label for="user_type" class="col-lg-4 control-label">I am a/an <span class="require">*</span></label>
                        <div class="col-lg-8">
                       
                      <select class="form-control" name ="role" required>
                        <option>-----   Select Type of User  -----</option>
                        <option>Teacher</option>
                        <option>Alumni</option>
                      </select>
                    
                        </div>


                      </div>

                      <!--  end additional fields -->
                    </fieldset>
                    <fieldset>
                      <legend>Your Account:</legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Username <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" name = "username" class="form-control" id="username" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" name ="password" class="form-control" id="password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="confirm-password" required>
                        </div>
                      </div>
                    </fieldset>
                 
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">Create an account</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2><em>Important</em> Information</h2>
                    <p>Only teacher and alumni student can register.</p>

                    <p>Regular student  - You may ask to your teacher for your account</p>

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

    <?php //knowing how to git ?>


    <?php $this->load->view('admin/components/frontpage_tail'); ?>