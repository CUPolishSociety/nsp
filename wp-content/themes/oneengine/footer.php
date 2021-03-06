<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package OneEngine
 */
?>

	</div><!-- #content -->
	<div class="clearfix"></div>
	<?php if(is_front_page()){ ?>
	<footer id="contact" class="site-footer template-wrap" role="contentinfo">
		<?php 
			$color		= oneengine_option('footer_blog_color'); 
			$img		= oneengine_option('footer_blog_img', false, 'url');
			$repeat		= oneengine_option('footer_blog_repeat');
			$parallax	= oneengine_option('footer_blog_parallax');
			$cover		= oneengine_option('footer_blog_cover'); 
			
			$bg_repeat  = '';
			if( $repeat == 1 || $repeat == true){
				$bg_repeat = 'background-repeat:no-repeat;';
			}else $bg_repeat = 'background-repeat:repeat;';
			
			$bg_cover = '';
			if( $cover == 1 || $cover == true){
				$bg_cover = 'background-size:cover;';
			}else $bg_cover = '';
			
			$bg_img = '';
			if( $img ){
				$bg_img = 'background-image:url('.$img.');';
			}else $bg_img = '';
			
			$img		= ( ! empty ( $img ) ) 		? ''.$bg_img.'' : '';
			$color		= ( ! empty ( $color ) )  	? 'background-color:'. $color .';' : '';
			$repeat		= ( ! empty ( $repeat ) ) 	? ''. $bg_repeat .'' : '';
			$cover		= ( ! empty ( $cover ) ) 	? ''. $bg_cover .'' : '';
			$parallax 	= ( ! empty ( $parallax ) ) ? 'background-attachment: fixed;': '';
			
			
			/** Style Container */
			$style = ( 
				! empty( $img ) ||
				! empty( $color ) || 
				! empty( $repeat ) ||
				! empty( $cover ) ||
				! empty( $parallax ) ) ? 
					sprintf( '%s %s %s %s %s', $img, $color, $repeat, $cover, $parallax ) : '';
			$css = '';
			if ( ! empty( $style ) ) {			
				$css = 'style="'. $style .'" ';
			}
        ?>
        <div class="footer-img" <?php echo $css ?>></div>
    	<div class="container">
            <div class="row">
				<?php 
                    $color_title		= oneengine_option('footer_blog_title_color'); 
                    $color_sub_title	= oneengine_option('footer_blog_subtitle_color');
                        
                    $color_title		= ( ! empty ( $color_title ) ) 		? 'color:'. $color_title .';' : '';
                    $color_sub_title	= ( ! empty ( $color_sub_title ) )  ? 'color:'. $color_sub_title .';' : '';
                    
                    /** Style Container */
                    $title_color = ( 
                        ! empty( $color_title ) ) ? 
                            sprintf( '%s', $color_title) : '';
                    $css_title_color = '';
                    if ( ! empty( $title_color ) ) {			
                        $css_title_color = 'style="'. $title_color .'" ';
                    }
                    
                    $sub_title_color = ( 
                        ! empty( $color_sub_title ) ) ? 
                            sprintf( '%s', $color_sub_title) : '';
                    $css_sub_title_color = '';
                    if ( ! empty( $sub_title_color ) ) {			
                        $css_sub_title_color = 'style="'. $sub_title_color .'" ';
                    }
                ?>
                <div class="col-md-12">
                    <div class="heading-title-wrapper" style="color">
                        <h1 class="title" <?php echo $css_title_color ?>><?php echo oneengine_option('footer_blog_title') ?></h1>
                        <span class="line-title" style="background-color:#fff"></span>
                        <span class="sub-title" <?php echo $css_sub_title_color ?>><?php echo oneengine_option('footer_blog_subtitle') ?></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="list-contact-wrapper">
                    <?php if(oneengine_option('email_footer') != '') {?>
                    <div class="col-md-4">
                        <div class="contact-wrapper">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <p><a target="_blank" style="color:#fff;" href="mailto:cupolsoc@gmail.com">cupolsoc@gmail.com</a></p>
                        </div>
                    </div>
                    <?php } ?>
		 <div class="col-md-4">
                        <div class="contact-wrapper">
                            <span class="icon"><i class="fa fa-facebook"></i></span>
                            <p><a target="_blank" style="color:#fff;" href="https://www.facebook.com/NextStepPoland">Follow us on Facebook</a></p>
                        </div>
                    </div>
 		<div class="col-md-4">
                        <div class="contact-wrapper">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <p><a target="_blank" style="color:#fff;" href="#">Cambridge <br/>United Kingdom</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <?php if(oneengine_option('contact_form') != '') {?>
                <div class="contact-form-wrapper">
                	<h2 class="contact-title"><?php echo __('Get In Touch', 'oneengine')?></h2>
                	<?php echo do_shortcode( oneengine_option('contact_form') ); ?>
                </div>
                <?php } ?>
            </div>
        </div>
		<div class="site-info">
			<div class="copyright">
				&copy; Cambridge University Polish Society, 2015. Photo credits: Andrzej Kaczorowski
				<br>
			</div>			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php } ?>
</div><!-- #page -->


<?php wp_footer(); ?>


</body>
</html>
