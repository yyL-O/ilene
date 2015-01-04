<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <html lang="zh-cmn-Hans">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="keywords" content="前端开发，用户体验，程序媛">
    <meta name="description" content="关注前端开发，注重用户体验">
    <meta name="author" content="Ilene,ilene.yali@gmail.com">
    <meta name = "viewport" content ="initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>
        <?php bloginfo('name'); ?>
        <?php bloginfo('description'); ?>
        <?php wp_title( '-', true, '' ); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div class="header">
        <header class="header_wrap cf">
            <h1 class="logo_wrap cf"><a class="logo" href="/">Y.Ilene's Blog</a></h1>
            <?php
            // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
            wp_nav_menu( array( 'menu' => 'main-nav', 'depth' => 1) );
            ?>
            <div class="search_box">
                <input class="search" type="text" />
                <i class="search_icon"></i>
            </div>
        </header>
    </div>

