<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CBD
 */
get_header();
while(have_posts()) : the_post();
    $facebook_share = 'https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink();
    $twitter_share = 'https://twitter.com/share?text='.get_the_title().'&url='.get_the_permalink();
    $linkedin_share = 'https://www.linkedin.com/sharing/share-offsite/?url='.get_the_permalink(); ?>
    <section class="_page">
        <div class="container">
            <h1 class="mb-5"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile;
get_footer();
