<?php
//First register our custom category
function cbd_gluten_block_category( $categories, $post ) {
    $custom_block = array(
        'slug' => 'cbd-blocks',
        'title' => __( 'CBD Custom Blocks', 'cbd-blocks' )
    );
	$categories_sorted = array();
    $categories_sorted[0] = $custom_block;
    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }
    return $categories_sorted;
}
add_filter( 'block_categories', 'cbd_gluten_block_category', 10, 2);
//Then register our blocks...
function register_acf_block_types() {
    // Content Banner Block
    acf_register_block_type(array(
        'name'              => 'content-banner',
        'title'             => __('Content Banner 1'),
        'description'       => __('You can add content banner to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/content-banner.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    acf_register_block_type(array(
        'name'              => 'content-banner-2',
        'title'             => __('Content Banner 2'),
        'description'       => __('You can add content banner to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/content-banner-2.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    acf_register_block_type(array(
        'name'              => 'content-banner-3',
        'title'             => __('Content Banner 3'),
        'description'       => __('You can add content banner to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/content-banner-3.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Simple Text Block
    acf_register_block_type(array(
        'name'              => 'simple-txt-block',
        'title'             => __('Simple Text Block'),
        'description'       => __('You can add simple text block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/simple-txt-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Image Links Block
    acf_register_block_type(array(
        'name'              => 'img-links-block',
        'title'             => __('Image Links Block'),
        'description'       => __('You can add image links block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/img-links-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Testimonial Block
    acf_register_block_type(array(
        'name'              => 'testimonial-block',
        'title'             => __('Testimonial Block'),
        'description'       => __('You can add testimonial block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/testimonial-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Contact Block
    acf_register_block_type(array(
        'name'              => 'contact-block',
        'title'             => __('Contact Block'),
        'description'       => __('You can add contact block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/contact-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Clients Logos Block
    acf_register_block_type(array(
        'name'              => 'clients-block',
        'title'             => __('Client Logos Block'),
        'description'       => __('You can add client logos block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/clients-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Multiple Content Block
    acf_register_block_type(array(
        'name'              => 'multi-con-block',
        'title'             => __('Multi Content Block'),
        'description'       => __('You can add multi content block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/multi-con-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Feature Block
    acf_register_block_type(array(
        'name'              => 'feature-block',
        'title'             => __('Feature Block'),
        'description'       => __('You can add feature block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/feature-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // 4 Image Description Block
    acf_register_block_type(array(
        'name'              => 'four-img-block',
        'title'             => __('4 Image Description Block'),
        'description'       => __('You can add 4 image description block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/four-img-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Benefits Block
    acf_register_block_type(array(
        'name'              => 'benefits-block',
        'title'             => __('Benefits Block'),
        'description'       => __('You can add benefits block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/benefits-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // CTA Block
    acf_register_block_type(array(
        'name'              => 'cta-block',
        'title'             => __('CTA Block'),
        'description'       => __('You can add cta block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/cta-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
    // Partners Block
    acf_register_block_type(array(
        'name'              => 'partners-block',
        'title'             => __('Partners Block'),
        'description'       => __('You can add partners block to your content.'),
        'render_template'   => get_template_directory() . '/inc/blocks/partners-block.php',
        'category'          => 'cbd-blocks',
        'keywords'          => array( '', '' ),
        'mode'              => 'edit',
        'supports'          => array( 'mode' => false )
    ));
}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}