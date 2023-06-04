<?php

function meta_tags($cms) {
    $html = '<meta charset="utf-8" />';
    $html .= "\n\t" . '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
    $html .= "\n\t" . '<meta name="viewport" content="width=device-width, initial-scale=1" />';
    if (isset($cms->meta_description) && $cms->meta_description != '') {
        $html .= "\n\t" . '<meta name="description" content="' . $cms->meta_description . '"/>';
    }
    if (isset($cms->meta_keywords) && $cms->meta_keywords != '') {
        $html .= "\n\t" . '<meta name="keywords" content="' . $cms->meta_keywords . '" />';
    }
    if (isset($cms->meta_robots) && $cms->meta_robots != '') {
        $html .= "\n\t" . '<meta name="robots" content="' . $cms->meta_robots . '" />';
    }
    echo $html;
}

function google_analytics() {
    $code = config_item('google_analytics_code');
    if (isset($code) && $code != '') {
        echo $code;
    }
}

function get_review_star($rating) {
    $html = '<span>';
    for ($i = 1; $i <= $rating; $i++) {
        $html .= '<span class="fa fa-star star-checked"></span>';
    }
    for ($i = $rating; $i <= 5; $i++) {
        $html .= '<span class="fa fa-star"></span>';
    }
    $html .= '</span>';
    echo $html;
}

function show_youtube_video($youtube_video_id, $width = 300, $height = 300) {
    $url = 'http://www.youtube.com/embed/' . $youtube_video_id;
    $html = '<iframe width="' . $width . 'px" height="' . $height . 'px" src="' . $url . '"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>';
    echo $html;
}

?>