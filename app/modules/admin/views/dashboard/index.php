<div class="row">

    <?php
    $aModules = get_rows('modules', array("status" => 1, "is_module" => 1));
    //debug('qry',0);
    if (isset($aModules) && !empty($aModules) && is_array($aModules)) {
        foreach ($aModules as $row) {
            $url = base_url() . $row->url . '/';
            $count = 0;
            if (!empty($row->module_table)) {
                $count = get_count($row->module_table);
            }
    ?>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <a href="<?php echo $url; ?>">
                    <div class="panel panel-blue panel-widget ">
                        <div class="row no-padding">
                            <div class="col-sm-3 col-lg-5 widget-left">
                                <em class="<?php echo $row->icon; ?>"></em>
                            </div>
                            <div class="col-sm-9 col-lg-7 widget-right">
                                <div class="large"><?php echo $count; ?></div>
                                <div class="text-muted"><?php echo $row->title; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    <?php
        }
    }
    ?>
</div>