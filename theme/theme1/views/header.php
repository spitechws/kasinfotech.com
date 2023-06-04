<?php
$site_url = base_url();
$site_theme = site_assets();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $cms->page_title;?></title>       
        <?php meta_tags($cms); ?>
        <?php site_favicon(); ?>
    <!-- Main CSS Files -->
    <link href="<?php echo $site_theme; ?>css/style.css" rel="stylesheet" type="text/css"/>
    <!-- Plugin Css Files -->
    <link href="<?php echo $site_theme; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $site_theme; ?>plugins/fontawesome/css/all.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $site_theme; ?>plugins/icomoon/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $site_theme; ?>plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $site_theme; ?>plugins/owlcarousel/owl.carousel.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $site_theme; ?>plugins/venobox/venobox.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $site_theme; ?>plugins/social-media-buttons/social-media-buttons.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        var BASE_URL = '<?php echo base_url(); ?>';
        var csrf_token_name = '<?php echo $this->security->get_csrf_token_name() ?>';
        var csrf_hash = '<?php echo $this->security->get_csrf_hash() ?>';
    </script>
    <?php google_analytics(); ?>
</head>
<body>
<?php include_once("menu.php"); ?>

