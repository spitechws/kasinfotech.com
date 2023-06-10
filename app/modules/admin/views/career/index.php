<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Caption'); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">SN</th>
                                <th width="*">Job Title</th>
                                <th width="10%">Posts</th>                                
                                <th width="10%">Job Type</th>
                                <th width="15%">Work Mode</th>
                                <th width="10%">Posted On</th>
                                <th width="10%">Status</th>	
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 8;
                            if (!empty($aGrid->rows)  && is_array($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    $status = status()[$row->status];

                                    $job_type = job_type();
                                    $job_type = $job_type[$row->job_type];

                                    $work_mode = work_mode();
                                    $work_mode = $work_mode[$row->work_mode];
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>											
                                        <td><?php echo $row->job_title ?></td>
                                        <td class="text-center"><?php echo $row->posts ?></td>	
                                        <td class="text-center"><?php echo $job_type ?></td>	
                                        <td class="text-center"><?php echo $work_mode ?></td>	
                                        <td><?php echo config_date($row->created_date) ?></td>
                                        <td class="status-<?php echo strtolower($status) ?>">
                                            <?php echo $status ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo $moduleUrl; ?>add/<?php echo $row->career_id ?>"><i class="glyphicon glyphicon-pencil" title="<?php echo lang('Edit') ?>"><?php echo lang('Edit') ?></i></a>
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
</div>