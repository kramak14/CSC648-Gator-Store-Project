<?php
$this->Html->addCrumb('Categories', '/categories/');

foreach ($parents as $parent) {
    $this->Html->addCrumb($parent['Category']['name'], '/category/' . $parent['Category']['slug']);
}
?>
<?php echo $this->Tree->generate($categories, array('element' => 'categories/tree_item', 'class' => 'categorytree', 'id' => 'categorytree')); ?>
<h2><?php echo $category['Category']['name']; ?><small> Category</small></h1>

<?php if (!empty($products)): ?>

<?php echo $this->element('products'); ?>

<?php endif; ?>
