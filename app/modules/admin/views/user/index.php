<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search News'); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="15%">Name</th>
                                <th width="15%">Role</th>
                                <th width="15%">Email</th>
                                <th width="20%">Mobile</th>
                                <th width="10%">Status</th>
                                <th width="*">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 5;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                   $status= status();
                                   $status=$status[$row->status]
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->role; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->mobile; ?></td>
                                        <td class="status-<?php echo strtolower($status);?>"><?php echo $status; ?></td>
                                        <td class="action">                                            
                                            <a class="edit" href="<?php echo $moduleUrl; ?>permission/<?php echo $row->user_id ?>"><i class="glyphicon glyphicon-pencil"></i>Permission</a>
                                            <a class="edit" href="<?php echo $moduleUrl; ?>add/<?php echo $row->user_id ?>"><i class="glyphicon glyphicon-pencil" title="<?php echo lang('Edit') ?>"><?php echo lang('Edit') ?></i></a>
                                            &nbsp;
                                            <a onclick="return confirm('Are you sure want to delete this user?')" class="delete" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->user_id ?>"><i class="glyphicon glyphicon-remove" title="<?php echo lang('Delete') ?>"><?php echo lang('Delete') ?></i></a>
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
