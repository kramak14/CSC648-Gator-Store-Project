<?php echo $this->Html->script(array('addtocart.js'), array('inline' => false)); ?>

<style>
.row > .col > div > a > img{
 
  width:100% !important;
  padding:10px;
}

</style>
<div class="row">
    <?php
    $i = 0;
    foreach ($products as $product):
        $i++;
    if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
    ?>

    <div class="col col-sm-3">
        <div style="border: 3px groove #DFDBDC;">
           <?php echo $this->Html->image('/images/small/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'],'class' => 'image')); ?>
        <br />
        </div>
        <?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug'])); ?>
        <br />
        $<?php echo $product['Product']['price']; ?>
        <br />
        <?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'add'))); ?>
        <?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>
        <!--<?php echo $this->Form->button('<i class="fa fa-money"></i> Buy', array('class' => 'btn btn-success addtocart', 'id' => 'addtocart', 'id' => $product['Product']['id'])); ?>-->
        <?php echo $this->Form->button('<i class="fa fa-usd"></i> Buy', array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
        <br />
        <br />
    </div>
    <?php
    if (($i % 4) == 0) { echo "\n</div>\n\n";}
    endforeach;
    ?>


    <br />
    <br />

</div>
