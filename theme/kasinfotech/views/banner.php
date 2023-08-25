<?php
if (!empty($aBanner)) {
?>
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <?php
                foreach ($aBanner as $row) {
                    $url = '';
                    if ($row->pk > 0) {
                        $belongingItem = get_row($row->type, ['id' => $row->pk]);
                        $url = ($row->type == 'product') ? 'products' : 'services' . '/' . $belongingItem->slug;
                    }
                    $attribute = [
                        'title' => $row->title,
                        'id' => 'wows1_' . $row->id
                    ];
                ?>
                    <li>
                        <a href="<?php echo base_url($url); ?>" title="<?php echo $row->title; ?>">
                            <?php show_image($row->image, $attribute, 'banner'); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <?php
                $count = 1;
                foreach ($aBanner as $row) {
                    $url = '';
                    if ($row->pk > 0) {
                        $belongingItem = get_row($row->type, ['id' => $row->pk]);
                        $url = ($row->type == 'product') ? 'products' : 'services' . '/' . $belongingItem->slug;
                    }
                    $attribute = [
                        'title' => $row->title,
                        'id' => 'wows1_' . $row->id
                    ];
                ?>
                    <a href="<?php echo base_url($url); ?>" title="<?php echo $row->title; ?>"><span>
                            <?php show_image($row->image, $attribute, 'banner'); ?><?php echo $count++; ?></span>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="<?php echo $site_theme; ?>engine1/wowslider.js"></script>
    <script type="text/javascript" src="<?php echo $site_theme; ?>engine1/script.js"></script>

<?php } ?>