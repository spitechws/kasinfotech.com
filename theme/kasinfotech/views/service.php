<?php include_once('header.php') ?>
<?php include_once('menu.php') ?>

<header class="page-header">
    <div class="container">
        <h2>Contact</h2>
        <div class="bosluk3"></div>
        <p><a href="<?php echo $site_url; ?>" class="headerbreadcrumb">Home</a> <i class="flaticon-right-chevron"></i>Contact</p>
    </div>
</header>
<section id="contact" class="contact" style="margin-top: 20px; margin-bottom:20px">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12 d-flex align-items-stretch">
                <?php show_image($aContentInfo->image, ['class' => 'img-fluid'], 'service'); ?>
            </div>

        </div>

    </div>
</section>

<?php include_once('footer.php') ?>