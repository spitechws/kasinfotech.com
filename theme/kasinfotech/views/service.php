<?php require_once('header.php'); ?>

<style>
    header .hire-us .long-arrow-icon-css:before {
        background-color: #fff
    }

    header .hire-us .long-arrow-icon-css:after {
        border-color: #fff;
        top: 54%
    }
</style>
<header class="header-wrapper section-wrapper">
    <div class="header-main dark">
        <?php require_once('menu.php'); ?>
    </div>
</header>

<div class="breadcrumb-bar" style="padding-top: 150px; height: 400px; background-image: url('<?php echo asset('images/background.webp'); ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-bold text-white pb-2"><?php echo $aServiceDetails->service_name; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Service </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $aServiceDetails->service_name; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 10px;">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $aServiceDetails->service_name; ?></h1>

            <div class="mt-3">
                <p><?php echo $aServiceDetails->details; ?></p>
            </div>
        </div>
    </div>
</div>






<?php include_once('footer.php') ?>