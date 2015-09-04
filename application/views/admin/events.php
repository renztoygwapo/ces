<?php $this->load->view('admin/components/frontpage_head'); ?>
<div class="container">

	<div class="col-md-12 col-sm-12">
            <h1>Latest Event Post</h1>
            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-9 col-sm-9 blog-item">
                  <div class="blog-item-img">
                    <!-- BEGIN CAROUSEL --> 
                    <div class="front-carousel">
                      <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                          <div class="item active">
                           <img class="img-responsive" alt="" src="/uploads/<?php echo $latest->event_picture; ?>">
                          </div>
                        </div>
                    
                      </div>                
                    </div>
                    <!-- END CAROUSEL -->             
                  </div>
                
                  
                  <h2><?php echo $latest->event_title; ?></h2>
                  <p><?php echo $latest->event_description; ?></p>
                  <ul class="blog-info">
                    <li><i class="fa fa-user"></i> By admin</li>
                    <li><i class="fa fa-calendar"></i> <?php $date = $latest->event_start; echo $date; ?></li>
                  </ul>
                    
        

                                    
                </div>
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->            
                <div class="col-md-3 col-sm-3 blog-sidebar">
             
                  <!-- BEGIN RECENT NEWS -->                            
                  <h2>Upcoming Events</h2>     
                  <div class="recent-news margin-bottom-10">
                        <?php if(count($rows)): foreach($rows as $row): ?>
                    <div class="row margin-bottom-10">
                      <div class="col-md-3">
                        <img class="img-responsive" alt="" src="/uploads/<?php echo $row->event_picture; ?>">                    
                      </div>
                      <div class="col-md-9 recent-news-inner">
                        <h3><?php echo $row->event_title; ?></h3>
                        <p><?php echo $row->event_description; ?></p>
                      </div>                        
                    </div>
                            <?php endforeach; ?>
                      <?php endif; ?> 
               
                  </div>
                  <!-- END RECENT NEWS -->                            

            
                
             
                </div>
                <!-- END RIGHT SIDEBAR -->            
              </div>
            </div>
          </div>  
</div> 

<?php $this->load->view('admin/components/frontpage_tail'); ?>