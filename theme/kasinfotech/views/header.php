<?php
$site_url = base_url();
$site_theme = site_assets();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css?family=Poppins:100,300,400,700,900" rel="stylesheet">

    <meta name='robots' content='max-image-preview:large'>
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
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo $site_theme; ?>wp-includes/css/dist/block-library/style.min.css?ver=6.2.2' media='all'>
    <link rel='stylesheet' id='classic-theme-styles-css' href='<?php echo $site_theme; ?>wp-includes/css/classic-themes.min.css?ver=6.2.2' media='all'>
    <link rel="stylesheet" href="<?php echo $site_theme; ?>assets/header.css">
    <link rel='stylesheet' id='contact-form-7-css' href='<?php echo $site_theme; ?>wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.6' media='all'>
    <link rel='stylesheet' id='font-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/icon-font.css?ver=1' media='all'>
    <link rel='stylesheet' id='style-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/style.css?ver=1' media='all'>
    <link rel='stylesheet' id='fancybox-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/fancybox.min.css?ver=1' media='all'>
    <link rel='stylesheet' id='swiper-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/swiper.min.css?ver=1' media='all'>
    <link rel='stylesheet' id='bootstrap-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/bootstrap.min.css?ver=1' media='all'>
    <link rel='stylesheet' id='odometer-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/odometer.min.css?ver=1' media='all'>
    <link rel='stylesheet' id='flaticon-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/css/flaticon.css?ver=1' media='all'>
    <link rel='stylesheet' id='custom-css' href='<?php echo $site_theme; ?>wp-content/themes/datax/custom.css?ver=1' media='all'>
    <link rel="https://api.w.org/" href="<?php echo $site_theme; ?>wp-json/index.htm">
    <link rel="alternate" type="application/json" href="<?php echo $site_theme; ?>wp-json/wp/v2/pages/5">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo $site_theme; ?>xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo $site_theme; ?>wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.2.2">
    <link rel="canonical" href="<?php echo $site_theme; ?>index.htm">
    <link rel='shortlink' href='<?php echo $site_theme; ?>index.htm'>
    <link rel="alternate" type="application/json+oembed" href="<?php echo $site_theme; ?>wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgarantiwebtasarim.com%2Fwordpress%2Fdatax%2F">
    <link rel="alternate" type="text/xml+oembed" href="<?php echo $site_theme; ?>wp-json/oembed/1.0/embed-1?url=https%3A%2F%2Fgarantiwebtasarim.com%2Fwordpress%2Fdatax%2F&#038;format=xml">
    <style id="wp-custom-css">
        .hizmet-kutu .kutu-duzen p {
            font-size: 16px;
        }

        .services-special .inner-box p {
            font-size: 16px;
        }

        p.paragraf-slider.wow.fadeInLeft {
            font-size: 18px;
        }
    </style>
    <style>
        .swiper-pagination-bullet {
            margin-left: 5px;
        }

        .navbar-nav .nav-link:hover {
            color: #ffffff;
        }

        .dropdown-menu {
            background: #1c437f;
        }

        .page-transition {
            background: #1c437f;
        }

        .preloader {
            background: #1c437f;
        }

        .navbar .site-menu ul li a:hover {
            color: #ffffff;
        }

        .slider .main-slider .swiper-slide .container a {
            background: #1c437f;
        }

        .slider .main-slider .swiper-slide .container a:hover {
            background: #1c437f;
        }

        .navbar .navbar-button a {
            background: #1c437f;
        }

        .side-widget {
            background: #1c437f;
        }

        .slider .button-next:hover {
            background: #1c437f;
        }

        .custom-button {
            background: #1c437f;
        }

        .hizmet-kutu .kutu-duzen:hover {
            background: #1c437f;
        }

        h3 a {
            color: #1c437f;
        }

        .analiz-alani .inner-box .icon-box {
            background: #1c437f;
        }

        .icon-project-detail {
            color: #1c437f;
        }

        .analiz-alani .inner-box .icon-box:before {
            background: #1c437f;
        }

        .services-special .icon-box:before {
            background: #1c437f;
        }

        .services-special .icon-box .anim-icon .icon-3 {
            background: #1c437f;
        }

        .custom-button:hover {
            background: #0e3877;
        }

        .custom-button12 {
            background: #1c437f;
        }

        .custom-button12:hover {
            background: #0e3877;
        }

        .preloader figure:after {
            border-top: 2px solid rgba(255, 255, 255, 0.312);
        }

        .counter-box h6:after {
            color: #0e3877;
        }

        li a:hover {
            color: #1c437f;
        }

        input#wp-block-search__input-1 {
            border-bottom: 0.3rem solid #1c437f;
        }

        input#wp-block-search__input-2 {
            border-bottom: 0.3rem solid #1c437f;
        }

        input#wp-block-search__input {
            border-bottom: 0.3rem solid #1c437f;
        }

        .slider .button-prev:hover {
            background: #1c437f;
            border-color: transparent;
        }

        .content-section {
            background: #1c437f
        }

        .content-section.bottom-dark-spacing:after {
            background: #1c437f;
        }

        .section-title h2 {
            color: #1c437f;
        }

        .image-box .time {
            color: #1c437f;
        }

        .side-content form button[type="submit"] {
            color: #1c437f;
        }

        .side-image .side-timetable li b {
            color: #1c437f;
        }

        .side-member figcaption {
            background: #1c437f;
        }

        .custom-progress span {
            color: #1c437f;
        }

        .custom-progress .progress-bar .progress {
            background: #1c437f;
        }

        .tab-wrapper .tab-nav li.active a {
            background: #1c437f;
        }

        .tab-wrapper .tab-nav li.active a:hover {
            background: #0e3877;
        }

        .tab-wrapper .tab-item .tab-inner {
            background: #1c437f;
        }

        .tab-wrapper .tab-item .tab-inner ul li span {
            color: #1c437f;
        }

        .service-box {
            background: #1c437f;
        }

        .service-box:before {
            background: #1c437f;
        }

        .image-overlap-box figure {
            background: #1c437f;
        }

        .image-overlap-box .content a:hover {
            color: #0e3877;
        }

        .video {
            background: #1c437f;
        }

        .video a {
            color: #1c437f;
        }

        .class-box figure {
            background: #1c437f;
        }

        .text-box h5 {
            color: #1c437f;
        }

        .recent-news figure {
            background: #1c437f;
        }

        .recent-news .content h3 a {
            color: #1c437f;
        }

        .recent-news .content small span {
            background: #1c437f;
        }

        .blog-box figure {
            background: #1c437f;
        }

        .blog-box .content h3 a {
            color: #1c437f;
        }

        .blog-box .content blockquote {
            color: #1c437f;
        }

        .sidebar .widget .widget-title {
            color: #1c437f;
        }

        .sidebar .widget .widget-title:before {
            background: #1c437f;
        }

        .sidebar .widget form input[type="submit"] {
            background: #1c437f;
        }

        .sidebar .widget .categories li a {
            color: #1c437f;
        }

        .branch-box h6 {
            color: #1c437f;
        }

        .branch-box a {
            color: #1c437f;
        }

        .member-box figcaption {
            background: #1c437f;
        }

        .icon {
            background: #1c437f;
        }

        .iconsv {
            background: #1c437f;
            border: 2px solid;
        }

        .iconk {
            color: #f5f5f5;
        }

        .iconk:hover {
            color: #0e3877;
        }

        .sidebar-service {
            background: #1c437f;
        }

        span.menu-service {
            background: #1c437f;
        }

        span.menu-service:hover {
            background: #0e3877;
        }

        span.menu-service.menuactive {
            background: #0e3877;
        }

        .iconleft {
            color: #1c437f;
        }

        .iconleft:hover {
            color: #0e3877;
        }

        a.menucolor {
            color: #1c437f;
        }

        a.menucolor:hover {
            color: #0e3877;
        }

        .pagination .page-item .page-link {
            color: #1c437f;
        }

        .footer {
            background: #1c437f;
        }

        .footer .footer-info a {
            color: #1c437f;
        }

        .footer .copyright {
            background: #1c437f;
        }

        .footer .footer-social li a:hover {
            background: #0e3877;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .iconk {
            color: #1c437f;
        }

        .iconk:hover {
            color: #0e3877;
        }

        .iconleft {
            color: #1c437f;
        }

        .iconk {
            color: #1c437f;
        }

        .iconk:hover {
            color: #0e3877;
        }

        .iconleft {
            color: #1c437f;
        }

        span.menu-service {
            color: #1c437f;
        }

        textarea#comment {
            border-bottom: 0.3rem solid #1c437f;
        }

        input#author {
            border-bottom: 0.3rem solid #1c437f;
        }

        input#email {
            border-bottom: 0.3rem solid #1c437f;
        }

        input#url {
            border-bottom: 0.3rem solid #1c437f;
        }

        .paketler2__on--arkayazi-1 {
            background: linear-gradient(to right bottom, #1c437f, #0e3877d7);
        }

        .form__input {
            border-bottom: 0.3rem solid #1c437f;
        }

        .form__input:focus {
            border-bottom: 0.3rem solid #1c437f;
        }

        .form__input:focus:invalid {
            border-bottom: 0.3rem solid #1c437f;
        }

        .form__radio-buton {
            border: 0.5rem solid #1c437f;
        }

        .form__radio-buton::after {
            background-color: #1c437f;
        }

        .form-popup__input {
            border-bottom: 0.3rem solid #1c437f;
        }

        .form-popup__input:focus {
            border-bottom: 0.3rem solid #1c437f;
        }

        .form-popup__input:focus:invalid {
            border-bottom: 0.3rem solid #1c437f;
        }

        .hizmetler-kutu--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .ozellik-kutu--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .post-kutu--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .yorum-kutu--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .ozellik-kutu-iletisim--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .baslik-4--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .yukaricik {
            background-image: linear-gradient(to right bottom, #1c437f, #0e3877);
        }

        .footer {
            background-image: linear-gradient(to right bottom, #1c437f, #0e3877);
        }

        .footer-404 {
            background-image: linear-gradient(to right bottom, #1c437f, #0e3877);
        }

        .paketler-alani {
            background-color: #1c437f;
        }

        .form-alani {
            background-image: linear-gradient(to right bottom, #1c437f, #0e3877);
        }

        .markalar {
            background: #1c437f;
        }

        .h2-baslik-hizmetler {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .h2-baslik-hizmetler__paragraf {
            color: #1c437f;
        }

        .h2-baslik-hizmetler-2 {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .side-widget small {
            color: #fff;
        }

        .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background: #1c437f;
        }

        ::-webkit-scrollbar-thumb {
            background: #1c437f;
        }

        .custom-buttonw1 {
            border-bottom: 0.3rem solid #1c437f;
        }

        .iconsocia {
            color: #fff;
        }

        .iconsocia:hover {
            color: #fff;
        }

        .paketler3__gorsel--1 {
            background-image: linear-gradient(to right bottom, #1c437f, #0e3877)
        }

        .paketler3__on--arkayazi-1 {
            background-image: linear-gradient(to right bottom, #1c437f, #0e3877)
        }

        p.countb {
            background: #1c437f;
        }

        .icontops {
            background: #1c437f;
        }

        input#submit {
            background: #1c437f;
        }

        .custom-buttonw:hover {
            background: #1c437f;
        }

        .comment-meta.commentmetadata a:hover {
            color: #0e3877;
        }

        a.comment-edit-link:hover {
            color: #0e3877;
        }

        p.logged-in-as a:hover {
            color: #0e3877;
        }

        .menu-item a:hover {
            color: #0e3877;
        }

        li a {
            color: #000000;
        }

        .tag-cloud-link {
            color: #1c437f;
        }

        .tagcloud a:hover {
            color: #0e3877;
        }

        li#recent-posts-5 a:hover {
            color: #0e3877;
        }

        input#s {
            border-bottom: 0.3rem solid #0e3877;
        }

        .telh {
            background: #1c437f;
            border: 2px solid;
        }

        .iconsociai {
            color: #fff;
        }

        .iconsociai:hover {
            color: #fff;
        }

        ::selection {
            background-color: #1c437f;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #0e3877;
        }

        .ozellik-kutu-yorumlar--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .services-kutu1--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .services-kutu2--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        .services-kutu3--icon {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
        }

        b.fn a:hover {
            color: #0e3877;
        }

        li a:hover {
            color: #0e3877;
        }

        .wp-block-latest-posts__list a:hover {
            color: #1c437f;
        }

        .wp-post-image {
            height: 100%;
        }

        .component-systemTabs .cards .card .cardContent {
            border-image: linear-gradient(to right, #1c437f, #0e3877);
            border-image-slice: 1;
        }

        .paketler3__icerik {
            padding: 0rem;
        }

        .services-kutu2--yazi1 {
            width: 100%;
        }

        Satoshi Black30700 Satoshi Regular16400

        /* text primary */
        .person {
            color: #1c437f;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .ozellik-kutu-iletisim--yazi {
            color: #1c437f;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .footer-info p {
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        p {
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .h2-baslik-hizmetler-21__paragraf {
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paketler3__icerik ul li {
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        body {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-info {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        span.date {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
        }

        span.category {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
        }

        span.tt {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-info a {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-sol-beyaz a {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-sol-beyaz-orta a {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-ahp a {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-pdetay a {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-404 a {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .h2-baslik-hizmetler-yorum__yorum {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .testimon-text {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .post-kutu p {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .services-kutu2--yazi1 {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .h2-baslik-hizmetler-2__paragraf {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        .paragraf-popup {
            color: #212529;
            font-family: Satoshi Regular;
            font-size: 16px;
            font-weight: 400;
        }

        ul.post-categories {
            color: #1c437f;
            font-family: Satoshi Regular;
            font-size: 16px;
        }

        .services-kutu2--yazi {
            font-family: Satoshi Regular;
            font-size: 16px;
        }

        /* headings */
        .component-systemTabs .cards .card .cardContent h2 {
            font-family: Satoshi Black;
        }

        .hizmet-kutu .kutu-duzen .icon-box i {
            color: #1c437f;
            font-family: Satoshi Black;
        }

        h3 {
            color: #1c437f;
            font-family: Satoshi Black;
            font-size: 25px;
        }

        .h2-baslik-anasayfa {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            border-bottom: .1rem solid #1c437f;
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-anasayfa-ozel {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-anasayfa-ozel1 {
            color: #1c437f;
            font-family: Satoshi Black;
            font-size: 40px;
            font-weight: 700;
        }

        .h2-baslik-anasayfa-blog {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-ahb {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-bottom {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-404 {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-footer {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-iletisim-ozel {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-popup {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .baslik-3-h {
            color: #1c437f;
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .baslik-33 {
            color: #1c437f;
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .baslik-star {
            color: #1c437f;
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-hizmetler-yorum {
            background-image: linear-gradient(to right, #1c437f, #0e3877);
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .baslik-3s {
            color: #1c437f;
            font-family: Satoshi Black;
        }

        .baslik-3white {
            font-family: Satoshi Black;
        }

        .counter-box .odometer {
            color: #1c437f;
            font-family: Satoshi Black;
        }

        .baslik-orta {
            font-size: 23px;
            color: #1c437f;
            font-family: Satoshi Black;
            font-weight: 700;
        }

        .baslik-4 {
            color: #1c437f;
            font-family: Satoshi Black;
            font-weight: 700;
        }

        .counter-box h6 {
            color: #1c437f;
            font-family: Satoshi Black;
        }

        .slider .main-slider .swiper-slide .container h1 {
            font-family: Satoshi Black;
        }

        .slider .main-slider .swiper-slide .container p {
            font-family: Satoshi Black;
        }

        .slider .main-slider .swiper-slide .container a {
            font-family: Satoshi Black;
        }

        .custom-button {
            font-family: Satoshi Black;
        }

        .custom-buttonw {
            font-family: Satoshi Black;
        }

        .baslik-sol {
            font-family: Satoshi Black;
        }

        .member-box figcaption h6 {
            font-family: Satoshi Black;
        }

        .member-box figcaption p {
            font-family: Satoshi Black;
        }

        .h2-baslik-hizmetler-2 {
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-hizmetler-21 {
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .h2-baslik-hizmetler-2111 {
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .baslik-3-service {
            font-family: Satoshi Black;
        }

        .paketler3__pr-yazi {
            font-family: Satoshi Black;
        }

        .paketler3__pr-degeri {
            font-family: Satoshi Black;
            font-size: 30px;
            font-weight: 700;
        }

        .baslik-3 {
            font-size: 23px;
            color: #1c437f;
            font-family: Satoshi Black;
        }

        .footer .widget-title {
            font-family: Satoshi Black;
        }

        .page-header .container h2 {
            font-family: Satoshi Black;
        }

        .h2-baslik-hizmetler-2-s {
            font-family: Satoshi Black;
        }

        .component-systemTabs .tabs-container ul.tabs li.current {
            color: #1c437f;
            border-bottom: 4px solid #1c437f;
        }

        ul.tabs li {
            font-family: Satoshi Black;
        }

        .component-systemTabs .cards .card .cardContent button {
            font-family: Satoshi Black;
        }


        /* text secondary */
        .reply a:hover {
            color: #0e3877;
        }

        cite.fn a:hover {
            color: #0e3877;
        }

        time:hover {
            color: #0e3877;
        }

        .counter-box h6:after {
            color: #0e3877;
        }

        /* service background */
        .services1 {
            background: transparent url(wp-content/uploads/2022/05/service-bg.jpg) center center/cover no-repeat scroll;
        }

        .projeler-sayfa-alani {
            background: transparent url(wp-content/uploads/2022/05/projects-bg.png) center center/cover no-repeat scroll;
        }


        /*
responsive
*/

        @media only screen and (min-width: 1199px),
        only screen and (max-width: 1199px) {

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

            span.menu-service {
                color: #1c437f;
            }

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

        }

        @media only screen and (min-width: 991px),
        only screen and (max-width: 1180px) {

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

            span.menu-service {
                color: #1c437f;
            }

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

        }

        @media only screen and (min-width: 767px),
        only screen and (max-width: 767px) {

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
                font-size: 60px;
            }

            span.menu-service {
                color: #1c437f;
            }

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

        }

        @media (min-width: 820px) and (max-width: 820px) {

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

            span.menu-service {
                color: #1c437f;
            }

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

        }

        @media (min-width: 767px) and (max-width: 850px) {

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

            span.menu-service {
                color: #1c437f;
            }

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

        }


        @media (min-width: 1180px) and (max-width: 1200px) {

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

            span.menu-service {
                color: #1c437f;
            }

            .iconk {
                color: #1c437f;
            }

            .iconk:hover {
                color: #0e3877;
            }

            .iconleft {
                color: #1c437f;
            }

            .icon {
                background: #1c437f;
            }

        }

        body {
            overflow-y: scroll;
            overflow-x: hidden;
        }
    </style>




    <title>Datax - Data Science & Machine Learning WordPress Theme</title>



    <link rel="shortcut icon" type="image/png" href="wp-content/uploads/2022/05/favicon-datax.png">



    <meta name="description" content="Bring the Value of Artificial Intelligence to Life Faster to Achieve Breakthrough Innovations.">


</head>

<body>