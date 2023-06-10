<?php
if (!empty($aTestimonial) && is_array($aTestimonial)) { ?>
    <section class="yorumlar-alani-sayfa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                        <div class="icon"><i class="flaticon-review"></i></div>
                        <h2 class="h2-baslik-hizmetler-yorum"> What Are Our Customers Saying ? </h2>
                    </div>
                    <p class="h2-baslik-hizmetler-yorum__yorum">
                        Every customer is valuable to us. Here are the reviews of some of our customers who chose us. </p>
                    <div class="bosluk3a"></div>
                </div>
                <div class="col-12">
                    <div class="carousel-classes">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($aTestimonial as $row) { ?>
                                <div class="swiper-slide">
                                    <div class="class-box">
                                        <div class="testimonial-card">
                                            <div class="testimon-text">
                                                <?php echo $row->message; ?>
                                                <i class="fas fa-quote-right quote"></i>
                                            </div>
                                            <div class="testimonialimg">
                                                <div class="testimonimg">
                                                    <?php show_image($row->image, ['width' => '120'], 'testimonial'); ?>
                                                </div>
                                                <h3 class='person'><?php echo $row->name; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
} ?>