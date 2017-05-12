			
<?php 
                            foreach($categories as $category){
                            ?>
		<p>	<?php echo $this->Html->link($category, array('controller' => 'categories','action' => 'view',$category)); ?>
			
		</p>
 
                            <?php
                            }
                        ?>


<?php echo $this->element('products'); ?>
