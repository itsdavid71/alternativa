
<?php get_header(); ?>

<div class="post-background">
    
</div>
<?php if (have_posts()) : while (have_posts()) : the_post();
    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<div class="content-background" style="background: url(<?php echo $thumbnail_url; ?>) center center / cover no-repeat">
    <div class="content">
        <div class="post-image">
                <?php
                    the_post_thumbnail('large');
                    ?>
        </div>
        <div class="post-content">
            <h2><?php the_title(); ?></h2>
            <p class="post-item-date"><?php echo get_the_date('j F Y'); ?></p>

            <div><?php the_content(); ?></div>
        </div>
    </div>
        
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
