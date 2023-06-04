<?php include_once('header-admin.php'); ?>
<!doctype html>
<html lang="hn">    
    <body>
        <div class="container">
            <?php include_once('top-bar.php'); ?>
            <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <?php include_once('side-bar.php'); ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <?php get_breadcrumb($breadcrumb) ?>
                <?php include_once(module_path('admin').$view_name); ?>
            </div>
        </div>
    </body>    
    <?php include_once('footer-admin.php'); ?>
</html>
