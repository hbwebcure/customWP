<section class="hero-section product-hero part-screen shadowed-right position-relative">
    <div class="row">
        <div class="col-xl-6 bg-black col-lg-7 col-md-8 col-12 h-100 d-flex flex-column justify-content-center position-relative">
            <div class="text">
                <div data-aos="fade-right">
                    <span class="text-small"><?php the_field('sub_heading_cb2'); ?></span>
                    <h1 class="font-weight-bold hero-header"><?php the_field('heading_cb2'); ?></h1>
                    <p class="header-text-big"><?php the_field('text_cb2'); ?></p>
                </div>
            </div>
        </div>
        <?php if(!empty(get_field('image_cb2'))){ ?>
        <div class="col-xl-6 col-lg-5 col-md-4 d-none d-md-inline h-100">
            <img class="position-absolute h-100 w-100 object-cover" src="<?php the_field('image_cb2'); ?>" alt="">
        </div>
        <?php } ?>
    </div>
</section>