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
                        <div class="col-lg-8 col-md-offset-3"><?php show_message() ?></div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Image<span class="required">*</span></label>
                        <div class="col-lg-3 image-upload" title="Click on image to browse image">
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
                                $attribute = array('id' => 'image_preview', 'class' => 'img-responsive');
                                show_image($image, $attribute, 'service');
                                ?>
                            </label>
                            <input id="image" name="image" onchange="previewImg(this, 'image_preview')" <?php echo $validate_image ?> type="file">
                            <div class="text-hint">Click on image to browse image</div>
                            <div class="error" id="error_image"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Service Name<span class="required">*</span></label>
                        <div class="col-lg-8">
                            <?php
                            $name = '';
                            if (isset($_POST['name'])) {
                                $name = $_POST['name'];
                            } else if (isset($aContentInfo->name)) {
                                $name = $aContentInfo->name;
                            }
                            ?>
                            <input onblur="generateSlug('name','slug')" maxlength="150" id="name" name="name" validate="Required" type="text"  class="form-control" value="<?php echo $name ?>">
                            <div class="error" id="error_name"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Slug<span class="required">*</span></label>
                        <div class="col-lg-8">
                            <?php
                            $slug = '';
                            if (isset($_POST['slug'])) {
                                $slug = $_POST['slug'];
                            } else if (isset($aContentInfo->slug)) {
                                $slug = $aContentInfo->slug;
                            }
                            ?>
                            <input id="slug" onblur="generateSlug('name','slug')" name="slug" validate="Required" type="text" class="form-control" value="<?php echo $slug ?>">
                            <div class="error" id="error_slug"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Short Description <span class="required">*</span></label>
                        <div class="col-lg-8">
                            <?php
                            $short_description = '';
                            if (isset($_POST['short_description'])) {
                                $short_description = $_POST['short_description'];
                            } else if (isset($aContentInfo->short_description)) {
                                $short_description = $aContentInfo->short_description;
                            }
                            ?>
                            <textarea rows="5" maxlength="150" id="short_description" name="short_description" class="form-control"><?php echo $short_description ?></textarea>
                            <div class="error" id="error_short_description"></div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-3 control-label">Description</label>
                        <div class="col-lg-8">
                            <?php
                            $description = '';
                            if (isset($_POST['description'])) {
                                $description = $_POST['description'];
                            } else if (isset($aContentInfo->description)) {
                                $description = $aContentInfo->description;
                            }
                            ?>
                            <textarea rows="5" maxlength="150" id="description" name="description"  class="form-control"><?php echo $description ?></textarea>
                            <?php full_ckeditor('description', '700px', '700px'); ?>
                        </div>
                    </div>                 


                    <div class="form-group">
                        <div class="col-lg-8 col-lg-offset-3">
                            <input type="hidden" name="submitform" id="submitform" value="submit">
                            <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md">Save</button>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btn-md" onclick="history.go(-1)">Cancel</button>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>