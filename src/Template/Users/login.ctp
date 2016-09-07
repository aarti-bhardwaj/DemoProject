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
      </fieldset><br>

      <?= $this->Form->button(_('Login'), array('style' => "float: inherit;
width: 208px; margin-top:21px;")) ?>
       <!-- <div style="border: 1px solid ! important; width: 208px; height: 53px; display: -moz-inline-box; background: blue none repeat scroll 0% 0%; border-radius: 3px; float: inherit; text-align: center; text-decoration: none; font-size: 21px; padding: 8px 0px 0px;" class="button">
          <a href="/DemoProject/users/  add">SignUp</a>      </div>
           <?= $this->Html->link( ['action' => '  add']) ?> 
      </div>  -->
      <input type="button" style="float: inherit; width: 208px; margin-top: 21px; height: 52px; background: #5870A8 none repeat scroll 0% 0%;" name="signup" class="button"><a href="/DemoProject/users/add" style="margin: 0px 0px 0px -138px; font-size: 18px; color: white;">Sign Up</a></input>
  </div>
</div>