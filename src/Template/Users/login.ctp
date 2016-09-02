<div class='users form' style = 'float:center;'>
	<h1>Login</h1>
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= _("Please enter email and password") ?></legend>
		<?= $this->Form->input('email') ?>
		<?= $this->Form->input('password') ?>
	</fieldset>
	<?= $this->Form->button(_('Login')) ?>
	<?= $this->Form->end() ?>
</div>