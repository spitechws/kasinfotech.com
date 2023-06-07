<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <?php
                //debug($this->config);
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal", 'enctype' => 'multipart/form-data');
                echo form_open('', $attribute);
                ?>
                <fieldset>	
                    <div class="text-center">                       
                        <?php echo show_message(); ?>							
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo lang('Logo Settings') ?></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-8 image-upload" title="<?php echo lang('Click on image to browse image') ?>">
                                        <div><label><?php echo lang('Site Logo') ?>
                                                <span class="required">*</span></label>
                                        </div>
                                        <?php
                                        $site_logo = '';
                                        $validate_image = 'validate="Required"';
                                        if (isset($aContentInfo->site_logo)) {
                                            $site_logo = $aContentInfo->site_logo;
                                            $validate_image = '';
                                        }
                                        ?>
                                        <label for="site_logo">
                                            <?php
                                            $attribute = array('id' => 'site_logo_preview', 'height' => '100', 'width' => '300', 'alt' => 'site_logo');
                                            show_image($site_logo, $attribute, 'site_settings');
                                            ?>
                                        </label>	
                                        <input type="hidden" name="old_site_logo" value="<?php echo $site_logo ?>">									
                                        <input id="site_logo" name="site_logo" onchange="previewImg(this, 'site_logo_preview')" <?php echo $validate_image ?> type="file">
                                        <div class="text-hint"><?php echo lang('Click on image to browse image') ?></div>
                                        <div class="error" id="error_site_logo"></div>
                                    </div>
                                    <div class="col-md-4 image-upload" title="<?php echo lang('Click on image to browse image') ?>">
                                        <div><label><?php echo lang('Favicon') ?>
                                                <span class="required">*</span></label>
                                        </div>
                                        <?php
                                        $site_favicon = '';
                                        $validate_image = 'validate="Required"';
                                        if (isset($aContentInfo->site_favicon)) {
                                            $site_favicon = $aContentInfo->site_favicon;
                                            $validate_image = '';
                                        }
                                        ?>
                                        <label for="site_favicon">
                                            <?php
                                            $attribute = array('id' => 'site_favicon_preview', 'height' => '50', 'width' => '50', 'alt' => 'site_favicon');
                                            show_image($site_favicon, $attribute, 'site_settings');
                                            ?>
                                        </label>
                                        <input type="hidden" name="old_site_favicon" value="<?php echo $site_favicon ?>">									
                                        <input id="site_favicon" name="site_favicon" onchange="previewImg(this, 'site_favicon_preview')" <?php echo $validate_image ?> type="file">
                                        <div class="text-hint"><?php echo lang('Click on image to browse image') ?></div>
                                        <div class="error" id="error_site_favicon"></div>
                                    </div>																
                                </div>	
                                <div class="form-group">
                                    <label class="col-md-4">Logo (Width*Height)<span class="required">*</span></label>
                                    <div class="col-md-4">
                                        <?php
                                        $logo_width = '';
                                        if (isset($_POST['logo_width'])) {
                                            $logo_width = $_POST['logo_width'];
                                        } else if (isset($aContentInfo->logo_width)) {
                                            $logo_width = $aContentInfo->logo_width;
                                        }
                                        ?>									
                                        <input id="logo_width" name="logo_width" validate="Required" type="number" class="form-control" value="<?php echo $logo_width; ?>">
                                        <div class="error" id="error_logo_width"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                        $logo_height = '';
                                        if (isset($_POST['logo_height'])) {
                                            $logo_height = $_POST['logo_height'];
                                        } else if (isset($aContentInfo->logo_height)) {
                                            $logo_height = $aContentInfo->logo_height;
                                        }
                                        ?>									
                                        <input id="logo_height" name="logo_height" validate="Required" type="number" class="form-control" value="<?php echo $logo_height ?>">
                                        <div class="error" id="error_logo_height"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">General Settings</div>
                            <div class="panel-body">                                


                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Site Name') ?>
                                        <span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $site_name = '';
                                        if (isset($_POST['site_name'])) {
                                            $site_name = $_POST['site_name'];
                                        } else if (isset($aContentInfo->site_name)) {
                                            $site_name = $aContentInfo->site_name;
                                        }
                                        ?>
                                        <input id="site_name" name="site_name" validate="Required" type="text" placeholder="<?php echo lang('Site Name') ?>" class="form-control" value="<?php echo $site_name ?>">
                                        <div class="error" id="error_site_name"></div>
                                    </div>
                                </div>											

                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Site Email') ?><span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $site_email = '';
                                        if (isset($_POST['site_email'])) {
                                            $site_email = $_POST['site_email'];
                                        } else if (isset($aContentInfo->site_email)) {
                                            $site_email = $aContentInfo->site_email;
                                        }
                                        ?>
                                        <input validate="Required|Email" id="site_email" name="site_email"  type="text" class="form-control" placeholder="<?php echo lang('Site Email') ?>" value="<?php echo $site_email ?>">
                                        <div id="error_site_email" class="error"><?php echo form_error('site_email') ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Site Contact') ?><span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $site_contact = '';
                                        if (isset($_POST['site_contact'])) {
                                            $site_contact = $_POST['site_contact'];
                                        } else if (isset($aContentInfo->site_contact)) {
                                            $site_contact = $aContentInfo->site_contact;
                                        }
                                        ?>
                                        <input validate="Required|Phone" id="site_contact" name="site_contact"  type="text" class="form-control" placeholder="<?php echo lang('Site Contact') ?>" value="<?php echo $site_contact ?>">
                                        <div id="error_site_contact" class="error"><?php echo form_error('site_contact') ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Site Address') ?><span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $site_address = '';
                                        if (isset($_POST['site_address'])) {
                                            $site_address = $_POST['site_address'];
                                        } else if (isset($aContentInfo->site_address)) {
                                            $site_address = $aContentInfo->site_address;
                                        }
                                        ?>
                                        <textarea validate="Required" id="site_address" name="site_address"  type="text" class="form-control" placeholder="<?php echo lang('Site Address') ?>" ><?php echo $site_address ?></textarea> 
                                        <div id="error_site_address" class="error"><?php echo form_error('site_address') ?></div>
                                    </div>
                                </div>
                               

                                <div class="form-group">
                                    <label class="col-md-4">Date Format<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $date_format = '';
                                        if (isset($_POST['date_format'])) {
                                            $date_format = $_POST['date_format'];
                                        } else if (isset($aContentInfo->date_format)) {
                                            $date_format = $aContentInfo->date_format;
                                        }
                                        $aOption = get_date_format();
                                        $attribute = 'validate="Required" id="date_format" class="form-control"';
                                        echo form_dropdown('date_format', $aOption, $date_format, $attribute);
                                        ?>									
                                        <div id="error_date_format" class="error"><?php echo form_error('date_format') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Date Time Format<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $datetime_format = '';
                                        if (isset($_POST['datetime_format'])) {
                                            $datetime_format = $_POST['datetime_format'];
                                        } else if (isset($aContentInfo->datetime_format)) {
                                            $datetime_format = $aContentInfo->datetime_format;
                                        }
                                        $aOption = get_datetime_format();
                                        $attribute = 'validate="Required" id="datetime_format" class="form-control"';
                                        echo form_dropdown('datetime_format', $aOption, $datetime_format, $attribute);
                                        ?>									
                                        <div id="error_datetime_format" class="error"><?php echo form_error('datetime_format') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Listing Count') ?><span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $record_limit = '';
                                        if (isset($_POST['record_limit'])) {
                                            $record_limit = $_POST['record_limit'];
                                        } else if (isset($aContentInfo->record_limit)) {
                                            $record_limit = $aContentInfo->record_limit;
                                        }
                                        ?>
                                        <input validate="Required" id="record_limit" name="record_limit"  type="text" class="form-control" placeholder="<?php echo lang('Record Listing Count') ?>" value="<?php echo $record_limit ?>">
                                        <div id="error_record_limit" class="error"><?php echo form_error('record_limit') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <!--Social Network Setting Box-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">Social Network Setting(URL)</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-md-4 ">Facebook Page</label>
                                    <div class="col-md-8">
                                        <?php
                                        $facebook = '';
                                        if (isset($_POST['facebook'])) {
                                            $facebook = $_POST['facebook'];
                                        } else if (isset($aContentInfo->facebook)) {
                                            $facebook = $aContentInfo->facebook;
                                        }
                                        ?>
                                        <input  id="facebook" name="facebook"  type="text" class="form-control" value="<?php echo $facebook ?>">	
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 ">Twitter Page</label>
                                    <div class="col-md-8">
                                        <?php
                                        $twitter = '';
                                        if (isset($_POST['twitter'])) {
                                            $twitter = $_POST['twitter'];
                                        } else if (isset($aContentInfo->twitter)) {
                                            $twitter = $aContentInfo->twitter;
                                        }
                                        ?>
                                        <input id="twitter" name="twitter"  type="text" class="form-control" value="<?php echo $twitter ?>">	
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 ">Instagram</label>
                                    <div class="col-md-8">
                                        <?php
                                        $instagram = '';
                                        if (isset($_POST['instagram'])) {
                                            $instagram = $_POST['instagram'];
                                        } else if (isset($aContentInfo->instagram)) {
                                            $instagram = $aContentInfo->instagram;
                                        }
                                        ?>
                                        <input  id="instagram" name="instagram"  type="text" class="form-control"  value="<?php echo $instagram ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 ">Linked In</label>
                                    <div class="col-md-8">
                                        <?php
                                        $linkedin = '';
                                        if (isset($_POST['linkedin'])) {
                                            $linkedin = $_POST['linkedin'];
                                        } else if (isset($aContentInfo->linkedin)) {
                                            $linkedin = $aContentInfo->linkedin;
                                        }
                                        ?>
                                        <input  id="linkedin" name="linkedin"  type="text" class="form-control" value="<?php echo $linkedin ?>">	
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Youtube') ?></label>
                                    <div class="col-md-8">
                                        <?php
                                        $youtube = '';
                                        if (isset($_POST['youtube'])) {
                                            $youtube = $_POST['youtube'];
                                        } else if (isset($aContentInfo->youtube)) {
                                            $youtube = $aContentInfo->youtube;
                                        }
                                        ?>
                                        <input id="youtube" name="youtube"  type="text" class="form-control" placeholder="<?php echo lang('Youtube') ?>" value="<?php echo $youtube ?>">
                                    </div>
                                </div>

                            </div>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
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
</div><!--/.row-->