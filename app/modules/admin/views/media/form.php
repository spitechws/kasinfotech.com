<?php
$class1 = "col-md-12";
$show_details = false;
if (isset($aImageDetails) && !empty($aImageDetails)) {
    $class1 = "col-md-9";
    $show_details = true;
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">           
            <div class="panel-body">
                <fieldset>       
                    <?php
                    $edit_id = 0;
                    $activeClass = '';
                    if (isset($aContentInfo->media_id)) {
                        $edit_id = $aContentInfo->image_id;
                        $activeClass = 'hide';
                    }
                    $attribute = array("id" => "form1", "method" => "post", "enctype" => "multipart/form-data");
                    echo form_open('', $attribute);
                    ?>
                    <div class="form-group">                        
                        <div class="col-md-3">
                            <input type="file" name="image" id="image" validate="Required">
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="submitform" id="submitform" value="submit">	
                            <button type="button" onclick="formValidate('form1')" class="btn btn-success"><i class="fa fa-upload"></i>&nbsp;Upload</button>                          
                        </div>
                    </div>   
                    <div class="clearfix"></div>
                    <?php echo form_close(); ?>	
                    <div class="row">
                        <div class="<?php echo $class1; ?> media-file-list">
                            <?php
                            $path = config_item('media_path') . 'ckediter/';
                            $scan = scandir($path);
                            $aExclude = array('.', '..', '.feed');
                            foreach ($scan as $file) {
                                if (!in_array($file, $aExclude)) {
                                    $file_src = media_url($file, "ckediter");
                                    $href = config_item('module_url') . '?image_details=' . $file;
                                    ?>
                                    <div class="col-md-2">
                                        <a href="<?php echo $href; ?>"><img src="<?php echo $file_src; ?>" height="100" width="100"/></a>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div> 
                        <?php
                        if ($show_details) {
                            $file_url = $aImageDetails->file_url;
                            $file_name = $aImageDetails->file_name;
                            ?>
                            <div class="col-md-3" style="background-color:white;">
                                <table class="table table-bordered">
                                    <tr>
                                        <td><img src="<?php echo $file_url; ?>" height="200" width="100%"/></td>
                                    </tr>
                                    <tr>
                                        <td class="word-wrap"><b>File Name:</b> <?php echo $file_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="word-wrap"><b>File URL:</b> <?php echo $file_url; ?></td>
                                    </tr>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </fieldset>

            </div>
        </div>


    </div>
</div>