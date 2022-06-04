<?php

//Admin Area CSS
add_action('admin_head', 'cbd_custom_styles');

function cbd_custom_styles() {
  echo '<style>
    .wp-block {
        max-width: 100%;
    }
    #cbd_dashboard_widget .ui-sortable-handle,
    #cbd_ticket_widget .ui-sortable-handle {
        background: #b508cd;
        background: -moz-linear-gradient(to bottom right, #fe7531, #b508cd);
        background: -webkit-linear-gradient(to bottom right, #fe7531, #b508cd);
        background: linear-gradient(to bottom right, #fe7531, #b508cd);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#fe7531",endColorstr="#b508cd",GradientType=1);
        color: #fff;
    }
    #cbd_dashboard_widget .handle-actions,
    #cbd_ticket_widget .handle-actions {
        display: none;
    }
    #cbd_dashboard_widget .toggle-indicator,
    #cbd_ticket_widget .toggle-indicator {
        color: #fff;
    }
  </style>';
}

//ACF Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'cbd-theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

//Hide ACF for non-Admin
add_filter('acf/settings/show_admin', 'acf_show_admin');

function acf_show_admin( $show ) {
    
    return current_user_can('manage_options');
    
}

//Custom Dashboard Widget
add_action( 'wp_dashboard_setup', 'register_cbd_dashboard_widget' );
function register_cbd_dashboard_widget() {
    wp_add_dashboard_widget(
		'cbd_ticket_widget',
		'Creative Brand Design Support',
		'cbd_ticket_widget_display'
	);

}

function cbd_ticket_widget_display() {
    ?>

    <div style="display: flex; align-items: center; justify-content: space-around;">
        <img style="width: 50%;" src="<?= get_stylesheet_directory_uri().'/assets/cbd-logo-black.png'; ?>">
        <a target="_blank" class="button button-primary open-ticket" href="https://portal.creativebranddesign.co.uk/forms/ticket">Create Ticket</a>
    </div>

    <div>
        <p><strong>Thanks for choosing Creative Brand Design!</strong></p>
        <hr>
        <p>Got a problem with your site, or want to make some changes & need us to take a look for you?</p>
        <p>Use the link above to raise a support ticket on our Portal & we'll get back to you ASAP.</p>
    </div>
 
    <?
}

//Custom Login Styling
function cbd_login_styling() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            padding-bottom: 0px;
            margin-bottom: 0;
        }
        .login form {
            border-radius: 24px;
        }
        body.login.wp-core-ui .button-primary{
            color: #fff !important;
            text-shadow: none;
        }
        .featuresp label + label input {
            width: 500px;
        }
        .login #backtoblog, .login #nav {
            background: #fff;
            padding: 8px 24px !important;
            border-radius: 24px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'cbd_login_styling' );
add_action( 'admin_enqueue_scripts', 'cbd_login_styling' );