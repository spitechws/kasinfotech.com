<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->course_id)) {
                    $edit_id = $aContentInfo->course_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('course_id', $edit_id);
                ?>
                <fieldset>	
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3"><?php show_message() ?></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Course Name<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $caption = '';
                            if (isset($_POST['caption'])) {
                                $caption = $_POST['caption'];
                            } else if (isset($aContentInfo->caption)) {
                                $caption = $aContentInfo->caption;
                            }
                            ?>
                            <input maxlength="150" id="caption" name="caption" validate="Required" type="text" placeholder="<?php echo lang('Course Name') ?>" class="form-control" value="<?php echo $caption ?>">
                            <div class="error" id="error_caption"></div>
                        </div>
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
                                $attribute = array('id' => 'image_preview', 'class' => 'img-responsive', 'alt' => $caption);
                                show_image($image, $attribute,'course');
                                ?>
                            </label>                                    
                            <input id="image" name="image" onchange="previewImg(this, 'image_preview')" <?php echo $validate_image ?> type="file">
                            <div class="text-hint">Click on image to browse image</div>
                            <div class="error" id="error_image"></div>
                        </div>                                                              
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Short Description (max 150 characters) *</label>
                        <div class="col-md-6">
                            <?php
                            $short_description = '';
                            if (isset($_POST['short_description'])) {
                                $short_description = $_POST['short_description'];
                            } else if (isset($aContentInfo->short_description)) {
                                $short_description = $aContentInfo->short_description;
                            }
                            ?>
                            <textarea rows="5" maxlength="150" id="short_description" name="short_description" placeholder="<?php echo lang('Short Description') ?>" class="form-control"><?php echo $short_description ?></textarea>
                            <div class="error" id="error_description"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Description *</label>
                        <div class="col-md-6">
                            <?php
                            $description = '';
                            if (isset($_POST['description'])) {
                                $description = $_POST['description'];
                            } else if (isset($aContentInfo->description)) {
                                $description = $aContentInfo->description;
                            }
                            ?>
                            <textarea id="description" name="description" placeholder="<?php echo lang(' Description') ?>" class="form-control"><?php echo $description ?></textarea>
                            <?php full_ckeditor('description', '700px', '700px'); ?>
                            <div class="error" id="error_description"></div>
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