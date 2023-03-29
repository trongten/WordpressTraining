<?php
global $theme_prefix,$theme_uri;
$theme = 'wordpresstraining';
$theme_uri = get_template_directory_uri().'/assets';
$theme_version = '1.0';

add_action('wp_enqueue_scripts', 'wordpresstraining_style');
function wordpresstraining_style()
{   
    global $theme_prefix,$theme_uri,$theme_version;
   
    wp_enqueue_style($theme_prefix.'-style', $theme_uri,[],$theme_version,'all');
   /*
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap' rel='stylesheet'>

    <!-- Css Styles -->
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/bootstrap.min.css' type='text/css'>
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/font-awesome.min.css' type='text/css'>
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/elegant-icons.css' type='text/css'>
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/nice-select.css' type='text/css'>
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/jquery-ui.min.css' type='text/css'>
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/owl.carousel.min.css' type='text/css'>
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/slicknav.min.css' type='text/css'>
    <link rel='stylesheet' href='<?= $theme_uri.'/';?>css/style.css' type='text/css'>
   */
    wp_enqueue_style($theme_prefix.'-gooogle-font', 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap');
    wp_enqueue_style($theme_prefix.'-bootstrap-css', $theme_uri.'/css/bootstrap.min.css');
    wp_enqueue_style($theme_prefix.'-font-awesome', $theme_uri.'/css/font-awesome.min.css');
    wp_enqueue_style($theme_prefix.'-elegant-icons', $theme_uri.'/css/elegant-icons.css');
    wp_enqueue_style($theme_prefix.'-nice-select', $theme_uri.'/css/nice-select.css');
    wp_enqueue_style($theme_prefix.'-jquery-ui-min', $theme_uri.'/css/jquery-ui.min.css');
    wp_enqueue_style($theme_prefix.'-owl-carousel', $theme_uri.'/css/owl.carousel.min.css');
    wp_enqueue_style($theme_prefix.'-slicknav', $theme_uri.'/css/slicknav.min.css');
    wp_enqueue_style($theme_prefix.'-style-css', $theme_uri.'/css/style.css');





}