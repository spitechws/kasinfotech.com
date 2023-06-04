<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->admission_notification_id)) {
                    $edit_id = $aContentInfo->admission_notification_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('admission_notification_id', $edit_id);
                ?>
                <fieldset>	
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3"><?php show_message() ?></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Attachment Title<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $title = '';
                            if (isset($_POST['title'])) {
                                $title = $_POST['title'];
                            } else if (isset($aContentInfo->title)) {
                                $title = $aContentInfo->title;
                            }
                            ?>
                            <input id="title" name="title" validate="Required" type="text" class="form-control" value="<?php echo $title ?>">
                            <div class="error" id="error_title"></div>
                        </div>
                    </div>	

                    <div class="form-group">
                        <label class="col-md-3 control-label">Attachment(.pdf)<span class="required">*</span></label>
                        <div class="col-md-3">
                            <?php
                            $attachment = '';
                            $validate_attachment = 'validate="Required"';
                            if (isset($_POST['attachment'])) {
                                $attachment = $_POST['attachment'];
                            } else if (isset($aContentInfo->attachment)) {
                                $attachment = $aContentInfo->attachment;
                                $validate_attachment = '';
                            }
                            ?>
                            <input id="attachment" name="attachment" <?php echo $validate_attachment ?> type="file" accept=".pdf">                           
                            <div class="error" id="error_attachment"></div>
                        </div>	
                        <?php if (isset($aContentInfo->attachment)) { ?> 
                            <div class="col-md-3 text-left">
                                <?php
                                $attachment = $aContentInfo->attachment;
                                ?>
                                <a href="<?php echo media_download_url($attachment, 'admission_notification'); ?>"><i class="fa fa-download fa-2x"></i>Download</a>                                                                
                            </div>			
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="hidden" name="submitform" id="submitform" value="submit">	
                            <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md">Save</button>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo config_item('module_url')?>" type="button" class="btn btn-danger btn-md">Cancel</a>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>		
            </div>
        </div>
    </div>
</div>