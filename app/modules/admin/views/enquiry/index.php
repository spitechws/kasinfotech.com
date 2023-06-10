<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>
                <?php get_search_form(array('from_date' => 1, 'to_date' => 1), $moduleUrl, 'Search By Name,Mobile,Email', 0); ?>
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th width="3%" >#</th>
                                <th width="15%" class="text-center">Created On</th>
                                <th width="15%">Name</th>
                                <th width="10%">Mobile/Email</th>                                
                                <th width="25%">Service Name</th>
                                <th width="5%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 6;
                            if (!empty($aGrid->rows)  && is_array($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    $delete_url=$moduleUrl.'delete/'.$row->id;
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td class="table-date"><?php echo config_datetime($row->created_date); ?></td>
                                        <td class="name"><?php echo $row->name ?></td>
                                        <td class="email"><?php echo $row->mobile ?><br/><?php echo $row->email ?></td>                                      
                                        <td><?php echo $row->service_name ?></td>
                                        <td class="action">
                                            <a onclick="return confirm('Are you sure want to delete enquiry #<?php echo $i; ?>')"  class="btn btn-xs btn-danger" href="<?php echo $delete_url; ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="<?php echo $columns ?>" class="text-center">No Records Found</td>
                                </tr>
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