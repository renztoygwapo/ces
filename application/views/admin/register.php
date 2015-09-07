<?php $this->load->view('admin/components/frontpage_head'); ?>


    <div class="main">
      <div class="container">
        <div class="row">

     <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
      <div class="fullwidthbanner-container revolution-slider">
        <div class="fullwidthabnner">
          <ul id="revolutionul">
            <!-- THE NEW SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg')?>">
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src="../../assets/frontend/pages/img/revolutionslider/bg9.jpg" alt="">
              
              <div class="caption lft slide_title_white slide_item_left"
                data-x="30"
                data-y="90"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                Explore the Easy Way<br><span class="slide_title_white_bold">of new Technology</span>
              </div>
              <div class="caption lft slide_subtitle_white slide_item_left"
                data-x="87"
                data-y="245"
                data-speed="400"
                data-start="2000"
                data-easing="easeOutExpo">
                Carmen Web Portal
              </div>
              <a class="caption lft btn dark slide_btn slide_item_left" href="<?php echo site_url('/register')?>"
                data-x="187"
                data-y="315"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Register Now!
              </a>                        
              <div class="caption lfb"
                data-x="640" 
                data-y="0" 
                data-speed="700" 
                data-start="1000" 
                data-easing="easeOutExpo">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/ilove.png')?>" alt="Image 1">
              </div>
            </li>    

            <!-- THE FIRST SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg')?>">
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/bg1.jpg')?>" alt="">
                            
              <div class="caption lft slide_title slide_item_left"
                data-x="30"
                data-y="105"
                data-speed="400"
                data-start="1500"
                data-easing="easeOutExpo">
                Easy way to Inquire<br> Express your thoughts!
              </div>
              <div class="caption lft slide_desc slide_item_left"
                data-x="30"
                data-y="220"
                data-speed="400"
                data-start="2500"
                data-easing="easeOutExpo">
                Made for Student<br> Easy way for alumni!
              </div>
              <a class="caption lft btn dark slide_btn slide_item_left" href="<?php echo site_url('/register')?>"
                data-x="187"
                data-y="315"
                data-speed="400"
                data-start="3000"
                data-easing="easeOutExpo">
                Register Now!
              </a>                         
              <div class="caption lfb"
                data-x="640" 
                data-y="55" 
                data-speed="700" 
                data-start="1000" 
                data-easing="easeOutExpo">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/man-winner.png')?>" alt="Image 1">
              </div>
            </li>

            <!-- THE SECOND SLIDE -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg')?>">                        
              <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/bg2.jpg')?>" alt="">
              <div class="caption lfl slide_title slide_item_left"
                data-x="30"
                data-y="125"
                data-speed="400"
                data-start="3500"
                data-easing="easeOutExpo">
                Powerfull &amp; Clean
              </div>
              <div class="caption lfl slide_subtitle slide_item_left"
                data-x="30"
                data-y="200"
                data-speed="400"
                data-start="4000"
                data-easing="easeOutExpo">
                Responsive Admin &amp; Website Theme
              </div>
              <div class="caption lfl slide_desc slide_item_left"
                data-x="30"
                data-y="245"
                data-speed="400"
                data-start="4500"
                data-easing="easeOutExpo">
                Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
              </div>                        
              <div class="caption lfr slide_item_right" 
                data-x="635" 
                data-y="105" 
                data-speed="1200" 
                data-start="1500" 
                data-easing="easeOutBack">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/mac.png')?>" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="580" 
                data-y="245" 
                data-speed="1200" 
                data-start="2000" 
                data-easing="easeOutBack">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/ipad.png')?>" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="735" 
                data-y="290" 
                data-speed="1200" 
                data-start="2500" 
                data-easing="easeOutBack">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/iphone.png')?>" alt="Image 1">
              </div>
              <div class="caption lfr slide_item_right" 
                data-x="835" 
                data-y="230" 
                data-speed="1200" 
                data-start="3000" 
                data-easing="easeOutBack">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/macbook.png')?>" alt="Image 1">
              </div>
              <div class="caption lft slide_item_right" 
                data-x="865" 
                data-y="45" 
                data-speed="500" 
                data-start="5000" 
                data-easing="easeOutBack">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/hint1-red.png')?>" id="rev-hint1" alt="Image 1">
              </div>                        
              <div class="caption lfb slide_item_right" 
                data-x="355" 
                data-y="355" 
                data-speed="500" 
                data-start="5500" 
                data-easing="easeOutBack">
                <img src="<?php echo site_url('/assets/frontend/pages/img/revolutionslider/hint2-red.png')?>" id="rev-hint2" alt="Image 1">
              </div>
            </li>
                        
                        <!-- THE FORTH SLIDE -->
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="../../assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="../../assets/frontend/pages/img/revolutionslider/bg4.jpg" alt="">                        
                             <div class="caption lft slide_title"
                                 data-x="30"
                                 data-y="105"
                                 data-speed="400"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 What else included ?
                            </div>
                            <div class="caption lft slide_subtitle"
                                 data-x="30"
                                 data-y="180"
                                 data-speed="400"
                                 data-start="2000"
                                 data-easing="easeOutExpo">
                                 The Most Complete Admin Theme
                            </div>
                            <div class="caption lft slide_desc"
                                 data-x="30"
                                 data-y="225"
                                 data-speed="400"
                                 data-start="2500"
                                 data-easing="easeOutExpo">
                                 Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                            </div>
                            <a class="caption lft slide_btn btn red slide_item_left" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank" 
                                 data-x="30"
                                 data-y="300"
                                 data-speed="400"
                                 data-start="3000"
                                 data-easing="easeOutExpo">
                                 Learn More!
                            </a>                        
                            <div class="caption lft start"  
                                 data-x="670" 
                                 data-y="55" 
                                 data-speed="400" 
                                 data-start="2000" 
                                 data-easing="easeOutBack"  >
                                 <img src="../../assets/frontend/pages/img/revolutionslider/iphone_left.png" alt="Image 2">
                            </div>
                            
                            <div class="caption lft start"  
                                 data-x="850" 
                                 data-y="55" 
                                 data-speed="400" 
                                 data-start="2400" 
                                 data-easing="easeOutBack"  >
                                 <img src="../../assets/frontend/pages/img/revolutionslider/iphone_right.png" alt="Image 3">
                            </div>                        
                        </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!-- END SLIDER -->

  </div>
  <hr>
       
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