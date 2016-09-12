<!-- top nav --> 
<div class="navbar navbar-blue navbar-static" style="width:100% !important">  
      <div class="navbar-header"></div>
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
                <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                  <ul class="dropdown-menu">
                      <li><a href="">More</a></li>
                      <li><a href="">More</a></li>
                      <li><a href="">More</a></li>
                      <li><a href="">More</a></li>          
                      <li><a href="">More</a></li>
                  </ul>
              </li>              
            </ul>
        </nav>
</div>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
            <?= $this->Form->input('postname', ['type' => 'text','class' =>'form-control input-lg']); ?><br>
            <?= $this->Form->textarea('description', ['class' =>'form-control input-lg', 'placeholder' =>'What do you want to share?']); ?> <br>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>  
    <?= $this->Form->end() ?>
</div>

                                        