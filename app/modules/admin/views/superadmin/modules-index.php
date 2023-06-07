<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>
                <?php get_search_form([], $moduleUrl, 'Search Module Name,Url,Group Name', 1, 'modules_add'); ?>
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th width="5%">SN</th>
                                <th width="10%">Module Group</th>
                                <th width="15%">Icon</th>
                                <th width="15%">(Id)Module Name</th>
                                <th width="10%">Is Module?</th>
                                <th width="5%">Status</th>
                                <th width="15%">Url</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 7;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    $status = status()[$row->status];
                                    $is_module = ($row->is_module == 1) ? 'Yes' : 'No';
                                    $url = base_url() . $row->url;
                                    $checked = ($row->status == 1) ? 'checked' : '';

                            ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $row->group_name ?></td>
                                        <td><i class="<?php echo $row->icon ?>"></i><?php echo $row->icon ?></td>
                                        <td class="status-<?php echo strtolower($status) ?>">(<?php echo $row->module_id ?>)&nbsp;<?php echo $row->title ?></td>
                                        <td class="text-center"><?php echo $is_module ?></td>
                                        <td>
                                            <input <?php echo $checked; ?> onchange="changeModuleStatus(<?php echo $row->module_id; ?>)" id="module_tatus_<?php echo $row->id; ?>" type="checkbox">
                                        </td>
                                        <td><a href="<?php echo $url; ?>" target="_blank"><?php echo $row->url ?></a></td>
                                        <td class="text-center">
                                            <a class="btn btn-xs btn-primary" href="<?php echo $moduleUrl; ?>modules_add/<?php echo $row->module_id ?>">Edit</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="<?php echo $columns ?>" class="text-center">No Records Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    if (isset($aGrid->pages)) {
                        echo $aGrid->pages;
                    }
                    ?>
                </div>
                <!--GRID STOP-->
            </div>
        </div>
    </div>
</div><!--/.row-->