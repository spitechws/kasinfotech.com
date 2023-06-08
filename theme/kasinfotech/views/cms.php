<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>


<div class="container">
   <h1><?php echo $cms->page_title; ?></h1>
   <div class="content">
      <?php echo $cms->page_content; ?>
   </div>
</div>

<?php include_once('footer.php') ?>