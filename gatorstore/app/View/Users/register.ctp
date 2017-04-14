d>
</head>
<body>
<div class="row">
    <div class="col-sm-4">
		<?php echo "Please fill in the fields to register"; ?>
        <?php echo $this->Form->create('User', array('name' => 'registrationform'));?>
        <?php echo $this->Form->input('role', array('class' => 'form-control', 'value' => 'customer', 'type' => 'hidden')); ?>
        <br />
        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
		<br />
		<?php echo $this->Form->input('passwordconfirm', array('class' => 'form-control', 'label' => 'Please enter your password again', 'type' => 'password')); ?>
		<br />
        <?php echo $this->Form->input('active', array('type' => 'hidden', 'value' => '1')); ?>
        <br />
		<input type="checkbox" name="I accept the terms and conditions" required> <?php echo "I accept the "; ?> 
		<?php echo $this->Html->link('Terms and Conditions', array('controller' => 'pages', 'action' => 'terms')); ?>
		<br />
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>

    </div>
</div>
</body>

