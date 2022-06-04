<?php
/*
  * Category Page
  */
get_header(); ?>
    <section class="_page">
        <div class="container">
            <h1 class="mb-5"><?php single_cat_title(); ?></h1>
            <div class="row">
                <?php while(have_posts()) : the_post(); ?>
                    <div class="col-lg-6 mb-5">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <div class="_bc">
                            <a href="<?php the_permalink(); ?>" class="button-outlined text-capitalize overflow-hidden"><?php esc_attr_e('Read more','cbd'); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php cbd_pagination($pages = '', $range = 2); ?>
        </div>
    </section>
<?php get_footer(); ?>