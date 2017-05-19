			
<?php 
                            foreach($categories as $category){
                            ?>
		<li><?php echo $this->Html->link($category, array('controller' => 'categories','action' => 'view',$category)); ?>
		</li>
			
 
                            <?php
                            }
                        ?>


<?php echo $this->element('products'); ?>
