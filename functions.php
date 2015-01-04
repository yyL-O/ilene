<?php

//自定义菜单
// This theme uses wp_nav_menu() in one location.
register_nav_menus();

//获取文章第一张图片，如果没有图就会显示默认的图
function catch_that_image() {

    global $post, $posts;

    $first_img = '';

    ob_start();

    ob_end_clean();

    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

    $first_img = $matches [1] [0];

    if(empty($first_img)){

        $first_img = bloginfo('template_url'). '/images/default-thumb.jpg';

    }

    return $first_img;

}
//end

if( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'First_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Second_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Third_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Fourth_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

//标签tag所包含的文章数量
function Tagno($text) {
    $text = preg_replace_callback('|<a (.+?)</a>|i', 'tagnoCallback', $text);
    return $text;
}
function tagnoCallback($matches) {
    $text=$matches[1];
    preg_match('|title=(.+?)style|i',$text ,$a);
    preg_match("/[0-9]/",$a[1],$a);return "<a ".$text ." (".$a[0].") ";
}
add_filter('wp_tag_cloud', 'Tagno', 1);
if ( has_action( 'wp_print_styles', 'wp_syntax_style' ) ) {
    remove_action( 'wp_print_styles', 'wp_syntax_style' );
};


?>
<?php if ( function_exists( 'add_theme_support' ) )   add_theme_support( 'post-thumbnails' ); ?>
