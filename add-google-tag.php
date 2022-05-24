<?php
/*
Plugin Name: EVE GTM
Plugin URI: https://planbproject.it/
Version: 1.0
Description: This plugin injects Google Tag Manager in head and body
Author: Giacomo Lanzi
Author URI: https://www.planbproject.it/chi-sono/
*/

/* Remember to add YOUR google tag code instead of "GTM-xxxxxxx" */

add_action('wp_head', 'pbp_gtm_head' );
add_action('wp_footer', 'pbp_gtm_body' );

//* ---------------------- GOOGLE TAG MANAGER HEAD ---------------------- *//

function pbp_gtm_head() {
	if ( !is_user_logged_in() ) { // not for logged in users
		?>
<!-- Google Tag Manager script -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-xxxxxxx');</script>
<!-- End Google Tag Manager -->
		<?php
		}
}

//* ---------------------- GOOGLE TAG MANAGER BODY ---------------------- *//

function pbp_gtm_body() {
	if ( !is_user_logged_in() ) { // not for logged in users
		?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-xxxxxxx"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
		}
}
