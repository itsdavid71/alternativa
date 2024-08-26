<?php get_header(); ?>

<div class="content green-circle">
    <h1>Блог</h1>
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Найти" />
    </form>
    <div class="post-items">

    <?php
    
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => -1,
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
    ?>
            <a href="<?php the_permalink(); ?>" class="post-item">
                    <div class="post-item-img">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            }
                        ?>
                    </div>
                    <p class="post-item-date"><?php echo get_the_date('j F Y'); ?></p>
                    <p class="post-item-title"><?php the_title(); ?></p>
            </a>
        
    <?php
        endwhile;
        wp_reset_postdata(); else:
        echo '<p class="content-p-empty">Записей пока нет.</p>';
        endif;
    ?>
    </div>

</div>

<?php get_footer(); ?>
