<nav class="navbar navbar-default">
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
              <div class="search">
                <input type="text" class="form-control" placeholder="Search peoples, places and more">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#">Home</a></li> -->
            <li><?= $this->Html->link(__('Home'), ['controller' => 'Users', 'action' => 'dashboard']) ?> </li>
            <li><?= $this->Html->link(__('Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
            <!-- <li><a href="#" class="fa fa-user" alt="resquest"></a></li>
            <li><a href="#" class="fa fa-comments" alt="inbox"></a></li>
            <li><a href="#" class="fa fa-bell" alt="notifications"></a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Groups</a></li>
                <li><a href="#">Pages</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Configuration</a></li>
                <li><a href="#">Logout</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Help</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        
        <div class="col-sm-12">
            <div class="thumbnail thumbnail-grand-profile">
              <img data-src="custom.holder/150x100?theme=custom&amp;auto=yes" style="width:100%;height:300px;background: #675E5E;">
               <input type ="button" value= "Add Cover Page" style ="width:145px; float:right; margin:-54px 34px 0px 0px"/>
              
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
    <?php    foreach($yourPosts as $post)
        {
        ?>
        <!-- timeline -->
        <section class="timeline col-sm-9">
        <!--post Timeline-->
        <div class="thumbnail thumbnail-post">
            <!--caption-->
            <div class="caption">
                <div class="media">
                  <div class="media-left">
                    <a href="#" class="image-post">
                     <img data-src="holder.js/50x50?theme=social">
                    </a>
                  </div>
                  <div class="media-body">
                    <a class="media-heading title-post" href="#"><?= $post['postname'] ?></a>
                    <p><?= $post['description']?></p>
                    <h5 class="time-post"><?= $this->Time->timeAgoInWords($post->created).' ago'?></h5>
                  </div>
                </div>
              <p></p>
            </div><!--#caption-->
          <?php  }  ?>
            <div class="links-post">
                <span class="fa fa-thumbs-o-up link-post"></span><a href="#" class="link-post" role="button">Like</a> 
                <span class="fa fa-comment link-post"></span><a href="#" class="link-post" role="button">Comment</a> 
                <span class="fa fa-reply link-post"></span><a href="#" class="link-post" role="button">Share</a> 
            </div>
        </div>
        <!--#post timeline-->
        <!--post Timeline-->
        <div class="thumbnail thumbnail-post">
            <!--caption-->
            <div class="caption">
                <div class="media">
                  <div class="media-left">
                    <a href="#" class="image-post">
                     <img data-src="holder.js/50x50?theme=social">
                    </a>
                  </div>
                  <div class="media-body">
                    <a class="media-heading title-post" href="#">Your Comment Title</a>
                    <h5 class="time-post"><?= h($post->created)?></h5>
                  </div>
                </div>
                <a href="#" tyle="width: 100%;height: 200px;display: block;">
                    <img data-src="holder.js/700x200?theme=social" data-holder-rendered="true"  class="image-post-full">
                </a>
            </div><!--#caption-->
            <div class="links-post">
                <span class="fa fa-thumbs-o-up link-post active"></span><a href="#" class="link-post active" role="button">Like</a> 
                <span class="fa fa-comment link-post"></span><a href="#" class="link-post" role="button">Comment</a> 
                <span class="fa fa-reply link-post"></span><a href="#" class="link-post" role="button">Share</a> 
            </div>
        </div>
        <!--#post timeline-->
      </section>
      <!--#timeline-->
    </div><!--#container-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
