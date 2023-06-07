<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Admission No/TC No'); ?>
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="*">Admission no.</th>
                                <th width="*">TC no.</th>
                                <th width="10%" class="text-center">Attachment</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 5;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>

                                        <td><?php echo $row->admission_no; ?></td>

                                        <td><?php echo $row->tc_no; ?></td>

                                        <td align="center"><a href="<?php echo media_download_url($row->attachment, 'tc'); ?>" class="btn btn-xs btn-success"><i class="fa fa-download"></i> Download</a></td>
                                       
                                        <td class="text-center">
                                            <a class="btn btn-xs btn-primary" href="<?php echo $moduleUrl; ?>add/<?php echo $row->tc_id ?>">Edit</a>
                                            <a onclick="return confirm('Are you sure want to delete this TC #<?php $row->tc_no;?>?');" class="btn btn-xs btn-danger" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->tc_id ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr><td colspan="<?php echo $columns ?>" class="text-center">No Records Found</td></tr>	
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