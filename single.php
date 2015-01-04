<?php get_header() ?>
    <div class="wrapper cf">
        <div class="main_wrap">
            <div class="article_wrap">
                <?php /* The loop */ ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                    <article class="single_article">
                        <h2 class="single_title"><?php the_title() ?></h2>
                        <div class="single_info">
                            <span class="read_num"><?php the_views(); ?></span>
                            <span class="single_reply"><?php comments_popup_link('0 comment', '1 comment', '% comments', '', '评论已关闭'); ?></span>
                            <span class="single_tag">标签：<?php the_tags('', ', ', ''); ?></span>
                            <span class="single_time">发布于<?php the_time('Y-n-j') ?></span>
                        </div>
                        <div class="single_content"><?php the_content(); ?></div>
                    </article>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
                    <p>没有找到任何文章！</p>
                <?php endif; ?>
            </div>
            <?php comments_template('', true);?>
        </div>
        <?php get_sidebar() ?>
    </div>
<?php get_footer() ?>