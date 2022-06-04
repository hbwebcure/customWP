<section class="hero-section about part-screen shadowed-right position-relative">
    <?php if(!empty(get_field('banner_image_cbb'))){ ?>
    <img class="position-absolute background" src="<?php the_field('banner_image_cbb'); ?>" alt="">
    <?php } ?>
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-8 col-12 h-100 d-flex flex-column justify-content-center position-relative">
            <div class="text">
                <div data-aos="fade-right">
                    <?php if(!empty(get_field('small_caption_cbb'))){ ?>
                    <span class="text-small"><?php the_field('small_caption_cbb'); ?></span>
                    <?php } if(!empty(get_field('heading_cbb'))){ ?>
                    <h1 class="font-weight-bold hero-header"><?php the_field('heading_cbb'); ?></h1>
                    <?php } if(!empty(get_field('text_cbb'))){ ?>
                    <p class="header-text-big"><?php the_field('text_cbb'); ?></p>
                    <?php } if(!empty(get_field('button_text_cbb'))){ ?>
                    <a href="<?php the_field('button_link_cbb'); ?>" class="button-white"><?php the_field('button_text_cbb'); ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-6"></div>
    </div>
</section>