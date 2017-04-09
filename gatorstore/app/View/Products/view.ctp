<?php echo $this->Html->script(array('addtocart.js'), array('inline' => false)); ?>

<?php
$this->Html->addCrumb($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', 'slug' => $product['Brand']['slug']));
$this->Html->addCrumb($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', 'slug' => $product['Category']['slug']));
$this->Html->addCrumb($product['Product']['name']);
?>

<style>
.col-sm-5 > font > a{
   color:white;

}
</style>
<script>
$(document).ready(function() {

    $('#modselector').change(function(){
        $('#productprice').html($(this).find(':selected').data('price'));
        $('#modselected').val($(this).find(':selected').val());
    });

});

function popup(mylink, windowname) { 
   if (! window.focus)return true; 

   var href; 
   if (typeof(mylink) == 'string') href=mylink; 
   else href=mylink.href; window.open(href, windowname, 'width=500,height=500,scrollbars=yes'); 

   return false; 
}

</script>

<h1><?php echo $product['Product']['name']; ?></h1>

<div class="row">

    <div class="col col-sm-7">
    <?php echo $this->Html->Image('/images/large/' . $product['Product']['image'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive')); ?>
    </div>

    <div class="col col-sm-5">

        <strong><?php echo $product['Product']['name']; ?></strong>

        <br />
        <br />

        $ <span id="productprice"><?php echo $product['Product']['price']; ?></span>

        <br />
        <br />

        <?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'add'))); ?>
        <?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>

        <?php if(!empty($productmodshtml)):?>

            <div class="row">
            <div class="col-sm-5">
            <span style="font-weight:bold">Product Options:</span> <?php echo $productmodshtml;?>
            </div>
            </div>
            <br />
            <input type="hidden" id="modselected" value="" />

        <?php endif;?>

        <?php echo $this->Form->button('<i class="fa fa-cart-plus"></i> &nbsp; Add to Cart', array('class' => 'btn btn-success addtocart', 'id' => 'addtocart', 'id' => $product['Product']['id']));?>
        <?php echo $this->Form->end(); ?>

        <br />

        <?php echo $product['Product']['description']; ?>

        <br />
        <br />

        Brand: <?php echo $this->Html->link($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', 'slug' => $product['Brand']['slug'])); ?>

        <br />

        Category: <?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', 'slug' => $product['Category']['slug'])); ?>

        <br />
        <br />

        <font size= 3  style="background-color: purple; padding:10px; border-style: solid; border-width: medium; border-color: purple;  border-radius:25px;">
           <?php echo $this->Html->link('Contact Seller', array('controller'=>'pages','action'=>'contactseller'),['onclick'=>'return popup(this,"mr_popup")']); ?>           
        </font>

    </div>

</div>
