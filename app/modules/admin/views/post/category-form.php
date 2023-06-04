<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?></div>
            <div class="panel-body">
                <?php show_message(); ?>	
                <?php
                //echo date('Y-m-d h:i:s');
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->category_id)) {
                    $edit_id = $aContentInfo->category_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal", "enctype" => "multipart/form-data");
                echo form_open('', $attribute);
                echo form_hidden('category_id', $edit_id);
                ?>
                <fieldset>													

                    <div class="form-group">
                        <label class="col-md-3 control-label">Post Category<span class="required">*</span></label>
                        <div class="col-md-6">
                            <?php
                            $title = ''; 
                            if (isset($_POST['title'])) {
                                $title = $_POST['title'];
                            } else if (isset($aContentInfo->title)) {
                                $title = $aContentInfo->title;                              
                            }
                            ?>
                            <input id="title" name="title" validate="Required" type="text" placeholder="Page Name" class="form-control" value="<?php echo $title ?>"  <?php echo $disable; ?>>
                            <div class="error" id="error_title"></div>
                        </div>
                    </div>                   	                    
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
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