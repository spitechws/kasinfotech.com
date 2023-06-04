<?php include_once(module_path('admin').'partials/header.php'); ?>
<div class="row">
    <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <div class="login-panel panel panel-default login-box">
            <div class="form-group text-center">	
                <a href="<?php echo base_url() ?>"><?php site_logo();?></a>
            </div>
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <?php show_message(); ?>	
                <?php
                $aAttributes = array("id" => "form1", "role" => "form");
                echo form_open('', $aAttributes);
                ?>
                <fieldset>
                    <div class="form-group">
                        <?php
                        $email = '';
                        if (isset($_POST['email'])) {
                            $email = $_POST['email'];
                        }
                        ?>
                        <input class="form-control"  placeholder="E-mail" name="email" id="email" type="email" autofocus="" validate="Required" onkeypress="return submitOnEnter('save', event)" />
                        <div id="error_email" class="error"><?php echo form_error('email') ?></div>
                    </div>
                    <div class="form-group">
                        <?php
                        $password = '';
                        if (isset($_POST['password'])) {
                            $password = $_POST['password'];
                        }
                        ?>
                        <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="" validate="Required" onkeypress="return submitOnEnter('save', event)">
                        <div id="error_password" class="error"><?php echo form_error('password') ?></div>
                    </div>                    
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="checkbox hide">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"><?php echo lang('Remember Me') ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="submitform" id="submitform" value="submit">
                        <a onclick="formValidate('form1')" class="btn btn-primary" id="save"><?php echo lang('Login') ?></a>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 text-center">
                            <a href="<?php echo admin_url() ?>forgot_password/">
                                <?php echo lang('Forgot Password') ?>?</a>
                        </div>
                    </div>
                </fieldset>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->		
<?php include_once(module_path('admin').'partials/footer.php'); ?>