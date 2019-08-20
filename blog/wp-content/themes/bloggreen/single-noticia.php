<?php get_header('post'); the_post();?>

<?php $autor = get_the_author(); ?> 



<main>
			<section id="bloco" style="background: url(<?php the_field('imagem-do-post');?>) center no-repeat; background-size: cover; background-attachment: fixed;">
				<div class="ghost">
					<div class="container">
						<div class="col-md-8 col-md-offset-2">
							<div class="caption">
								<p text-decoration: underline;">NOTÍCIA</p>
								<h1><?php echo the_title();?></h1>
							</div>
						</div>
						

					</div>
				</div>
			</section>
			<section id = "singleContent">

			<div class="container">
			<h2 style="margin: 0px;"><div class="notShow">Green Digital Blog, <?php the_title();?></div></h2>
			<?php 

				$var = get_field('autor');


			?>
				<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
					<header>
						<div class="container-fluid">
							<div class="row"  style= "margin-top: 20px;">
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
			
		</main>

<?php get_footer();?>