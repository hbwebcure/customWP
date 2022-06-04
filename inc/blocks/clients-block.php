<section class="partners-list">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php $x = 100;
            while(have_rows('add_clients')) : the_row(); ?>
                <div data-aos="fade-left" data-aos-delay="<?php echo $x; ?>" class="col-md-4 col-12 single-partner">
                    <?php if(!empty(get_sub_field('logo'))){ ?>
                        <img src="<?php the_sub_field('logo'); ?>" alt="" class="partner-logo">
                    <?php } ?>
                    <p class="partner-desc"><?php the_sub_field('text'); ?></p>
                </div>
                <?php $x = $x + 100;
                if($x == 400){
                    $x = 100;
                } endwhile; ?>
        </div>
    </div>
</section>