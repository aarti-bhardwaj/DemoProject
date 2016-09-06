<div class="login">
<!-- header starts here -->
<div id="facebook-Bar">
  <div id="facebook-Frame">
    <div id="logo"> <a href="http://w3lessons.info">facebook</a> </div>
  </div>
</div>
</div>
<div class="loginbox radius">
  <h2 style="color:#141823; text-align:center;">Welcome to Facebook</h2>
  <div class="loginboxinner radius">
    <div class="loginheader">
      <h4 class="title">Connect with friends and the world around you.</h4>
    </div>
    <div class="loginform">
    <div class='users form'>
      <?= $this->Flash->render('auth') ?>
      <?= $this->Form->create() ?>
      <fieldset style="float:left;">
        <legend><?= _("Please enter email and password") ?></legend>
        <?= $this->Form->input('emailid'); ?>
        <?= $this->Form->input('password'); ?>
      </fieldset></br></br>
      <?= $this->Form->button(_('Login'), array('style' => "float: inherit;
width: 208px;")) ?>
      <?= $this->Form->button($this->Html->link('SignUp' , ['controller'=>'Users', 'action' => 'add']), array('type' => 'button', 'style' => "float: inherit; width: 208px;")) ?>
      <?= $this->Form->end() ?>
  </div>
</div>