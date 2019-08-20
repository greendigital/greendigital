<?php 

get_header();

?>
<main>
<section id="postSectionHome">
				<h2 style="margin: 0px;"><div class="notShow">Últimas Atualizações</div></h2>
				<div class="container">
				<?php 
						$destaque = get_field('destaque-big');
						$destaque1 = get_field('destaque-1');
						$destaque2 = get_field('destaque-2');
						$destaque3 = get_field('destaque-3');
						$destaque4 = get_field('destaque-4');


					// echo "<pre>";
					// var_dump($destaque1);
					// echo $destaque->ID;
					// echo "</pre>";

				?>
				<?php
						$newsArgs = array( 'p' => $destaque->ID, 'posts_per_page' => 1);

						      $newsLoop = new WP_Query( $newsArgs );

						      while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						      $categoria = get_the_category();
								$nomeCategoria = $categoria[0]->cat_name;            ?>
					<div class="col-md-6 col-md-offset-0 ">
					<a href="<?php echo the_permalink();?>">
						<div style="background: url(<?php the_field('imagem-do-post');?>)" class="bigImg">
							<div class="filter">
								<div class="caption" style = "text-align: center">
									<h3 style="text-decoration: underline; text-transform: uppercase;"><?php echo $nomeCategoria;?></h3>

									<p class="tagline"><?php echo the_title();?></p>
								</div>
							</div>
						</div>
					</a>
					</div>
					<?php } ?>
					<div class="col-md-6">
					<?php
						$newsArgs = array( 'p' => $destaque1->ID, 'posts_per_page' => 1);

						      $newsLoop = new WP_Query( $newsArgs );

						      while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						      $categoria = get_the_category();
								$nomeCategoria = $categoria[0]->cat_name;            ?>
						<div class="col-md-6 col-sm-6 noPaddingMobile PaddingTabletOne">
							<a href = "<?php the_permalink(); ?>">
								<div style="background: url(<?php the_field('imagem-do-post');?>)" class="miniImg">
									
									<div class="filter">
									<div class="caption">
										<h3 style="text-decoration: underline; text-transform: uppercase;"><?php echo $nomeCategoria;?></h3>
										<p class="tagline"><?php echo the_title();?></p>
									</div>
									</div>
								</div>
								  
							</a>
						</div>
						<?php } ?>
						<?php
						$newsArgs = array( 'p' => $destaque2->ID, 'posts_per_page' => 1);

						      $newsLoop = new WP_Query( $newsArgs );

						      while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						      $categoria = get_the_category();
								$nomeCategoria = $categoria[0]->cat_name;            ?>
						<div class="col-md-6 col-sm-6 noPaddingMobile PaddingTabletOne">
							<a href = "<?php the_permalink(); ?>">
								<div style="background: url(<?php the_field('imagem-do-post');?>)" class="miniImg">
									
									<div class="filter">
									<div class="caption">
										<h3 style="text-decoration: underline; text-transform: uppercase;"><?php echo $nomeCategoria;?></h3>
										<p class="tagline"><?php echo the_title();?></p>
									</div>
									</div>
								</div>
								  
							</a>
						</div>
						<?php } ?>
						<?php
						$newsArgs = array( 'p' => $destaque3->ID, 'posts_per_page' => 1);

						      $newsLoop = new WP_Query( $newsArgs );

						      while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						      $categoria = get_the_category();
								$nomeCategoria = $categoria[0]->cat_name;            ?>
						<div class="col-md-6 col-sm-6 noPaddingMobile PaddingTabletOne">
							<a href = "<?php the_permalink(); ?>">
								<div style="background: url(<?php the_field('imagem-do-post');?>)" class="miniImg">
									
									<div class="filter">
									<div class="caption">
										<h3 style="text-decoration: underline; text-transform: uppercase;"><?php echo $nomeCategoria;?></h3>
										<p class="tagline"><?php echo the_title();?></p>
									</div>
									</div>
								</div>
								  
							</a>
						</div>
						<?php } ?>
						<?php
						$newsArgs = array( 'p' => $destaque4->ID, 'posts_per_page' => 1);

						      $newsLoop = new WP_Query( $newsArgs );

						      while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						      $categoria = get_the_category();
								$nomeCategoria = $categoria[0]->cat_name;            ?>
						<div class="col-md-6 col-sm-6 noPaddingMobile PaddingTabletOne">
							<a href = "<?php the_permalink(); ?>">
								<div style="background: url(<?php the_field('imagem-do-post');?>)" class="miniImg">
									
									<div class="filter">
									<div class="caption">
										<h3 style="text-decoration: underline; text-transform: uppercase;"><?php echo $nomeCategoria;?></h3>
										<p class="tagline"><?php echo the_title();?></p>
									</div>
									</div>
								</div>
								  
							</a>
						</div>
						<?php } ?>
						
					</div>
				</div>

			</section>
			<section id = "ultimasNoticiasHome">
				<div class="container">
					<h2>Últimas Notícias</h2>
					<div align = "center"><div class="miniBorda"></div></div>

					<div class="noticias">

						<?php
						$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => $resultId);

						    $newsLoop = new WP_Query( $newsArgs );
						    $i = 0;
						    while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						    $var = get_field('autor');	
						    $categoria = get_the_category();
							$nomeCategoria = $categoria[0]->cat_name;
						    ?>

						<div class="col-md-3 col-sm-6">
							<a href = "<?php the_permalink();?>">
							<div style="background: url(<?php the_field('imagem-do-post');?>)" class=" imgNews">
				               	  	
				          	</div>

				          	<div class="caption">
				          		<p><?php echo $nomeCategoria;?></p>
								<h3><?php the_title();?></h3>
									<div class="author">
										<i class="fa fa-user"></i><span><?php echo $var["user_firstname"].' '.$var["user_lastname"];?></span>
									</div>	
					        </div>
					        </a>
				          	
						</div>
						<?php } ?>
						
					</div>
				</div>
			</section>
			<section id = "SliderPopulares">
				<div class="container">
					<h2>Mais Populares</h2>
					<div align = "center"><div class="miniBorda"></div></div>
					<div id="demo">
				        <div class="">
				          <div class="row">
				            <div class="span12">

				              <div id="owl-demo" class="owl-carousel" align="center">

				              <?php
								$nova_consulta = new WP_Query( 
								    array(
								        'posts_per_page'      => 10,                 // Máximo de 10 artigos
								        'no_found_rows'       => true,              // Não conta linhas
								        'post_status'         => 'publish',         // Somente posts publicados
								        'ignore_sticky_posts' => true,              // Ignora posts fixos
								        'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
								        'meta_key'            => 'tp_post_counter', // A nossa post meta
								        'order'               => 'DESC'             // Ordem decrescente
								    )
								);
								?>
								        <?php while ( $nova_consulta->have_posts() ){ ?>
								        	<?php $nova_consulta->the_post(); ?>
            <?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>
				              	<a href = "<?php the_permalink();?>">
					                <div class="item" align = "center" style = "padding: 10px;">
					                	<img src="<?php the_field('imagem-do-post');?>"  class="img-responsive" alt="Owl Image">
					                	<div class = "caption">
					                	<h3><?php the_title();?></h3>
					                	</div>
					                </div>
				                </a>
				                
				              <?php

				              	}

				              ?>

				                
				              </div>
				              
				            </div>
				          </div>
				        </div>
				</div>
			</section>
			<section id="SectionRandomCat">
				<div class="container">
				<?php

						$dia = date('d');
						 

						$categorias = get_categories();

						foreach ($categorias as $key) {
							$Arr[] =  $key->cat_name;
						}


						$NumerodeCat = count($categorias);

						$resto = $dia%$NumerodeCat;

						$resultId = $Arr[$resto];

						$nomeCat = $categorias[$Arr[$resto]]->name;

						?>
					<h2><?php echo $resultId;?></h2>
					<div align="center"><div class="miniBorda"></div></div>
					<div class="col-md-6 col-sm-12 col-sm-12">
					<?php
						$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 1, 'category_name' => $resultId);

						    $newsLoop = new WP_Query( $newsArgs );

						    while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						    ?>
						<a href="<?php the_permalink();?>">
							<div style="background: url(<?php the_field('imagem-do-post');?>)" class="bigImg">
								<div class="filter">
									<div class="caption">
										<h3><?php echo $resultId;?></h3>
										<p class="tagline"><?php the_title();?></p>
									</div>
								</div>
								
								
							</div>
						</a>
						<?php } ?>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12">
						<div class="last">

						

						<?php
						$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 4, 'category_name' => $resultId);

						    $newsLoop = new WP_Query( $newsArgs );
						    $i = 0;
						    while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  
						    	$i++;
						    	$var = get_field('autor');
						    	if ($i == 1) {
						    		# code...
						    	}
						    	else{
						    ?>
							<a href = "<?php the_permalink();?>">
								<div class="row">
									<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
										<img src="<?php the_field('imagem-do-post');?>">
									</div>
									<div class="col-md-7 col-md-offset-1 col-xs-12 col-xs-offset-0 col-sm-7 col-sm-offset-1 col-lg-7 col-lg-offset-1">
										<small><?php echo $resultId;?></small>
										<h3><?php the_title();?></h3>
										<span class="autor"><i class="fa fa-user"></i> Por: <?php echo $var["user_firstname"].' '.$var["user_lastname"];?></span>
									</div>
								</div>
							</a>	

						<?php }} ?>
							
						</div>
						
					</div>
				</div>
			</section>
</main>

<?php 
get_footer();
?>