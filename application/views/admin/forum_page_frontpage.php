		<div class="container">
				<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Topic Title <small>topics</small>
			</h3>

			<!-- END PAGE HEADER-->
			
			     <?php foreach ($topic as $t):?>
      <div class="row">
        <div class="col-md-12 blog-page">
          <div class="row">
            <div class="col-md-12 article-block">
            
              <div class="blog-tag-data">
                <img src="<?php echo '../../../../topics/'.$t->topic_picture; ?>" class="img-responsive" alt="" style="height: 350px;">
                <div class="row">
                  <div class="col-md-6 blog-tag-data-inner">
                    <ul class="list-inline">
                      <li>
                        <i class="fa fa-calendar"></i>
                    
                        <?php echo 'Date Post:'.$t->date_post; ?>
                      </li>
                      <li>
                        <i class="fa fa-comments"></i>
                      
                        <?php echo 'Post by:'.$t->firstname.' '.$t->firstname; ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--end news-tag-data-->
              <div>
                
                <blockquote class="hero">
                  <p>
                    <?php echo $t->title; ?></a>
                  </p>
                  <small> <?php echo $t->description; ?></a></cite></small>
                </blockquote>
                
              </div>
              <hr>
              <?php endforeach; 
             if(($post_tp ) == null) { ?>
              <blockquote class="hero">
                  <p>
                    No user Comment.
                  </p>
                  
                </blockquote>
              
             <?php } else {?>

              <h3>Comments</h3>
              <?php foreach ($post_tp as $tp): ?>
              <div class="media">
                
                <a href="#" class="pull-left">
                <img alt="" src="<?php echo '../../'.$tp->propic; ?>" class="media-object" style="height: 72px;">
                </a>
                <div class="media-body">
                  <h2 class="media-heading"><?php echo $tp->name; ?> </h2> <small>Date post: <?php echo $tp->date_post; ?> </small>
                  
                  
                  <p>
                    <?php echo $tp->message; ?> 
                  </p>
                </div>
              </div>
              <!--end media-->
              <hr>
              <?php endforeach;?>
              <?php } ?>  



              <div class="post-comment">
                <h3>Leave a Comment</h3>


                <form action="<?php echo site_url('forum/insert_comment'); ?>" method="post">
                <!-- <form role="form" action="#"> -->
                  <div class="form-group">
                    <label class="control-label">Message <span class="required">
                    * </span>
                    </label>
                    <textarea class="col-md-10 form-control" rows="8" name = "message"></textarea>
                   <!--  <input type = "hidden" name = "name_post" value = "<?php// echo $admin->firstname.' '.$admin->lastname;  ?>"></input>
                    <input type = "hidden" name = "photo" value = "<?php// echo $admin->photo;  ?>"></input> -->
                    <input type = "hidden" name = "name_post" value = "Guest"></input>
                    <input type = "hidden" name = "photo" value = "../../images/upload/227d6bfafb1ebf0ff3703db3ab13091c.PNG"></input>
                    <input type = "hidden" name = "date_post" value = "<?php echo date("Y/m/d") ?>"></input>
                    <input type = "hidden" name = "topic_id" value = "<?php echo $this->uri->segment(4) ?>"></input>
                    <input type = "hidden" name = "category" value = "<?php echo $this->uri->segment(3) ?>"></input>
                  </div>
                  <button class="margin-top-20 btn blue" type="submit">Post a Comment</button>

                </form>
              </div>
            </div>
            <!--end col-md-9-->
            
        </div>
        <hr>
     



			<!-- header unta neh do -->
			


			<hr>

</div>
</div>

