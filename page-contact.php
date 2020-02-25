<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Daniel_Smithson
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="contact" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        <section>
            <div class="box">
                <p>
                    Or drop me an 
                    <a href="mailto:<?php echo esc_attr(get_option( 'email_address')); ?>">email
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><path d="M15 3.8h12c1.4 0 2.6.8 2.9 2.1.1.6.1 1.3.1 1.9 0 .7-.6 1.1-1.1 1.4-3.1 2.3-6.3 4.7-9.5 7-.9.7-1.8 1.3-2.7 1.9-1.1.8-2.3.8-3.5 0l-3.3-2.4C6.8 13.4 3.8 11.1.7 8.9.2 8.6 0 8.1 0 7.5c0-.5 0-.9.1-1.4C.2 4.8 1.4 3.8 3 3.8h12z"/><path d="M15 26.2H3.1c-1 0-1.9-.3-2.5-1.2-.4-.4-.6-1-.6-1.6V11.7c0-.2.1-.5.2-.6.1-.1.4 0 .6.2 3.4 2.5 6.8 5.1 10.3 7.6.7.5 1.6 1 2.4 1.4 1.4.6 2.7.4 3.9-.4 1.1-.7 2.1-1.4 3.1-2.1 2.9-2.2 5.9-4.3 8.8-6.5.1-.1.4-.1.5-.1.1 0 .2.3.2.4v11.9c0 1.5-1.2 2.7-2.6 2.7H15z"/></svg>
                        </span>
                    </a>
                </p>
            </div>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();