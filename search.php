<?php get_header(); ?>

<div class="content">
    <h1>Результаты поиска: <?php echo get_search_query(); ?></h1>
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Найти" />
    </form>
    <div class="post-items">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="post-item">
                    <div class="post-item-img">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large'); // Выводит изображение в оригинальном размере
                        }
                        ?>
                    </div>
                    <p class="post-item-date"><?php echo get_the_date('j F Y'); ?></p>
                    <p class="post-item-title"><?php the_title(); ?></p>
            </a>
        <?php endwhile; else: ?>
            <p class="content-p-empty">По вашему запросу ничего не найдено.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
