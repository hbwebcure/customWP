<?php if(get_field('enable_bottom_margin_ts') == 'Yes'){
    $class = '';
} else {
    $class = 'mb-0';
} $args = array(
    'post_type' => 'testimonial'
); $q = new WP_Query($args);
$img = '';
if($q->have_posts()) { ?>
<section class="testimonials position-relative <?php echo $class; ?> d-flex justify-content-center align-items-center">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-6 col-12 arrows-col">
                <div class="w-50">
                    <div class="arrows d-flex justify-content-between">
                        <svg class="arrow-left arrow disabled" xmlns="http://www.w3.org/2000/svg" width="20.761" height="20.761" viewBox="0 0 20.761 20.761">
                            <g id="Group_26" data-name="Group 26" transform="translate(-18.939 -18.239)">
                                <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down" transform="translate(20 20.36)">
                                    <path id="Path_11" data-name="Path 11" d="M18,26.14V7.5" transform="translate(-8.68 -7.5)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="3"/>
                                    <path id="Path_12" data-name="Path 12" d="M26.14,27.32,16.82,18,7.5,27.32" transform="translate(-7.5 -18)" fill="none" stroke="#fff" stroke-width="3"/>
                                </g>
                            </g>
                        </svg>
                        <svg class="arrow-right arrow" xmlns="http://www.w3.org/2000/svg" width="20.761" height="20.761" viewBox="0 0 20.761 20.761">
                            <g id="Group_27" data-name="Group 27" transform="translate(-837.939 -4613)">
                                <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down" transform="translate(831.5 4605.5)">
                                    <path id="Path_11" data-name="Path 11" d="M18,7.5V26.14" transform="translate(-1.18)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="3"/>
                                    <path id="Path_12" data-name="Path 12" d="M26.14,18l-9.32,9.32L7.5,18" transform="translate(0 -1.18)" fill="none" stroke="#fff" stroke-width="3"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 dots-col">
                <div class="dots">
                    <!--  Slick dots here -->
                </div>
            </div>
            <div class="testmionals-slider col-12 position-static">
                <?php $x = 1;
                while($q->have_posts()) : $q->the_post();
                if($x == 1){
                    $img = get_the_post_thumbnail_url();
                } ?>
                <div class="row <?php if($x == 1){ echo 'slide'; } ?>">
                    <img class="position-absolute background d-none img-src" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <?php if(!empty(get_field('company_logo',get_the_ID()))){ ?>
                    <div class="col-lg-6 col-12 logo-col">
                        <img src="<?php the_field('company_logo',get_the_ID()); ?>" alt="">
                    </div>
                    <?php } ?>
                    <div class="col-lg-6 col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php $x++;
                endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <img class="position-absolute background to-change h-100 w-100" src="<?php echo $img; ?>" alt="">
</section>
<?php } ?>