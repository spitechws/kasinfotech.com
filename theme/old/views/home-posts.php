<?php
if (!empty($aPost) && is_array($aPost)) {
?>
    <section class="yorumlar-alani-sayfa">
        <div class="container">
            <div class="row">
                <div class="col-12 wowfade">
                    <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                        <div class="icon wow fadeInUp" data-wow-delay="0.3s"><i class="flaticon-recommended"></i></div>
                        <h2 class="h2-baslik-hizmetler-yorum wow fadeInUp" data-wow-delay="0.4s"> Resent New & Articles </h2>
                    </div>
                    <p class="h2-baslik-hizmetler-yorum__yorum wow fadeInUp">
                        Be aware of developments in the digital world. </p>
                    <div class="bosluksv5"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="carousel-classes">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($aPost as $row) { 
                                $url=base_url().'blog/';
                                ?>
                                <div class="swiper-slide wow fadeInLeft" data-tilt="">
                                    <div class="post-kutu" style="cursor:pointer;">
                                        <?php
                                        $attribute = [
                                            "width" => "396",
                                            "height" => "223",
                                            "class" => "attachment-custom-size size-custom-size wp-post-image",
                                            "decoding" => "async",
                                            "loading" => "lazy"
                                        ];
                                        show_image($row->featured_image, $attribute, 'post');
                                        ?>
                                       
                                        <h3 class="baslik-3 h-yazi-margin-kucuk"><?php echo get_substring($row->title,30)?></h3>
                                        <p class="post-kutu--yazi">
                                        <?php echo get_substring($row->short_description,100)?>

                                        <div class="h-yazi-ortalama h-yazi-margin-4">
                                            <a href="<?php echo  $url?><?php echo $row->id?>" class="custom-button">More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
<?php
}
?>