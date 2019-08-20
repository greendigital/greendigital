<?php
	/** Template Name: Coletor de Leads **/
	get_header();
?>
	<div class="theme-page-wrapper -layout mk-grid vc_row-fluid row-fluid page-section-content">
		<div class="theme-content">
			<div class="vc_col-sm-6 wpb_column column_container ">
				<img src="<?php echo get_template_directory_uri(); ?>/images/site-green_icone.png">
			</div>
			<div class="vc_col-sm-6 wpb_column column_container ">
				<h3>SOLICITA UMA APRESENTAÇÃO</h3>
				<P>Preencha com seus dados e receba uma apresentação completa com pacotes de serviçoes e preços.</p>
				<?php echo do_shortcode('[contact-form-7 id="7259" title="Form Lead"]'); ?>
			</div>
		</div>
	</div>
