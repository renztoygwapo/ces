<?php $this->load->view('admin/components/page_head'); ?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				
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
					<span class="title">Request</span>
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
				<li>
					<a href="<?php echo site_url('admin/reports/')?>" >
					<i class="icon-bar-chart"></i>
					<span class="title">Reports</span>
					<span class="selected"></span>
				
					</a>
				</li>
				<li class="start active">
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
	<!-- END SIDEBAR -->





<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
				<!-- BEGIN PAGE HEADER-->
			<div class="row">	
			<h3 class="page-title">
			Forums Category<small></small>
			</h3>
		</div>
		<div class="row">
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Forums</a>
					</li>
				</ul>
		
			</div>
		</div>
			<!-- END PAGE HEADER-->
		
		<div class="row">

		<div class="col-md-12 blog-page">
					<div class="row">
						<div class="col-md-12 col-sm-8 article-block">
						
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/filipino.png') ?>" alt="" class="img-responsive">
								
								</div>
								<div class="col-md-8 blog-article">
									<h1>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/Filipino')?>">
									Filipino </a>
									</h1>
									<p>
										MITHIIN: Nagagamit ang Filipino sa mabisang pagtanggap ng mga impormasyon sa pakikinig, pagbasa at panonood, naipamamalas ang kahusayan sa pagpapahayag ng sarili s apagsasalita at pagsulat upang makaangkop sa pang-araw-araw na sitwasyon ng pamumuhay at mabilis na pagbabago ng nagaganap sa daigdig.
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/Filipino')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/english.png') ?>" alt="" class="img-responsive">
								
									
								</div>
								<div class="col-md-8 blog-article">
									<h1>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/English')?>">
									English</a>
									</h1>
									<p>
										 GOAL: Access varied information and creatively use them in spoken and written forms; communicate fluently and accurately orally and in writing, for a variety of purposes and different social and academic contexts at their level while  Download
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/English')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/math.png') ?>" alt="" class="img-responsive">
									
									
								</div>
								<div class="col-md-8 blog-article">
									<h1>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/Mathematics')?>">
									Mathematics</a>
									</h1>
									<p>
										 GOAL: Demonstrate understanding and skills in computing with considerable speed and accuracy, estimating, communicating, thinking analytically and critically, and in solving problems in daily life using appropriate technology.
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/Mathematics')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/science.png') ?>" alt="" class="img-responsive">
								
									
								</div>
								<div class="col-md-8 blog-article">
									<h1>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/Science/and/Health')?>">
									Science & Health </a>
									</h1>
									<p>
										 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/Science/and/Health')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/hks.png') ?>" alt="" class="img-responsive">
									
									
								</div>
								<div class="col-md-8 blog-article">
									<h3>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/Heograpiya/Kasaysayan/at/Sibika')?>".>
									Heograpiya Kasaysayan at Sibika (HKS)</a>
									</h3>
									<p>
										MITHIIN: Nagpapakita ng pagmamahal sa Diyos at sa kapwa; may pagmamalaki sa mga pambansang pagkakakilanlan; nagtatamasa ng mga karapatan at gumaganap ng mga tungkulin bilang Pilipino; may positibong saloobin tungo sa paggawa; may kakayahan sa pangangalaga sa kapaligiran; at may kasanayang makatugon sa mga hamon ng pagbabago sa daigdig.
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/Heograpiya/Kasaysayan/at/Sibika')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/epp.png') ?>" alt="" class="img-responsive">
									
									
								</div>
								<div class="col-md-8 blog-article">
									<h3>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/Edukasyong/Pantahanan/at/Pangkabuhayan')?>">
									Edukasyong Pantahanan at Pangkabuhayan (EPP)</a>
									</h3>
									<p>
									MITHIIN: Pagkatapos ng ikaanim na baitang inaasahang makakamit ng bawat batang magaaral sa Edukasyong Pantahanan at Pangkabuhayan (EPP) angmgakaalaman, kasanayan, at wastongsaloobinsakamalayanngindibiduwalnakakayanan, pagpahalagangsarilingkultura, positibongpananawsalikasnayaman, makaagham at makabagongteknolohiya, at praktikalnapag-gamitngsiningparasapagtugonsapangangailangangpansarili, pang-pamilya at pam-pamayananbilangisangproduktibong entrepreneur namamamayantungosamaunlad at kasiyasiyangpamumuhay.
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/Edukasyong/Pantahanan/at/Pangkabuhayan')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/msep.png') ?>" alt="" class="img-responsive">
								
									
								</div>
								<div class="col-md-8 blog-article">
									<h3>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/MSEP')?>">
									Musika, Sining at Edukasyon sa Pagpapalakas ng Katawan (MSEP)</a>
									</h3>
									<p>
									MITHIIN: Nalilinang ang kamalayan, kaalaman at mapanuring kaisipan tungkol sa mga elementong musika na magagamit upang maipahayag ang damdamin at maipamalas ang pagkamalikhain sa mga gawaing musikal; naiaangkop ang mga kaalaman at kasanayan sa pang-araw-araw na pamumuhay tungo sa pagpapaunlad ng sarili at pamayanan, upang makaagapay sa kamalayang global.
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/MSEP')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/char_educ.png') ?>" alt="" class="img-responsive">
								
									
								</div>
								<div class="col-md-8 blog-article">
									<h3>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/Character/Education')?>">
									Character Education</a>
									</h3>
									<p>
									MITHIIN: PagkataposngIkaanimnaBaitang, inaasahangmalilinangsamga mag-aaralangpagigingMaka-Diyos, Makatao, Makabansa at Makakalikasantungosapagpapahalagasadangalngtao

									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/Character/Education')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-4 blog-img blog-tag-data">
									<img src="<?php echo site_url('/assets/forum/category/concern_queries.png') ?>" alt="" class="img-responsive">
								
									
								</div>
								<div class="col-md-8 blog-article">
									<h3>
									<a href="<?php echo site_url('admin/forum_db/forum_topic'.'/Concern/And/Queries')?>">
									Concern & Queries</a>
									</h3>
									<p>
									You may wish to address your concern or query to a member of staff or the person in charge of the service you are attending. 
									Any member of staff will assist you with queries or problems and if they can’t resolve the problem they will find someone who can. 
									</p>
									<a class="btn blue" href="<?php echo site_url('admin/forum_db/forum_topic'.'/Concern/And/Queries')?>">
									View Topics <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
		</div>

			<!-- header unta neh do -->
					<hr>








	</div>
<?php $this->load->view('admin/components/page_tail'); ?>