<?php $this->Html->addCrumb('Sell'); ?>



<div class="row">
    <div class="col-md-4">
        <h1><div style= margin:auto>Sell an Item</div></h1>
        <br />
        <?php echo $this->Form->create('Product', ['url' => ['action' => 'sell']]); ?>
        <?php echo $this->Form->input('name', ['class' => 'form-control', 'autofocus' => 'autofocus']); ?>
        <br />
        <?php echo $this->Form->input('price', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('Category', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('image', ['type' => 'file']); ?>
        <!--<?php echo $this->Form->button('Browse', ['class' => 'btn btn-default', 'type' => 'button']); ?>-->
        <br /><br />
        <?php echo $this->Form->button('Post Item', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
        <br />

    </div>
</div>