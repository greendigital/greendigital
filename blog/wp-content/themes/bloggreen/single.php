<?php get_header('post'); the_post();?>



<?php

$categoria = get_the_category();

$nomeCategoria = $categoria[0]->cat_name;

?>



<style>

article a {

    transition: .2s;

    color: #759647;

}
	
.aligncenter {
	margin-left: auto;
	margin-right: auto;
}

</style>



<?php $autor = get_the_author(); ?> 







<main>

			<section id="bloco" style="background: url(<?php the_field('imagem-do-post');?>) center no-repeat; background-size: cover; background-attachment: fixed;">

				<div class="ghost">

					<div class="container">

						<div class="col-md-8 col-md-offset-2">

							<div class="caption">

								<p style="text-transform: uppercase; text-decoration: underline;"><?php echo '  '.$nomeCategoria.'  ';?></p>

								<h1><?php echo the_title();?></h1>

							</div>

						</div>

						



					</div>

				</div>

			</section>

			<section id = "singleContent">



			<div class="container">

			<h2 style="margin: 0px;"><div class="notShow">Green Digital Blog, <?php echo $nomeCategoria.' - '; the_title();?></div></h2>

			<?php 



				$var = get_field('autor');





			?>

				<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">

					<header>

						<div class="container-fluid">

							<div class="row" style= "margin-top: 20px;">

								<div class="col-md-6 noPadding"><span style="float: left">Por: <?php echo $var["user_firstname"].' '.$var["user_lastname"]; ?> </span></div>

								<div class="col-md-6 noPadding"><span style="float: right"><?php the_time('j \d\e F \d\e Y') ?></span></div>

							</div>

							

						</div>

					</header>

					<article>

					<h3 style="margin: 0px;"><div class="notShow"><?php the_title();?></div></h3>

					<?php the_content(); ?>

					</article>

					

				</div>

			</div>

				

				

			</section>

			<section id = "SliderRelacionados">

				<div class="container">

					<h2>Posts Relacionados</h2>

					<div align = "center"><div class="miniBorda"></div></div>

					<div id="demo">

				        <div class="">

				          <div class="row">

				            <div class="span12">



				              <div id="owl-demo" class="owl-carousel">

				              <?php



				              	$newsArgs = array( 'post_type' => 'post', 'posts_per_page' => 10, 'category_name' => $nomeCategoria);



						    $newsLoop = new WP_Query( $newsArgs );

						    while ( $newsLoop->have_posts() ) { $newsLoop->the_post();  

						    	

				              	

				              ?>

				              	<a href = "<?php the_permalink();?>">

					                <div class="item" align = "center">

					                	<img src="<?php the_field('imagem-do-post');?>"  class="img-responsive" alt="Owl Image">

					                	<div class = "caption">

					                		<h3><?php the_title();?></h3>

					                	</div>

					                </div>

					            </a>

				                <?php



				                }



				                ?>

				                <?php wp_reset_postdata(); ?>

				              </div>

				              <div class = "col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">

				              <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>

				              </div>

				            </div>

				          </div>

				        </div>

				</div>

			</section>

			<section>

				<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">

					<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=533755123494616";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

				</div>

			</section>

			

		</main>



<?php get_footer();?>