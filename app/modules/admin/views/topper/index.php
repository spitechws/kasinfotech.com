<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Topper Name'); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive ">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="10%">Photo</th>
                                <th width="15%">Name</th>
                                <th width="*">Exam</th>
                                <th width="25%">Rank</th>                                
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 6;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {                                  
                                    ?>
                                    <tr id='sequences_<?php echo $row->topper_id; ?>'>
                                        <td><?php echo $i; ?></td>
                                        <td><?php
                                            show_image($row->thumbnail, array("width" => "50", "height" => "50"), 'toppers');
                                            ?></td>
                                        <td><?php echo $row->topper_name ?></td>
                                        <td><?php echo $row->standard ?></td>
                                        <td><?php echo $row->percentage ?></td>                                       
                                        <td class="text-center">
                                            <a href="<?php echo $moduleUrl; ?>add/<?php echo $row->topper_id ?>" class="btn btn-xs btn-primary">Edit</a>
                                            <a onclick="return confirm('Are you sure want to delete topper #<?php echo $i; ?>')" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->topper_id ?>" class="btn btn-xs btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
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