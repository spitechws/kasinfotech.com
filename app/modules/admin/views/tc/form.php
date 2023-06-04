<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->tc_id)) {
                    $edit_id = $aContentInfo->tc_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('tc_id', $edit_id);
                ?>
                <fieldset>	
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3"><?php show_message() ?></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Admission no.<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $admission_no = '';
                            if (isset($_POST['admission_no'])) {
                                $admission_no = $_POST['admission_no'];
                            } else if (isset($aContentInfo->admission_no)) {
                                $admission_no = $aContentInfo->admission_no;
                            }
                            ?>
                            <input id="admission_no" name="admission_no" validate="Required" type="text" class="form-control" value="<?php echo $admission_no ?>">
                            <div class="error" id="error_title"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">TC no.<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $tc_no = '';
                            if (isset($_POST['tc_no'])) {
                                $tc_no = $_POST['tc_no'];
                            } else if (isset($aContentInfo->tc_no)) {
                                $tc_no = $aContentInfo->tc_no;
                            }
                            ?>
                            <input id="tc_no" name="tc_no" validate="Required" type="text" class="form-control" value="<?php echo $tc_no ?>">
                            <div class="error" id="error_title"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">TC (.pdf)<span class="required">*</span></label>
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
                                <a href="<?php echo media_download_url($attachment, 'tc'); ?>"><i class="fa fa-download fa-2x"></i>Download</a>
                            </div>			
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="hidden" name="submitform" id="submitform" value="submit">	
                            <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md">Save</button>
                            &nbsp;&nbsp;&nbsp;
                            <a onclick="history.go(-1)" class="btn btn-danger btn-md">Cancel</a>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>		
            </div>
        </div>
    </div>
</div>