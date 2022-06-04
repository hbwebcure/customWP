<?php $col = 'col-lg-6 col-12 column-padding';
$class = 'hero-text hero-text-smaller';
$class2 = 'container-smaller';
if(!empty(get_field('third_column_stb'))){
    $col = 'col-lg-4 col-12';
    $class = 'hero-text font-weight-bold';
    $class2 = 'container-fluid';
} ?>
<section class="text-section">
    <div class="<?php echo $class2; ?>">
        <div class="row">
            <?php if(!empty(get_field('heading_stb'))){ ?>
                <div class="<?php echo $col; ?>" data-aos="fade-right">
                    <h1 class="<?php echo $class; ?>">
                        <?php the_field('heading_stb'); ?>
                    </h1>
                </div>
            <?php } if(!empty(get_field('second_column_stb'))){ ?>
                <div class="<?php echo $col; ?>" data-aos="fade-right" data-aos-delay="100">
                    <p>
                        <?php the_field('second_column_stb'); ?>
                    </p>
                </div>
            <?php } if(!empty(get_field('third_column_stb'))){ ?>
                <div class="col-lg-4 col-12" data-aos="fade-right" data-aos-delay="200">
                    <p>
                        <?php the_field('third_column_stb'); ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>