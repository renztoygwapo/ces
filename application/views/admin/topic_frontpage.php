	
	<div class="container">
		
			<!-- END PAGE HEADER-->
			<div class="row">
				<div class="col-md-8">
			 	<h3 class="page-title">
			<?php echo  $this->uri->segment(3).' '.$this->uri->segment(4).' '.$this->uri->segment(5).' '.$this->uri->segment(6); ?> <small>topics</small>
			</h3>
				</div>
				<div class="col-md-2">
				Date Posted
				</div>
				<div class="col-md-2">
				Posted By:
				</div>
			</div>

			<!-- header unta neh do -->
			<hr>

			<?php if(($topics ) == null) { ?>
						 	<blockquote class="hero">
									<p>
										No Topic to discuss.
									</p>
									
								</blockquote>
						 	
						 <?php } else { ?>


					<?php 
		foreach ($topics as $r) : ?>
			<div class="row">
				<div class="col-md-2">
					<!-- <img src="<?php// echo site_url('/assets/admin/pages/media/gallery/image5.jpg '); ?>" alt="" class="img-responsive" width="160" height="208">
		 -->	<img src="<?php echo site_url('/topics/'.$r->tpicture); ?>" alt="" class="img-responsive" width="160" height="208">
		
		 		<ul class="list-inline">
										
										<li>
											
										</li>
									</ul>
				<!-- <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">  -->
				</div>
				<div class="col-md-6">
									<h3>
									<a href="<?php echo site_url('forum/topic_page').'/'.$r->id.'/'.$r->user_id;  ?>">
						<?php echo $r->title; ?>
							</a>
									</h3>
									<p>
									<!-- MITHIIN: PagkataposngIkaanimnaBaitang, inaasahangmalilinangsamga mag-aaralangpagigingMaka-Diyos, Makatao, Makabansa at Makakalikasantungosapagpapahalagasadangalngtao -->								<?php echo $r->description; ?>
									</p>
									<a class="btn blue" href="<?php echo site_url('forum/topic_page').'/'.$r->id.'/'.$r->user_id;  ?>">
									View <i class="m-icon-swapright m-icon-white"></i>
									</a>
				</div>
				<div class="col-md-2">
					<br>
				<i class="fa fa-calendar"></i>
				<?php echo $r->post; ?>
				</div>

				<div class="col-md-2">
					<img src="<?php echo '../'.$r->user_photo; ?>"
				alt="" class="img-responsive" width="110" height="208">
				<h4><?php echo $r->firstname.' '.$r->lastname ?></h4>
				</div>
			</div>

			<hr>

		<?php endforeach; ?> 
			
			<?php } ?>	
</div>
		
		</div>

