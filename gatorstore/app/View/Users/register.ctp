<h1>Register</h1>

<br />

<div class="row">
    <div class="col-sm-3">

        <?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>
        <?php echo $this->Form->input('username', ['class' => 'form-control', 'autofocus' => 'autofocus']); ?>
        <br />
        <?php echo $this->Form->input('password', ['class' => 'form-control']); ?>
        <br />
		<?php echo $this->Form->input('Email', ['class' => 'form-control']); ?>
        <?php echo $this->Form->button('Register', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
        <br />
        <br />
        <br />

    </div>
</div>
