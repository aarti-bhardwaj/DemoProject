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
        <?= $this->Form->create() ?>
        <fieldset>
            <?php
                echo $this->Form->label('User.name', 'Username');
                echo $this->Form->input('uname', ['label' => false]);
                echo $this->Form->label('Email Id', 'Email ID');
                echo $this->Form->input('emailid', ['label' => false]);
                echo $this->Form->label('Password', 'Password');
                echo $this->Form->input('password', ['label' => false]);
                echo $this->Form->label('Confirm Password', 'Confirm Password');
                echo $this->Form->input('confirm-password', ['label' => false, 'type' => 'password']);

            ?>
        </fieldset><br>
    <?= $this->Form->button(__('Sign Up') ) ?>
    <?= $this->Form->end() ?>
    </div>
    <!--loginform-->
  </div>
  <!--loginboxinner-->
</div>
<!--loginbox-->
</div>




