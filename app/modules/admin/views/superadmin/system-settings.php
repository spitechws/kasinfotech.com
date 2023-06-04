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
                            <div class="panel-heading">System Settings</div>
                            <div class="panel-body">									


                                <div class="form-group">
                                    <label class="col-md-4 ">Site Url<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $site_url = config_item('base_url');
                                        ?>
                                        <input disabled id="site_url" name="site_url"  type="text" class="form-control" placeholder="<?php echo lang('Site Url With http://') ?>" value="<?php echo $site_url ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 ">Theme<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $site_theme = '';
                                        if (isset($_POST['site_theme'])) {
                                            $site_theme = $_POST['site_theme'];
                                        } else if (isset($aContentInfo->site_theme)) {
                                            $site_theme = $aContentInfo->site_theme;
                                        }
                                        $aOption = get_site_themes();
                                        $attribute = 'validate="Required" id="site_theme" class="form-control"';
                                        echo form_dropdown('site_theme', $aOption, $site_theme, $attribute);
                                        ?>										
                                        <div id="error_site_theme" class="error"><?php echo form_error('site_theme') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 ">Google Map URL<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <a href="https://www.google.com/maps/" target="_blank">Generate Google Map URL</a>
                                        <?php
                                        $google_map = '';
                                        if (isset($_POST['google_map'])) {
                                            $google_map = $_POST['google_map'];
                                        } else if (isset($aContentInfo->google_map)) {
                                            $google_map = $aContentInfo->google_map;
                                        }
                                        ?>
                                        <textarea rows="10" placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.677971911795!2d82.13756521495111!3d22.100111985427983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a280bdf98d2b4b1%3A0x299f193aa4e98fb3!2sKiran%20Realty!5e0!3m2!1sen!2sin!4v1626786062727!5m2!1sen!2sin" validate="Required" id="google_map" name="google_map"  class="form-control"><?php echo $google_map; ?></textarea>
                                        <div id="error_google_map" class="error"><?php echo form_error('google_map') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 ">Copyright Text<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $copyright_text = '';
                                        if (isset($_POST['copyright_text'])) {
                                            $copyright_text = $_POST['copyright_text'];
                                        } else if (isset($aContentInfo->copyright_text)) {
                                            $copyright_text = $aContentInfo->copyright_text;
                                        }
                                        ?>
                                        <input validate="Required" id="copyright_text" name="copyright_text"  type="text" class="form-control"  value="<?php echo $copyright_text; ?>">
                                        <div id="error_copyright_text" class="error"><?php echo form_error('copyright_text') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 ">Developed By<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $developed_by = '';
                                        if (isset($_POST['developed_by'])) {
                                            $developed_by = $_POST['developed_by'];
                                        } else if (isset($aContentInfo->developed_by)) {
                                            $developed_by = $aContentInfo->developed_by;
                                        }
                                        ?>
                                        <input validate="Required" id="developed_by" name="developed_by"  type="text" class="form-control"  value="<?php echo $developed_by; ?>">
                                        <div id="error_copyright_text" class="error"><?php echo form_error('developed_by') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 ">Developed By URL<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $developed_by_url = '';
                                        if (isset($_POST['developed_by_url'])) {
                                            $developed_by_url = $_POST['developed_by_url'];
                                        } else if (isset($aContentInfo->developed_by_url)) {
                                            $developed_by_url = $aContentInfo->developed_by_url;
                                        }
                                        ?>
                                        <input validate="Required" id="developed_by_url" name="developed_by_url"  type="text" class="form-control"  value="<?php echo $developed_by_url; ?>">
                                        <div id="error_developed_by_url" class="error"><?php echo form_error('developed_by_url') ?></div>
                                    </div>
                                </div>                             



                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Is Underconstruction?') ?><span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $is_underconstruction = '';
                                        if (isset($_POST['is_underconstruction'])) {
                                            $is_underconstruction = $_POST['is_underconstruction'];
                                        } else if (isset($aContentInfo->is_underconstruction)) {
                                            $is_underconstruction = $aContentInfo->is_underconstruction;
                                        }
                                        $aOption = array('0' => "No", "1" => "Yes");
                                        $attribute = 'validate="Required" id="is_underconstruction" class="form-control"';
                                        echo form_dropdown('is_underconstruction', $aOption, $is_underconstruction, $attribute);
                                        ?>												
                                        <div id="error_is_underconstruction" class="error"><?php echo form_error('is_underconstruction') ?></div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Is Suspeneded?') ?><span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $is_suspended = '';
                                        if (isset($_POST['is_suspended'])) {
                                            $is_suspended = $_POST['is_suspended'];
                                        } else if (isset($aContentInfo->is_suspended)) {
                                            $is_suspended = $aContentInfo->is_suspended;
                                        }
                                        $aOption = array('0' => "No", "1" => "Yes");
                                        $attribute = 'validate="Required" id="is_suspended" class="form-control"';
                                        echo form_dropdown('is_suspended', $aOption, $is_suspended, $attribute);
                                        ?>												
                                        <div id="error_is_suspended" class="error"><?php echo form_error('is_suspended') ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('App Version') ?><span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $version = '';
                                        if (isset($_POST['version'])) {
                                            $version = $_POST['version'];
                                        } else if (isset($aContentInfo->version)) {
                                            $version = $aContentInfo->version;
                                        }
                                        ?>
                                        <input validate="Required" id="version" name="version"  type="text" class="form-control" placeholder="<?php echo lang('App Version') ?>" value="<?php echo $version ?>">
                                        <div id="error_version" class="error"><?php echo form_error('version') ?></div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-4 ">Is Multilingual?<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $is_multilingual = '';
                                        if (isset($_POST['is_multilingual'])) {
                                            $is_multilingual = $_POST['is_multilingual'];
                                        } else if (isset($aContentInfo->is_multilingual)) {
                                            $is_multilingual = $aContentInfo->is_multilingual;
                                        }
                                        $aOption = array('0' => "No", "1" => "Yes");
                                        $attribute = 'validate="Required" id="is_multilingual" class="form-control"';
                                        echo form_dropdown('is_multilingual', $aOption, $is_multilingual, $attribute);
                                        ?>												
                                        <div id="error_is_multilingual" class="error"><?php echo form_error('is_multilingual') ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 ">Default Language<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <?php
                                        $language = 'english';
                                        if (isset($_POST['language'])) {
                                            $language = $_POST['language'];
                                        } else if (isset($aContentInfo->language)) {
                                            $language = $aContentInfo->language;
                                        }
                                        $aOption = array();
                                        if (isset($aLangugae) && is_array($aLangugae) && !empty($aLangugae)) {
                                            foreach ($aLangugae as $row) {
                                                $aOption[$row->language] = strtoupper($row->language);
                                            }
                                        }
                                        $attribute = 'validate="Required" id="language" class="form-control"';
                                        echo form_dropdown('language', $aOption, $language, $attribute);
                                        ?>												
                                        <div id="error_language" class="error"><?php echo form_error('language') ?></div>
                                    </div>
                                </div>                              
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-5 col-xs-12">

                        <!--Bulk SMS Setting Box-->
                        <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo lang('Bulk SMS Setting') ?></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('API Url') ?></label>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_url = '';
                                        if (isset($_POST['bulk_sms_url'])) {
                                            $bulk_sms_url = $_POST['bulk_sms_url'];
                                        } else if (isset($aContentInfo->bulk_sms_url)) {
                                            $bulk_sms_url = $aContentInfo->bulk_sms_url;
                                        }
                                        ?>
                                        <input id="bulk_sms_url" name="bulk_sms_url"  type="text" class="form-control" placeholder="<?php echo lang('API Url') ?>" value="<?php echo $bulk_sms_url ?>">	
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Sender Id') ?></label>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_sender_id = '';
                                        if (isset($_POST['bulk_sms_sender_id'])) {
                                            $bulk_sms_sender_id = $_POST['bulk_sms_sender_id'];
                                        } else if (isset($aContentInfo->bulk_sms_sender_id)) {
                                            $bulk_sms_sender_id = $aContentInfo->bulk_sms_sender_id;
                                        }
                                        ?>
                                        <input  id="bulk_sms_sender_id" name="bulk_sms_sender_id"  type="text" class="form-control" placeholder="<?php echo lang('Sender Id') ?>" value="<?php echo $bulk_sms_sender_id ?>">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Username') ?></label>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_username = '';
                                        if (isset($_POST['bulk_sms_username'])) {
                                            $bulk_sms_username = $_POST['bulk_sms_username'];
                                        } else if (isset($aContentInfo->bulk_sms_username)) {
                                            $bulk_sms_username = $aContentInfo->bulk_sms_username;
                                        }
                                        ?>
                                        <input id="bulk_sms_username" name="bulk_sms_username"  type="text" class="form-control" placeholder="<?php echo lang('Username') ?>" value="<?php echo $bulk_sms_username ?>">	
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 "><?php echo lang('Password') ?></label>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_pass = '';
                                        if (isset($_POST['bulk_sms_pass'])) {
                                            $bulk_sms_pass = $_POST['bulk_sms_pass'];
                                        } else if (isset($aContentInfo->bulk_sms_pass)) {
                                            $bulk_sms_pass = $aContentInfo->bulk_sms_pass;
                                        }
                                        ?>
                                        <input id="bulk_sms_pass" name="bulk_sms_pass"  type="text" class="form-control" placeholder="<?php echo lang('Password') ?>" value="<?php echo $bulk_sms_pass ?>">	
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <?php
                                        $bulk_sms_param1 = '';
                                        if (isset($_POST['bulk_sms_param1'])) {
                                            $bulk_sms_param1 = $_POST['bulk_sms_param1'];
                                        } else if (isset($aContentInfo->bulk_sms_param1)) {
                                            $bulk_sms_param1 = $aContentInfo->bulk_sms_param1;
                                        }
                                        ?>
                                        <input id="bulk_sms_param1" name="bulk_sms_param1"  type="text" class="form-control" placeholder="<?php echo lang('Parameter') ?>1" value="<?php echo $bulk_sms_param1 ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_param_value1 = '';
                                        if (isset($_POST['bulk_sms_param_value1'])) {
                                            $bulk_sms_param_value1 = $_POST['bulk_sms_param_value1'];
                                        } else if (isset($aContentInfo->bulk_sms_param_value1)) {
                                            $bulk_sms_param_value1 = $aContentInfo->bulk_sms_param_value1;
                                        }
                                        ?>
                                        <input  id="bulk_sms_param_value1" name="bulk_sms_param_value1"  type="text" class="form-control" placeholder="<?php echo lang('Value') ?>1" value="<?php echo $bulk_sms_param_value1 ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <?php
                                        $bulk_sms_param2 = '';
                                        if (isset($_POST['bulk_sms_param2'])) {
                                            $bulk_sms_param2 = $_POST['bulk_sms_param2'];
                                        } else if (isset($aContentInfo->bulk_sms_param2)) {
                                            $bulk_sms_param2 = $aContentInfo->bulk_sms_param2;
                                        }
                                        ?>
                                        <input  id="bulk_sms_param2" name="bulk_sms_param2"  type="text" class="form-control" placeholder="<?php echo lang('Parameter') ?>2" value="<?php echo $bulk_sms_param2 ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_param_value2 = '';
                                        if (isset($_POST['bulk_sms_param_value2'])) {
                                            $bulk_sms_param_value2 = $_POST['bulk_sms_param_value2'];
                                        } else if (isset($aContentInfo->bulk_sms_param_value2)) {
                                            $bulk_sms_param_value2 = $aContentInfo->bulk_sms_param_value2;
                                        }
                                        ?>
                                        <input id="bulk_sms_param_value2" name="bulk_sms_param_value2"  type="text" class="form-control" placeholder="<?php echo lang('Value') ?>2" value="<?php echo $bulk_sms_param_value2 ?>">	
                                    </div>
                                </div>
                                <div class="form-group">											
                                    <div class="col-md-4">
                                        <?php
                                        $bulk_sms_param3 = '';
                                        if (isset($_POST['bulk_sms_param3'])) {
                                            $bulk_sms_param3 = $_POST['bulk_sms_param3'];
                                        } else if (isset($aContentInfo->bulk_sms_param3)) {
                                            $bulk_sms_param3 = $aContentInfo->bulk_sms_param3;
                                        }
                                        ?>
                                        <input id="bulk_sms_param3" name="bulk_sms_param3"  type="text" class="form-control" placeholder="<?php echo lang('Parameter') ?>3" value="<?php echo $bulk_sms_param3 ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_param_value3 = '';
                                        if (isset($_POST['bulk_sms_param_value3'])) {
                                            $bulk_sms_param_value3 = $_POST['bulk_sms_param_value3'];
                                        } else if (isset($aContentInfo->bulk_sms_param_value3)) {
                                            $bulk_sms_param_value3 = $aContentInfo->bulk_sms_param_value3;
                                        }
                                        ?>
                                        <input  id="bulk_sms_param_value3" name="bulk_sms_param_value3"  type="text" class="form-control" placeholder="<?php echo lang('Value') ?>3" value="<?php echo $bulk_sms_param_value3 ?>">	
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <?php
                                        $bulk_sms_param4 = '';
                                        if (isset($_POST['bulk_sms_param4'])) {
                                            $bulk_sms_param4 = $_POST['bulk_sms_param4'];
                                        } else if (isset($aContentInfo->bulk_sms_param4)) {
                                            $bulk_sms_param4 = $aContentInfo->bulk_sms_param4;
                                        }
                                        ?>
                                        <input id="bulk_sms_param4" name="bulk_sms_param4"  type="text" class="form-control" placeholder="<?php echo lang('Parameter') ?>4" value="<?php echo $bulk_sms_param4 ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <?php
                                        $bulk_sms_param_value4 = '';
                                        if (isset($_POST['bulk_sms_param_value4'])) {
                                            $bulk_sms_param_value4 = $_POST['bulk_sms_param_value4'];
                                        } else if (isset($aContentInfo->bulk_sms_param_value4)) {
                                            $bulk_sms_param_value4 = $aContentInfo->bulk_sms_param_value4;
                                        }
                                        ?>
                                        <input id="bulk_sms_param_value4" name="bulk_sms_param_value4"  type="text" class="form-control" placeholder="<?php echo lang('Value') ?>4" value="<?php echo $bulk_sms_param_value4 ?>">
                                    </div>
                                </div>

                            </div>
                        </div>                       
                        <!--Google Analytics Setting Box-->
                        <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo lang('Google Analytics') ?></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <?php
                                        $google_analytics_code = '';
                                        if (isset($_POST['google_analytics_code'])) {
                                            $google_analytics_code = $_POST['google_analytics_code'];
                                        } else if (isset($aContentInfo->google_analytics_code)) {
                                            $google_analytics_code = $aContentInfo->google_analytics_code;
                                        }
                                        ?>
                                        <textarea rows="10" id="google_analytics_code" name="google_analytics_code" class="form-control"><?php echo $google_analytics_code ?></textarea>
                                    </div>
                                </div>											
                            </div>
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group" >
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-9 error" id="errorMessages">
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