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
                                <th width="15%">Datetime</th>
                                <th width="*">Name</th>
                                <th width="15%">Contact</th> 
                                <th width="15%">Class</th> 
                                <th width="15%">Passing Year</th>                            
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 7;
                            if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>		
                                        <td><?php echo config_datetime($row->created_date) ?></td>                                   
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->mobile ?><br><?php echo $row->email ?></td>
                                        <td><?php echo $row->class ?></td>
                                        <td><?php echo $row->year_of_passing ?></td>                                      
                                        <td class="text-center">
                                            <a class="btn btn-primary" href="<?php echo $moduleUrl; ?>view/<?php echo $row->alumni_id ?>">View</a>
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