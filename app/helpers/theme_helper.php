<?php

function get_google_map() {
    echo '<iframe src="' . config_item('google_map') . '" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
}

function get_school_affilcation() {
    $html = '<span class="config-affilation">' . config_item('affilation_no') . '</span>';
    echo $html;
}

function get_school_code() {
    $html = '<span class="config-school-code">' . config_item('school_code') . '</span>';
    echo $html;
}

function site_developed_by() {
    $link = '<a class="copyright" href="' . config_item('developed_by_url') . '" target="_blank">' . config_item('developed_by') . '</a>';
    echo $link;
}

function site_logo() {
    $img_name = 'site_settings/' . config_item('site_logo');
    $attribute = array(
        "height" => config_item('logo_height'),
        "width" => config_item('logo_width'),
        "alt" => config_item('site_logo'),
        "class" => "site-logo"
    );
    echo show_image($img_name, $attribute);
}

function site_favicon() {
    $img_src = config_item('media_url') . 'site_settings/' . config_item('site_favicon');
    $html = '<link rel="icon" href="' . $img_src . '" sizes="16x16 32x32" type="image/png">';
    echo $html;
}
