<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Gallery : <?php echo $aContentInfo->title; ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->gallery_id)) {
                    // $edit_id = $aContentInfo->image_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal", "enctype" => "multipart/form-data");
                echo form_open('', $attribute);
                echo form_hidden('image_id', $edit_id);
                echo form_hidden('gallery_id', $aContentInfo->gallery_id);
                ?>
                <fieldset>					

                    <div class="form-group">
                        <label class="col-md-3 control-label">Image Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                            <?php
                            $caption = '';
                            if (isset($_POST['caption'])) {
                                $caption = $_POST['caption'];
                            }
                            ?>
                            <input id="title" name="title" value="<?php echo $caption ?>" type="text" placeholder="<?php echo lang('Image Caption') ?>" class="form-control" validate="Required">	
                            <div id="error_title"></div>
                        </div>
                    </div>	

                    <div class="form-group">
                        <label class="col-md-3 control-label">Browse Image(.jpg,.png)<span class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="file" name="image" id="image" validate="Required" accept=".jpg,.png">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="hidden" name="submitform" id="submitform" value="submit">	
                            <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md"><?php echo lang('Save') ?></button>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btn-md" onclick="history.go(-1)"><?php echo lang('Cancel') ?></button>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>		
            </div>
        </div>
    </div>
</div><!--/.row-->