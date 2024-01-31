<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
	
	astra_footer();
		// Ajout du lien vers la page "Mentions légales"
$mentions_legales_id = get_page_by_title('Mentions légales')->ID;
if ($mentions_legales_id) {
    echo '<div class="mentions-legales-link">';
    echo '<a href="' . get_permalink($mentions_legales_id) . '">Mentions légales</a>';
    echo '</div>';
}
			
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 

	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>