<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-btn">
                <div class="col-md-6"><?php echo $title; ?> : Listing</div>
                <div class="col-md-6 text-right"><a class="btn btn-primary btn-sm" href="<?php echo config_item('module_url') ?>category/">Category Management</a></div>
            </div>
            <div class="panel-body">
                <?php show_message(); ?>                    
                <?php get_search_form('', $moduleUrl, 'Search By Post Title'); ?>                               
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>                                
                                <th width="5%">#</th>
                                <th width="*">Post Title</th>
                                <th width="15%">Slug</th>
                                <th width="5%">Author</th>
                                <th width="15%">Updated On</th>                                
                                <th width="12%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 6;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->title ?></td>  
                                        <td><?php echo $row->slug ?></td>
                                        <td><?php echo $row->author_name ?></td>                                        
                                        <td><?php echo config_datetime($row->edited_date); ?></td>
                                        <td class="text-center">
                                            <a class="edit" href="<?php echo $moduleUrl; ?>add/<?php echo $row->post_id ?>">Edit</a>
                                            &nbsp;|&nbsp;
                                            <a onclick="return confirm('Are you sure want to delete post #<?php echo $i; ?>')" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->post_id ?>">Delete</a>
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
            </div>
        </div>
    </div>
</div>