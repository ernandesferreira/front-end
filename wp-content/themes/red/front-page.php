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
</div>
</div>
	<div class="container-fluid line-news">
		<div id="wrapper" class="container">
			<div class="row">	
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
						<span> Ver todas </span>
					</div>
				</div>
			</div>
		</div>
	</div>	
<div id="wrapper" class="container">
	<div class="row">	


<?php
get_footer();