<section class="description overflow-hidden">
    <div class="row">
        <?php if(!empty(get_field('primary_image_mb'))){ ?>
            <div class="col-lg-6 left-image-container" data-aos="fade-right">
                <img class="object-cover w-100 h-100 position-absolute" src="<?php the_field('primary_image_mb'); ?>" alt="">
            </div>
        <?php } ?>
        <div data-aos="fade-left" class="col-lg-6 p-20vh section-padding-right desc-col">
            <?php if(!empty(get_field('primary_heading_mb'))){ ?>
                <h1 class="hero-text-smaller hero-mb"><?php the_field('primary_heading_mb'); ?></h1>
            <?php } if(!empty(get_field('primary_content_mb'))){ ?>
                <p class="paragraph">
                    <?php the_field('primary_content_mb'); ?>
                </p>
            <?php } ?>
        </div>
    </div>
    <?php if(get_field('enable_secondary_block') == 'yes'){ ?>
        <div class="container-fluid bg-gray details-container">
            <div class="row">
                <div class="col-md-6 col-12 first-col">
                    <div class="text" data-aos="fade-right">
                        <?php if(!empty(get_field('first_block_heading'))){ ?>
                            <h1 class="hero-text-smaller hero-mb">
                                <?php the_field('first_block_heading'); ?>
                            </h1>
                        <?php } if(!empty(get_field('first_block_text'))){ ?>
                            <p class="paragraph mb-5">
                                <?php the_field('first_block_text'); ?>
                            </p>
                        <?php } ?>
                    </div>
                    <?php if(!empty(get_field('first_block_image'))){ ?>
                        <div class="image">
                            <img class="w-100 h-auto" src="<?php the_field('first_block_image'); ?>" alt="" data-aos="fade-right" data-aos-delay="100">
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-6 col-12 second-col">
                    <?php if(!empty(get_field('second_block_image'))){ ?>
                        <div class="image">
                            <img class="w-100 h-auto" data-aos="fade-left" src="<?php the_field('second_block_image'); ?>" alt="">
                        </div>
                    <?php } ?>
                    <div class="text" data-aos="fade-left" data-aos-delay="100">
                        <?php if(!empty(get_field('second_block_heading'))){ ?>
                            <h1 class="hero-text-smaller hero-mb mt-5">
                                <?php the_field('second_block_heading'); ?>
                            </h1>
                        <?php } if(!empty(get_field('second_block_text'))){ ?>
                            <p class="paragraph">
                                <?php the_field('second_block_text'); ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>