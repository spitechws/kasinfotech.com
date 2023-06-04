<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title ?> : Manage</div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->facility_id)) {
                    $edit_id = $aContentInfo->facility_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('facility_id', $edit_id);
                ?>
                <fieldset>	
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3"><?php show_message() ?></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" >Image<span class="required">*</span></label>
                        <div class="col-md-8 image-upload" title="Click on image to browse image">
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
                                $attribute = array('id' => 'image_preview', 'class' => 'img-responsive', 'alt' => $title, 'width' => '150', 'height' => '150');
                                show_image($image, $attribute, 'facility');
                                ?>
                            </label>									
                            <input id="image" name="image" onchange="previewImg(this, 'image_preview')" <?php echo $validate_image ?> type="file" >
                            <div class="text-hint">Click on image to browse image</div>
                            <div class="error" id="error_image"></div>
                        </div>																
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Facility Title<span class="required">*</span></label>
                        <div class="col-md-8">
                            <?php
                            $title = '';
                            if (isset($_POST['title'])) {
                                $title = $_POST['title'];
                            } else if (isset($aContentInfo->title)) {
                                $title = $aContentInfo->title;
                            }
                            ?>
                            <input id="title" name="title" validate="Required" type="text"  class="form-control" value="<?php echo $title ?>">
                            <div class="error" id="error_title"></div>
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
</div><!--/.row-->