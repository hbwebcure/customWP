<section class="features position-relative dark-overlay text-white">
    <?php if(!empty(get_field('background_image_fc'))){ ?>
        <img class="position-absolute w-100 h-100 object-cover img-background" src="<?php the_field('background_image_fc'); ?>" alt="">
    <?php } ?>
    <div class="container-fluid">
        <div class="row mb-5">
            <?php if(!empty(get_field('heading_fc'))){ ?>
                <div class="col-lg-6 " data-aos="fade-right">
                    <h1 class="hero-text-smaller">
                        <?php the_field('heading_fc'); ?>
                    </h1>
                </div>
            <?php } if(!empty(get_field('text_fc'))){ ?>
                <div class="col-lg-6" data-aos="fade-left">
                    <p>
                        <?php the_field('text_fc'); ?>
                    </p>
                </div>
            <?php } ?>
        </div>
        <div class="row mt-2">
            <?php $x = 100;
            while(have_rows('add_features_fc')) : the_row(); ?>
                <div data-aos-delay="<?php echo $x; ?>" data-aos="fade-right" class="col-lg-3 border <?php if($x > 100){ echo 'border-left-0'; } ?> p-5 d-flex flex-column text-center align-items-center">
                    <?php the_sub_field('icon_svg');
                    if(!empty(get_sub_field('heading'))){ ?>
                        <h2 class="text-capitalize"><?php the_sub_field('heading'); ?></h2>
                    <?php } if(!empty(get_sub_field('text'))){ ?>
                        <p>
                            <?php the_sub_field('text'); ?>
                        </p>
                    <?php } ?>
                </div>
                <?php $x = $x + 100;
                if($x == 500){
                    $x = 100;
                } endwhile; ?>
        </div>
    </div>
</section>