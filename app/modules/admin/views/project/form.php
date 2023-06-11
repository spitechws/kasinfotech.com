<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->id)) {
                    $edit_id = $aContentInfo->id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('id', $edit_id);
                ?>
                <fieldset>	
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3"><?php show_message() ?></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Image<span class="required">*</span></label>
                        <div class="col-md-3 image-upload" title="Click on image to browse image">
                            <?php
                            $image = '';
                            $validate_image = 'validate="Required"';
                            if (isset($_POST['image'])) {
                                $image = $_POST['image'];
                            } else if (isset($aContentInfo->image)) {
                                $image = $aContentInfo->image;
                                $validate_image = '';
                            }
                            ?>
                            <label for="image">
                                <?php
                                $attribute = array('id' => 'image_preview', 'class' => 'img-responsive', 'alt' => $name);
                                show_image($image, $attribute,'banner');
                                ?>
                            </label>									
                            <input id="image" name="image" onchange="previewImg(this, 'image_preview')" <?php echo $validate_image ?> type="file">
                            <div class="text-hint">Click on image to browse image</div>
                            <div class="error" id="error_image"></div>
                        </div>																
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Project Name<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $name = '';
                            if (isset($_POST['name'])) {
                                $name = $_POST['name'];
                            } else if (isset($aContentInfo->name)) {
                                $name = $aContentInfo->name;
                            }
                            ?>
                            <input id="name" name="name" validate="Required" type="text" placeholder="<?php echo lang('Image name') ?>" class="form-control" value="<?php echo $name ?>">
                            <div class="error" id="error_name"></div>
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
</div>