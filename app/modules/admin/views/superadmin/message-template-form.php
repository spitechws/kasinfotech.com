<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">						
                <?php
                //debug($aContentInfo);
                $edit_id = 0;
                if (isset($aContentInfo->template_id)) {
                    $edit_id = $aContentInfo->template_id;
                }
                $attribute = array("id" => "form2", "method" => "post", "class" => "form-horizontal");
                echo form_open('', $attribute);
                echo form_hidden('template_id', $edit_id);
                ?>
                <fieldset>
                     <div class="form-group">
                        <label class="col-md-3 control-label">Message Type</label>
                        <div class="col-md-3">
                            <?php
                            $type = '';
                            if (isset($_POST['type'])) {
                                $type = $_POST['type'];
                            } else if (isset($aContentInfo->type)) {
                                $type = $aContentInfo->type;
                            }
                            $aOption = message_type();
                            $attribute = 'id="type" class="form-control"';
                            echo form_dropdown('type', $aOption, $type, $attribute);
                            ?>									
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo lang('Template Name'); ?><span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $template = '';
                            if (isset($_POST['template'])) {
                                $template = $_POST['template'];
                            } else if (isset($aContentInfo->template)) {
                                $template = $aContentInfo->template;
                            }
                            ?>
                            <input type="text" id="template" name="template"  class="form-control" placeholder="<?php echo lang('Template Name') ?>" value="<?php echo $template ?>">
                            <div id="error_template" class="error"><?php echo form_error('template') ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo lang('Subject'); ?><span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $subject = '';
                            if (isset($_POST['subject'])) {
                                $subject = $_POST['subject'];
                            } else if (isset($aContentInfo->subject)) {
                                $subject = $aContentInfo->subject;
                            }
                            ?>
                            <input type="text" id="subject" name="subject"  class="form-control" placeholder="<?php echo lang('Subject') ?>" value="<?php echo $subject ?>">
                            <div id="error_subject" class="error"><?php echo form_error('subject') ?></div>
                        </div>
                    </div>                   	
                   	
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo lang('Message'); ?></label>
                        <div class="col-md-6">
                            <?php
                            $message = '';
                            if (isset($_POST['message'])) {
                                $message = $_POST['from_name'];
                            } else if (isset($aContentInfo->message)) {
                                $message = $aContentInfo->message;
                            }
                            ?>
                            <textarea  id="message" name="message" type="text" class="form-control"><?php echo $message; ?></textarea>
                            <?php full_ckeditor('message', '700px', '400px'); ?>
                        </div>
                    </div>																				

                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="hidden" name="submitform" id="submitform" value="submit">	
                            <button type="button" onclick="formValidate('form2')" class="btn btn-primary btn-md"><?php echo lang('Save'); ?></button>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btn-md" onclick="history.go(-1)"><?php echo lang('Cancel'); ?></button>
                        </div>
                    </div>
                </fieldset>
                <div class="panel-footer"></div>
                <?php echo form_close(); ?>               								
            </div>
        </div>
    </div>
</div><!--/.row-->