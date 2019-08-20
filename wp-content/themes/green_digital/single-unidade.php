<?php
	/**
	* Template definido para exibir a página de unidades
	*
	* Date:		 	 19.05.2016
	* Author: 		 Rafael Macedo (Vento);
	* Contact: 		 contato@ventocreativeworks.com.br
	* Template Name: Template Unidades
	**/

	/** Chama o css específico desta página **/
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js');
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
	wp_enqueue_style('franchising-single', get_template_directory_uri().'/css/franchising-single.css');

	get_header();

	// $titleUnit = (strtolower(get_the_ID()) == 7380) ? 'ATENDIMENTO' : 'DIRETOR' ;
?>
	<style>
	.modal-backdrop{
		display: none;
	}
	.btn_lg{
	transition: .3s;
		    background: none;
    border: 1px solid #fff;
    text-transform: uppercase;
    font-weight: 600;
	}
	.btn_lg:hover{
transition: .3s;
		    background: #fff;
    border: 1px solid #fff;
    text-transform: uppercase;
    font-weight: 600;
	color: #86b145;
	}
	
	</style>
	<article>
<style>
	.modal-backdrop{
		display: none;
	}
	.btn_lg{
	transition: .3s !important;
		    background: none !important;
    border: 1px solid #fff !important;
    text-transform: uppercase !important;
    font-weight: 600 !important;
	}
	.btn_lg:hover{
transition: .3s;
		    background: #fff !important;
    border: 1px solid #fff !important;
    text-transform: uppercase !important;
    font-weight: 600 !important;
	color: #86b145 !important;
	}
	
	</style>
		<section id="banner">
			<div class="banner-bg" style="background: url(<?php the_field('banner-image'); ?>);">
				<h1><?php the_field('banner-text'); ?></h1>
				<div align = "center">
				<?php if(get_field('cta-titulo')) {?>
					<button type="button" class="btn btn-primary btn-lg botaoModal" data-toggle="modal" data-target="#myModal">
  						<?php the_field('cta-titulo')?>
					</button>
				<?php } ?>
				</div>
			</div>
		</section>

		<section id="description">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="solutions">
			<div class="container">
				<div class="row">
					<h2>SOLUÇÕES</h2>
					<?php
						if(have_rows('solutions-items'))
						{
							while(have_rows('solutions-items'))
							{
								the_row();
								?>
								<a href="<?php the_sub_field('url_servicos');?>">
								<div class="col-md-2">
									<div class="iconFont">
										<?php the_sub_field('font-icon'); ?>
									</div>
									<h3><?php the_sub_field('solution-title'); ?></h3>
								</div>
								</a>
								<?php
							}
						}
					?>
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="container">
				<div class="row">
					<h2>FALE CONOSCO</h2>
					<div class="col-md-6 <?php the_field('ocultar-foto');?>">
						<?php 
						$director2 = get_field('director-name2');
						
						if(!$director2):
						?>
						<img class="image-responsive director-pic" src="<?php the_field('director-pic'); ?>">
						<h3><?php the_field('director-name'); ?></h3>
						<h4><?php the_field('director-cargo'); ?></h4>
						<h4>UNIDADE - <?php echo strtoupper(strtr(get_the_title(), "áéíóúâêôãõàèìòùç","ÁÉÍÓÚÂÊÔÃÕÀÈÌÒÙÇ")); ?></h4>
						<span><?php the_field('email'); ?></span><br/>
						<span><?php the_field('numero'); ?></span>
						<span><?php the_field('movel'); ?></span>
						
						<?php 
						else:
						?>
						<div class="col-md-6">
							<img class="image-responsive director-pic" src="<?php the_field('director-pic'); ?>">
							<h3><?php the_field('director-name'); ?></h3>
							<h4><?php the_field('director-cargo'); ?></h4>
							<h4>UNIDADE - <?php echo strtoupper(strtr(get_the_title(), "áéíóúâêôãõàèìòùç","ÁÉÍÓÚÂÊÔÃÕÀÈÌÒÙÇ")); ?></h4>
							<span><?php the_field('email'); ?></span><br/>
							<span><?php the_field('numero'); ?></span>
							<span><?php the_field('movel'); ?></span>		
						</div>
						<div class="col-md-6">
							<img class="image-responsive director-pic" src="<?php the_field('director-pic2'); ?>">
							<h3><?php the_field('director-name2'); ?></h3>
							<h4><?php the_field('director-cargo2'); ?></h4>
							<h4>UNIDADE - <?php echo strtoupper(strtr(get_the_title(), "áéíóúâêôãõàèìòùç","ÁÉÍÓÚÂÊÔÃÕÀÈÌÒÙÇ")); ?></h4>
							<span><?php the_field('email2'); ?></span><br/>
							<span><?php the_field('numero2'); ?></span>
							<span><?php the_field('movel2'); ?></span>		
						</div>
						<?php 
						endif;
						?>
					</div>
					<div class="<?php the_field('centralizar-formulario');?>">
						<div class="form-contact">
							<?php echo do_shortcode(get_field('contact-form-shortcode', false, false)); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="map-green-house">
			<div class="row" id="mapContainer">
				<div id="map">
					<?php the_field('map-franchising'); ?>
				</div>
			</div>
		</section>
	</article>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
	<p><?php the_field('cta-texto')?></p>
        <?php echo do_shortcode(get_field('cta-form', false, false)); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
		.botaoModal{
			background: none !important;
			color: #fff;
			border: 1px solid #fff;
			font-weight: 600;
			transition: .3s;
			margin-top: 20px;
			text-transform: uppercase;
		}
		.botaoModal:hover{
			background: #fff !important;
			color: #86b145;
			border: 1px solid #fff;
			font-weight: 600;
			transition: .3s;
		}
	</style>
	<script>
		jQuery(document).ready(function()
		{
			jQuery("#mapContainer").click(function()
			{
				jQuery("#map").attr('style', 'pointer-events: visible !important;');
			});

			jQuery("#mapContainer").mouseleave(function()
			{
				jQuery("#map").attr('style','pointer-events: none !important;');
			});

			jQuery("#map").ready(function()
			{
				console.log('Mapa Ready!');
				jQuery("#map").attr('style', 'pointer-events: none !important;');
			});
		});
	</script>
	<?php get_footer(); ?>
