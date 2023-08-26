<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>
<header class="page-header">
    <div class="container">
        <h2><?php echo $title;?></h2>
        <div class="bosluk3"></div>
        <p><a href="<?php echo base_url('/')?>" class="headerbreadcrumb">Home</a> <i class="flaticon-right-chevron"></i>Contact Us</p>
    </div>
</header>

<div class="page container">
   <div class="page-title">
      <h1><?php echo $cms->page_title; ?></h1>
   </div>
   <div class="page-content">
      <?php echo $cms->page_content; ?>
   </div>
</div>

<?php include_once('footer.php') ?>