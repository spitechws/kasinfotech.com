<?php
$site_url = base_url();
$site_theme = site_assets()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $site_theme; ?>images/favicon.png">
    <?php meta_tags($cms); ?>
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo $site_theme; ?>wp-includes/css/dist/block-library/style.min.css'>

    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-includes/css/classic-themes.min.css'>
    <link rel="stylesheet" href="<?php echo $site_theme; ?>assets/header.css">
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/plugins/contact-form-7/includes/css/styles.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/icon-font.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/style.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/fancybox.min.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/swiper.min.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>bootstrap-4.5.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/odometer.min.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/flaticon.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>wp-content/themes/datax/custom.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>assets/home.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>assets/contact.css'>
    <link rel='stylesheet' href='<?php echo $site_theme; ?>assets/spitech.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="<?php echo $site_theme; ?>engine1/style.css" />
    <script type="text/javascript" src="<?php echo $site_theme; ?>engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/garantiwebtasarim.com\/wordpress\/datax\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/648037d894cf5d49dc5c4537/1h2adk9sm';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body>