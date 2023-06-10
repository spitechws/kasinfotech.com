<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>


<div class="page container">
   <div class="page-title">
      <h1><?php echo $cms->page_title; ?></h1>
   </div>
   <div class="page-content">
      <?php echo $cms->page_content; ?>
   </div>
</div>

<?php include_once('footer.php') ?>