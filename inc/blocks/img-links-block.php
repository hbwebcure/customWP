<?php if(get_field('type_ilb') == 'Carousel'){ ?>
    <section class="products-slider-section">
        <div class="container-fluid">
            <div class="position-relative">
                <div class="arrows d-flex w-100 justify-content-between" data-aos-duration="900" data-aos-delay="100" data-aos="fade-left">
                <span class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.761" height="20.761" viewBox="0 0 20.761 20.761">
                      <g id="Group_51" data-name="Group 51" transform="translate(-4613 858.7) rotate(-90)">
                        <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down" transform="translate(831.5 4605.5)">
                          <path id="Path_11" data-name="Path 11" d="M18,7.5V26.14" transform="translate(-1.18)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="3"/>
                          <path id="Path_12" data-name="Path 12" d="M26.14,18l-9.32,9.32L7.5,18" transform="translate(0 -1.18)" fill="none" stroke="#000" stroke-width="3"/>
                        </g>
                      </g>
                    </svg>
                </span>
                    <span class="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.761" height="20.761" viewBox="0 0 20.761 20.761">
                      <g id="Group_51" data-name="Group 51" transform="translate(-4613 858.7) rotate(-90)">
                        <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down" transform="translate(831.5 4605.5)">
                          <path id="Path_11" data-name="Path 11" d="M18,7.5V26.14" transform="translate(-1.18)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="3"/>
                          <path id="Path_12" data-name="Path 12" d="M26.14,18l-9.32,9.32L7.5,18" transform="translate(0 -1.18)" fill="none" stroke="#000" stroke-width="3"/>
                        </g>
                      </g>
                    </svg>
                </span>
                </div>
                <div class="products-slider row position-relative">
                    <?php while(have_rows('add_links')) : the_row(); ?>
                    <a href="<?php the_sub_field('link'); ?>" class="single-product col-4">
                        <?php if(!empty(get_sub_field('image'))){ ?>
                            <img class="w-100 h-100 object-cover position-absolute" src="<?php the_sub_field('image'); ?>" alt="">
                        <?php } ?>
                        <div class="text">
                            <h3 class="product-text"><?php the_sub_field('label'); ?></h3>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php } else{
    if(get_field('enable_bottom_margin') == 'Yes'){
        $class = '';
    } else {
        $class = 'mb-0';
    } ?>
<section class="panels <?php echo $class; ?>">
    <div class="container-fluid">
        <div class="row">
            <?php $x = 50;
            while(have_rows('add_links')) : the_row(); ?>
                <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                    <a href="<?php the_sub_field('link'); ?>" class="panel" data-aos="fade-left" data-aos-delay="<?php echo $x; ?>">
                        <?php if(!empty(get_sub_field('image'))){ ?>
                            <img class="panel-img" src="<?php the_sub_field('image'); ?>" alt="">
                        <?php } ?>
                        <p class="panel-text"><?php the_sub_field('label'); ?></p>
                    </a>
                </div>
                <?php $x = $x + 50;
                if($x == 350) {
                    $x = 50;
                } endwhile; ?>
        </div>
    </div>
    <?php if(!empty(get_field('button_text_ilb'))){ ?>
        <div class="button-container py-4 d-flex justify-content-center">
            <a href="<?php the_field('button_link_ilb'); ?>" class="button-outlined text-capitalize overflow-hidden"><?php the_field('button_text_ilb'); ?></a>
        </div>
    <?php } ?>
</section>
<?php } ?>