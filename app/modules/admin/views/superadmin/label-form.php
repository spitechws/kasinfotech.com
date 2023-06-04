<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Listing') ?></div>
            <div class="panel-body">
                <?php show_message(); ?>
                <!--GRID START-->
                <div class="table-container">
                    <div class="col-xs-6">
                        <?php
                        $edit_id = 0;
                        $activeClass = '';
                        //debug($aContentInfo);
                        if (isset($aContentInfo->label_id)) {
                            $edit_id = $aContentInfo->label_id;
                            $activeClass = 'hide';
                        }
                        $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                        echo form_open_multipart('', $attribute);
                        echo form_hidden('label_id', $edit_id);
                        ?>
                        <div class="form-group">
                            <input type="hidden" name="label_id" value="<?php echo $label_id ?>">
                            <label type="text" class="col-md-2 col-xs-12"><?php echo lang('Label') ?></label>
                            <div class="col-md-8 col-xs-12">										
                                <input type="text" class="form-control" name="label" value="<?php set_value('label') ?>">
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="hidden" name="submitform" id="submitform" value="submit">	
                                <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md"><?php echo lang('Save') ?></button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>								
                                    <th width="5%"><?php echo lang('SN'); ?></th>
                                    <th width="80%"><?php echo lang('Label'); ?></th>
                                    <th width="5%"><?php echo lang('Action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $columns = 3;
                                //debug($aGrid);									
                                if (isset($aGrid->rows) && is_array($aGrid->rows) && !empty($aGrid->rows)) {
                                    $i = get_grid_sn();
                                    foreach ($aGrid->rows as $row) {
                                        $status = status()[$row->status];
                                        ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>										
                                            <td>
                                                <input type="text" class="form-control" id="label_<?php echo $row->label_id ?>" value="<?php echo $row->label ?>"/>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-primary" onclick="update_label('<?php echo $row->label_id ?>')"><?php echo lang('Update') ?></a>
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

                </div>
                <!--GRID STOP-->
            </div>
        </div>
    </div>
</div><!--/.row-->
