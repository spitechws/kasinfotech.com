
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php 
                if(is_superadmin()){
                    get_search_form('', $moduleUrl, 'Section Name| Component Name'); 
                }else{
                    get_search_form('', $moduleUrl, 'Section Name| Component Name','0'); 
                }                
                ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="15%">Page Section</th>
                                <th width="*">Component Name</th>
                                <th width="5%">Action</th>
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
                                        <td><?php echo $i++ ?></td>                                      
                                        <td><?php echo $row->section ?></td>	
                                        <td><?php echo $row->name ?></td>                                        
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-primary" href="<?php echo $moduleUrl; ?>add/<?php echo $row->id ?>">Edit</a>
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