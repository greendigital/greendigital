<?php
get_header();
global $mk_options;
$page_layout = !empty($mk_options['notfound_layout']) ? $mk_options['notfound_layout'] : 'full';

 ?>
<div id="theme-page">
	<div class="mk-main-wrapper-holder">
		<div class="theme-page-wrapper <?php echo $page_layout; ?>-layout  mk-grid row-fluid">
			<div class="theme-content">
				<div class="not-found-wrapper">

					<span class="not-found-title"><?php _e('OOPS!', 'mk_framework'); ?></span>
					<span class="not-found-subtitle"><?php _e('ERRO 404', 'mk_framework'); ?></span>
					<section class="widget widget_search"><p><?php _e('Parece que você está perdido! Tente pesquisar aqui.', 'mk_framework'); ?></p>
					<form class="mk-searchform" method="get" id="searchform" action="<?php echo home_url(); ?>">
					<input type="text" class="text-input" placeholder="<?php _e('Pesquisar no site', 'mk_framework'); ?>" value="" name="s" id="s" />
					<i class="mk-icon-search"><input value="" type="submit" class="search-button" type="submit" /></i>
					</form>
					</section>
	    			<div class="clearboth"></div>
				</div>


			</div>
			<?php if ( $page_layout != 'full' ) get_sidebar(); ?>
		<div class="clearboth"></div>
		</div>
	</div>	
</div>
<?php get_footer(); ?>