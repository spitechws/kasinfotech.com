<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Course Name, Level'); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive ">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="20%">Course Name</th> 
                                <th width="*">Short Description</th>                               
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 4;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    $status = status()[$row->status];
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->caption ?></td> 
                                        <td><?php echo $row->short_description ?></td>        
                                        <td class="text-center">
                                            <a href="<?php echo $moduleUrl; ?>add/<?php echo $row->course_id ?>" class="btn btn-xs btn-primary">Edit</a>
                                            <a onclick="return confirm('Are you sure want to delete course #<?php echo $i; ?>')" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->course_id ?>" class="btn btn-xs btn-danger">Delete</a>
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