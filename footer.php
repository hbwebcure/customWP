<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CBD
 */
$footer_scripts = get_field('footer_scripts', 'option');
$web_copyright = get_field('copyright', 'option'); ?>
<footer class="d-flex justify-content-between">
    <div class="d-flex footer-nav">
        <?php if ( has_nav_menu( 'footer-1' ) ){ ?>
        <ul class="pl-0 links list-unstyled">
            <?php if(!empty(get_field('first_column_heading_ft','option'))){ ?>
            <li class="title"><?php the_field('first_column_heading_ft','option'); ?></li>
            <?php } ?>
            <div class="column">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-1',
                    'container'      => '',
                    'depth'          => 1,
                    'items_wrap'     => '%3$s'
                ) ); ?>
            </div>
        </ul>
        <?php } ?>
        <ul class="pl-0 links list-unstyled multiple-columns">
            <?php if(!empty(get_field('second_column_heading_ft','option'))){ ?>
            <li class="title"><?php the_field('second_column_heading_ft','option'); ?></li>
            <?php } if ( has_nav_menu( 'footer-2' ) ){ ?>
                <div class="column">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer-2',
                        'container'      => '',
                        'depth'          => 1,
                        'items_wrap'     => '%3$s'
                    ) ); ?>
                </div>
            <?php } if ( has_nav_menu( 'footer-3' ) ){ ?>
                <div class="column">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer-3',
                        'container'      => '',
                        'depth'          => 1,
                        'items_wrap'     => '%3$s'
                    ) ); ?>
                </div>
            <?php } ?>
        </ul>
    </div>
    <div class="logo-footer">
        <?php if(!empty(get_field('footer_logo','option'))){ ?>
        <img class="logo" src="<?php the_field('footer_logo','option'); ?>" alt="<?php bloginfo('name'); ?>">
        <?php } if ( has_nav_menu( 'legal-menu' ) ){ ?>
        <ul class="legal pl-0 list-unstyled">
            <?php wp_nav_menu( array(
                'theme_location' => 'legal-menu',
                'container'      => '',
                'depth'          => 1,
                'items_wrap'     => '%3$s'
            ) ); ?>
        </ul>
        <?php } ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
