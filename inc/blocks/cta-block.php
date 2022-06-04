<section class="cta my-5 d-flex flex-column align-items-center justify-content-center">
    <?php if(!empty(get_field('heading_cta'))){ ?>
        <h1 class="hero-text mw-50 text-center" data-aos="fade-right">
            <?php the_field('heading_cta'); ?>
        </h1>
    <?php } if(!empty(get_field('button_text_cta'))){ ?>
        <a href="<?php the_field('button_link_cta'); ?>" class="button-outlined" data-aos="fade-left" data-aos-delay="100"><?php the_field('button_text_cta'); ?></a>
    <?php } ?>
</section>