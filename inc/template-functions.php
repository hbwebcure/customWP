<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CBD
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cbd_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	//Adds the page slug to body class.
	global $post;
	if (isset($post)) {
		$classes[] = $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'cbd_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cbd_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cbd_pingback_header' );

//Localize Theme Paths as JS variables
function cbd_js_variables(){ ?>
	<script>
	  var ajaxurl = '<? echo admin_url( "admin-ajax.php" ); ?>';
	  var siteurl = '<? echo get_site_url(); ?>';
	  var themeurl = '<? echo get_template_directory_uri(); ?>';
	</script><?php
}
add_action ( 'wp_head', 'cbd_js_variables' );

//Remove admin bar page bump
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
// Pagination
function cbd_pagination($pages = '', $range = 2){
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if(1 != $pages){
        echo "<ul class='pagination justify-content-center'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link(1)."'><i class='fa fa-long-arrow-left'></i></a></li>";
        if($paged > 1 && $showitems < $pages) echo "<li><a class='page-link' href='".get_pagenum_link($paged - 1)."'>&laquo;</a></li>";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<li class='page-item active'><a class='page-link'>".$i."</a></li>":"<li class='page-item'><a class='page-link' href='".get_pagenum_link($i)."' >".$i."</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($paged + 1)."'>&raquo;</a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='fa fa-long-arrow-right'></i></a></li>";
        echo "</ul>\n";
    }
}
// filter the Gravity Forms button type
add_filter("gform_submit_button", "cbd_gf_submit_button", 10, 2);
function cbd_gf_submit_button($button, $form){
    return "<button class='button button-outlined mt-0' id='gform_submit_button_{$form["id"]}'><span></span> {$form['button']['text']}</button>";
}

