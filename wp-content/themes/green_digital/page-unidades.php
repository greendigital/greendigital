<?php get_header(); ?>
<style>
	.mk-zindex-fix {
		display: none;
	}
	
	#mk-page-title-box-5b3674084bbc9 .mk-page-title-box-title {
		font-size: 30px;
		line-height: 30px;
		font-weight: 900;
		color: #86b145;
		padding-bottom: 25px;
		margin-bottom: 25px;
		letter-spacing: 1px;
		text-transform: uppercase;
	}
	
	#mk-page-title-box-5b3674084bbc9 .mk-page-title-box-title:after {
		background: #86b145;
	}
	
	#mk-page-title-box-5b3674084bbc9 .mk-page-title-box-subtitle {
		font-size: 30px;
		line-size: 30px;
		font-weight: 300;
		color: #ffffff;
	}
	
	h2 {
		font-size: 25px;
		text-align: left;
		color: #717171;
		font-style: inhert;
		font-weight: bold;
		margin-top: 0px;
		margin-bottom: 18px;
		letter-spacing: 0px;
	}
</style>

<div class="mk-effect-wrapper">
	<div style="opacity: 1 !important; background-color:rgba(0,0,0,0.7);" class="mk-video-color-mask">
	</div>
	<div id="mk-page-title-box-5b3674084bbc9" class="mk-page-title-box mk-background-stretch" style="height: 400px;">
		<div class="mk-effect-bg-layer mk-background-stretch" data-top-top="transform: translateY(0%)" data-top-bottom="transform: translateY(50%)" data-effect="parallax" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
		</div>
		<div class="mk-page-title-box-content" data-top-top="opacity: 1" data-200="opacity: 0">
			<div class="mk-grid">
				<h1 class="mk-page-title-box-title mk-page-title-box-title--underline">
					<?php the_title(); ?>
				</h1>
				<div class="mk-page-title-box-subtitle">
					Sua agência local, com presença global.
				</div>
			</div>
		</div>
	</div>
</div>

<div class="theme-page-wrapper full-layout mk-grid vc_row-fluid no-padding">
	<div class="theme-content no-padding">
		<div class="content-unidades">
			<?php the_post(); the_content(); ?>
		
			Filtrar:
		
			<select name="pais" id="pais-select">
				<option value="all">Todos os países</option>
				<?php 
				$paises = get_terms(array('taxonomy' => 'localizacao', 'hide_empty' => false, 'parent' => 0));

				foreach($paises as $pais):
				?>
				<option value="<?= $pais->term_id ?>"><?= $pais->name ?></option>
				<?php 
				endforeach;
				?>
			</select>
		
			<select name="estado" id="estado-select">
				<option value="all">Todos os estados</option>
				<?php 
				$estados = get_terms(array('taxonomy' => 'localizacao', 'hide_empty' => false, 'childless' => true));

				foreach($estados as $estado):
				?>
				<option value="<?= $estado->term_id ?>" class="p-<?= $estado->parent ?>"><?= $estado->name ?></option>
				<?php 
				endforeach;
				?>
			</select>
			
			<div class="list-unidades">
				<?php 
				$args = array(
				'post_type' => 'unidade',
				'posts_per_page' => -1
				);
				
				$query = new WP_Query($args);
				
				if($query->have_posts()):
					while($query->have_posts()):
						$query->the_post();
				
						$local = get_the_terms(get_the_ID(), 'localizacao');
				?>
				<div class="item-unidade <?php foreach($local as $loc): echo $loc->term_id.' '; endforeach; ?>">
					<div class="content">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<?php if(get_field('numero')): ?>
						<p><i class="fa fa-phone"></i> <?php the_field('numero'); ?></p>
						<?php endif; ?>
						<?php if(get_field('movel')): ?>
						<p><i class="fa fa-mobile"></i> <?php the_field('movel'); ?></p>
						<?php endif; ?>
						<?php 
						if(!get_field('link_site')):
						?>
						<a href="<?php the_permalink(); ?>">Ver detalhes</a>
						<?php 
						else:
						?>
						<a href="<?php the_field('link_site'); ?>">Ver detalhes</a>
						<?php endif; ?>
					</div>
				</div>
				<?php 
						wp_reset_postdata();
					endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</div>


<script>
	jQuery(document).ready(function(){
		jQuery('#pais-select').change(function(){
			var id = jQuery(this).val();
			
			if(id === 'all') {
				jQuery('.item-unidade').fadeIn();
				jQuery('select#estado-select option').show();
			}
			
			else {
				jQuery('select#estado-select option').hide();
				jQuery('select#estado-select .p-'+ id).show();
				jQuery('.item-unidade').hide();
				jQuery('.item-unidade.' + id).fadeIn();
			}
			
		});
		
		jQuery('#estado-select').change(function(){
			var id = jQuery(this).val();
			
			if(id === 'all') {
				jQuery('.item-unidade').fadeIn();
			}
			
			else {
				jQuery('.item-unidade').hide();
				jQuery('.item-unidade.' + id).fadeIn();
			}
		});
	});
</script>
<?php get_footer(); ?>