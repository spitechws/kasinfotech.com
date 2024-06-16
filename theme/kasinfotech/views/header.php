<?php
$contact_email = 'solutions@kasinfotech.com';
$career_email = 'career@kasinfotech.com';
$contact_number = '+91-6300873412';
$whatsapp = '+91-7989532907';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <?php meta_tags($cms); ?>

    <link rel="canonical" href="<?php echo base_url(); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-owl.css') ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo asset('images/favicon.png') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/header-footer-4k.css') ?>">

    <link rel="preload" href="https://fonts.googleapis.com">
    <link rel="preload" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
    <style>
        .input-cursor {
            display: inline-block;
            width: 2px;
            height: 37px;
            background-color: #fff;
            animation: blink .6s linear infinite alternate;
            transform: translate(4px, 2px)
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            40% {
                opacity: 1;
            }

            60% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>