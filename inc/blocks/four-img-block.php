<section class="description">
    <div class="container-smaller">
        <div class="row align-items-center">
            <div class="col-lg-6 img-grid-col d-lg-block d-flex justify-content-center column-padding">
                <div class="image-grid" data-aos="custom-fade">
                    <?php if(!empty(get_field('image_1_4i'))){ ?>
                        <a href="<?php the_field('image_1_4i2'); ?>" class="grid-el grid-el-1">
                            <img src="<?php the_field('image_1_4i'); ?>" alt="">
                        </a>
                    <?php } if(!empty(get_field('image_2_4i'))){ ?>
                        <a href="<?php the_field('image_2_4i2'); ?>" class="grid-el grid-el-2">
                            <img src="<?php the_field('image_2_4i'); ?>" alt="">
                        </a>
                    <?php } if(!empty(get_field('image_3_4i'))){ ?>
                        <a href="<?php the_field('image_3_4i2'); ?>" class="grid-el grid-el-3">
                            <img src="<?php the_field('image_3_4i'); ?>" alt="">
                        </a>
                    <?php } if(!empty(get_field('image_4_4i'))){ ?>
                        <a href="<?php the_field('image_4_4i2'); ?>" class="grid-el grid-el-4">
                            <img src="<?php the_field('image_4_4i'); ?>" alt="">
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 column-padding overflow-hidden">
                <?php if(!empty(get_field('heading_4i'))){ ?>
                    <h1 class="hero-text-smaller mb-hero" data-aos="fade-left">
                        <?php the_field('heading_4i'); ?>
                    </h1>
                <?php } if(!empty(get_field('text_4i'))){ ?>
                    <p class="paragraph-bigger" data-aos="fade-left"><?php the_field('text_4i'); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>