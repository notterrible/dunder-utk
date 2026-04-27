<?php
/**
 * The main template file
 */

get_header();
?>

<div class="container">
    <div class="content-area" style="padding: 4rem 0;">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 3rem;">
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="entry-meta" style="color: #888; font-size: 0.9rem; margin-bottom: 1rem;">
                            <?php echo get_the_date(); ?> | <?php the_author(); ?>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="entry-thumbnail" style="margin-bottom: 1rem;">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                    </div>
                </article>
                <?php
            endwhile;

            the_posts_navigation();
        else :
            ?>
            <p>No content found.</p>
        <?php
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
