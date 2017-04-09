<?= $this->Html->css('custom.css') ?>
<?= $this->Html->script('custom.js') ?>

<div class="row">
<div class="container">
    <div class="col-xs-12">
         <h1>Bootstrap 3 Thumbnail Slider</h1>

        <div class="well">
            <div id="myCarousel" class="carousel slide">

                <!-- Carousel items -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/dc-hall-t-shirt-royal-blue.jpg"><h3>$ 13.95</h3></a>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/dc-iikka-t-shirt-black.jpg"><h3>$ 9.95</h3></a>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/dc-shocked-t-shirt-celtic.jpg"><h3>$ 14.95</h3></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/electric-charge-sunglasses-crimson-red-grey-fire-chrome-lens.jpg"><h3>$ 100.00</h3></a>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/celtek-merit-facemask-orange-black.jpg"><h3>$ 19.95</h3></a>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/dakine-scrambler-jr-toddler-mittens-walrus.jpg"><h3>$ 23.00</h3></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/dc-court-vulc-skate-shoes-black-athletic-red.jpg"><h3>$ 54.95</h3></a>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/dc-rogan-snowboard-boots-black-rasta.jpg"><h3>$ 118.95</h3></a>
                            </div>
                            <div class="col-xs-4" style="border-style: solid; boder-width: medium; background-color: white;"><a href="#x"><img src="<?php echo $this->request->webroot; ?>images/large/dc-trust-skate-shoes-dark-shadow.jpg"><h3>$ 20.00</h3></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner-->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                <!--
                   <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                   <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                -->
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
</div>
</div>

<div class= "row">
<h1> Contact Information</h1>
<font size=3><strong>Phone : </strong> (415)-123-4567</font> <br>
<font size=3><strong>Email : </strong> exampl@mail.com</font>
</div>