<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php

do_action( 'generate_before_footer' );
?>

<div <?php generate_do_element_classes( 'footer' ); ?>>
	<?php
	
	do_action( 'generate_before_footer_content' );

	
	do_action( 'generate_footer' );

	
	do_action( 'generate_after_footer_content' );
	?>
</div><!-- .site-footer -->

<?php

do_action( 'generate_after_footer' );

wp_footer();
?>

</body>
</html>
