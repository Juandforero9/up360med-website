<?php
/**
 * Template part with actual header.
 *
 * @since 1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;

?><!DOCTYPE html>
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php
	if ( presscore_responsive() ) {
			$scalable      = of_get_option( 'general-user_scalable' ) ? '1' : '0';
			$maximum_scale = $scalable === '1' ? '5' : '1';
			ob_start();
		?>
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=<?php echo esc_attr( $maximum_scale ); ?>, user-scalable=<?php echo esc_attr( $scalable ); ?>"/>
		<?php
		echo apply_filters( 'the7_meta_viewport', ob_get_clean() );
	}
	?>
	<?php presscore_theme_color_meta(); ?>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php
	wp_head();
	?>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P3JMJQ9J');</script>
<!-- End Google Tag Manager -->
</head>
<body id="the7-body" <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3JMJQ9J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"es","languages":["en","es"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
<a class="botonwhatsapp" href="https://api.whatsapp.com/send/?phone=573054488328&text=Hola%20UP360Med%2C%20soy%20m%C3%A9dico%20y%20me%20interesa%20conocer%20m%C3%A1s%20sobre%20el%20Operating%20System%20para%20mi%20consulta." target="_blank" rel="noopener">
       <img src="https://up360med.com/wp-content/uploads/2026/06/textwhatsapp.png.webp" alt="WhatsApp">
    </a>
<?php
wp_body_open();
do_action( 'presscore_body_top' );

$config = presscore_config();

$page_class = '';
if ( 'boxed' === $config->get( 'template.layout' ) ) {
	$page_class = 'class="boxed"';
}
?>

<div id="page" <?php echo $page_class; ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'the7mk2' ); ?></a>
<?php
if ( apply_filters( 'presscore_show_header', $config->get( 'header.show' ) ) ) {
	presscore_get_template_part( 'theme', 'header/header', str_replace( '_', '-', $config->get( 'header.layout' ) ) );
	presscore_get_template_part( 'theme', 'header/mobile-header' );
}

//block_template_part( 'header' );

if ( presscore_is_content_visible() && $config->get( 'template.footer.background.slideout_mode' ) ) {
	echo '<div class="page-inner">';
}
?>