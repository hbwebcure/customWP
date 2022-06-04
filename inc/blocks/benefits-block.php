<section class="product-benefits shadowed-right  position-relative text-white">
    <?php if(!empty(get_field('background_image_bb'))){ ?>
        <img src="<?php the_field('background_image_bb'); ?>" alt="" class="background position-absolute w-100 h-100 object-cover">
    <?php } ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                <?php if(!empty(get_field('heading_bb'))){ ?>
                    <h1 class="hero-text-smaller hero-mb" data-aos="fade-left">
                        <?php the_field('heading_bb'); ?>
                    </h1>
                <?php } if(have_rows('add_benefits')){ ?>
                    <div class="list">
                        <ul class="list-unstyled pl-0">
                            <?php $x = 100;
                            while(have_rows('add_benefits')) : the_row(); ?>
                                <li class="d-flex my-4 align-items-center" data-aos="fade-left" data-aos-delay="<?php echo $x; ?>">
                          <span class="check-icon">
                            <svg class="check" xmlns="http://www.w3.org/2000/svg" width="21.596" height="16.571" viewBox="0 0 21.596 16.571">
                              <path id="Icon_feather-check" data-name="Icon feather-check" d="M25.475,9,12.086,22.389,6,16.3" transform="translate(-4.939 -7.939)" fill="none" stroke="#fff" stroke-width="3"/>
                            </svg>
                          </span>
                                    <p class="mb-0">
                                        <?php the_sub_field('text'); ?>
                                    </p>
                                </li>
                                <?php $x = $x + 100;
                                if($x == 400) {
                                    $x = 100;
                                } endwhile; ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>