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
                                $attribute = array('id' => 'image_preview', 'class' => 'img-responsive', 'alt' => $title);
                                show_image($image, $attribute, 'service');
                                ?>
                            </label>
                            <input id="image" name="image" onchange="previewImg(this, 'image_preview')" <?php echo $validate_image ?> type="file">
                            <div class="text-hint">Click on image to browse image</div>
                            <div class="error" id="error_image"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Service Name<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $title = '';
                            if (isset($_POST['title'])) {
                                $title = $_POST['title'];
                            } else if (isset($aContentInfo->title)) {
                                $title = $aContentInfo->title;
                            }
                            ?>
                            <input onblur="generateSlug('title','slug')" maxlength="150" id="title" name="title" validate="Required" type="text" placeholder="<?php echo lang('Course Name') ?>" class="form-control" value="<?php echo $title ?>">
                            <div class="error" id="error_title"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Slug<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $slug = '';
                            if (isset($_POST['slug'])) {
                                $slug = $_POST['slug'];
                            } else if (isset($aContentInfo->slug)) {
                                $slug = $aContentInfo->slug;
                            }
                            ?>
                            <input id="slug" onblur="generateSlug('title','slug')" name="slug" validate="Required" type="text" class="form-control" value="<?php echo $slug ?>">
                            <div class="error" id="error_slug"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Short Description <span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $short_description = '';
                            if (isset($_POST['short_description'])) {
                                $short_description = $_POST['short_description'];
                            } else if (isset($aContentInfo->short_description)) {
                                $short_description = $aContentInfo->short_description;
                            }
                            ?>
                            <textarea rows="5" maxlength="150" id="short_description" name="short_description" placeholder="<?php echo lang('Short Description') ?>" class="form-control"><?php echo $description ?></textarea>
                            <div class="error" id="error_description"></div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-6">
                            <?php
                            $description = '';
                            if (isset($_POST['description'])) {
                                $description = $_POST['description'];
                            } else if (isset($aContentInfo->description)) {
                                $description = $aContentInfo->description;
                            }
                            ?>
                            <textarea rows="5" maxlength="150" id="description" name="description" placeholder="<?php echo lang('Short Description') ?>" class="form-control"><?php echo $description ?></textarea>
                            <?php full_ckeditor('description', '700px', '700px'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Demo URL</label>
                        <div class="col-md-6">
                            <?php
                            $demo_url = '';
                            if (isset($_POST['demo_url'])) {
                                $demo_url = $_POST['demo_url'];
                            } else if (isset($aContentInfo->demo_url)) {
                                $demo_url = $aContentInfo->demo_url;
                            }
                            ?>
                            <input id="demo_url" name="demo_url" type="text" class="form-control" value="<?php echo $demo_url ?>">
                            <div class="error" id="error_demo_url"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Demo Username</label>
                        <div class="col-md-6">
                            <?php
                            $username = '';
                            if (isset($_POST['username'])) {
                                $username = $_POST['username'];
                            } else if (isset($aContentInfo->username)) {
                                $username = $aContentInfo->username;
                            }
                            ?>
                            <input id="username" name="username" type="text" class="form-control" value="<?php echo $username ?>">
                            <div class="error" id="error_username"></div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Demo Password</label>
                        <div class="col-md-6">
                            <?php
                            $password = '';
                            if (isset($_POST['password'])) {
                                $password = $_POST['password'];
                            } else if (isset($aContentInfo->password)) {
                                $password = $aContentInfo->password;
                            }
                            ?>
                            <input id="password" name="password" type="text" class="form-control" value="<?php echo $password ?>">
                            <div class="error" id="error_password"></div>
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