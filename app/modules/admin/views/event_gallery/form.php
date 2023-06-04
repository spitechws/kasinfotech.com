<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->gallery_id)) {
                    $edit_id = $aContentInfo->gallery_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open('', $attribute);
                echo form_hidden('gallery_id', $edit_id);
                ?>
                <fieldset>	
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo lang('Gallery Title') ?>
                            <span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $gallery_title = '';
                            if (isset($_POST['title'])) {
                                $gallery_title = $_POST['title'];
                            } else if (isset($aContentInfo->title)) {
                                $gallery_title = $aContentInfo->title;
                            }
                            ?>
                            <input id="title" name="title" validate="Required" type="text" placeholder="Gallery Title" class="form-control" value="<?php echo $gallery_title ?>">
                            <div class="error" id="error_title"></div>
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