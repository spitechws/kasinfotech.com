<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->testimonial_id)) {
                    $edit_id = $aContentInfo->testimonial_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('testimonial_id', $edit_id);
                ?>
                <fieldset>	
                    <div class="text-center">
                        <?php echo $msg; ?>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo lang('Image') ?>
                            <span class="required">*</span></label>
                        <div class="col-md-3 image-upload" title="<?php echo lang('Click on image to browse image') ?>">
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
                                $attribute = array('id' => 'image_preview', 'width' => 100, 'height' => 100);
                                show_image($image, $attribute, 'testimonial');
                                ?>
                            </label>									
                            <input id="image" name="image" onchange="previewImg(this, 'image_preview')" <?php echo $validate_image ?> type="file">
                            <div class="text-hint"><?php echo lang('Click on image to browse image') ?></div>
                            <div class="error" id="error_image"></div>
                        </div>																
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Name<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $name = '';
                            if (isset($_POST['name'])) {
                                $name = $_POST['name'];
                            } else if (isset($aContentInfo->name)) {
                                $name = $aContentInfo->name;
                            }
                            ?>
                            <input id="name" name="name" validate="Required" type="text"  class="form-control" value="<?php echo $name ?>">
                            <div class="error" id="error_name"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Video URL<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $video_url = '';
                            if (isset($_POST['video_url'])) {
                                $video_url = $_POST['video_url'];
                            } else if (isset($aContentInfo->video_url)) {
                                $video_url = $aContentInfo->video_url;
                            }
                            ?>
                            <input id="video_url" name="video_url" type="text" placeholder="eg: v=hE8mvgRqSdI" class="form-control" value="<?php echo $video_url; ?>">
                        </div>
                    </div>                    

                    <div class="form-group">
                        <label class="col-md-3 control-label">Message<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $message = '';
                            if (isset($_POST['message'])) {
                                $message = $_POST['message'];
                            } else if (isset($aContentInfo->message)) {
                                $message = $aContentInfo->message;
                            }
                            ?>
                            <textarea rows="10" validate="Required" id="message" name="message" class="form-control" placeholder="Message"><?php echo $message ?></textarea> 
                            <div id="error_message" class="error"><?php echo form_error('message') ?></div>
                        </div>
                    </div>

                    <!-- Form actions -->                   
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