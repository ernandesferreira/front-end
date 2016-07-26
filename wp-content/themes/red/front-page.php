<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" class="col-sm-12 col-xs-12 col-md-12" tabindex="-1" role="main">
		<div class="row">
			<div class="col-sm-3 col-xs-3 col-md-3 hidden-xs"></div>
			<div class="col-sm-9 col-xs-9 col-md-9">
				<div class="title-banner">
				<?php
					$title_banner = get_field('titulo_banner', 'option');

					if( $title_banner ){
						echo '<h2>'.$title_banner.'</h2>';
					}else{
						echo '<h2> Você deve inserir o texto na Opção do Site. </h2>';
					}
				?>
				<?php
					$subtitle_banner = get_field('subtitle_banner', 'option');

					if( $subtitle_banner ){
						echo '<h3 class="sub-title-banner">'.$subtitle_banner.'</h3>';
					}else{
						echo '<h3 class="sub-title-banner"> 
						Você deve inserir o texto na Opção do Site.
					</h3>';
					}
				?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12 col-md-12 col-red-number hidden-sm">
				<div class="red-number">
					Red em números
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-xs-3 col-md-3" class="col-numbers">				
				<div class="content-number">
				<?php
							$quadro1 = get_field('quadro_1', 'option');
							$quadro2 = get_field('quadro_2', 'option');
							$quadro3 = get_field('quadro_3', 'option');
							$quadro4 = get_field('quadro_4', 'option');

							//title
							$descricao_quadro1 = get_field('descricao-quadro1', 'option');
							$descricao_quadro2 = get_field('descricao-quadro2', 'option');
							$descricao_quadro3 = get_field('descricao-quadro3', 'option');
							$descricao_quadro4 = get_field('descricao-quadro4', 'option');
						?>
					<span>
						<?php
							if($quadro1){
								echo $quadro1;
							}else{
								echo '10';
							}
						?>
					</span>
					<div class="description-numbers"> 
						<span> 
							<?php
							if($descricao_quadro1){
								echo $descricao_quadro1;
							}else{
								echo 'DIAS PARA ENTREGA DE LISTA DE CANDIDATOS';
							}
						?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-3 col-md-3" class="col-numbers">
				<div class="content-number">
					<span>
						<?php
							if($quadro2){
								echo $quadro2;
							}else{
								echo '10';
							}
						?>
					</span>
					<div class="description-numbers"> 
						<span> 
						<?php
							if($descricao_quadro1){
								echo $descricao_quadro1;
							}else{
								echo 'Dos Clientes da red são recorrentes';
							}
						?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-3 col-md-3" class="col-numbers">
				<div class="content-number">
					<span> 
						<?php
							if($quadro3){
								echo $quadro3;
							}else{
								echo '10';
							}
						?>
					</span>
					<div class="description-numbers"> 
						<span> 
							<?php
							if($descricao_quadro3){
								echo $descricao_quadro3;
							}else{
								echo 'RECRUTAMENTO ATIVO. VAMOS ALÉM DAS REDES SOCIAIS';
							}
						?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-3 col-md-3" class="col-numbers">
				<div class="content-number last-number">
					<span>
						<?php
							if($quadro4){
								echo $quadro4;
							}else{
								echo '10';
							}
						?>
					</span>
					<div class="description-numbers"> 
						<span> 
						<?php
							if($descricao_quadro4){
								echo $descricao_quadro4;
							}else{
								echo 'De assertividade em Nossas contratações';
							}
						?>
						</span>
					</div>
				</div>
			</div>
		</div>	
	</main><!-- #content -->
</div><!-- #row header -->
</div><!-- #wrapper header -->
<div class="container-fluid">
	<div class="row linha-noticias visible-xs-*">
		<h2>Noticias</h2>
	<div class="row line-news hidden-xs">	
		<div class="col-sm-6 col-xs-12 col-md-6">
			<div class="red-destaque">
				<h2> Red em Destaque </h2>
			</div>
		</div>				
		<div class="col-sm-4 col-xs-4 col-md-4">
			<div class="red-news">
				<h2> Notícias </h2>
			</div>
		</div>
		<div class="col-sm-2 col-xs-2 col-md-2">
			<div class="red-more">
				<a href="" title="Ver Todas as notícias"> Ver todas </a>
			</div>
		</div>		
	</div>
	</div>
		<div class="row">
			<!-- coluna destaque -->
			<div class="col-sm-12 col-xs-12 col-md-6">	

					<div class="container-destaque">
						<div class="box-destaque">
						<?php
								// WP_Query arguments
								$args = array (
									'post_type' => 'post',
									'posts_per_page'         => '1',
									'order'                  => 'DESC',
								);

								// The Query
								$post_destaque = new WP_Query( $args );

								$id_post = $post_destaque->post->ID;
								$post_thumbnail_id = get_post_thumbnail_id( $id_post );
								$image_post = wp_get_attachment_image_src($post_thumbnail_id, $size = 'full');

								$alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);

								$post_date = get_the_date( 'd/n/Y', $id_post);
								$post_title = $post_destaque->post->post_title;
								$post_excerpt = $post_destaque->post->post_excerpt;;


								//echo '<pre>'. print_r($post_excerpt, true) . '</pre>';
							?>
							<div class="img-destaque">
								<?php
									if( $image_post ){
										echo '<img class="img-responsive" src="'.$image_post[0].'" alt="'.$alt.'">';
									}else{
										echo '<img class="img-responsive" src="'.get_template_directory_uri().'/assets/images/img-noticia-padrao.jpg" alt="'.$alt.'">';
									}
								?>
								
							</div>
							<div class="content-news-destaque">
								<div class="date-destaque">
									<?php echo $post_date;?>
								</div>
								<div class="title-destaque">
									<h3>
										<a href="#">
										<?php echo $post_title; ?>
										</a>
									</h3>
								</div>
								<div class="description-news-destaque">
									<p>
										<?php echo $post_excerpt; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				
			</div>
					<!-- coluna noticias -->
					<div class="col-sm-12 col-xs-12 col-md-6 collun-news-all">						
							<div class="content-news-all">
							<?php
								// WP_Query arguments

								$id_post_destaque = $id_post;
								
								$args = array (
									'post_type' => 'post',
									'post__not_in' => array($id_post_destaque),
									'posts_per_page'         => '2',
									'order'                  => 'DESC',

									
								);

								// The Query
								$post_all = new WP_Query( $args );							

								
							?>
								<div class="box-content-all">
								<?php if( $post_all->have_posts() ) { ?>
									<ul>
									<?php
										while( $post_all->have_posts() ){
											$post_all->the_post();

											$id_post_all = $post_all->post->ID;
											$all_id = $id_post_all['ID'];
											$post_thumbnail_id = get_post_thumbnail_id( $id_post_all );
											$image_post = wp_get_attachment_image_src($post_thumbnail_id, $size = 'full');

											$post_date = get_the_date( 'd/n/Y', $id_post_all);
											$post_title = $post_all->post->post_title;
											$post_excerpt = $post_all->post->post_excerpt;

											//echo '<pre>'. print_r($post_all->post->ID, true) . '</pre>';
									?>
										<li>

											<div class="date-news-all">
												<?php echo $post_date;?>
											</div>
											<div class="title-news-all">
												<h3>
													<a href="#">
														<?php echo $post_title; ?>
													</a>
												</h3>
											</div>
											<div class="description-news-all">
												<p>
													<?php echo $post_excerpt; ?>
												</p>
											</div>
										</li>
										<?php } //whille?>
									</ul>
									<?php } //have_post ?>	
								</div>
							</div>
						</div>
					</div>
				
			</div>
		</div>
	</div>	
</div>	
<div id="wrapper" class="container">
	<div class="row">	


<?php
get_footer();