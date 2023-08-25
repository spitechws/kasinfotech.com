	
<ul class="nav menu">
    <li>
        <a href="<?php echo base_url() ?>" target="_blank"><span class="glyphicon glyphicon-globe"></span>View Website</a>
    </li>
    <li class="<?php get_active("post", $menu) ?>">
        <a href="<?php echo base_url() ?>admin_post/"><span class="glyphicon glyphicon-camera"></span>Post</a>
    </li>
    <li class="<?php get_active("cms", $menu) ?>">
        <a href="<?php echo base_url() ?>admin_cms/"><span class="glyphicon glyphicon-globe"></span>CMS Pages</a>
    </li>   
    <li class="<?php get_active("media", $menu) ?> hide">
        <a href="<?php echo base_url() ?>admin_media/"><span class="glyphicon glyphicon-camera"></span>Media</a>
    </li>
    <li class="<?php get_active("page_component", $menu) ?> hide">
        <a href="<?php echo base_url() ?>admin_component/"><span class="glyphicon glyphicon-dashboard"></span>Page Components</a>
    </li>  
    <?php
    $aMenu = get_menu();
    if (isset($aMenu) && is_array($aMenu) && !empty($aMenu)) {
        foreach ($aMenu as $data) {
            $aChildMenu = $data->aModules;
            if (isset($aChildMenu) && is_array($aChildMenu) && !empty($aChildMenu)) {
                ?>			
                <li class="parent <?php get_active($data->selected_id, $menu) ?>">
                    <?php
                    $collapse = '';
                    if ($menu == $data->selected_id) {
                        $collapse = 'in';
                    }
                    ?>
                    <a data-toggle="collapse" href="#sub-item-<?php echo $data->group_id; ?>">
                        <span class="<?php echo $data->icon; ?>"></span>&nbsp;<?php echo lang($data->title); ?><span data-toggle="collapse" href="#sub-item-<?php echo $data->group_id; ?>" class="icon pull-right">
                            <em class="glyphicon glyphicon-s glyphicon-plus"></em>
                        </span> 
                    </a>					
                    <ul class="children collapse <?php echo $collapse; ?>" id="sub-item-<?php echo $data->group_id; ?>">
                        <?php
                        foreach ($aChildMenu as $data1) {
                            ?>
                            <li>
                                <a href="<?php echo base_url() ?><?php echo $data1->url; ?>/"><span class="<?php echo $data1->icon; ?>"></span>&nbsp;<?php echo lang($data1->title); ?></a>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </li>
                <?php
            }
        }
    }
    ?>

    <?php if (is_superadmin()) { ?>
        <li class="parent <?php get_active("config", $menu) ?>">
            <?php
            $collapse = '';
            if ($menu == 'config') {
                $collapse = 'in';
            }
            ?>
            <a data-toggle="collapse" href="#sub-item-superadmin" >
                <span class="fa fa-gears"></span>Super Admin<span class="icon pull-right">
                    <em class="glyphicon glyphicon-s glyphicon-plus"></em>
                </span> 
            </a>
            <ul class="children collapse <?php echo $collapse; ?>" id="sub-item-superadmin">
                <li>
                    <a class="" href="<?php echo base_url() ?>superadmin/">
                        <span class="glyphicon glyphicon-th"></span>System Settings
                    </a>
                </li>
                <li>
                    <a class="" href="<?php echo base_url() ?>superadmin/factory_reset">
                        <span class="glyphicon glyphicon-th"></span>Factory Reset
                    </a>
                </li>
               
                <li>
                    <a class="" href="<?php echo base_url() ?>admin_user/" title="<?php echo lang('Manage Admin Users') ?>">
                        <span class="glyphicon glyphicon-th"></span>Users
                    </a>
                </li>			
                <li>
                    <a class="" href="<?php echo base_url() ?>superadmin/modules/" title="><?php echo lang('Manage modules') ?>">
                        <span class="glyphicon glyphicon-th"></span>Modules
                    </a>
                </li>	
                <li>
                    <a class="" href="<?php echo base_url() ?>superadmin/message_template/" title="<?php echo lang('Manage message Template') ?>">
                        <span class="glyphicon glyphicon-th"></span>Message Templates
                    </a>
                </li>									
            </ul>
        </li>
    <?php } ?>					
</ul>
</div>
