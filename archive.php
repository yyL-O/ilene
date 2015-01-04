<?php get_header(); ?>

    <div class="wrapper cf">
        <div class="main_wrap">
            <div class="article_wrap">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php if (in_category('4') && is_home()) continue; ?>
                    <!--文章一-->
                    <article class="article">
                        <div class="article_box clearfix">
                            <div class="article_pic">
                                <a class="article_img_wrap" href="<?php the_permalink(); ?>">
                                    <?php if ( function_exists( 'the_post_thumbnail' ) )  the_post_thumbnail( 'thumbnail' ); ?>
                                </a>
                                <span class="article_tag"><?php the_tags('', ', ', ''); ?></span>
                            </div>
                            <div class="article_content">
                                <header class="aticle_head">
                                    <h2 class="article_title"><a class="article_title_a" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                </header>
                                <div class="article_words">
                                    <?php the_content()?>
                                </div>
                            </div>
                        </div>
                        <footer class="article_footer">
                            <p class="article_time">posted @<?php the_time('Y-n-j') ?> by Ilene</p>
                            <div class="comments">
                                <span class="read_num"><?php the_views(); ?></span>
                                <?php if ( comments_open() && ! is_single() ) : ?>
                                    <span class="comments_link">
                                        <?php comments_popup_link('0 comment', '1 comment', '% comments', '', '评论已关闭'); ?>
                                    </span><!-- .comments-link -->
                                <?php endif; // comments_open() ?>
                            </div>
                        </footer>
                    </article>
                <?php endwhile; ?>
                <?php else : ?>
                    <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
                    <p>没有找到任何文章！</p>
                <?php endif; ?>
            </div>
        </div>
        <?php get_sidebar() ?>
    </div>
<?php get_footer() ?>