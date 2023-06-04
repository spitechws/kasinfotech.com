<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Listing</div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Category Title',1,'category_add'); ?>				                
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="*">Post Category</th>                           
                                <th width="15%">Updated On</th>                                
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 4;
                            if (isset($aCategory) && is_array($aCategory) && !empty($aCategory)) {
                                $i =1;
                                foreach ($aCategory as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->title ?></td>	
                                        <td><?php echo config_datetime($row->edited_date); ?></td>                                                                               
                                        <td class="text-center">
                                            <a class="edit" href="<?php echo $moduleUrl; ?>category_add/<?php echo $row->category_id ?>">Edit</a>
                                            &nbsp;|&nbsp;
                                            <a onclick="return confirm('Are you sure want to delete this post category #<?php echo $i; ?>? Once this is deleted then all the related post will get deleted from the database.')" class="delete" href="<?php echo $moduleUrl; ?>category_delete/<?php echo $row->category_id ?>">Delete</a>
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
                </div>      
            </div>
        </div>
    </div>
</div>