<nav class="navbar navbar-default" style = "background:#3b5998 ">
<div id = "logo" data-position="fixed"><a href = "#" style="padding: 0 0 0 30px;">facebook</a></div>
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand icon-brand fa fa-facebook-square" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <div class="search" style="margin: 10px 0 0 0;">
                <input type="text" class="form-control" placeholder="Search peoples, places and more" style="width:300px;">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </form>
         <ul class="nav navbar-nav">
                              <li><?= $this->Html->link(__('<i class="glyphicon glyphicon-home" style="margin: 10px;">Home</i>'), ['controller' => 'Users', 'action' => 'dashboard'], ['escape' => false]) ?></li>
                              <li><?= $this->Html->link(__('<i class="glyphicon glyphicon-plus" style="margin: 10px;">Posts</i>'), ['controller' => 'Posts', 'action' => 'add'], ['escape' => false]) ?></li>
                              
                            </ul>
                 
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        
        <div class="col-sm-12">
            <div class="thumbnail thumbnail-grand-profile">
              <img data-src="custom.holder/150x100?theme=custom&amp;auto=yes" style="width:100%;height:300px;background: #675E5E;">
               <input type ="button" value= "Add Cover Photo" style ="width:145px; float:right; margin:-54px 34px 0px 0px"/>
              <!--  <img data-src ="https://arlynnpresser.files.wordpress.com/2012/02/no-profile-picture1.jpg" style="width:20 px; height:230px; margin:-9px 0 0 0;"> -->
              
              <div class="caption caption-grand-profile">
                <h3 class="title-grand-profile"><?= ($user['uname']) ?></h3>
              </div>
              <ul class="nav nav-pills nav-grand-profile">
                  <li role="presentation" class="active"><a href="#">About</a></li>
                  <!-- <li role="presentation"><a href="#">Information</a></li> -->
                  <li role="presentation"><a href="#">Friends</a></li>
                  <li role="presentation"><a href="#">Photos</a></li>
              </ul>
            </div>    
        </div>
        
        <aside class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">About</div>
                <div class="panel-body">
                Panel content
                </div>
            </div>
        </aside>

        <aside class="col-sm-9">
  <div class="well">
    <?php  foreach($yourPosts as $post)
     { ?>
        <div class="panel";">
          <div class="panel-heading" style="padding:14px;">      
              <p><?= $post['postname'] ?> </p>
              <p><?= $post['description']; ?> </p>
              <h6 class="time-post"><?= $this->Time->timeAgoInWords($post->created)?></h6> 
          </div>
          </div>
    <?php } ?>
        </div>
  </div> 
  </aside>
    </section>
      <!--#timeline-->
    </div><!--#container-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>

  
