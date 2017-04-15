<?= $this->Html->css('carousel.css') ?>
<?= $this->Html->script('custom.js') ?>

<script>
/* Finder in  Carousel */
$(document).ready(function () {
    $(".col-xs-4").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});

</script>
<!-- Carousel (START) -->

<div class="row">
<div class="container">
    <div class="col-xs-12">
        <h2>Featured Items </h2>

        <div class="well">
            <div id="myCarousel" class="carousel slide">

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-4" id="bcarousel" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/original/physicstextbook.jpg">
                               <h3>
                                  <?php echo $this->Html->link('$ 80', array('controller' => 'products', 'action' => 'view', 'slug' => $products[2]['Product']['slug'])); ?>
                               </h3>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/original/physics-textbook.jpg">
                               <h3>
                                 <?php echo $this->Html->link('$ 90', array('controller' => 'products', 'action' => 'view', 'slug' => $products[1]['Product']['slug'])); ?>
                               </h3>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/original/text-book-image.jpg">
                               <h3>
                                 <?php echo $this->Html->link('$ 70', array('controller' => 'products', 'action' => 'view', 'slug' => $products[0]['Product']['slug'])); ?>
                               </h3>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/large/electric-charge-sunglasses-crimson-red-grey-fire-chrome-lens.jpg">
                               <h3>
                                  <?php echo $this->Html->link('$ 100', array('controller' => 'products', 'action' => 'view', 'slug' => $products[15]['Product']['slug'])); ?>
                               </h3>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/large/celtek-merit-facemask-orange-black.jpg">
                               <h3>
                                  <?php echo $this->Html->link('$ 19.95', array('controller' => 'products', 'action' => 'view', 'slug' => $products[5]['Product']['slug'])); ?>
                               </h3>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/large/dakine-scrambler-jr-toddler-mittens-walrus.jpg">
                               <h3>
                                  <?php echo $this->Html->link('$ 23', array('controller' => 'products', 'action' => 'view', 'slug' => $products[6]['Product']['slug'])); ?>
                               </h3>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/large/dc-court-vulc-skate-shoes-black-athletic-red.jpg">
                               <h3>
                                  <?php echo $this->Html->link('$ 54.95', array('controller' => 'products', 'action' => 'view', 'slug' => $products[7]['Product']['slug'])); ?>
                               </h3>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/large/dc-rogan-snowboard-boots-black-rasta.jpg">
                               <h3>
                                  <?php echo $this->Html->link('$ 118.95', array('controller' => 'products', 'action' => 'view', 'slug' => $products[11]['Product']['slug'])); ?>
                               </h3>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><img src="<?php echo $this->request->webroot; ?>images/large/dc-trust-skate-shoes-dark-shadow.jpg">
                               <h3>
                                  <?php echo $this->Html->link('$ 64.95', array('controller' => 'products', 'action' => 'view', 'slug' => $products[14]['Product']['slug'])); ?>
                               </h3>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner-->

                <!-- L/R Buttons -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                <!-- /L/R Buttons -->

            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
</div>
</div>
<!-- Carousel (END) -->


<div class="row">
    <?php
    $i = 0;
    foreach ($products as $product):
        $i++;
    if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
    ?>
    <div class="col col-sm-3">
        <?php echo $this->Html->image('/images/small/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'width' => 150, 'height' => 150, 'class' => 'image')); ?>
        <br />
        <?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug'])); ?>
        <br />
        $<?php echo $product['Product']['price']; ?>
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
