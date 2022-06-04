<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CBD
 */
get_header();
$error_text = get_field('404_page_text', 'option'); ?>
    <section class="_page">
        <div class="container text-center">
            <?php if(!empty($error_text)){
                echo $error_text;
            } else { ?>
                <h1><?php esc_attr_e('Page not found!','cbd'); ?></h1>
                <p><?php esc_attr_e('Sorry the page you are looking for could not be found. Use the menu to navigate the site.','cbd'); ?></p>
                <div class="_bc text-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="button-outlined text-capitalize overflow-hidden"><?php esc_attr_e('Back to home','cbd'); ?></a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php get_footer();