<div class="side_bar">
<!--    --><?php //if ( !function_exists('dynamic_sidebar')
//        || !dynamic_sidebar('First_sidebar') ) : ?>
<!--        <ul class="categ_sidebar">-->
<!--            --><?php //wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
<!--        </ul>-->
<!--    --><?php //endif; ?>
    <div class="tag_wrap">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Second_sidebar') ) : ?>
            <h3>标签<span class="en">tags</span></h3>
            <ul class="tags">
                <?php wp_tag_cloud("smallest=10&largest=18&exclude=3,4");?>
            </ul>
        <?php endif; ?>
    </div>

    <div class="latest_blog">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('Second_sidebar') ) : ?>
            <h3>近期文章<span class="en">recent article</span></h3>
            <ul class="article_recent">
                <?php
                $posts = get_posts('numberposts=6&orderby=post_date&cat=-4');
                foreach($posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                $post = $posts[0];
                ?>
            </ul>
        <?php endif; ?>
    </div>
<!--    <div class="latest_blog">-->
<!--        --><?php //if ( !function_exists('dynamic_sidebar')
//            || !dynamic_sidebar('Third_sidebar') ) : ?>
<!--            <h4>标签云</h4>-->
<!--            <p>--><?php //wp_tag_cloud('smallest=8&largest=22'); ?><!--</p>-->
<!--        --><?php //endif; ?>
<!--    </div>-->
<!--    <div class="latest_blog article_archive">-->
<!--        --><?php //if ( !function_exists('dynamic_sidebar')
//            || !dynamic_sidebar('Fourth_sidebar') ) : ?>
<!--            <h4>文章存档</h4>-->
<!--            <ul>-->
<!--                --><?php //wp_get_archives('limit=10'); ?>
<!--            </ul>-->
<!--        --><?php //endif; ?>
<!--    </div>-->
</div>