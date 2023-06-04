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
                        <label class="col-md-3 control-label">Page Section Name<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $section = '';
                            if (isset($_POST['section'])) {
                                $section = $_POST['section'];
                            } else if (isset($aContentInfo->section)) {
                                $section = $aContentInfo->section;
                            }                            
                            ?>
                            <?php if (is_superadmin()) { ?>
                                <input id="section" name="section" validate="Required" type="text" class="form-control" value="<?php echo $section ?>">
                                <div class="error" id="error_section"></div>
                            <?php } else { ?>
                                <input readonly="readonly" id="section" name="section" type="text" class="form-control" value="<?php echo $section ?>">
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Component Name<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $name = '';
                            if (isset($_POST['name'])) {
                                $name = $_POST['name'];
                            } else if (isset($aContentInfo->name)) {
                                $name = $aContentInfo->name;
                            }
                            ?>
                            <input id="name" name="name" validate="Required" type="text" class="form-control" value="<?php echo $name; ?>">
                            <div class="error" id="error_name"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Content</label>
                        <div class="col-md-6">
                            <?php
                            $content = '';
                            if (isset($_POST['content'])) {
                                $content = $_POST['content'];
                            } else if (isset($aContentInfo->content)) {
                                $content = $aContentInfo->content;
                            }
                            ?>
                            <textarea rows="10" id="content" name="content" class="form-control"><?php echo $content ?></textarea>
                            <div class="error" id="error_content"></div>
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
</div>