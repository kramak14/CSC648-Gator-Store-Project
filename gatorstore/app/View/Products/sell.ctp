<?php $this->Html->addCrumb('Sell'); ?>

<h1><div style= margin:auto>Sell an Item</div></h1>

<div class="row">
    <div class="col-md-3">
        <br />
        <?php echo $this->Form->create('Product', ['url' => ['action' => 'sell']]); ?>
        <?php echo $this->Form->input('name', ['class' => 'form-control', 'autofocus' => 'autofocus']); ?>
        <br />
        <?php echo $this->Form->input('price', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('weight', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('category_id', ['class' => 'form-control', 'type' => 'select']); ?>
        <br />
        <?php echo $this->Form->input('brand_id', ['class' => 'form-control', 'type' => 'select']); ?>
        <br />
        <?php echo $this->Form->input('image', ['type' => 'file']); ?>
        <br /><br />
        <?php echo $this->Form->button('Post Item', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
        <br />
    </div>
</div>