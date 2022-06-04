<section class="hero-section position-relative">
    <div class="row">
        <div class="col-lg-8 col-12 d-flex flex-column justify-content-center  position-relative dark-overlay">
            <?php if(!empty(get_field('background_image_cb3'))){ ?>
            <img class="position-absolute background" src="<?php the_field('background_image_cb3'); ?>" alt="">
            <?php } ?>
            <div class="text">
                <div data-aos="fade-right">
                    <?php if(!empty(get_field('heading_cb3'))){ ?>
                    <h1 class="font-weight-bold hero-header"><?php the_field('heading_cb3'); ?></h1>
                    <?php } ?>
                    <p class="short"><?php the_field('caption_cb3'); ?></p>
                </div>
                <?php if(have_rows('add_buttons')){ ?>
                <div data-aos="fade-right" data-aos-delay="100">
                    <?php while(have_rows('add_buttons')) : the_row(); ?>
                        <a href="<?php the_sub_field('button_link'); ?>" class="button-white"><?php the_sub_field('button_text'); ?></a>
                    <?php endwhile; ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php if(!empty(get_field('background_image_cb32'))){ ?>
        <div class="col-lg-4 d-lg-block d-none position-relative">
            <img class="position-absolute background second-hero-image" src="<?php the_field('background_image_cb32'); ?>" alt="">
        </div>
        <?php } ?>
    </div>
</section>