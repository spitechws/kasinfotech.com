<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <?php
                    //debug($aContentInfo);				
                    $edit_id = 0;
                    if (isset($aContentInfo->application_id)) {
                        $edit_id = $aContentInfo->application_id;
                    }
                    $attribute = array("id" => "form2", "method" => "post", "class" => "form-horizontal");
                    echo form_open('', $attribute);
                    echo form_hidden('application_id', $edit_id);
                    ?>
                    <fieldset>	
                        <div class="form-group">
                            <label class="col-md-3 ">Job Title</label>
                            <label class="col-md-6 label-value">
                                <?php
                                $job_title = '';
                                if (isset($aContentInfo->job_title)) {
                                    $job_title = $aContentInfo->job_title;
                                }
                                echo $job_title;
                                ?>								
                            </label>																		
                        </div>														
                        <div class="form-group">
                            <label class="col-md-3">Candidate Name</label>
                            <label class="col-md-6 label-value">
                                <?php
                                $name = '';
                                if (isset($aContentInfo->name)) {
                                    $name = $aContentInfo->name;
                                }
                                echo $name;
                                ?>								
                            </label>																		
                        </div>								

                        <div class="form-group">
                            <label class="col-md-3 ">Mobile No</label>
                            <label class="col-md-6 label-value">
                                <?php
                                $mobile = '';
                                if (isset($aContentInfo->mobile)) {
                                    $mobile = $aContentInfo->mobile;
                                }
                                echo $mobile;
                                ?>								
                            </label>
                        </div>								

                        <div class="form-group">
                            <label class="col-md-3 ">Email Id</label>
                            <label class="col-md-6 label-value">
                                <?php
                                $email = '';
                                if (isset($aContentInfo->email)) {
                                    $email = $aContentInfo->email;
                                }
                                echo $email;
                                ?>								
                            </label>
                        </div>		

                        <div class="form-group">
                            <label class="col-md-3 ">Applied On</label>
                            <label class="col-md-6 label-value">
                                <?php
                                $created_date = '';
                                if (isset($aContentInfo->created_date)) {
                                    $created_date = config_datetime($aContentInfo->created_date);
                                }
                                echo $created_date;
                                ?>								
                            </label>
                        </div>	

                        <div class="form-group">
                            <label class="col-md-3 ">Resume</label>
                            <label class="col-md-6 label-value">
                                <?php
                                $resume = '';
                                if (isset($aContentInfo->resume)) {
                                    $resume = $aContentInfo->resume;
                                }
                                if ($resume != '') {
                                    $resume = base_url() . 'media/job_application/' . $resume;
                                    echo '<a href="' . $resume . '" target="_blank">Download</a>';
                                } else {
                                    echo 'No Resume';
                                }
                                ?>								
                            </label>
                        </div>	

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="hidden" name="submitform" id="submitform" value="submit">	

                                <button type="button" class="btn btn-danger btn-md" onclick="history.go(-1)"><?php echo lang('Close'); ?></button>
                            </div>
                        </div>
                    </fieldset>
                    <?php echo form_close(); ?>                    
                </div>
            </div>	
            <div class="panel-footer"></div>							

        </div>
    </div>
</div>