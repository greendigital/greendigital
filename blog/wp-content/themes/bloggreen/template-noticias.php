<?php

/*
*
*
*	Template Name: Página de Notícias
*
*
*/


?>

<?php get_header();?>
<?php the_post();?>


<main>
			
			<section id = "ultimasNoticiasHome">
				<div class="container">
					<h2><?php the_title();?></h2>
					<div align = "center"><div class="miniBorda"></div></div>

					<div class="noticias">
					
					<?php
						$newsArgs = array( 'post_type' => 'noticia', 'posts_per_page' => 100, 'category_name' => $resultId);

						    $newsLoop = new WP_Query( $newsArgs );
						    $i = 0;
						    while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						    $var = get_field('autor');	
						    ?>

					<div class="col-md-3 col-sm-6 catMargin">
						<a href = "<?php the_permalink();?>">
							<div style="background: url(<?php the_field('imagem-do-post');?>)" class=" imgNews">
				               	  	
				          	</div>
				          	<div class="caption">
				          		<p><?php echo $nomeCategoria;?></p>
								<h3><?php the_title();?></h3>
									<div class="author">
										<i class="fa fa-user"></i><span><?php echo $var["user_firstname"].' '.$var["user_lastname"]; ?> </span>
									</div>	
					          	</div>
				        </a>  	
						</div>

					<?php
						}
					?>
						
					</div>
				</div>
			</section>
			<!--<section>
				<div class="container">
					<div class="row" align="center">
						<a href="">
							<button class="btn btn-green">VER MAIS</button>
						</a>
					</div>
				</div>
			</section>
			-->
			
		</main>

<?php get_footer();?>