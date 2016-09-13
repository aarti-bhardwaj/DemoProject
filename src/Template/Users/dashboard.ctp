
  <?= $this->Html->css('facebook.css') ?>
					<div class="column" id="main">

					
						<!-- top nav -->
						<div class="navbar navbar-blue " style="width:100% ">  
							<div id="logo"> <a href="http://w3lessons.info" style="padding: 0 0 0 30px;">facebook</a> </div>
							<!-- <nav class="collapse navbar-collapse" role="navigation"> -->
							<form class="navbar-form navbar-left">
								<div class="input-group input-group-sm" style="max-width:360px; margin: 10px 0 0 0 ;">
								  <input class="form-control" placeholder="Search people and more" name="srch-term" id="srch-term" type="text" style="width:300px;" >
								  <div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								  </div>
								</div>
							</form>
							<ul class="nav navbar-nav">
							  <li><?= $this->Html->link(__('<i class="glyphicon glyphicon-plus" style="margin: 10px;">Posts</i>'), ['controller' => 'Posts', 'action' => 'add'], ['escape' => false]) ?></li>
							  <li><?= $this->Html->link(__('<i class="glyphicon glyphicon-user" style="margin: 10px;">Profile</i>'), ['controller' => 'Users', 'action' => 'profile'], ['escape' => false]) ?></li>
							</ul>
							
							<!-- </nav> -->
						</div>
						<!-- /top nav -->
					  
						<div class="padding">
							<div class="full col-sm-0">
							  
								<!-- content -->                      
								<!-- <div class="row"> -->
								  
								 <!-- main col left --> 
								 <div class="col-xs-3">

									  
								   
									  <div class="panel">
										<div class="panel-thumbnail"><img src="/DemoProject/webroot/img/bg_5.jpg" class="img-responsive"></div>
										<div class="panel-body">
										  <h3 class="title-grand-profile"><?= ($user['uname']) ?></h3>
										</div>
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
								  <div class="col-sm-6">
									   
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
										<!-- <div class="well" style="display:none;"> 
										   <form class="form">
											<h4>Sign-up</h4>
											<div class="input-group text-center">
											<input class="form-control input-lg" placeholder="Enter your email address" type="text">
											  <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
											</div>
										  </form>
										</div> -->
										<div class="well"> 
									   <h4>Posts</h4>

							  <?php  foreach($userposts as $post) { ?>
									   <div class="panel panel-default";">
										 <div class="panel-heading" style="padding:14px;">
										 
										 <p><?= $post['postname'] ?></p></div>
										  <div class="panel-body" style="padding:14px;">
											<p><?= $post['description']; ?></p>
										  </div>
									   </div>
									<?php } ?>
									</div>
									 </div> 
									<div class="col-xs-3">
											
									  <div class="panel panel-default">
									<div class="panel-heading">
									<div class="panel-body">
									</div>
									<div class="panel panel-default">
									<div class="panel-heading">
									<div class="panel-body"> Bootstrap is </div>
									</div>
								  </div>
							   <!-- /div>< -->!--/row-->
							  	
							   </div>
							</div><!-- /col-9 -->

						</div><!-- /padding -->
					</div>
					<!-- /main -->
				  
				<!-- </div> -->
			<!-- </div> -->
		


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