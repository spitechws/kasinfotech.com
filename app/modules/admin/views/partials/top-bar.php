<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

            <a class="navbar-brand" href="<?php echo base_url() ?>admin_dashboard/">Dashboard</a>

            <ul class="user-menu">
                <?php if (config_item('is_multilingual') == "1") { ?>
                    <li class="lang-dropdown pull-left"><?php
                        $language = '';
                        if (isset($_POST['language'])) {
                            $language = $_POST['language'];
                        } else {
                            $language = config_item('language');
                        }
                        $aLanguage = $this->common_model->get_languages();
                        if (isset($aLanguage) && is_array($aLanguage) && !empty($aLanguage)) {
                            foreach ($aLanguage as $key => $value) {
                                $aOption[$value->language] = strtoupper($value->language);
                            }
                        }
                        $attribute = 'id="language" class="form-control" onchange="change_language()"';
                        echo form_dropdown('language', $aOption, $language, $attribute);
                        ?>						
                    </li>
                <?php } ?>
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['aUser']->name; ?><span class="caret">
                        </span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url() ?>admin_dashboard/profile/"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="<?php echo base_url() ?>admin_dashboard/change_password/"><span class="glyphicon glyphicon-cog"></span>Change Password</a></li>
                        <?php if (is_admin() || is_superadmin()) { ?>
                            <li><a href="<?php echo base_url() ?>admin_dashboard/app_settings/"><span class="glyphicon glyphicon-cog"></span>System Settings</a></li>
                            <?php
                        }
                        ?>                        
                        <li><a href="<?php echo base_url() ?>admin/logout/"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>