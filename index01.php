<?php get_header(); ?>

    <div class="wrapper cf">
        <div class="main_wrap">
<!--            <!--banner滚动图片-->-->
<!--            <div class="banner">-->
<!--                <ul class="banner_wrap">-->
<!--                    <li class="banner_list banner_show">-->
<!--                        <a class="banner_a" href="#">-->
<!--                            <img class="banner_img" src="--><?php //echo get_template_directory_uri(); ?><!--/images/banner-1-770-400-201409191526.jpg" alt=""/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="banner_list">-->
<!--                        <a class="banner_a" href="#">-->
<!--                            <img class="banner_img" src="--><?php //echo get_template_directory_uri(); ?><!--/images/banner-1-770-400-201409191526.jpg" alt=""/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="banner_list">-->
<!--                        <a class="banner_a" href="#">-->
<!--                            <img class="banner_img" src="--><?php //echo get_template_directory_uri(); ?><!--/images/banner-1-770-400-201409191526.jpg" alt=""/>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
            <!--文章列表-->
            <div class="article_wrap">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php if (in_category('4') && is_home()) continue; ?>
                    <!--文章一-->
                    <article class="article">
                        <header class="article_header">
                            <h2 class="article_title">
                                <a class="article_title_a" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </h2>
                        </header>
                        <div class="article_content cf">
                            <a class="article_img_box" href="<?php the_permalink() ?>">
                                <img class="article_img" src="<?php echo catch_that_image() ?>" alt="<?php the_title() ?>"/>
                            </a>
                            <div class="article_words">
                                <?php the_content()?>
                            </div>
                        </div>
                        <footer class="article_footer">
                            <span class="article_time"><?php the_time('Y-n-j') ?></span>
                            <span class="article_tag"><?php the_tags('', ', ', ''); ?></span>
                            <a class="read_more" href="<?php the_permalink(); ?>">READ MORE</a>
                        </footer>
                    </article>
                <?php endwhile; ?>
                <?php else : ?>
                    <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
                    <p>没有找到任何文章！</p>
                <?php endif; ?>
                <p class="goto_blog">
                    <a class="goto_blog_a" href="#">READ MORE</a>
                </p>
            </div>
        </div>
        <?php get_sidebar() ?>
    </div>
<?php get_footer() ?>