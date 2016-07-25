<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<footer id="footer" role="contentinfo">
		<div class="footer-home">
			<div class="container">
				<div class="row">
					<div class="col-md-3 footer1">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="col-md-1 footer2">
						<?php dynamic_sidebar( 'footer2' ); ?>
					</div>
					<div class="col-md-2 parceiros-footer">
						<h2> Parceiros Globais: </h2>
						<div class="img-parceiro">
							<img src="<?php echo get_template_directory_uri().'/assets/images/partner.png'; ?>">
						</div>
					</div>
					<div class="col-md-2 redes-sociais-footer">
						<h2> Conecte-se </h2>
						<div class="link-sociais">
							<ul class="list-inline">
								<li>
									<a href="" alt="Facebook" title="Facebook"><img class="facebook" src="<?php echo get_template_directory_uri().'/assets/images/face-footer.png'; ?>"></a>
								</li>
								<li>
									<a href="" alt="Linkedin" title="Linkedin"><img class="facebook" src="<?php echo get_template_directory_uri().'/assets/images/linkedin-footer.png'; ?>"></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 sedes-footer">
						<div class="sedes">
							<ul class="list-inline">
								<li>
									<img src="<?php echo get_template_directory_uri().'/assets/images/sp.svg'; ?>" alt="São Paulo" title="São Paulo">
									<div class="name-sede"> São Paulo </div>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri().'/assets/images/rj.svg'; ?>" alt="Rio de Janeiro" title="Rio de Janeiro">
									<div class="name-sede"> Rio de Janeiro </div>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri().'/assets/images/ctb.svg'; ?>" alt="Curitiba" title="Curitiba">
									<div class="name-sede"> Curitiba </div>
								</li>
							</ul>
						</div>
					</div>
				</div>	
					<div class="row">
						<div class="col-md-3"> </div>
						<div class="col-md-9 line-footer"> 
							<div class="copyright"> &reg Red Consultng </div>
						</div>
					</div>
								
			</div><!-- .container -->
		</div>
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
