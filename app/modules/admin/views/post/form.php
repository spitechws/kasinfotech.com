<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Manage</div>
            <div class="panel-body">
                <?php show_message(); ?>    
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->id)) {
                    $edit_id = $aContentInfo->id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal", "enctype" => "multipart/form-data");
                echo form_open('', $attribute);
                echo form_hidden('id', $edit_id);
                ?>
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Post Title<span class="required">*</span></label>
                        <div class="col-md-9">
                            <?php
                            $title = "";
                            if (isset($_POST['title'])) {
                                $title = $_POST['title'];
                            } else if (isset($aContentInfo->title)) {
                                $title = $aContentInfo->title;
                            }
                            ?>
                            <input validate="Required" onblur="generateSlug('title','slug')" id="title" name="title"  type="text" class="form-control" value="<?php echo $title ?>">
                            <div id="error_title" class="error"><?php echo form_error('title') ?></div>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-md-3 control-label">Post Slug<span class="required">*</span></label>
                        <div class="col-md-9">
                            <?php
                            $slug = '';
                            if (isset($_POST['slug'])) {
                                $slug = $_POST['slug'];
                            } else if (isset($aContentInfo->slug)) {
                                $slug = $aContentInfo->slug;
                            }
                            ?>
                            <input id="slug" onblur="generateSlug('title','slug')" name="slug" validate="Required" type="text" class="form-control" value="<?php echo $slug ?>">
                            <div class="error" id="error_slug"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Category<span class="required">*</span></label>
                        <div class="col-md-3">
                            <?php
                            $category_id = '';
                            if (isset($_POST['category_id'])) {
                                $category_id = $_POST['category_id'];
                            } else if (isset($aContentInfo->category_id)) {
                                $category_id = $aContentInfo->category_id;
                            }
                            $aOption = array(" " => "--Select--");
                            if (isset($aCategory) && is_array($aCategory) && !empty($aCategory)) {
                                foreach ($aCategory as $row) {
                                    $aOption[$row->category_id] = $row->title;
                                }
                            }
                            $attribute = 'id="category_id" class="form-control"';
                            echo form_dropdown('category_id', $aOption, $category_id, $attribute);
                            ?>                                  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Page Content</label>
                        <div class="col-md-9">
                            <?php
                            $content = '';
                            if (isset($_POST['content'])) {
                                $content = $_POST['content'];
                            } else if (isset($aContentInfo->content)) {
                                $content = $aContentInfo->content;
                            }
                            ?>
                            <textarea rows="10" id="content" name="content" type="text" class="form-control"><?php echo $content; ?></textarea>
                            <?php full_ckeditor('content', '700px', '700px'); ?>
                        </div>                              
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Short Description</label>
                        <div class="col-md-9">
                            <?php
                            $short_description = '';
                            if (isset($_POST['short_description'])) {
                                $short_description = $_POST['short_description'];
                            } else if (isset($aContentInfo->short_description)) {
                                $short_description = $aContentInfo->short_description;
                            }
                            ?>
                            <textarea rows="3" id="short_description" name="short_description" type="text" class="form-control"><?php echo $short_description; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">#Tags Cloud</label>
                        <small>add tags saperated by comma (,)</small>
                        <div class="col-md-9">
                            <?php
                            $tag = '';
                            if (isset($_POST['tag'])) {
                                $tag = $_POST['tag'];
                            } else if (isset($aContentInfo->tag)) {
                                $tag = $aContentInfo->tag;
                            }
                            ?>
                            <textarea row="3" id="tag" name="tag" class="form-control"><?php echo $tag ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Featured Image<span class="required">*</span></label>
                        <div class="col-md-3 image-upload" title="Click on image to browse image">
                            <?php
                            $featured_image = '';                           
                            if (isset($_POST['featured_image'])) {
                                $featured_image = $_POST['featured_image'];
                            } else if (isset($aContentInfo->featured_image)) {
                                $featured_image = $aContentInfo->featured_image;                               
                            }
                            ?>
                            <label for="featured_image">
                                <?php
                                $attribute = array('id' => 'image_preview', 'width' => '100','height'=>'100');
                                show_image($featured_image, $attribute,'post');
                                ?>
                            </label>                                    
                            <input id="featured_image" name="featured_image" onchange="previewImg(this, 'image_preview')" type="file" accept=".jpg,.jpeg,.png">
                            <div class="text-hint">Click on image to browse image</div>
                            <div class="error" id="error_featured_image"></div>
                        </div>                                                              
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="hidden" name="submitform" id="submitform" value="submit">  
                            <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md">Save</button>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo config_item('module_url')?>" type="button" class="btn btn-danger btn-md" >Cancel</a>
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>     
            </div>
        </div>
    </div>
</div>