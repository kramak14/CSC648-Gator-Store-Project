

<!-- **** documentation ****

created a controller function called treeList within the categoriescontroller

created a vew called tree_list.ctp to generate all the categories


take a look at this scaffolding function

http://www.pronique.com/blog/how-to-create-your-own-scaffolding-plugin-for-cakephp2
-->

<?php echo $findcat = $this->Tree->generate($categories); ?>

<?php echo $this->Form->input('category', array()); ?>





