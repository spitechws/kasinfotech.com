<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Listing</div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Title'); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="*">Title</th>
                                <th width="40%">Link/Url</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 4;
                            if (!empty($aGrid->rows)  && is_array($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>

                                        <td><?php echo $row->title; ?></td>	

                                        <td align="center"><a href="https://youtu.be/<?php echo $row->link; ?>" target="_blank">https://youtu.be/<?php echo $row->link; ?></a></td>
                                       
                                        <td class="text-center">
                                            <a class="btn btn-xs btn-primary" href="<?php echo $moduleUrl; ?>add/<?php echo $row->video_id ?>">Edit</a>
                                            <a onclick="return confirm('Are you sure want to delete this attachment #<?php $row->title;?>?');" class="btn btn-xs btn-danger" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->video_id ?>">Delete</a>
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