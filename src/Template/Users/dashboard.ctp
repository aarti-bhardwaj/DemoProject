        
			<div class="box">
				<div class="row row-offcanvas row-offcanvas-left">
				  
					<!-- main right col -->
					<div class="column col-sm-0 col-xs-0" id="main">
					
						<!-- top nav -->
						<div class="navbar navbar-blue navbar-static" style="width:100% !important">  
							
							<nav class="collapse navbar-collapse" role="navigation">
							<form class="navbar-form navbar-left">
								<div class="input-group input-group-sm" style="max-width:360px;">
								  <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
								  <div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								  </div>
								</div>
							</form>
							<ul class="nav navbar-nav">
							  <li><?= $this->Html->link(__('<i class="glyphicon glyphicon-plus">Posts</i>'), ['controller' => 'Posts', 'action' => 'add'], ['escape' => false]) ?></li>
							  <li><?= $this->Html->link(__('<i class="glyphicon glyphicon-user">Profile</i>'), ['controller' => 'Users', 'action' => 'profile'], ['escape' => false]) ?></li>
							</ul>
							
							</nav>
						</div>
						<!-- /top nav -->
					  
						<div class="padding">
							<div class="full col-sm-0">
							  
								<!-- content -->                      
								<div class="row">
								  
								 <!-- main col left --> 
								 <div class="col-xs-5">

									  
								   
									  <div class="well"> 
										   <form class="form-horizontal" role="form">
											<h4>What's New</h4>
											 <div class="form-group" style="padding:14px;">
											  <textarea class="form-control" placeholder="Update your status"></textarea>
											</div>
											<button class="btn btn-primary pull-right" type="button">Post</button>
											<ul class="list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
										  </form>
									  </div>
								   
									  <div class="panel panel-default">
										 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>More Templates</h4></div>
										  <div class="panel-body">
											<img src="assets/img/150x150.gif" class="img-circle pull-right"> <a href="#">Free @Bootply</a>
											<div class="clearfix"></div>
											There s
											<hr>
											<ul class="list-unstyled"><li><a href="http://usebootstrap.com/theme/facebook">Dashboard</a></li><li><a href="http://usebootstrap.com/theme/facebook">Darkside</a></li><li><a href="http://usebootstrap.com/theme/facebook">Greenfield</a></li></ul>
										  </div>
									  </div>
								   
									  <div class="panel panel-default">
										<div class="panel-heading"><h4>What Is Bootstrap?</h4></div>
										<div class="panel-body">
											Bootstrap is                           </div>
									  </div>

										
								   
								  </div>
								  
								  <!-- main col right -->
								  <div class="col-sm-7">
									   
										<div class="well" style="display:none;"> 
										   <form class="form">
											<h4>Sign-up</h4>
											<div class="input-group text-center">
											<input class="form-control input-lg" placeholder="Enter your email address" type="text">
											  <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
											</div>
										  </form>
										</div>
							  <?php  foreach($userposts as $post) { ?>
									   <div class="panel panel-default">
										 <div class="panel-heading"><p><?= $post['postname'] ?></p></div>
										  <div class="panel-body">
											<!--<p><img src="assets/img/150x150.gif" class="img-circle pull-right"> <a href="#"></a></p>
											<div class="clearfix"></div>-->
											<p><?= $post['description']; ?></p>
										  </div>
									   </div>
									<?php } ?>
									 </div> -->
									
								  </div>
							   </div><!--/row-->
							  
							</div><!-- /col-9 -->
						</div><!-- /padding -->
					</div>
					<!-- /main -->
				  
				</div>
			</div>
		</div>


		<!--post modal-->
		<!--  -->
		
        <?= $this->html->script('jquery'); ?>
        <?= $this->html->script('bootstrapDB'); ?>
        
        <script type="text/javascript">
        $(document).ready(function() {
			$('[data-toggle=offcanvas]').click(function() {
				$(this).toggleClass('visible-xs text-center');
				$(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
				$('.row-offcanvas').toggleClass('active');
				$('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
				$('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
				$('#btnShow').toggle();
			});
        });
        </script>