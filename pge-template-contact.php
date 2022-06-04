<?php
/*
  * Template Name: Contact Page
  */
get_header();
while(have_posts()) : the_post();
    the_content(); ?>
    <section class="contact-subpage">
        <div class="row section-padding-right mb-4 pb-4 map-row">
            <div class="col-xl-8 col-md-6 col-12">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <?php the_field('map_iframe'); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 d-xl-inline d-flex flex-column justify-content-center">
                <ul class="contact-info py-4 list-unstyled">
                    <?php if(!empty(get_field('phone_cn'))){ ?>
                    <li data-aos="fade-right" class="single-contact d-flex align-items-center">
                    <span class="icon border position-relative d-flex justify-content-center align-items-center">
                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="25.492" height="25.493" viewBox="0 0 25.492 25.493">
                            <path id="Icon_awesome-phone-alt" data-name="Icon awesome-phone-alt" d="M22.8,16.586l-5.134-2.2a1.1,1.1,0,0,0-1.284.316L14.11,17.48A16.992,16.992,0,0,1,5.987,9.357L8.765,7.083A1.1,1.1,0,0,0,9.081,5.8L6.881.665A1.108,1.108,0,0,0,5.62.028L.853,1.128A1.1,1.1,0,0,0,0,2.2,21.268,21.268,0,0,0,21.271,23.471a1.1,1.1,0,0,0,1.073-.853l1.1-4.768a1.114,1.114,0,0,0-.642-1.265Z" transform="translate(1 1.022)" fill="none" stroke="#000" stroke-width="2"/>
                        </svg>
                    </span>
                        <div class="contact-data">
                            <span class="text-uppercase name"><?php esc_attr_e('phone','cbd'); ?></span>
                            <p><?php the_field('phone_cn'); ?></p>
                        </div>
                    </li>
                    <?php } if(!empty(get_field('email_cn'))){ ?>
                    <li data-aos="fade-right" data-aos-delay="100" class="single-contact d-flex align-items-center">
                    <span class="icon border position-relative d-flex justify-content-center align-items-center">
                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="26.251" height="20.772" viewBox="0 0 26.251 20.772">
                            <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(1.393 1)">
                                <path id="Path_111" data-name="Path 111" d="M5.347,6H24.119a2.353,2.353,0,0,1,2.347,2.347V22.426a2.353,2.353,0,0,1-2.347,2.347H5.347A2.353,2.353,0,0,1,3,22.426V8.347A2.353,2.353,0,0,1,5.347,6Z" transform="translate(-3 -6)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <path id="Path_112" data-name="Path 112" d="M26.465,9,14.733,17.213,3,9" transform="translate(-3 -6.653)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                    </span>
                        <div class="contact-data">
                            <span class="text-uppercase name"><?php esc_attr_e('email','cbd'); ?></span>
                            <p><?php the_field('email_cn'); ?></p>
                        </div>
                    </li>
                    <?php } if(!empty(get_field('address_cn'))){ ?>
                    <li data-aos="fade-right" data-aos-delay="200" class="single-contact d-flex align-items-center">
                    <span class="icon border position-relative d-flex justify-content-center align-items-center">
                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="20.771" height="29.266" viewBox="0 0 20.771 29.266">
                            <path id="Icon_metro-location" data-name="Icon metro-location" d="M17.74,1.928a9.385,9.385,0,0,0-9.385,9.386c0,9.386,9.385,17.555,9.385,17.555s9.385-8.169,9.385-17.555A9.386,9.386,0,0,0,17.74,1.928ZM14.1,11.314A3.637,3.637,0,1,1,17.74,14.95,3.637,3.637,0,0,1,14.1,11.314Z" transform="translate(-7.355 -0.928)" fill="none" stroke="#000" stroke-width="2"/>
                        </svg>
                    </span>
                        <div class="contact-data">
                            <span class="text-uppercase name"><?php esc_attr_e('ADDRESS','cbd'); ?></span>
                            <p>
                                <?php the_field('address_cn'); ?>
                            </p>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-md-8 contact-form">
                <h1 class="hero-text" data-aos="fade-left"><?php the_field('form_heading'); ?></h1>
                <div class="form">
                    <?php echo do_shortcode(get_field('form_shortcode')); ?>
                </div>
            </div>
            <div class="col-md-4 p-0 m-0 dark-overlay text-white laptop-col">
                <?php if(!empty(get_field('secondary_image_cn'))){ ?>
                <img src="<?php the_field('secondary_image_cn'); ?>" alt="" class="position-absolute w-100 h-100 object-cover img-background">
                <?php } ?>
                <p data-aos="fade-right"><?php the_field('secondary_text_cn'); ?></p>
            </div>
        </div>
    </section>
<?php endwhile;
get_footer(); ?>