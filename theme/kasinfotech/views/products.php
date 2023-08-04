<?php require_once('header.php') ?>
<?php require_once('menu.php') ?>

<section style="margin-top: 20px; margin-bottom:20px;min-height:1000px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
             <table>
                <tr>
                    <th>Product Name: </th>
                    <td><?php echo $aProduct->name;?></td>
                </tr>
                <tr>
                    <th>Demo URL: </th>
                    <td><?php echo $aProduct->demo_url;?></td>
                </tr>
                <tr>
                    <th>Features/Details:</th>
                    <td><?php echo $aProduct->name;?></td>
                </tr>
             </table>   

            </div>

            <div class="col-lg-12">
                <div id="product-carousel" class="product-carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#product-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#product-carousel" data-slide-to="1"></li>
                        <li data-target="#product-carousel" data-slide-to="2"></li>
                        <li data-target="#product-carousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <?php show_image($aProduct->image1, [], 'product') ?>
                        </div>
                        <div class="carousel-item">
                            <?php show_image($aProduct->image2, [], 'product') ?>
                        </div>
                        <div class="carousel-item">
                            <?php show_image($aProduct->image3, [], 'product') ?>
                        </div>
                        <div class="carousel-item">
                            <?php show_image($aProduct->image4, [], 'product') ?>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<?php include_once('footer.php') ?>