<?php 
                            foreach($categories as $category){
                            ?>
		<p>	<?php echo $this->Html->link($category, array('controller' => 'categories','action' => 'view',$category)); ?>
			
		</p>
 
                            <?php
                            }
                        ?>

<?php $this->Html->addCrumb('Products'); ?>


<br />

<?php echo $this->element('products'); ?>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />
