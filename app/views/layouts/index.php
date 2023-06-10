<?php require_once('header-admin.php'); ?>
<!doctype html>
<html lang="hn">    
    <body>
        <div class="container">
            <?php require_once('top-bar.php'); ?>
            <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <?php require_once('side-bar.php'); ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <?php get_breadcrumb($breadcrumb) ?>
                <?php require_once(module_path('admin').$view_name); ?>
            </div>
        </div>
    </body>    
    <?php require_once('footer-admin.php'); ?>
</html>
