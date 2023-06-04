<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <?php
                $edit_id = 0;
                $activeClass = '';
                if (isset($aContentInfo->career_id)) {
                    $edit_id = $aContentInfo->career_id;
                    $activeClass = 'hide';
                }
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                echo form_open_multipart('', $attribute);
                echo form_hidden('career_id', $edit_id);
                ?>
                <fieldset>	
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3"><?php show_message() ?></div>
                    </div>						
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo lang('Job Title') ?>
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                            <?php
                            $job_title = '';
                            if (isset($_POST['job_title'])) {
                                $job_title = $_POST['job_title'];
                            } else if (isset($aContentInfo->job_title)) {
                                $job_title = $aContentInfo->job_title;
                            }
                            ?>
                            <input id="job_title" name="job_title" validate="Required" type="text" placeholder="<?php echo lang('Job Title') ?>" class="form-control" value="<?php echo $job_title ?>">
                            <div class="error" id="error_job_title"></div>
                        </div>
                    </div>	

                    <div class="form-group">
                        <label class="col-md-3 control-label">Salary(in Rs. Per Month)</label>
                        <div class="col-md-3">
                            <?php
                            $salary = '';
                            if (isset($_POST['salary'])) {
                                $salary = $_POST['salary'];
                            } else if (isset($aContentInfo->salary)) {
                                $salary = $aContentInfo->salary;
                            }
                            $aOption = salary();
                            $attribute = 'id="salary" class="form-control"';
                            echo form_dropdown('salary', $aOption, $salary, $attribute);
                            ?>									
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Job Type <span class="required">*</span></label>
                        <div class="col-md-3">
                            <?php
                            $job_type = '';
                            if (isset($_POST['job_type'])) {
                                $job_type = $_POST['job_type'];
                            } else if (isset($aContentInfo->job_type)) {
                                $job_type = $aContentInfo->job_type;
                            }
                            $aOption = job_type();
                            $attribute = 'id="job_type" class="form-control"';
                            echo form_dropdown('job_type', $aOption, $job_type, $attribute);
                            ?>									
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="col-md-3 control-label">Work Mode <span class="required">*</span></label>
                        <div class="col-md-3">
                            <?php
                            $work_mode = '';
                            if (isset($_POST['work_mode'])) {
                                $work_mode = $_POST['work_mode'];
                            } else if (isset($aContentInfo->work_mode)) {
                                $work_mode = $aContentInfo->work_mode;
                            }
                            $aOption = work_mode();
                            $attribute = 'id="work_mode" class="form-control"';
                            echo form_dropdown('work_mode', $aOption, $work_mode, $attribute);
                            ?>									
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">No. of Posts<span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                            <?php
                            $posts = '';
                            if (isset($_POST['posts'])) {
                                $posts = $_POST['posts'];
                            } else if (isset($aContentInfo->posts)) {
                                $posts = $aContentInfo->posts;
                            }
                            ?>
                            <input id="posts" name="posts" validate="Required" type="number" placeholder="<?php echo lang('No. of Posts') ?>" min="1" class="form-control" value="<?php echo $posts ?>">
                            <div class="error" id="error_posts"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Location<span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                            <?php
                            $location = '';
                            if (isset($_POST['location'])) {
                                $location = $_POST['location'];
                            } else if (isset($aContentInfo->location)) {
                                $location = $aContentInfo->location;
                            }
                            ?>
                            <input id="location" name="location" validate="Required" type="text" class="form-control" value="<?php echo $location ?>">
                            <div class="error" id="error_location"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Job Description</label>
                        <div class="col-md-6">
                            <?php
                            $job_description = '';
                            if (isset($_POST['job_description'])) {
                                $job_description = $_POST['job_description'];
                            } else if (isset($aContentInfo->job_description)) {
                                $job_description = $aContentInfo->job_description;
                            }
                            ?>
                            <textarea id="job_description" name="job_description" placeholder="<?php echo lang('Job Description') ?>" class="form-control"><?php echo $job_description ?></textarea>
                            <?php full_ckeditor('job_description', '700px', '700px'); ?>
                            <div class="error" id="error_job_description"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Hr Contact<span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                            <?php
                            $hr_contact = '';
                            if (isset($_POST['hr_contact'])) {
                                $hr_contact = $_POST['hr_contact'];
                            } else if (isset($aContentInfo->hr_contact)) {
                                $hr_contact= $aContentInfo->hr_contact;
                            }
                            ?>
                            <input placeholder="Mobile,Email Id" id="hr_contact" name="hr_contact" validate="Required" type="text" class="form-control" value="<?php echo $hr_contact ?>">
                            <div class="error" id="error_hr_contact"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo lang('Status') ?></label>
                        <div class="col-md-3">
                            <?php
                            $status = '';
                            if (isset($_POST['status'])) {
                                $status = $_POST['status'];
                            } else if (isset($aContentInfo->status)) {
                                $status = $aContentInfo->status;
                            }
                            $aOption = status();
                            $attribute = 'id="status" class="form-control"';
                            echo form_dropdown('status', $aOption, $status, $attribute);
                            ?>									
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