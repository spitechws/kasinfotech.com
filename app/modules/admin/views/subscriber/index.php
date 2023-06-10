<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?></div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Name',0); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive ">
                        <thead>
                            <tr>								
                                <th width="2%">#</th>
                                <th width="5%">Name</th>
                                <th width="*">Email</th>                                
                                <th width="15%">Subscribed On</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 5;
                            if (!empty($aGrid->rows)  && is_array($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>                                        
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->email ?></td>
                                        <td><?php echo config_datetime($row->created_date);?></td>
                                        <td class="text-center">
                                            <a onclick="return confirm('Are you sure want to delete this subscriber #<?php echo $i; ?>?')" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->subscriber_id ?>" class="btn btn-xs btn-danger">Delete</a>
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