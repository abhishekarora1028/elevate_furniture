<?php
/**
 * Header template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html class="<?php avada_the_html_class(); ?>" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php Avada()->head->the_viewport(); ?>

	<?php wp_head(); ?>

	<?php
	/**
	 * The setting below is not sanitized.
	 * In order to be able to take advantage of this,
	 * a user would have to gain access to the database
	 * in which case this is the least of your worries.
	 */
	echo apply_filters( 'avada_space_head', Avada()->settings->get( 'space_head' ) ); // phpcs:ignore WordPress.Security.EscapeOutput
	?>
</head>

<?php
$object_id      = get_queried_object_id();
$c_page_id      = Avada()->fusion_library->get_page_id();
$wrapper_class  = 'fusion-wrapper';
$wrapper_class .= ( is_page_template( 'blank.php' ) ) ? ' wrapper_blank' : '';
?>
<body <?php body_class(); ?>>
<!-- top section -->	
<section id="top-header">
    <div class="container-fluid">
        
        <!--row-->
        <div class="row">
           
               <div class="col-md-3">
				   
                   <ul class="top-left-list">
                       <!--<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Locator</a></li>-->
                       <li><a href="#"><i class="fa fa-truck" aria-hidden="true"></i> Track Your Order</a></li>
                   </ul>
               </div>
               
               
               <div class="col-md-6">
                   <div class="text-center">
                 	 <!--<p class="center-content">Free Shipping on Orders $200+</p>-->
                  </div>
               </div>
               
               
                 <div class="col-md-3">
                        <ul class="top-right-list">
                           <!--<li class="language dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="https://cdn.shopify.com/s/files/1/0294/6436/3067/t/2/assets/en.png?5991" alt="English"> English <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">English</a></li>
                          <li><a href="#">Arabic</a></li>
                        </ul>
                      </li>
							
					<li class="price dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">USD <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">USD</a></li>
                          <li><a href="#">EUR</a></li>
						  <li><a href="#">GBP</a></li>
                        </ul>
                      </li>-->
							
							
					<li class="account dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-user" aria-hidden="true"></i> My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
						  <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> My Wishlist</a></li>
						  <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Order History</a></li>
							<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Checkout</a></li>
                        </ul>
                      </li>
                    
							
                   </ul>
               </div>
            
        </div>
         <!--/row-->
        
    </div>
</section>
<!-- top section end here-->		
	
	

	
	
	<?php do_action( 'avada_before_body_content' ); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Avada' ); ?></a>

	<div id="boxed-wrapper">
		<div class="fusion-sides-frame"></div>
		<div id="wrapper" class="<?php echo esc_attr( $wrapper_class ); ?>">
			<div id="home" style="position:relative;top:-1px;"></div>
			<?php avada_header_template( 'below', ( is_archive() || Avada_Helper::bbp_is_topic_tag() ) && ! ( class_exists( 'WooCommerce' ) && is_shop() ) ); ?>
			<?php if ( 'left' === fusion_get_option( 'header_position' ) || 'right' === fusion_get_option( 'header_position' ) ) : ?>
				<?php avada_side_header(); ?>
			<?php endif; ?>

			<?php avada_sliders_container(); ?>

			<?php avada_header_template( 'above', ( is_archive() || Avada_Helper::bbp_is_topic_tag() ) && ! ( class_exists( 'WooCommerce' ) && is_shop() ) ); ?>

			<div class="avada-page-titlebar-wrapper">
				<?php avada_current_page_title_bar( $c_page_id ); ?>
			</div>

			<?php
			$row_css    = '';
			$main_class = '';

			if ( apply_filters( 'fusion_is_hundred_percent_template', false, $c_page_id ) ) {
				$row_css    = 'max-width:100%;';
				$main_class = 'width-100';
			}

			if ( fusion_get_option( 'content_bg_full' ) && 'no' !== fusion_get_option( 'content_bg_full' ) ) {
				$main_class .= ' full-bg';
			}
			do_action( 'avada_before_main_container' );
			?>
			<main id="main" class="clearfix <?php echo esc_attr( $main_class ); ?>">
				<div class="fusion-row" style="<?php echo esc_attr( $row_css ); ?>">
