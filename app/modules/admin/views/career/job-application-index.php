<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Listing</div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form(array("from_date"=>1,"to_date"=>1), $moduleUrl, 'Search By Candidate Name',0); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">SN</th>
                                <th width="15%">Apply Datetime</th>
                                <th width="20%">Candidate Name</th>
                                <th width="15%">Mobile</th>
                                <th width="*">Job Title</th>                              
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 6;
                            if (!empty($aGrid->rows)  && is_array($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>		
                                        <td><?php echo config_datetime($row->created_date) ?></td>                                        
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->mobile ?></td>
                                        <td><?php echo $row->job_title ?></td>                                      
                                        <td class="text-center">
                                            <a class="btn btn-primary" href="<?php echo $moduleUrl; ?>view/<?php echo $row->application_id ?>">View</a>
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