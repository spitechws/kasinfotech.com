<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->video_id)) {
                    $edit_id = $aContentInfo->video_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('video_id', $edit_id);
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
                        <label class="col-md-3 control-label">Link / Url<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $link = '';
                            if (isset($_POST['link'])) {
                                $link = $_POST['link'];
                            } else if (isset($aContentInfo->link)) {
                                $link = $aContentInfo->link;
                            }
                            ?>
                            <input id="link" name="link" validate="Required" type="text" class="form-control" placeholder="last part of youtube link eg: 'we56gshnb'" value="<?php echo $link ?>">
                            <div class="error" id="error_link"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="hidden" name="submitform" id="submitform" value="submit">	
                            <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md">Save</button>
                            &nbsp;&nbsp;&nbsp;
                            <a onclick="history.go(-1)" type="button" class="btn btn-danger btn-md">Cancel</a>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>		
            </div>
        </div>
    </div>
</div>