<section class="partners mb-5">
    <?php if(!empty(get_field('heading_pb'))){ ?>
    <h1 data-aos="fade-right" class="hero-text text-capitalize text-center">
        <?php the_field('heading_pb'); ?>
    </h1>
    <?php } $add_partners = get_field('add_partners');
    if(is_array($add_partners) && count($add_partners) > 0){ ?>
    <div class="justify-content-around logos-container">
        <?php foreach ($add_partners as $i){ ?>
        <div class="img-container">
            <img src="<?php echo $i; ?>" alt="">
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>