<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Listing</div>
            <div class="panel-body">
                <?php show_message(); ?>
                <?php get_search_form('', $moduleUrl, 'Title, Page Name'); ?>
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="15%">Page Name</th>
                                <th width="20%">Page Title</th>
                                <th width="*">Meta Keywords</th>
                                <th width="5%">Preview</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 6;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    $preview_url = base_url() . $row->page_name;
                            ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->page_name ?></td>
                                        <td><?php echo $row->page_title ?></td>
                                        <td><?php echo $row->meta_keywords ?></td>
                                        <td><a href="<?php echo $preview_url; ?>" class="btn btn-xs btn-success" target="_blank">Preview</a></td>
                                        <td class="text-center">
                                            <a class="btn btn-xs btn-primary" href="<?php echo $moduleUrl; ?>add/<?php echo $row->cms_id ?>">Edit</a>
                                          
                                            <a onclick="return confirm('Are you sure want to delete cms #<?php echo $i; ?>')" class="btn btn-xs btn-danger" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->cms_id ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
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
            </div>
        </div>
    </div>
</div>