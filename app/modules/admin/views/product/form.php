<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Manage</div>
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
                        <?php show_message() ?>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Product Name<span class="required">*</span></label>
                            <?php
                            $name = '';
                            if (isset($_POST['name'])) {
                                $name = $_POST['name'];
                            } else if (isset($aContentInfo->name)) {
                                $name = $aContentInfo->name;
                            }
                            ?>
                            <input id="name" name="name" onblur="generateSlug('name','slug')" validate="Required" type="text" placeholder="<?php echo lang('Image name') ?>" class="form-control" value="<?php echo $name ?>">
                            <div class="error" id="error_name"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Slug<span class="required">*</span></label>
                            <?php
                            $slug = '';
                            if (isset($_POST['slug'])) {
                                $slug = $_POST['slug'];
                            } else if (isset($aContentInfo->slug)) {
                                $slug = $aContentInfo->slug;
                            }
                            ?>
                            <input id="slug" onblur="generateSlug('name','slug')" name="slug" validate="Required" type="text" class="form-control" value="<?php echo $slug ?>">
                            <div class="error" id="error_slug"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12">
                            <label>Demo URL<span class="required">*</span></label>
                            <?php
                            $demo_url = '';
                            if (isset($_POST['demo_url'])) {
                                $demo_url = $_POST['demo_url'];
                            } else if (isset($aContentInfo->demo_url)) {
                                $demo_url = $aContentInfo->demo_url;
                            }
                            ?>
                            <input id="demo_url" name="demo_url" validate="Required" type="text" class="form-control" value="<?php echo $demo_url ?>">
                            <div class="error" id="error_demo_url"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12" title="Click on image to browse image">
                            <label>Product Screens</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <b>Image1</b>
                                        <div class=" image-upload">
                                            <?php
                                            $image1 = '';
                                            if (isset($aContentInfo->image1)) {
                                                $image1 = $aContentInfo->image1;
                                            }
                                            ?>
                                            <label for="image1">
                                                <?php
                                                $attribute = array('id' => 'image1_preview', 'width' => '100');
                                                show_image($image1, $attribute, 'product');
                                                ?>
                                            </label>
                                            <input id="image1" name="image1" onchange="previewImg(this, 'image1_preview')" type="file">

                                        </div>
                                    </td>
                                    <td>
                                        <b>Image2</b>
                                        <div class=" image-upload">
                                            <?php
                                            $image2 = '';
                                            if (isset($aContentInfo->image2)) {
                                                $image2 = $aContentInfo->image2;
                                            }
                                            ?>
                                            <label for="image2">
                                                <?php
                                                $attribute = array('id' => 'image2_preview', 'width' => '100');
                                                show_image($image2, $attribute, 'product');
                                                ?>
                                            </label>
                                            <input id="image2" name="image2" onchange="previewImg(this, 'image2_preview')" type="file">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Image3</b>
                                        <div class=" image-upload">
                                            <?php
                                            $image3 = '';
                                            if (isset($aContentInfo->image3)) {
                                                $image3 = $aContentInfo->image3;
                                            }
                                            ?>
                                            <label for="image3">
                                                <?php
                                                $attribute = array('id' => 'image3_preview', 'width' => '100');
                                                show_image($image3, $attribute, 'product');
                                                ?>
                                            </label>
                                            <input id="image3" name="image3" onchange="previewImg(this, 'image3_preview')" type="file">

                                        </div>
                                    </td>
                                    <td>
                                        <b>Image4</b>
                                        <div class=" image-upload">
                                            <?php
                                            $image4 = '';
                                            if (isset($aContentInfo->image4)) {
                                                $image4 = $aContentInfo->image4;
                                            }
                                            ?>
                                            <label for="image4">
                                                <?php
                                                $attribute = array('id' => 'image4_preview', 'width' => '100');
                                                show_image($image4, $attribute, 'product');
                                                ?>
                                            </label>
                                            <input id="image4" name="image4" onchange="previewImg(this, 'image4_preview')" type="file">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Details</label>
                            <?php
                            $details = '';
                            if (isset($_POST['details'])) {
                                $details = $_POST['details'];
                            } else if (isset($aContentInfo->details)) {
                                $details = $aContentInfo->details;
                            }
                            ?>
                            <textarea rows="10" id="details" name="details" type="text" class="form-control"><?php echo $details; ?></textarea>
                            <?php full_ckeditor('details', '100%', '700px'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="hidden" name="submitform" id="submitform" value="submit">
                            <button type="button" onclick="formValidate('form1')" class="btn btn-success btn-md">Save And Continue</button>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btn-md" onclick="history.go(-1)">Close</button>
                        </div>
                    </div>

                </fieldset>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>