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

	<main id="content" class="col-md-12" tabindex="-1" role="main">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-9">
				<div class="title-banner">
					<h2> Dedicação e Superação </h2>
					<h3 class="sub-title-banner"> 
						Apresentamos aos nossos clientes soluções que permitam
						formar equipes e estruturas de alta performance.
					</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-red-number">
				<div class="red-number">
					Red em números
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3" class="col-numbers">				
				<div class="content-number">
					<span> 10 </span>
					<div class="description-numbers"> 
						<span> 
							Dias para entrega
							de lista de candidatos
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-3" class="col-numbers">
				<div class="content-number">
					<span> 91% </span>
					<div class="description-numbers"> 
						<span> 
							Dos Clientes da
							red são recorrentes
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-3" class="col-numbers">
				<div class="content-number">
					<span> 93% </span>
					<div class="description-numbers"> 
						<span> 
							Recrutamento ativo.
							Vamos além das
							redes sociais
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-3" class="col-numbers">
				<div class="content-number last-number">
					<span> 95% </span>
					<div class="description-numbers"> 
						<span> 
							De assertividade em
							Nossas contratações
						</span>
					</div>
				</div>
			</div>
		</div>	
	</main><!-- #content -->
</div><!-- #row header -->
</div><!-- #wrapper header -->
<div class="container-fluid">
	<div class="row line-news">	
		<div class="col-md-6">
			<div class="red-destaque">
				<h2> Red em Destaque </h2>
			</div>
		</div>				
		<div class="col-md-4">
			<div class="red-news">
				<h2> Notícias </h2>
			</div>
		</div>
		<div class="col-md-2">
			<div class="red-more">
				<a href="" title="Ver Todas as notícias"> Ver todas </a>
			</div>
		</div>		
	</div>
		<div class="row">
			<!-- coluna destaque -->
			<div class="col-md-6">	

					<div class="container-destaque">
						<div class="box-destaque">
							<div class="img-destaque">
								<img src="<?php echo get_template_directory_uri().'/assets/images/img-noticia.jpg'; ?>">
							</div>
							<div class="content-news-destaque">
								<div class="date-destaque">
									30/9/2014
								</div>
								<div class="title-destaque">
									<h3>
										<a href="#">
										Para vencer na carreira há preços a pagar, diz Luiza Trajano
										</a>
									</h3>
								</div>
								<div class="description-news-destaque">
									<p>
										São Paulo - Luiza Helena Trajano começou a sua carreira na área de
										vendas, aos 12 anos, quando abriu mão das férias escolares para
										futures as solar and win met a record share of the country's demand 
										last year.
									</p>
								</div>
							</div>
						</div>
					</div>
				
			</div>
					<!-- coluna noticias -->
					<div class="col-md-6 collun-news-all">						
							<div class="content-news-all">
								<div class="box-content-all">
									<ul>
										<li>
											<div class="date-news-all">
												30/9/2014
											</div>
											<div class="title-news-all">
												<h3>
													<a href="#">
														Nasdaq OMX Plans German renewable
														Power futures in 2015
													</a>
												</h3>
											</div>
											<div class="description-news-all">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius imperdiet pharetra. Nam in tempus orci, eget mattis nunc. Praesent ac maximus metus. Duis vel urna eget urna porta venenatis vehicula at est. In sit amet felis quis velit mollis ornare. Aliquam vestibulum sem elit. In rhoncus viverra libero eleifend porttitor. Aenean 
												</p>
											</div>
										</li>
										<li>
											<div class="date-news-all">
												30/9/2014
											</div>
											<div class="title-news-all">
												<h3>
													<a href="#">
														Nasdaq OMX Plans German renewable
														Power futures in 2015
													</a>
												</h3>
											</div>
											<div class="description-news-all">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius imperdiet pharetra. Nam in tempus orci, eget mattis nunc. Praesent ac maximus metus. Duis vel urna eget urna porta venenatis vehicula at est. In sit amet felis quis velit mollis ornare. Aliquam vestibulum sem elit. In rhoncus viverra libero eleifend porttitor. Aenean 
												</p>
											</div>
										</li>		
									</ul>	
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