<section class="projeler-sayfa-alani">
    <div class="h-yazi-ortalama h-yazi-margin-orta-4">
        <h2 class="h2-baslik-hizmetler-2"> Our Latest Projects </h2>
    </div>
    <p class="h2-baslik-hizmetler-3__paragraf">
        We always try to implement our creative ideas at the highest level. </p>
    <div class="component-systemTabs">
        <div class="tabs-container">
            <!--Projects Tab1-->
            <div id="tab-1" data-tab-title="Datax Project" class="tab-content current">
                <div class="cards">
                    <div class="tabloozellik">
                        <?php
                       // debug($aProductList);
                        if (!empty($aProductList) && is_array($aProductList)) {
                            foreach ($aProductList as $row) {
                                $url = base_url() . 'products/' . $row->slug;
                        ?>
                                <div class="tablo--1-ve-3">
                                    <div class="card wow zoomIn" onclick="window.location.href='<?php echo $url; ?>'">
                                        <?php show_image($row->image1, [], 'product') ?>
                                        <div class="cardContent">
                                            <h2><?php echo $row->name; ?></h2>
                                            <button onclick="window.location.href='<?php echo $url; ?>'">View</button>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>